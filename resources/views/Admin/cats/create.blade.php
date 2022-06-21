@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5 w-100">
<div class="d-flex justify-content-between ">

    <h3> Catagories / Create / New Catagory </h3>
    <a href="{{route('Admin.cats.index')}}" class="btn  btn-info" >Back</a>

</div>

<!-- edit catagory section -->

<style>
    .border{
      background-color:rgb(41, 182, 83);
      border-radius:14px;
      padding:80px;
      /* width:80%; */
    }
    </style>
  <form class="border w-100 my-5 col-md-6 container" method="POST" action="{{route('Admin.cats.store')}}">
    @csrf
    @include('Admin.inc.error')
    <div class=" container">
        <label for="inputEmail4" class=" text-light form-lable">Catagory Name</label>
     
      <label for="inputEmail4" class=" text-light form-lable">Catagory Name</label>
      <input type="text" name="name" value=""class="form-control" id="inputEmail4">
    <br>
      <button type="submit"  class=" container btn btn-primary">Save</button>
    </div>
  </form>
  
  <!-- end catagory section -->
  
</table>
</div>
  @endsection
