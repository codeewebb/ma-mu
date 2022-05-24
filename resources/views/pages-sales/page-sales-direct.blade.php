@extends('layouts.master-sales')
@section('salesContent')

        <div class="sales-content" >
                    <div class="header-sales">
                        <h5>
                             بيع مباشر
                            <i class="fa fa-cutlery"></i>
                        </h5>
                       <a href="{{route('sales')}}">
                         <button class="btn back-to-table">
                          <i class="fa fa-arrow-left"></i>
                          <span>كل الطاولات</span>
                         </button>
                        </a>
                    </div>
                    <div class="sales-table"  id="{{$table_number}}" >
                           <div class="row">
                              <div class="col-md-8 col-sm-12  fill-content">
                                <div class="fill-title">
                                    <h4>الطلبات</h4>
                                    {{-- <span>time</span> --}}
                                </div>

                                  <div class="money">
                                      <strong>
                                        المبلغ الكلي =
                                       <span id="final-price">{{$final_price}}</span>
                                      </strong>
                                </div>

                               <div class="orders">
                                  <table>
                                    <thead>
                                        <td>#</td>
                                        <td>الطلب </td>
                                        <td>الكمية </td>
                                        <td>السعر</td>
                                        <td> المجموع</td>
                                        <td> زمن الطلب</td>
                                        <td> إلغاء</td>
                                    </thead>
                                    <tbody style="display:" id="tbody">
                                        @foreach ($orderModels as $orderModel)
                                            <tr>
                                               <td>{{$current++}}</td>

                                                <td class="td_type_name" id="td_type_name">{{$orderModel->type_Fun_Relation->type_name}}</td>

                                                <td class="td_type_count type_amount" id="{{$orderModel->id}}">
                                                    {{$orderModel->type_amount}}
                                                    <span class="increace">+</span>
                                                    <span class="dicreace">-</span>
                                                 </td>

                                                <td class="td_type_price">{{$orderModel->type_price}}</td>

                                                <td >{{$orderModel->type_price *  $orderModel->type_amount}}</td>

                                                <td>{{$orderModel->created_at}}</td>

                                                <td class="td_cancel cancel_order" id="{{$orderModel->id}}">X</td>
                                            </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                                </div>

                               <div class="push">
                                  <div class="weaters">
                                      <form action="">
                                        <label for="">الويتر</label>
                                        <select name="weater_name" id="">
                                            <option value="" selected disabled>إختر الويتر</option>
                                            <option value="">-------- </option>
                                            @foreach ($weaters as $weater)
                                              <option value="{{$weater->id}}">{{$weater->weater_name}}</option>
                                            @endforeach
                                        </select>
                                      </form>
                                    </div>

                                    <div class="kash">
                                        {{-- <h5></h5> --}}
                                        <form action="">
                                            <label for="">الكاش</label>
                                            <input type="text" placeholder=" المبلغ">
                                        </form>
                                    </div>
                                    <div class="bank">
                                        <form action="">
                                            <select name="" id="">
                                                <option value="" selected disabled> البنك</option>
                                                <option value="">الخرطوم</option>
                                                <option value="">امدرمان الوطني</option>
                                                <option value="">النيلين</option>
                                            </select>
                                            <input type="text" placeholder=" المبلغ">
                                        </form>
                                    </div>
                                </div>

                                 <div class="opartion">
                                    <button class="btn accepte" id="accepte" _token="{{csrf_token()}}">
                                        <span>تاكيد</span>
                                        <i class="fa fa-check"></i>
                                    </button>
                                    <button class="btn reject" id="reject_orders">
                                        <span>إلغاء</span>
                                        <i class="fa fa-times"></i>
                                    </button>
                                </div>

                              </div>
                               <div class="col-md-4 col-sm-12  food-list">
                                  <h5>قائمة الطعام</h5>
                                  <div class="row types-foods">
                                      <div class="col-md-6">
                                        <ul class="cat">
                                            @foreach ($categorys as $category)
                                                <li id="{{$category->id}}" class="get-item">
                                                    <strong >{{$category->category_name}}</strong>
                                                    {{-- <span>ج {{$type->price_sale}}</span> --}}
                                                </li>
                                            @endforeach
                                        </ul>
                                      </div>
                                        <div class="col-md-6">
                                          <ul id="ul-types" _token={{csrf_token()}}>
                                          </ul>
                                      </div>
                                  </div>


                              </div>
                          </div>
                    </div>
                </div>
            </div>

        {{-- </div> --}}
        <!-- ===== End Main Content ===== -->

    </div>
@stop
