@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
<div class="d-flex justify-content-between ">

    <h3> Catagories / Delete / {{$cats->name}} </h3>
    <a href="{{route('Admin.cats.index')}}" class="btn  btn-info" >Back</a>
     


</div>
        <div class="container p-5">
          <h3 class="text text-danger " >Do You Want To Delete {{$cats->name}} Catagory </h3>

        </div>


<!-- edit catagory section -->

<style>
    .border{
      background-color:rgb(41, 182, 83);
      border-radius:14px;
      padding:80px;
      width:80%;
    }
    </style>
<form class="border w-100 my-5 col-md-6 container" method="POST" action="{{ route('Admin.cats.dodelete') }}">
    @csrf
    @include('Admin.inc.error')
    <div class=" container">
        <input type="text" name="id" value="{{$cats->id}}"class="form-control" id="inputEmail4" hidden >
     
      <label for="inputEmail4" class=" text-light form-lable">Catagory Name</label>
      <input type="text" name="name" value="{{$cats->name}}"class="form-control" id="inputEmail4">
    <br>
      <button type="submit"  class=" container btn btn-primary">Save</button>
    </div>
  </form>
  
  <!-- end catagory section -->
  
</div>
  @endsection
