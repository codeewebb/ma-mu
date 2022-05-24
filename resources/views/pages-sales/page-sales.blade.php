@extends('layouts.master-sales')
@section('salesContent')


            {{-- <div class="sub-content"> --}}
                <div class="sales-content">
                    <div class="header-sales">
                        <h5>
                            طاولات الطعام
                            <i class="fa fa-cutlery"></i>
                        </h5>
                    <a href="{{route('add-category')}}">
                         <button class="btn back-to-home">
                          <i class="fa fa-arrow-left"></i>
                          <span>الرئيسية</span>
                         </button>
                        </a>

                    </div>
                      <div class="tables">
                          <div class="row">
                              <div class="col-md-3 col-sm-4">
                                <a href="{{url('sales-direct/'. 500 .'/'. 500)}}">
                                  <div class="direct-sales">
                                     <img src="{{asset('images/sales2.png')}}" alt="">
                                     <span>بيع مباشر </span>
                                     {{-- <i class="fa fa-direct"></i> --}}
                                  </div>
                                  </a>
                              </div>
                              @foreach ($tables as $table)
                                <div class="col-md-3 col-sm-4">
                                <a href="{{url('sales-table/'. $table->id .'/'.$tabel_number)}}">
                                  <div class="table">
                                     <img src="{{asset('images/coffee_table_100px.png')}}" alt="">
                                     <span> [ {{  $tabel_number++ }} ] طاولة رقم   </span>
                                  </div>
                                </a>
                                </div>
                              @endforeach


                                <div class="col-md-3 col-sm-4">
                                  <a href="{{route('add-new-table')}}">
                                     <div class="new-table">
                                       <img src="{{asset('images/add_list_100px.png')}}" alt="">
                                       <span>طاولة جديدة  </span>
                                     </div>
                                   </a>
                                </div>

                          </div>
                      </div>
                </div>
            </div>

        {{-- </div> --}}
        <!-- ===== End Main Content ===== -->

    </div>
@stop
