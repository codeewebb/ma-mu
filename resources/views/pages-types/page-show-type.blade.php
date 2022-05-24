@extends('layoutes.master')
@section('MyContent')

         <div class="sub-content">
            <div class="cat-content">
                <h2>الأصناف</h2>
                <div class="search-content">
                    <form action="{{route('search-type')}}"  method="POST" class="box-search">
                        @csrf
                        <input type="text" class="f-control" name="typeName" id="input_search" placeholder=" ... ابحث" required>
                       <button type="submit"> <i class="fa fa-search" ></i></button>
                    </form>

                     <form action="{{route('show-type')}}" method="GET">
                       <button type="submit">الكل</button>
                     </form>
                </div>
                <div class="show-cat-content">
                    <table>
                        <thead>
                            <td>الرقم</td>
                            <td>اسم الصنف</td>
                            <td> القسم</td>
                            <td> سعر البيع</td>
                            <td> سعر التكلفة</td>
                            <td> المدة</td>
                            <td>تاريخ الإضافة</td>
                            <td>العمليات</td>
                        </thead>
                        <tbody>
                            @foreach ($types as $type)
                            <tr>
                            <td>{{$type->id}}</td>
                            <td>{{$type->type_name}}</td>
                            <td>{{$type->category_id}}</td>
                            <td>{{$type->price_sale}}</td>
                            <td>{{$type->price_cost}}</td>
                            <td>{{$type->time_make}}</td>
                            <td>{{$type->created_at}}</td>
                                <td class="opartion">
                                    <button class="btn btn-edit-data">
                                    <a href="{{route('edit-type',$type->id)}}">
                                        تعديل
                                        <i class="fa fa-edit"></i>
                                        </a>
                                    </button>

                                    <button class="btn btn-delete-data" >
                                    <a href="{{route('delete-type',$type->id)}}">
                                        حذف
                                        <i class="fa fa-trash"></i>
                                    </a>
                                    </button>
                                </td>
                            </tr>
                             @endforeach
                            {{-- <tr>
                                <td>2</td>
                                <td>سندوتشات</td>
                                <td>8</td>
                                <td>2022/2/22</td>
                                <td class="opartion">
                                    <button class="btn btn-edit-data">
                                        تعديل
                                        <i class="fa fa-edit"></i>
                                    </button>
                                    <button class="btn btn-delete-data">
                                        حذف
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
        <!-- ===== End Main Content ===== -->

    </div>
@stop
