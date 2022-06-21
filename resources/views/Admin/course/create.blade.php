@extends('Admin.layout')

@section('content')
<style>

  
  </style>

<div class="container p-5 m-5 w-100">
<div class="d-flex justify-content-between ">

    <h3 class="tm-site-title" > Courses / Create / New Cousre </h3>
    <a href="{{route('Admin.course.index')}}" class="btn  btn-info" >Back</a>

</div>
<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Add Course</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
      
          <div class="col-xl-6 col-lg-6 col-md-12">
            <form action="{{route('Admin.course.store')}}" enctype="multipart/form-data"method="post" class="tm-edit-product-form">
             @csrf
              @include('Admin.inc.error')
              <div class="form-group mb-3">
                <label for="name" > Name </label>
                <input id="name" name="name" type="text" class="form-control validate" required />
              </div>
             
              <div class="form-group mb-3">
                <label for="category" >Category</label>
                <select name="cat_id" class="custom-select tm-select-accounts"id="category">
                   <option selected>Select Category</option>
                      @foreach ($cats as $cat)
                    <option name="cat_id" value="{{$cat->id}}">{{$cat->name}}</option>
                    
                  @endforeach
                  
                </select>
              </div>
              <div class="form-group mb-3">
                <label for="category" >Teatcher</label>
                <select name="teatcher_id"  class="custom-select tm-select-accounts"id="category">
                   <option selected>Select Tetcher</option>
                      @foreach ($teatcher as $t)
                    <option  value="{{$t->id}}">{{$t->name}}</option>
                    
                  @endforeach
                  
                </select>
              </div>
            
              <div class="form-group mb-3">
                <label for="name" >Specialization</label>
                <input id="name" name="spec" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" >Price </label>
                <input id="name" type="number" name="price" class="form-control " required />
              </div>

              
              <div class="form-group mb-3">
                <label for="description" >Description</label >
                <textarea class="form-control validate" name="desc" rows="3" required ></textarea>
              </div>
             
            
           

              
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
         
            <p>
                <input  class="btn btn-primary btn-block mx-auto" type="file"  accept="image/*" name="img" id="file"  onchange="loadFile(event)" style="display: none;">
            </p>

          <img id="output" class="tm-product-img-dummy mx-auto"  />

                
          <p>
            <label class="btn btn-primary my-5 btn-block mx-auto" for="file" style="cursor: pointer;">Upload Image</label>
          </p>

          </div>
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Course Now</button>
          </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>



<script>
var loadFile = function(event) {
	var image = document.getElementById('output');
	image.src = URL.createObjectURL(event.target.files[0]);
};
</script>
<script>

</script>
  @endsection
