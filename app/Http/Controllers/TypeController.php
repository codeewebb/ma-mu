<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TypeRequest;
use App\Models\TypeModel;
use App\Traits\my_functions;

class TypeController extends Controller
{

    use  my_functions;

    // add type function for retuen view
     public function addType(){
        return view('pages-types.page-add-type');
    }

     public function showType(){
        $types = TypeModel::select('id',
        'category_id',
        'type_name',
        'price_sale',
        'price_cost',
        'time_make',
        'created_at',
        )->get();
        return view('pages-types.page-show-type' ,compact('types'));
    }



    public function searchType(Request $request) {
      $request->validate(['typeName' => 'required']);
         $typeName = $request->typeName;
        if ($typeName) {
            $types =  TypeModel::where('type_name', 'like' ,'%' . $typeName . '%')->get();
            return view('pages-types.page-show-type' ,compact('types'));
        }
    }

    // store function for new type foot
    public function storeNewType(TypeRequest $request){
        // store function from my_function class
         $return = $this->storeThink(TypeModel::class,$request);
         if($return == true) return redirect()->back()->with(['success' => 'تم الادخال بنجاح']);

    }

    // edit function for type foot
      public function ediType($type_id){
        $type = TypeModel::select('id',
        'category_id',
        'type_name',
        'price_sale',
        'price_cost',
        'time_make',
        'created_at')->find($type_id);
        return view('pages-types.page-edit-type' ,compact('type'));
    }

    // update function / type foot
      public function updateType(TypeRequest $request ,$type_id){
        // update  function from my_function class
         $return = $this->updateThink(TypeModel::class,$request,$type_id);
         if($return == true) return redirect()->to('show-type');
    }

    // delete function  type
    public function deleteType($type_id){
        // delete  function from my_function class
         $return= $this->deleteThink(TypeModel::class,$type_id);
         if($return == true) return redirect()->to('show-type');

    }
}