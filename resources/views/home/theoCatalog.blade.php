@extends('layout_home')
@section('home_content')

					<div class="features_items"><!--features_items-->
					@foreach($cta as $key=>$cta)
						<h2 class="title text-center">{{$cta->catalog_name}}</h2>
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
									
								</div>
								</a>
								<div class="choose">
									
								</div>
							</div>
                        </div>
                        @endforeach
						
					</div><!--features_items-->
					
					
					
					<!-- <div class="recommended_items">
						<h2 class="title text-center">Sản phẩm đề xuất</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									
									
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="images/home/recommend3.jpg" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>
							 <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
								<i class="fa fa-angle-left"></i>
							  </a>
							  <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
								<i class="fa fa-angle-right"></i>
							  </a>			
						</div>
					</div> -->
@endsection