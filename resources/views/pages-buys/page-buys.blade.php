@extends('layoutes.master')
@section('MyContent')

            <div class="sub-content">
                <div class="cat-content">

                @if (Session::has('success'))
                    <div class="content-alert">
                        <div class="alert alert-success ">
                          <strong >  {{Session::get('success')}}   </strong>
                        </div>
                    </div>
                @endif

                 <h2> إضافة مفاتورة مشتريات </h2>
                <form action="{{route('store-buys')}}" method="POST" class="form-add-buys">
                    @csrf
                    <div class="row">

                        <div class="col-md-12 ">
                            <div class="form-group">
                                 <select name="supplier_id" id="">
                                   <option value="" selected disabled>اختر المورد</option>
                                   @foreach ($suppliers as $supplier)
                                    <option value="{{$supplier->id}}">{{$supplier->supplier_name}}</option>
                                   @endforeach
                               </select>
                                @error('supplier_id')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                           </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input type="text" class="" placeholder="المكون " name="component" autocomplete="off" required>
                                @error('component')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                         <div class="col-md-12">
                             <div class="form-group">
                               <input type="text" class="" placeholder="الوحدة " name="unit" autocomplete="off" required>
                               @error('unit')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                             </div>
                        </div>

                         <div class="col-md-12">
                             <div class="form-group">
                               <input type="text" class="" placeholder="الكمية " name="amount" autocomplete="off" required>
                               @error('amount')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                             </div>
                        </div>

                         <div class="col-md-12">
                             <div class="form-group">
                               <input type="text" class="" placeholder="سعر الوحدة " name="unit_price" autocomplete="off" required>
                               @error('unit_price')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                             </div>
                        </div>

                        <div class="col-md-12">
                             <div class="form-group">
                               <input type="text" class="" placeholder=" المبلغ الكلي " name="final_price" autocomplete="off"  >
                               @error('final_price')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                             </div>
                        </div>

                         <div class="col-md-12">
                             <div class="form-group">
                               <textarea name="description" class="col-md-12" id="" cols="" rows="5" placeholder="الملاحظة" autocomplete="off"></textarea>
                                @error('description')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                             </div>
                        </div>
                       <div class="col-md-12">
                          <button class="btn" type="submit" id="">إرسال
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
