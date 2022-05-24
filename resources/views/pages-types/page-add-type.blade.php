@extends('layoutes.master')
@section('MyContent')

            <div class="sub-content">
                <div class="type-content">

                @if (Session::has('success'))
                    <div class="content-alert">
                        <div class="alert alert-success ">
                          <strong >  {{Session::get('success')}}   </strong>
                        </div>
                    </div>
                @endif

                 <h2> إضافة صنف جديد</h2>
                <form action="{{route('store-new-type')}}" method="POST" class="form-add-type">
                    @csrf
                       <div class="row">

                         <div class="col-md-6 form-group">
                             {{-- <label for="" class="col-md-12">إختر القسم</label> --}}
                             <select name="category_id" id="">
                                 <option value=""  disabled selected>إختر القسم</option>
                                 <option value="1">1</option>
                             </select>
                              @error('category_id')
                                <small class="form-text text-danger" style="">{{$message}}</small>
                              @enderror
                          </div>

                         <div class="col-md-6 form-group">
                             {{-- <label for="" class="col-md-12">إختر القسم</label> --}}
                             <input type="text" name="type_name" placeholder="إسم الصنف">
                              @error('type_name')
                                <small class="form-text text-danger" style="">{{$message}}</small>
                              @enderror
                          </div>
                          <div class="col-md-6 form-group">
                             {{-- <label for="" class="col-md-12">إختر القسم</label> --}}
                             <input type="text" name="price_sale" placeholder="سعر البيع ">
                              @error('price_sale')
                                <small class="form-text text-danger" style="">{{$message}}</small>
                              @enderror
                          </div>
                           <div class="col-md-6 form-group">
                             {{-- <label for="" class="col-md-12">إختر القسم</label> --}}
                             <input type="text" name="price_cost" placeholder=" سعر التكلفة">
                              @error('price_cost')
                                <small class="form-text text-danger" style="">{{$message}}</small>
                              @enderror
                          </div>
                           <div class="col-md-6 form-group">
                             {{-- <label for="" class="col-md-12">إختر القسم</label> --}}
                              <select name="time_make" id="">
                                 <option value=""  disabled selected> الزمن</option>
                                 <option value="22">2</option>
                             </select>
                              @error('time_make')
                                <small class="form-text text-danger" style="">{{$message}}</small>
                              @enderror
                          </div>

                            <div class="col-md-12">
                               <button class="btn" type="submit">إرسال
                                 <i class="fa fa-send"></i>
                               </button>
                           </div>

                     </form>
                </div>
            </div>

        </div>
        <!-- ===== End Main Content ===== -->

    </div>
@stop
