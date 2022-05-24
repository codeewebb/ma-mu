<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BuysModel;
use App\Models\SupplierModel;
use App\Http\Requests\BuysRequest;
use App\Traits\my_functions;
use Prophecy\Doubler\Generator\Node\ReturnTypeNode;

class BuysController extends Controller
{

    use my_functions;
    public function addBuys()
    {
        $suppliers  = SupplierModel::select('id', 'supplier_name')->get();
        return view('pages-buys.page-buys', compact('suppliers'));
    }

    public function storeNewBuys(BuysRequest $request)
    {
        $create = $this->storeThink(BuysModel::class, $request);
        if ($create  == true) {
            return redirect()->back()->with(['success' => 'تم الادخال بنجاح']);
        }
    }

    public function showBuys()
    {
        $buys = BuysModel::with([
            'supplier_Fun_Relation' => function ($supplier_name) {
                $supplier_name->select('supplier_name', 'id');
            },
        ])->get();
        return view('pages-buys.page-show-buys', compact('buys'));
    }

    public function editBuys($buy_id)
    {
        $suppliers  = SupplierModel::select('id', 'supplier_name')->get();
        $buy = BuysModel::select(
            'id',
            'supplier_id',
            'component',
            'unit',
            'amount',
            'unit_price',
            'final_price',
            'description'
        )->with([
            'supplier_Fun_Relation' => function ($supplier_name) {
                $supplier_name->select('supplier_name', 'id');
            },
        ])->find($buy_id);


        return view('pages-buys.page-edit-buys', compact('buy', 'suppliers'));
    }

    public function updateBuy(BuysRequest $request, $buy_id)
    {
        $update = $this->updateThink(BuysModel::class, $request, $buy_id);
        if ($update  == true) {
            return redirect()->to('show-buys')->with(['success' => 'تم التحديث بنجاح']);
        }
    }

    public function deleteBuy($buy_id)
    {

        $delete = $this->deleteThink(BuysModel::class, $buy_id);
        if ($delete  == true) {
            return redirect()->to('show-buys')->with(['success' => 'تم التحديث بنجاح']);
        }
    }
}