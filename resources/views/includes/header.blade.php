<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>manageMenu</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/all.min.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('font-awesome/css/font-awesome.min.css')}}" >
        <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    </head>
    <body>
    <div class="row main-container">

        <!-- ===== Start  Side Menu ===== -->
        <div class="col-md-2 col-sm-2 col-xs-2 sidemenu" id="main-menu">
            <div class="dashboard">
                <h5>
                    <span class="hidden-md">كودويب</span> <i class="fa fa-dashboard"></i>
                </h5>
            </div>
            <ul>
                <!-- ----- link main page ----- -->
                <li class="active">
                    <i class="fa fa-home"></i>
                    <span> الصفحة الرئيسية </span>
                </li>

                <!-- ----- start link manage department -----  -->
                <li>
                    <a href="#collapse_dept" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-sitemap "></i>
                        <span>إدارة الأقسام</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_dept">
                    <li class="sub-menu">
                    <a href="{{route('add-category')}}" class="li_collapse"> اضــافة قسم </a>
                    </li>

                    <li class="sub-menu">
                    <a href="{{route('show-categorys')}}" class="li_collapse"> عرض الأقسام</a>
                    </li>
                </ul>


                <!-- ----- start link manage types -----  -->
                <li>
                    <a href="#collapse_type" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-list-ul "></i>
                        <span>إدارة الأصناف</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_type">
                    <li class="sub-menu">
                        <a href="{{route('add-type')}}" class="li_collapse"> اضــافة صنف</a>
                    </li>

                    <li class="sub-menu">
                    <a href="{{route('show-type')}}" class="li_collapse"> عرض الأصناف </a>
                    </li>
                </ul>


                <!-- ----- start link manage weaters -----  -->
                <li>
                    <a href="#collapse_weaters" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-male"></i>
                        <span>إدارة الويتر</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_weaters">
                    <li class="sub-menu">
                        <a href="{{route('add-weater')}}" class="li_collapse"> اضــافة ويتر </a>
                    </li>

                    <li class="sub-menu">
                        <a href="{{route('show-weater')}}" class="li_collapse"> عرض الويتر</a>
                    </li>
                </ul>


                <!-- ----- start link manage Users -----  -->
                <li>
                    <a href="#collapse_users" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-users  icons-menu"></i><span>إدارة المستخدمين</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_users">
                    <li class="sub-menu">
                    <a href="{{route('add-user')}}" class="li_collapse">اضــافة مستخدم </a>
                    </li>

                    <li class="sub-menu">
                    <a href="{{route('show-users')}}" class="li_collapse"> عرض المستخدمين</a>
                    </li>
                </ul>


                 <!-- ----- start link manage  suppliers -----  -->
                <li>
                    <a href="#collapse_supplier" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-truck  icons-menu"></i><span>إدارة الموردين</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_supplier">
                    <li class="sub-menu">
                    <a href="{{route('add-supplier')}}" class="li_collapse">اضــافة مورد </a>
                    </li>

                    <li class="sub-menu">
                    <a href="{{route('show-suppliers')}}" class="li_collapse"> عرض الموردين</a>
                    </li>
                </ul>

                <!-- ----- Start link  sales -----  -->
                <li>
                  <a href="{{route('sales')}}">
                        <i class="fa fa-gears"></i>
                        <span>نافدة المبيعات</span>
                    </a>
                </li>

                <!-- ----- Start link  buyes -----  -->
                  <li>
                    <a href="#collapse_buys" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-money  icons-menu"></i><span>إدارة المشتريات</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_buys">
                    <li class="sub-menu">
                        <a href="{{route('buys')}}" class="li_collapse">اضــافة مشتريات </a>
                    </li>

                    <li class="sub-menu">
                    <a href="{{route('show-buys')}}" class="li_collapse"> عرض المشتريات</a>
                    </li>
                </ul>

                   <!-- ----- Start link  reporting -----  -->

                  <li>
                    <a href="#collapse_report" data-toggle="collapse" aria-controls="ture">
                        <i class="fa fa-chart-bar  icons-menu"></i><span> التقارير</span>
                    </a>
                </li>
                <ul class="collapse collapseable" id="collapse_report">
                    <li class="sub-menu">
                        <a href="{{route('sales-report')}}" class="li_collapse">  تقارير المبيعات  </a>
                    </li>

                    <li class="sub-menu">
                    <a href="{{route('buys-report')}}" class="li_collapse"> تقارير المشتريات</a>
                    </li>
                </ul>
                <!-- ----- Start link  settings -----  -->
                <li>
                    <i class="fa fa-gear"></i>
                    <span>الإعدادات</span>
                </li>


            </ul>
        </div>
        <!-- ===== End  Side Menu ===== -->

        <!-- ===== Start Main Content ===== -->
        <div class="col-md-10 col-sm-10 col-xs-10  content" id="main-content">
            <div class="header">
                <div class="user">
                    <button class="btn">
                        <i class="fa fa-sign-out"></i>
                         {{-- تسجيل خروج --}}
                       <a  href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                                        تسجيل خروج
                        </a>
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                        </form>
                    </button>
                    <h3 class="user-name">
                       {{ Auth::user()->name }}</h3>
                    <img src="{{asset('images/nike.jpg')}}" alt="" class="user-img">
                </div>
                <div>
                    <i id="toggel-menu" class="fa fa-bars"></i>
                </div>
            </div>







