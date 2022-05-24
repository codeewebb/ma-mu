@extends('layoutes.master')
@section('MyContent')

            <div class="sub-content">
                <div class="supplier-content">

                @if (Session::has('success'))
                    <div class="content-alert">
                        <div class="alert alert-success ">
                          <strong >  {{Session::get('success')}}   </strong>
                        </div>
                    </div>
                @endif

                 <h2> إضافة مورد جديد</h2>
                <form action="{{route('store-new-supplier')}}" method="POST" class="form-add-supplier">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                           <div class="form-group">
                             <input type="text" name="supplier_name"  id="supplier_name" placeholder="إسم المورد" autocomplete="off" required>
                             @error('supplier_name')
                               <small class="form-text text-danger small-text" style="">{{$message}}</small>
                             @enderror
                           </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                           <input type="text" name="phone_number" placeholder="رقم الهاتف" required autocomplete="off">
                              @error('phone_number')
                               <small class="form-text text-danger small-text" style="">{{$message}}</small>
                             @enderror
                            </div>
                        </div>

                        <div class="col-md-6">
                        <button class="btn" type="submit">إرسال
                           <i class="fa fa-send"></i>
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
