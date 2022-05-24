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

                 <h2> إضافة قسم جديد</h2>
                <form action="{{route('store-new-category')}}" method="POST" class="form-add-cat">
                    @csrf
                       <div class="form-group">
                          <input type="text" name="categoryName"  id="category_name" placeholder="إسم القسم" autocomplete="off">
                          <small class="form-text text-danger small-text" style=""></small>
                          @error('categoryName')
                           <small class="form-text text-danger small-text" style="">{{$message}}</small>
                          @enderror
                       </div>

                        <button class="btn" type="submit" id="send_category_name">إرسال
                           <i class="fa fa-send"></i>
                        </button>
                     </form>

                </div>
            </div>

        </div>
        <!-- ===== End Main Content ===== -->

    </div>

    <style>
        .border-danger{
            border: 2px solid red;
        }
        .cursor-disabel{
            cursor: no-drop !important;
        }
    </style>

    <script>

     let categoryName  = document.getElementById("category_name"),
         btnCatName  = document.getElementById("send_category_name");



     categoryName.oninput = function(){

        // console.log('this.value.length => ' + this.value.length);
        if(this.value.length > 0){
            $.get('/get-category-name/' + this.value,

                        function (data, status) {
                        // if (data.message){
                            if (data.message == true) {

                                categoryName.classList.add('border-danger');
                                document.querySelector('.small-text').textContent = "هذا الاسم موجود بالفعل !!";
                            }else{
                                // btnCatName.classList.add('cursor-disabel');
                                 categoryName.classList.remove('border-danger');
                                // btnCatName.classList.remove('cursor-disabel');
                                document.querySelector('.small-text').textContent = " ";

                            }

                        // }

                        });
            }
     }

    </script>
@stop
