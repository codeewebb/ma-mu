<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupplierRequest;
use Illuminate\Http\Request;
use App\Models\SupplierModel;
use App\Traits\my_functions;

class SupplierController extends Controller
{
    use my_functions;
    public function addSupplier()
    {
        return view('pages-suppliers.page-add-supplier');
    }

    public function storeNewSupplier(SupplierRequest $request)
    {
        $create = $this->storeThink(SupplierModel::class, $request);
        if ($create == true) {
            return redirect()->to('add-supplier')->with(['success' => 'تم الادخال بنجاح ']);
        }
    }

    public function showSuppliers()
    {
        $suppliers = SupplierModel::select('id', 'supplier_name', 'phone_number', 'created_at')->get();
        return view('pages-suppliers.page-show-suppliers', compact('suppliers'));
    }

    public function editSupplier($supplier_id)
    {
        $supplier = SupplierModel::find($supplier_id);
        if ($supplier) {
            return view('pages-suppliers.page-edit-supplier', compact('supplier'));
        }
    }

    public function updateSupplier(SupplierRequest $request, $supplier_id)
    {
        $update = $this->updateThink(SupplierModel::class, $request, $supplier_id);
        if ($update) {
            return redirect()->to('show-suppliers');
        }
    }

    public function deleteSupplier($supplier_id)
    {
        $find_supplier = SupplierModel::find($supplier_id);
        if ($find_supplier) {
            $delete = $this->deleteThink(SupplierModel::class, $supplier_id);
            if ($delete) {
                return redirect()->back();
            }
        }
    }
}
