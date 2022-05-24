@extends('layouts.master')
@section('MyContent')

            <div class="sub-content">
                <div class="register-content">

                @if (Session::has('success'))
                    <div class="content-alert">
                        <div class="alert alert-success ">
                          <strong >  {{Session::get('success')}} </strong>
                        </div>
                    </div>
                @endif

                 <h2> تحديث بيانات مستخدم </h2>

                    <form method="POST" action="{{ route('update-user',$user->id) }}" class="form-add-user">
                        @csrf
                        @method("PUT")
                       <div class="row">
                        <div class="col-md-6 form-group">
                        <input id="full_name" type="text" class="" name="full_name"  required placeholder="الإسم بالكامل"  value="{{$user->full_name}}">
                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>


                        <div class="col-md-6 form-group">
                                <input id="name" type="text" class="" name="name"  required autocomplete="name" placeholder="إسم المستخدم" value="{{$user->name}}">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-6 form-group">
                                <input id="phone" type="text" class="" name="phone" required autocomplete="phone" placeholder=" رقم الهاتف" value="{{$user->phone}}">
                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                        </div>

                        <div class="col-md-6 form-group">
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{$user->email}}"  required placeholder="الإيميل" >
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-6 form-group">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password"  autocomplete="new-password" placeholder="كلمة المرور">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        <div class="col-md-6 form-group">
                           <input id="password-confirm" type="password" class="" name="password_confirmation"  autocomplete="new-password" placeholder=" إعادة كلمة المرور" >
                        </div>

                        <div class="col-md-12 form-group box-input-checkbox">
                            <label for="access_category" class="">الدخول لإدارة الأقسام</label>
                            <input id="access_category" type="checkbox"  name="access_category" checked>
                        </div>
                          <div class="col-md-12 form-group box-input-checkbox">
                            <label for="access_weater" class="">الدخول لإدارة الويتر</label>
                            <input id="access_weater" type="checkbox"  name="access_weater" checked>
                        </div>
                          <div class="col-md-12 form-group box-input-checkbox">
                            <label for="access_type" class="">الدخول لإدارة الأصناف</label>
                            <input id="access_type" type="checkbox"  name="access_type" checked>
                        </div>
                          <div class="col-md-12 form-group box-input-checkbox">
                            <label for="access_buyes" class="">الدخول لإدارة المبيعات</label>
                            <input id="access_buyes" type="checkbox"  name="access_buyes" checked>
                        </div>
                           <div class="col-md-12 form-group box-input-checkbox">
                            <label for="access_resorces" class="">الدخول لإدارة الموردين</label>
                            <input id="access_resorces" type="checkbox"  name="access_resorces" checked>
                        </div>
                           <div class="col-md-12 form-group box-input-checkbox">
                            <label for="access_sales" class="">الدخول للمشتريات</label>
                            <input id="access_sales" type="checkbox"  name="access_sales" checked>
                        </div>
                         <div class="col-md-12 form-group box-input-checkbox">
                            <label for="access_acountents" class="">الدخول للحسابات</label>
                            <input id="access_acountents" type="checkbox"  name="access_acountents" >
                        </div>
                         <div class="col-md-12 form-group box-input-checkbox">
                            <label for="access_reportes" class="">الدخول  للتقارير</label>
                            <input id="access_reportes" type="checkbox"  name="access_reportes" >
                        </div>


                            <div class="col-md-12 box-btn">
                                <button type="submit" class="btn">
                                    تحديث
                                    <i class="fa fa-refresh"></i>
                                </button>
                            </div>

                        </div>
                    </form>
                </div>
            </div>

@endsection
