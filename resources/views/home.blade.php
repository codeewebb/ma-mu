@extends('layoutes.master')

@section('MyContent')
<div class="genarle-report">
                <div class="row">
                    <div class="col-lg-2 col-md-3 col-sm-4 animation">
                        <div class="content-r">
                            <i class="fa fa-list-ul"></i>
                            <span>الأصناف</span>
                            <hr>
                        <span class="count">{{$types_count}}</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 animation">
                        <div class="content-r">
                            <i class="fa fa-male"></i>
                            <span>الويتر</span>
                            <hr>
                        <span class="count">{{$weaters_count}}</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 animation">
                        <div class="content-r">
                            <i class="fa fa-truck"></i>
                            <p class="span animation2"></p>
                            <p class="span2 animation2"></p>
                            <span>الموردين</span>
                            <hr>
                        <span class="count">{{$suppliers_count}}</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 animation">
                        <div class="content-r">
                            <i class="fa fa-level-up"></i>
                            <span>المبيعات</span>
                            <hr>
                            <span class="count">{{$sales_count}}</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 animation">
                        <div class="content-r">
                            <i class="fa fa-level-down"></i>
                            <span>المشتريات</span>
                            <hr>
                            <span class="count"> {{$buys_price}} SD</span>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-4 animation">
                        <div class="content-r">
                            <i class="fa fa-money"></i>
                            <span>رصيدالخذنة</span>
                            <hr>
                            <span class="count"> {{$resets_price }} SD</span>
                        </div>

                    </div>
                </div>
                <div class="order-report">
                    {{-- نسبه الطلبات --}}


                </div>
            
            </div>
@endsection
