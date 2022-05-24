@extends('layoutes.master')
@section('MyContent')

         <div class="sub-content">
            <div class="weater-content">
                <h2>الأقسام</h2>
                   <div class="search-content">
                    <form action="{{route('search-weater')}}"  method="POST" class="box-search">
                        @csrf
                        <input type="text" class="f-control" name="weaterName" id="input_search" placeholder=" ... ابحث" required>
                       <button type="submit"> <i class="fa fa-search" ></i></button>
                    </form>

                     <form action="{{route('show-weater')}}" method="GET">
                       <button type="submit">الكل</button>
                     </form>
                </div>
                <div class="show-weater-content">
                    <table>
                        <thead>
                            <td>الرقم</td>
                            <td>اسم الويتر</td>
                            <td>تاريخ الإضافة</td>
                            <td>العمليات</td>
                        </thead>
                        <tbody>
                            @foreach ($weaters as $weater)
                            <tr>
                            <td>{{$weater->id}}</td>
                            <td>{{$weater->weater_name}}</td>
                            <td>{{$weater->created_at}}</td>
                                <td class="opartion">
                                    <button class="btn btn-edit-data">
                                    <a href="{{route('edit-weater',$weater->id)}}">
                                        تعديل
                                        <i class="fa fa-edit"></i>
                                        </a>
                                    </button>

                                    <button class="btn btn-delete-data delete-weater" >
                                    <a href="{{route('delete-weater',$weater->id)}}">
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
