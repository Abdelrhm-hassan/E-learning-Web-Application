@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
<div class="d-flex justify-content-between ">

    <h3  class="tm-site-title" > Course  </h3>
    
    <a href="{{route('Admin.course.create')}}" class="btn  btn-info" >Add course</a>

</div>

<table class="table m-2 ">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">img</th>
        <th scope="col">name</th>
        <th scope="col">Catagory</th>
        <th scope="col">course</th>
        <th scope="col">Spec</th>
        <th scope="col">info</th>
        <th scope="col">Price</th>
        <th scope="col- "></th>
        <th scope="col ">Action</th>
        
      </tr>
    </thead>
    <tbody>
    
      @foreach ($data as $d )
              
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td><img class="rounded-circle" src="{{asset('upload/courses/'.$d->img)}} " height="60px" alt=""></td>
        <td >{{$d->name}} </td>
        <td>{{$d->cat->name}}</td>
        <td>{{$d->teatcher->name}}</td>
        <td>{{$d->spec}}</td>
        <td>{{$d->desc}}</td>
        <td>{{$d->price}}$</td>
        <td><a href="{{route('Admin.course.edit',$d->id)}}" name="edit" class="btn btn-info"> Edit</a></td>
        <td><a href="{{route('Admin.course.delete',$d->id)}}"name ="delete" class="btn btn-danger">Delete</a></td>
      </tr>
 
      @endforeach
     
    </tbody>
    
</table>

<div class=" p-2 d-flex  w-100  justify-content-center"  data-wow-delay="0.3s">
 
 {!! $data->render()!!}
</div>

</div>


  @endsection
