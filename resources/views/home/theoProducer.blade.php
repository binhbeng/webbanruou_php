@extends('layout_home')
@section('home_content')


					<div class="features_items"><!--features_items-->
                    @foreach($pp as $key =>$pp)
						<h2 class="title text-center">{{$pp->producer_name}}</h2>
                        @endforeach
						@foreach($booze as $key =>$b)
							<div class="col-sm-4">
							<a href="{{URL::to('/details/'.$b->booze_id)}}">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="{{URL::to('public/upload/'.$b->booze_img)}}" height="230px" width="150px" alt="" />
										<h2>{{$b->booze_price}} Gold</h2>
										<p>{{$b->booze_name}}</p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Xem Chi Tiết</a>
									</div>
									</a>
								</div>
								<div class="choose">
									
								</div>
							</div>
                        </div>
                        @endforeach
						
					</div><!--features_items-->
					
@endsection