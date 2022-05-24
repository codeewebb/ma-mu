<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\categoryRequest;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function addCategory()
    {
        return view('pages-category.page-add-category');
    }

    public function showCategory()
    {
        $categorys = CategoryModel::select('id', 'category_name', 'created_at')->get();
        // $categorys = CategoryModel::select('id', 'category_name', 'created_at')->paginate(5);
    //  return $first_page_url;
        return view('pages-category.page-show-category', compact('categorys'));
    }

    public function searchCategory(Request $request)
    {

        $request->validate(['categoryName' => 'required']);
         $categoryName = $request->categoryName;
        if ($categoryName) {
            $categorys =  CategoryModel::where('category_name', 'like' ,'%' . $categoryName . '%')->get();
            return view('pages-category.page-show-category', compact('categorys'));
        }
    }

    public function storeNewCategory(categoryRequest $request)
    {
        CategoryModel::create([
            'category_name'  =>  $request->categoryName,
        ]);

        return redirect()->back()->with(['success' => 'تم الادخال بنجاح']);
    }

    public function editCategory($category_id)
    {
        $category = CategoryModel::select('id', 'category_name', 'created_at')->find($category_id);
        return view('pages-category.page-edit-category', compact('category'));
    }

    public function updateCategory(categoryRequest $request, $category_id)
    {
        $category_model = CategoryModel::find($category_id);
        if ($category_model) {
            $category_model->update([
                'category_name'  =>  $request->categoryName,
            ]);
            return redirect()->to('show-cat');
        }
    }

    public function deleteCategory($category_id)
    {
        $category_model = CategoryModel::find($category_id);
        if ($category_model) {
            $category_model->delete();
            return redirect()->to('show-cat');
        }
    }


    public function getCategoryName($cat_name)
    {

        $catName = CategoryModel::where('category_name', $cat_name)->get();

        if (count($catName) > 0) {
            return response()->json([
                'message'  => true,
            ]);
        }
    }
}