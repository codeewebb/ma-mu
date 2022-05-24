@extends('layoutes.master')
@section('MyContent')

            <div class="sub-content">
                <div class="sales-report-content">

                @if (Session::has('success'))
                    <div class="content-alert">
                        <div class="alert alert-success ">
                          <strong >  {{Session::get('success')}}   </strong>
                        </div>
                    </div>
                @endif

                 <h2> إضافة مفاتورة مشتريات </h2>
                <form action="{{route('get-sales-report')}}" method="POST" class="form-sales-report">
                    @csrf
                    <div class="row">

                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label for="">الطاولات</label>
                                 <select name="table" id="">
                                   <option value="" selected disabled>اختر الطاولة</option>
                                   <option value=""  > كل الطاولات</option>
                                   @foreach ($tables as $table)
                                    <option value="{{$table->id}}">{{$table->table_name}}</option>
                                   @endforeach
                               </select>
                           </div>
                        </div>

                           <div class="col-md-12 ">
                            <div class="form-group">
                                <label for="">الاصناف</label>
                                 <select name="type" id="">
                                   <option value="" selected disabled>اختر الصنف</option>
                                   <option value=""  >كل الاصناف </option>
                                   @foreach ($types as $type)
                                    <option value="{{$type->id}}">{{$type->type_name}}</option>
                                   @endforeach
                               </select>
                           </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                 <label for="">من تاريخ </label>
                                <input type="date" class="" placeholder="التاريخ " name="date_from" autocomplete="off" required>
                            </div>
                        </div>

                         <div class="col-md-12">
                             <div class="form-group">
                                 <label for=""> الي تاريخ</label>
                               <input type="date" class="" placeholder="التاريخ " name="date_for" autocomplete="off" required>
                             </div>
                        </div>

                       <div class="col-md-12">
                          <button class="btn" type="submit" id="">بحث
                            <i class="fa fa-refresh"></i>
                          </button>
                       </div>
                    </div>
                 </form>

             </div>
          </div>

        </div>
        <!-- ===== End Main Content ===== -->

    </div>

@stop
