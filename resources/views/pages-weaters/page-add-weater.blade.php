@extends('layoutes.master')
@section('MyContent')

            <div class="sub-content">
                <div class="weater-content">

                @if (Session::has('success'))
                    <div class="content-alert">
                        <div class="alert alert-success ">
                          <strong >  {{Session::get('success')}}   </strong>
                        </div>
                    </div>
                @endif

                 <h2> إضافة ويتر جديد</h2>
                <form action="{{route('store-new-weater')}}" method="POST" class="form-add-weater">
                    @csrf
                       <div class="form-group">
                          <input type="text" name="weater_name" placeholder="إسم ويتر">
                          @error('weater_name')
                           <small class="form-text text-danger" style="">{{$message}}</small>
                          @enderror
                       </div>

                        <button class="btn" type="submit">إرسال
                           <i class="fa fa-send"></i>
                        </button>
                     </form>
                </div>
            </div>

        </div>
        <!-- ===== End Main Content ===== -->

    </div>
@stop
