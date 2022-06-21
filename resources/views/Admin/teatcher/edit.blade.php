@extends('Admin.layout')

@section('content')
<style>

  
  </style>

<div class="container p-5 m-5 w-100">
<div class="d-flex justify-content-between ">

    <h3 class="tm-site-title" > Catagories / Create / New Catagory </h3>
    <a href="{{route('Admin.teatcher.index')}}" class="btn  btn-info" >Back</a>

</div>
<div class="container tm-mt-big tm-mb-big">
  <div class="row">
    <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
      <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
        <div class="row">
          <div class="col-12">
            <h2 class="tm-block-title d-inline-block">Edit Teatcher</h2>
          </div>
        </div>
        <div class="row tm-edit-product-row">
      
          <div class="col-xl-6 col-lg-6 col-md-12">
            <form action="{{route('Admin.teatcher.update')}}" enctype="multipart/form-data"method="post" class="tm-edit-product-form">
             @csrf
              @include('Admin.inc.error')
              <div class="form-group mb-3">
                <label for="name" > Name </label>
                <input type="hidden" name="id" value="{{$data->id}}" >
                <input id="name" name="name" value="{{$data->name}}" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" >Email </label>
                <input id="name" name="email" value="{{$data->email}}" type="text" class="form-control " required />
              </div>
              <div class="form-group mb-3">
                <label for="name" > Phone </label>
                <input id="name" name="phone" value="{{$data->phone}}" type="text" class="form-control validate" required />
              </div>
              <div class="form-group mb-3">
                <label for="name" >Specialization</label>
                <input id="name" name="spec" type="text" value="{{$data->spec}}" class="form-control validate" required />
              </div>
              
              <div class="form-group mb-3">
                <label for="description" >Description</label >
                <textarea class="form-control validate" name="desc"  rows="3" required >{{$data->desc}}</textarea>
              </div>
             
           
              
          </div>
          <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
            <img  src="{{asset('upload/teatchers/'.$data->img)}}" class="tm-product-img-dummy mx-auto"  />
         
            <label  class="btn btn-primary my-5 btn-block mx-auto">The Old Image</label>


            <p>
                <input  class="btn btn-primary btn-block mx-auto" type="file" value="{{$data->img}}"  accept="image/*" name="img" id="file"  onchange="loadFile(event)" style="display: none;">
            </p>

          <img id="output"  class="tm-product-img-dummy mx-auto"  />

                
          <p>
            <label class="btn btn-primary my-5 btn-block mx-auto" for="file" style="cursor: pointer;">Upload New Image</label>
          </p>

          </div>
          
          <div class="col-12">
            <button type="submit" class="btn btn-primary btn-block text-uppercase">Add Teatcher Now</button>
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
