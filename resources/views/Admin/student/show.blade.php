@extends('Admin.layout')

@section('content')
    

<div class="container p-5 m-5">
<div class="d-flex justify-content-between ">

    <h3  class="tm-site-title" > Student/ Show Courses  </h3>
    
    <a href="{{route('Admin.student.index')}}" class="btn  btn-info" >Back </a>

</div>

<table class="table m-2">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">img</th>
        <th scope="col">name</th>
        <th scope="col  ">Spec</th>
     
        
      </tr>
    </thead>
    <tbody>
    
      @foreach ($data as $d )
              
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td><img class="rounded" src="{{asset('upload/courses/'.$d->img)}} " height="90px" alt=""></td>
        <td >{{$d->name}} </td>
        <td>{{$d->spec}}</td>
      </tr>
 
      @endforeach
     
    </tbody>
    
</table>

{{-- <div class=" p-2 d-flex  w-100  justify-content-center"  data-wow-delay="0.3s">
 
 {!! $data->render()!!}
</div> --}}

</div>


  @endsection
