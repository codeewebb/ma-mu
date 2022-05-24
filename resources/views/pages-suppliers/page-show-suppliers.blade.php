@extends('layoutes.master')
@section('MyContent')

         <div class="sub-content">
            <div class="cat-content">
                <h2>الأقسام</h2>
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
                <div class="show-suppliers-content">
                    <table>
                        <thead>
                            <td>الرقم</td>
                            <td>اسم المورد</td>
                            <td> رقم االهاتف</td>
                            <td>تاريخ الإضافة</td>
                            <td>العمليات</td>
                        </thead>
                        <tbody>
                            @foreach ($suppliers as $supplier)
                            <tr>
                            <td>{{$supplier->id}}</td>
                            <td>{{$supplier->supplier_name}}</td>
                            <td>{{$supplier->phone_number}}</td>
                            <td>{{$supplier->created_at}}</td>
                                <td class="opartion">
                                    <button class="btn btn-edit-data">
                                    <a href="{{route('edit-supplier',$supplier->id)}}">
                                        تعديل
                                        <i class="fa fa-edit"></i>
                                        </a>
                                    </button>

                                    <button class="btn btn-delete-data " >
                                    <a href="{{route('delete-supplier',$supplier->id)}}">
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
        <!-- ===== End Main Content ===== -->

    </div>
@stop
