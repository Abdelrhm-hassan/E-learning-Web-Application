
@if ($errors->any())
<ul class="list unstyled alert alert-danger">
@foreach ($errors->all() as $error)
<li> {{$error}} </li>
    
@endforeach
</ul>
    
{{-- @else
<ul class="list unstyled alert alert-success">
    <li> Send Successfuly  </li>
</ul> --}}

    
@endif