@extends('layoutes.master')
@section('MyContent')

            <div class="sub-content">
                <div class="cat-content">

                @if (Session::has('success'))
                    <div class="content-alert">
                        <div class="alert alert-success ">
                          <strong >  {{Session::get('success')}}   </strong>
                        </div>
                    </div>
                @endif

                 <h2> تحديث بيانات قسم </h2>
                <form action="{{route('update-category',$category->id)}}" method="POST" class="form-add-cat">
                     @csrf
                      @method('PUT')
                       <div class="form-group">
                       <input type="text" name="categoryName" value="{{$category->category_name}}" placeholder="إسم القسم">
                          @error('categoryName')
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
