@extends('Front.layout')

@section('content')
{{-- start Header --}}
<div class="container-fluid bg-primary py-5 mb-5 page-header">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-10 text-center">
                <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center">
                        <li class="breadcrumb-item"><a class="text-white" href="{{route('Front.home')}}">HomePages</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="{}">Courses</a></li>
                        <li class="breadcrumb-item"><a class="text-white" href="#">Catagory</a></li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{$course->cat->name}}</li>
                        <li class="breadcrumb-item text-white active" aria-current="page">{{$course->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</div>
<!-- Header End -->
	<div class="container">
		<div class="card">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1">
                              <img  src="{{asset('upload/courses/'.$course->img)}} " /></div>
                        </div>
					
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$course->name}}</h3>
						<div class="rating">
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<p class="product-description">{{$course->desc}}</p>
						<h4 class="price">current price: <span>${{$course->price}}</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<h5 class="sizes">Teacher: <span class="price" style="color: rgb(12, 132, 172)" > {{$course->teatcher->name}}</span>
							
						</h5>
					
						
						 <!--Start Form-->
                      <div class="col-6 container w-100 p-3 wow fadeInUp" data-wow-delay="0.5s">
                     @include('Front.inc.error')
 
                       <form action="{{route('Front.message.enroll')}}"method="post" >
                        @csrf
                        @method('PUT')

						<div class="row  g-3">
                            <div class="col-12">
                            
                                    <h3 for="name"> Enroll Course Now</h3>
                                
                            </div>

                        <div class="row  g-3">
                            <div class="col-12">
                                <div class="form-floating">
									<input type="hidden" name="course_id" value="{{$course->id}}">
                                    <input name="name" type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input name="email" type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="form-floating">
                                    <input name="spec" type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Specialization</label>
                                </div>
                            </div>
                          			
						
                            <div class=" action col-12">
                                <button  class="btn btn-primary w-100 py-3" type="submit">Enroll Now</button>
                            </div>
                        </div>
                     </form>
                      </div>
                     </div>
     
    <!-- Form End -->

							
						
					</div>
				</div>
			</div>
		</div>
	</div>



@endsection