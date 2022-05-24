@extends('layouts.master')
@section('MyContent')

     <div class="sub-content">
        <div class="register-content">

                @if (Session::has('success'))
                    <div class="content-alert">
                        <div class="alert alert-success ">
                          <strong >  {{Session::get('success')}} </strong>
                        </div>
                    </div>
                @endif

                 <h2> عرض المستخدمين </h2>
                  <div class="search-content">
                    <form action=""  method="POST" class="box-search">
                        @csrf
                            <input type="text" class="f-control" name="" id="input_search" placeholder=" ... ابحث" required>
                            <button type="submit"> <i class="fa fa-search" ></i></button>
                    </form>
                     <form action="" method="GET">
                       <button type="submit">الكل</button>
                     </form>
                </div>
                <div class="show-users-content">
                    <table>
                        <thead>
                            <td>الرقم</td>
                            <td>اسم المستخدم</td>
                            <td> رقم االهاتف</td>
                            <td> الوصول للحسابات </td>
                            <td> الوصول للتقارير</td>
                            <td>تاريخ الإضافة</td>
                            <td>العمليات</td>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                            <td>{{$user->id}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->phone}}</td>
                            <td>{{$user->access_acountents}}</td>
                            <td>{{$user->access_reportes}}</td>
                            <td>{{$user->created_at}}</td>
                                <td class="opartion">
                                    <button class="btn btn-edit-data">
                                    <a href="{{route('edit-user',$user->id)}}">
                                        تعديل
                                        <i class="fa fa-edit"></i>
                                        </a>
                                    </button>

                                    <button class="btn btn-delete-data " >
                                    <a href="{{route('delete-user',$user->id)}}">
                                        حذف
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </button>
                                </td>
                            </tr>
                             @endforeach

                        </tbody>
                    </table>
                 </div>

        </div>
    </div>

@endsection
