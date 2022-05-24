@extends('layoutes.master')
@section('MyContent')

            <div class="sub-content">
                <div class="buys-report-content">

                @if (Session::has('success'))
                    <div class="content-alert">
                        <div class="alert alert-success ">
                          <strong >  {{Session::get('success')}}   </strong>
                        </div>
                    </div>
                @endif

                 <h2>  تقرير المشتريات </h2>
                <form action="{{route('get-buys-report')}}" method="POST" class="form-sales-report">
                    @csrf
                    <div class="row">

                        <div class="col-md-12 ">
                            <div class="form-group">
                                <label for="">الموردين</label>
                                 <select name="supplier" id="">
                                   <option value="" selected disabled>اختر المورد</option>
                                   <option value=""  > كل الموردين</option>
                                   @foreach ($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->supplier_name}}</option>
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
