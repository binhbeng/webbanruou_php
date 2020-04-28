@extends('layout_home')
@section('home_content')		
<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Giỏ hàng</li>
				</ol>
            </div>
				<section id="cart_items">
			
		<div class="container">
			
            
            <?php
          
			?>
			<div class="row">
			<div class="table-responsive cart_info col-sm-9">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
                        <td class="image">Hình ảnh</td>
							<td class="name">Tên sản phẩm</td>
							<td class="price">Giá</td>
							<td class="quantity">Số lượng</td>
							<td class="total">Tổng tiền</td>
							
						</tr>
					</thead>
					<tbody>
                    <?php
                    $tong=0;
                        ?>
@if(Session::get('cart')==true)
                    @foreach(Session::get('cart') as $key=>$ca)
						<tr>
            <?php 
            $tongtien=$ca['soluong']*$ca['gia'];
            $tong+=$tongtien;
            ?>
							<td class="cart_product">
								<a href=""><img src="{{URL::to('/public/upload/'.$ca['hinhanh'])}}" width="20%" height="20%"  alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$ca['cart_name']}}</a></h4>
							
							</td>
							<td class="cart_price">
								<p>{{number_format($ca['gia'])}} $</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
									<a class="cart_quantity_up" href=""> + </a>
									<input class="cart_quantity_input" type="text" name="quantity" value="{{$ca['soluong']}}" autocomplete="off" size="2">
									<a class="cart_quantity_down" href=""> - </a>
								</div>
							</td>
							<td class="cart_total">
                                <?php 
                                 
                                 echo number_format($tongtien).' $';
                                ?>
                                
                                <p class="cart_total_price">


                                </p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="{{URL::to('/xoa-cart-ajax/'.$ca['session_id'])}}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
                        
						@endforeach
                        </tr>
						@else
		   <?php echo '' ?>  
           @endif      
		    
					</tbody>
				</table>
			</div>
		</div>
		</div>
    </section> <!--/#cart_items-->
    <section id="do_action">
		<div class="container">
			
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							
							<li>Thuế <span>$0</span></li>
							<li>Shipping Cost <span>Free</span></li>
							<li>Thành tiền <span>
                            <?php  
                                 echo number_format($tong).' $';
                                ?>
                                </span></li>
						</ul>
                        
						<?php
									$customer_id=Session::get('customer_id');
									if($customer_id){
										?>	
										
										<a class="btn btn-default check_out" href="{{URL::to('/thanhtoan')}}">Thanh toán</a>
										<?php	
									}
									
									else {
										?>
									<a href="{{URL::to('/dang-nhap2')}}" class="btn btn-default check_out"> Đăng nhập</a>
										<?php	
									}
								
								?>

					</div>
				</div>
			</div>
		</div>
	</section><!--/#do_action-->

				</div>
			</div>
		</div>
	</section>
	
	@endsection