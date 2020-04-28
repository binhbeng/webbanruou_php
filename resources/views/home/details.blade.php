@extends('layout_home')
@section('home_content')


<div class="product-details"><!--product-details-->
@foreach($booze as $key =>$b)
						<div class="col-sm-5">
							<div class="view-product">
								<img src="{{URL::to('/public/upload/'.$b->booze_img)}}"  alt="" />
								
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
								
								  <!-- Wrapper for slides -->
								    <div class="carousel-inner">	
									</div>

								  <!-- Controls -->

							</div>

						</div>
						<div class="col-sm-7">
						<form> 
						@csrf
							<div class="product-information"><!--/product-information-->
							
                                <h2>{{$b->booze_name}}</h2>
                                <p><b>Thương Hiệu:</b> {{$b->producer_name}}</p>
								<p><b>Loại Rượu:</b> {{$b->catalog_name}}</p>
                                
								<span>
									<span>{{number_format($b->booze_price)}} $</span>
									<label>Quantity:</label>
									<input name="qty" class="cart-qty" type="number" min="1"value="1" />
									<input type="hidden" name="booze_id_hidden" value="{{$b->booze_id}}" />
								<!-- cap nhat vao gio nhung de hidden -->
									<!-- <input type="hidden" class="sl" type="number" min="1" value="1"/> -->
									<input type="hidden" class="cart_id_{{$b->booze_id}}" name="ha" value="{{$b->booze_id}}" />
									<input type="hidden" class="cart_name_{{$b->booze_id}}" name="hi" type="hidden" value="{{$b->booze_name}}"/>
									<input type="hidden" class="cart-price-{{$b->booze_id}}" type="hidden" value="{{$b->booze_price}}"/>
									<input type="hidden" class="cart-img-{{$b->booze_id}}"  type="hidden" value="{{$b->booze_img}}"/>

									<button type="button" data-id_b="{{$b->booze_id}}" class="btn btn-fefault cart gio-hang-ajax">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</button>
								</span>	
								</form> 
                                <p><b>Mô tả:</b> {{$b->booze_des}}</p>
						
								<a href=""><img src="{{URL::to('/Eshopper/images/product-details/share.png')}}" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
							
						</div>
                    </div><!--/product-details-->
                    @endforeach
					
	
					<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

					<script type="text/javascript">
					$(document).ready(function(){
					$(".gio-hang-ajax").click(function(){
					
						 var id= $(this).data('id_b');
						 var cart_name=$('.cart_name_' + id).val();
						 var cart_id=$('.cart_id_' + id).val();
						var gia=$('.cart-price-' + id).val();
						var hinhanh=$('.cart-img-' + id).val();
						  var _token=$('input[name="_token"]').val();
						  var soluong=$('.cart-qty').val()
						
						$.ajax({
							url: '{{url('/add-cart-ajax')}}',
							method:'POST',
							data:{
								cart_name:cart_name,
								cart_id:cart_id,
								gia:gia,
								hinhanh:hinhanh,
								_token:_token,
								soluong:soluong
							},
							success:function(){
								alert("Đã thêm vào giỏ");
							}
						});
					});
					});
					</script>

     	<!--recommended_items-->
                    <!-- <div class="recommended_items">
				
						<h2 class="title text-center">recommended items</h2>
						
						<div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									@foreach($goiy as $key=>$g)
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="{{URL::to('/public/upload/'.$g->booze_img)}}" height="250px" alt="" />
													<h2>{{number_format($g->booze_price)}} $</h2>
													<p>{{$g->booze_name}}</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
                                    </div>
                                    @endforeach
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
					<!--/recommended_items-->               
@endsection