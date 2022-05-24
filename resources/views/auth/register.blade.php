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

                 <h2> إضافة مستخدم جديد</h2>

                    <form method="POST" action="{{ route('user-register') }}" class="form-add-user">
                        @csrf
                       <div class="row">
                        <div class="col-md-6 form-group">
                            {{-- <label for="full_name" class="col-md-4 col-form-label text-md-right">full_name</label> --}}

                            {{-- <div class="col-md-6"> --}}
                                <input id="full_name" type="text" class="" name="full_name" value="{{ old('full_name') }}" required placeholder="الإسم بالكامل" autofocus>

                                @error('full_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div class="col-md-6 form-group">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}

                            {{-- <div class="col-md-6"> --}}
                                <input id="name" type="text" class="" name="name" value="{{ old('name') }}" required autocomplete="name" placeholder="إسم المستخدم">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>
                        <div class="col-md-6 form-group">
                            {{-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label> --}}

                            {{-- <div class="col-md-6"> --}}
                                <input id="phone" type="text" class="" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder=" رقم الهاتف">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div class="col-md-6 form-group">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            {{-- <div class="col-md-6"> --}}
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="الإيميل">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div class="col-md-6 form-group">
                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            {{-- <div class="col-md-6"> --}}
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="كلمة المرور">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            {{-- </div> --}}
                        </div>

                        <div class="col-md-6 form-group">
                            {{-- <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label> --}}

                            {{-- <div class="col-md-6"> --}}
                                <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password" placeholder=" إعادة كلمة المرور" >
                            {{-- </div> --}}
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
                                    إرسال
                                    <i class="fa fa-send"></i>
                                </button>
                            </div>

 </div>

{{--   <div class="form-group row">
                            <label for="access_category" class="col-md-4 col-form-label text-md-right">access_category</label>

                            <div class="col-md-6">
                                <input id="access_category" type="checkbox" class="form-control" name="access_category"  autocomplete="false">
                            </div>
                               @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>


                          <div class="form-group row">
                            <label for="access_weater" class="col-md-4 col-form-label text-md-right">access_weater</label>
                            <div class="col-md-6">
                                <input id="access_weater" type="checkbox" class="form-control" name="access_weater"  autocomplete="false">
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="access_type" class="col-md-4 col-form-label text-md-right">access_type</label>
                            <div class="col-md-6">
                                <input id="access_type" type="checkbox" class="form-control" name="access_type"  autocomplete="false">
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="access_buyes" class="col-md-4 col-form-label text-md-right">access_buyes</label>
                            <div class="col-md-6">
                                <input id="access_buyes" type="checkbox" class="form-control" name="access_buyes"  autocomplete="false">
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="access_resorces" class="col-md-4 col-form-label text-md-right">access_resorces</label>
                            <div class="col-md-6">
                                <input id="access_resorces" type="checkbox" class="form-control" name="access_resorces"  autocomplete="false">
                            </div>
                        </div>
                          <div class="form-group row">
                            <label for="access_sales" class="col-md-4 col-form-label text-md-right">access_sales</label>
                            <div class="col-md-6">
                                <input id="access_sales" type="checkbox" class="form-control" name="access_sales"  autocomplete="false">
                            </div>
                        </div>
                           <div class="form-group row">
                            <label for="access_acountents" class="col-md-4 col-form-label text-md-right">access_acountents</label>
                            <div class="col-md-6">
                                <input id="access_acountents" type="checkbox" class="form-control" name="access_acountents"  autocomplete="false">
                            </div>
                        </div>
                           <div class="form-group row">
                            <label for="access_reportes" class="col-md-4 col-form-label text-md-right">access_reportes</label>
                            <div class="col-md-6">
                                <input id="access_reportes" type="checkbox" class="form-control" name="access_reportes"  autocomplete="false">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div> --}}
                    </form>
                </div>
            </div>

@endsection
