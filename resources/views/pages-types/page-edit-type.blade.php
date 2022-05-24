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

                 <h2> تحديث  بيانات صنف </h2>
                <form action="{{route('update-type',$type->id)}}" method="POST" class="form-add-type">
                    @csrf
                    @method('PUT')
                       <div class="row">

                         <div class="col-md-6 form-group">
                             {{-- <label for="" class="col-md-12">إختر القسم</label> --}}
                             <select name="category_id" id="">
                                 <option value=""  disabled >إختر القسم</option>
                             <option value="{{$type->category_id}}" selected>{{$type->category_id}}</option>
                                 <option value="1" >1</option>
                             </select>
                              @error('category_id')
                                <small class="form-text text-danger" style="">{{$message}}</small>
                              @enderror
                          </div>

                         <div class="col-md-6 form-group">
                             {{-- <label for="" class="col-md-12">إختر القسم</label> --}}
                             <input type="text" name="type_name" placeholder="إسم الصنف" value="{{$type->type_name}}">
                              @error('type_name')
                                <small class="form-text text-danger" style="">{{$message}}</small>
                              @enderror
                          </div>
                          <div class="col-md-6 form-group">
                             {{-- <label for="" class="col-md-12">إختر القسم</label> --}}
                             <input type="text" name="price_sale" placeholder="سعر البيع " value="{{$type->price_sale}}">
                              @error('price_sale')
                                <small class="form-text text-danger" style="">{{$message}}</small>
                              @enderror
                          </div>
                           <div class="col-md-6 form-group">
                             {{-- <label for="" class="col-md-12">إختر القسم</label> --}}
                             <input type="text" name="price_cost" placeholder=" سعر التكلفة" value="{{$type->price_cost}}">
                              @error('price_cost')
                                <small class="form-text text-danger" style="">{{$message}}</small>
                              @enderror
                          </div>
                           <div class="col-md-6 form-group">
                             {{-- <label for="" class="col-md-12">إختر القسم</label> --}}
                              <select name="time_make" id="">
                                 <option value=""  disabled > الزمن</option>
                                 <option value="{{$type->time_make}}" selected>{{$type->time_make}}</option>
                                 <option value="22" selected>4</option>
                             </select>
                              @error('time_make')
                                <small class="form-text text-danger" style="">{{$message}}</small>
                              @enderror
                          </div>

                            <div class="col-md-12">
                               <button class="btn" type="submit">تحديث
                                 <i class="fa fa-refresh"></i>
                               </button>
                           </div>

                     </form>
                </div>
            </div>

        </div>
        <!-- ===== End Main Content ===== -->

    </div>
@stop
