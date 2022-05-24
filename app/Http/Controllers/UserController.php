<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Traits\my_functions;
use Illuminate\Support\Facades\Hash;
use App\User;
// use PDF;
use Barryvdh\DomPDF\Facade\pdf;
// use Barryvdh\PDF;
// use Barryvdh\DomPDF\PDF;

class UserController extends Controller
{
    use my_functions;
    public function addUser()
    {
        return view('auth.register');
    }
    public function registerUser(UserRequest $userRequest)
    {
    //    return $userRequest;
        //   return Hash::make($userRequest->password);
        User::create([
            'full_name'           => $userRequest->full_name,
            'name'                => $userRequest->name,
            'email'               => $userRequest->email,
            'phone'               => $userRequest->phone,
            'password'            => Hash::make($userRequest->password),
            'access_category'     => $userRequest->access_category,
            'access_weater'       => $userRequest->access_weater,
            'access_type'         => $userRequest->access_type,
            'access_buyes'        => $userRequest->access_buyes,
            'access_resorces'     => $userRequest->access_resorces,
            'access_sales'        => $userRequest->access_sales,
            'access_acountents'   => $userRequest->access_acountents,
            'access_reportes'     => $userRequest->access_reportes,
        ]);
         return redirect()->to('add-user');
    }



    public function showUser(){
        $users = User::select('id','name','phone','access_acountents','access_reportes','created_at')->get();
        return view('auth.show-users',compact('users'));
    }


    public function editUser($user_id)
    {
        $user = User::find($user_id);
        if($user){
            return view('auth.edit-user',compact('user'));
        }
    }

    public function updateUser(Request $userRequest,$user_id)
    {
        // return $request->password;
        if($userRequest->password){
            $update = $this->updateThink(User::class,$userRequest,$user_id);
            if($update){
                return redirect()->to('show-users');
            }
        }else{
            $user = User::find($user_id);
            $update = $user->update([
            'full_name'           => $userRequest->full_name,
            'name'                => $userRequest->name,
            'email'               => $userRequest->email,
            'phone'               => $userRequest->phone,
            'password'            => $user->password,
            'access_category'     => $userRequest->access_category,
            'access_weater'       => $userRequest->access_weater,
            'access_type'         => $userRequest->access_type,
            'access_buyes'        => $userRequest->access_buyes,
            'access_resorces'     => $userRequest->access_resorces,
            'access_sales'        => $userRequest->access_sales,
            'access_acountents'   => $userRequest->access_acountents,
            'access_reportes'     => $userRequest->access_reportes,
            ]);
         if($update){
                return redirect()->to('show-users');
            }
        }
    }

    public function deleteUser($user_id) {
        $delete = $this->deleteThink(User::class,$user_id);
        if($delete){
            return redirect()->back();
        }
    }
    public function create()
    {

    	$data = ['title' => 'Laravel 7 Generate PDF From View Example Tutorial'];

        $pdf = PDF::loadView('pdf', $data);

        return $pdf->download('Nicesnippets.pdf');

    }

}