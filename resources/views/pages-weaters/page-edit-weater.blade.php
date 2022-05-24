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
                <form action="{{route('update-weater',$weater->id)}}" method="POST" class="form-add-weater">
                    @csrf
                    @method('PUT')
                       <div class="form-group">
                       <input type="text" name="weater_name" placeholder="إسم ويتر" value="{{$weater->weater_name}}">
                          @error('weater_name')
                           <small class="form-text text-danger" style="">{{$message}}</small>
                          @enderror
                       </div>

                        <button class="btn" type="submit">تحديث
                           <i class="fa fa-refresh"></i>
                        </button>
                     </form>
                </div>
            </div>

        </div>
        <!-- ===== End Main Content ===== -->

    </div>
@stop
