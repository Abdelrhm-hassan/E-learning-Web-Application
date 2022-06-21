@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
<div class="d-flex justify-content-between ">

    <h3> Catagories </h3>
    
    <a href="{{route('Admin.cats.create')}}" class="btn  btn-info" >Add Catagory</a>

</div>

<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Catagory Name</th>
        <th scope="col">Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      @foreach ($cats as $cat )
              
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$cat->name}}</td>
        <td><a href="{{route('Admin.cats.edit',$cat->id)}}" name="edit" class="btn btn-info"> Edit</a></td>
        <td><a href="{{route('Admin.cats.delete',$cat->id)}}"name ="delete" class="btn btn-danger">Delete</a></td>
      </tr>
 
      @endforeach
    
    </tbody>
    
</table>
<div class=" p-2 d-flex  w-100  justify-content-center"  data-wow-delay="0.3s">
 
  {!! $cats->render()!!}
 </div>
</div>
  @endsection
