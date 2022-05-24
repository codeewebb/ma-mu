<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WeatersRequest;
use App\Models\WeaterModel;
use App\Traits\my_functions;

class WeaterController extends Controller
{
    use  my_functions;

    // add type function for retuen view
    public function addWeater()
    {
        return view('pages-weaters.page-add-weater');
    }

    public function showWeater()
    {
        $weaters = WeaterModel::select('id', 'weater_name', 'created_at')->get();
        return view('pages-weaters.page-show-weaters', compact('weaters'));
    }

    public function searchWeater(Request $request)
    {
        $request->validate(['weaterName' => 'required']);
        $weaterName = $request->weaterName;
        if ($weaterName) {
            $weaters =  WeaterModel::where('weater_name', 'like', '%' . $weaterName . '%')->get();
            return view('pages-weaters.page-show-weaters', compact('weaters'));
        }
    }
    // store function for new type foot
    public function storeNewWeater(WeatersRequest $request)
    {
        // store function from my_function class
        $return = $this->storeThink(WeaterModel::class, $request);
        if ($return == true) return redirect()->back()->with(['success' => 'تم الادخال بنجاح']);
    }

    // edit function for type foot
    public function editWeater($weater_id)
    {
        $weater = WeaterModel::select('id', 'weater_name', 'created_at')->find($weater_id);

        return view('pages-weaters.page-edit-weater', compact('weater'));
    }

    // update function / type foot
    public function updateWeater(WeatersRequest $request, $weater_id)
    {
        // update  function from my_function class
        $return = $this->updateThink(WeaterModel::class, $request, $weater_id);
        if ($return == true) return redirect()->to('show-weater');
    }

    // delete function  type
    public function deleteWeater($weater_id)
    {
        // delete  function from my_function class
        $return = $this->deleteThink(WeaterModel::class, $weater_id);
        if ($return == true) return redirect()->to('show-weater');
    }
}