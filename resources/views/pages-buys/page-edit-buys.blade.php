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

                 <h2> تعدبل فاتورة مشتريات </h2>
                <form action="{{route('update-buy',$buy->id)}}" method="POST" class="form-add-buys">
                    @csrf
                    @method('PUT')
                    <div class="row">

                        <div class="col-md-12 col-md-offset-6">
                            <div class="form-group">
                            {{-- <input type="text" class="" id="" placeholder=" اختر المورد" name="supplier_id" value="{{$buy->supplier_id}}"> --}}
                               <select name="supplier_id" id="">
                                   <option value=""  disabled>اختر المورد</option>
                                   <option value="{{$buy->supplier_id}}" selected>{{$buy->supplier_Fun_Relation->supplier_name}}</option>
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
                                <input type="text" class="" placeholder="المكون " name="component" autocomplete="off" value="{{$buy->component}}" required>
                                @error('component')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                            </div>
                        </div>

                         <div class="col-md-12">
                             <div class="form-group">
                               <input type="text" class="" placeholder="الوحدة " name="unit" autocomplete="off" value="{{$buy->unit}}" required>
                               @error('unit')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                             </div>
                        </div>

                         <div class="col-md-12">
                             <div class="form-group">
                               <input type="text" class="" placeholder="الكمية " name="amount" autocomplete="off" value="{{$buy->amount}}" required>
                               @error('amount')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                             </div>
                        </div>

                         <div class="col-md-12">
                             <div class="form-group">
                               <input type="text" class="" placeholder="سعر الوحدة " name="unit_price" autocomplete="off" value="{{$buy->unit_price}}" required>
                               @error('unit_price')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                             </div>
                        </div>

                        <div class="col-md-12">
                             <div class="form-group">
                               <input type="text" class="" placeholder=" المبلغ الكلي " name="final_price" autocomplete="off" value="{{$buy->final_price}}" >
                               @error('final_price')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                             </div>
                        </div>

                         <div class="col-md-12">
                             <div class="form-group">
                             <textarea name="description" class="col-md-12" id="" cols="" rows="5" placeholder="الملاحظة" autocomplete="off">{{$buy->description}}</textarea>
                                @error('description')
                                  <small class="form-text text-danger small-text" style="">{{$message}}</small>
                                @enderror
                             </div>
                        </div>
                       <div class="col-md-12">
                          <button class="btn" type="submit" id="">تحديث
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
