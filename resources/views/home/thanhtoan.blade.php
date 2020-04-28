@extends('layout_home')
@section('home_content')

<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Thanh Toán</li>
				</ol>
            </div>
<div class="register-req">
				<p>Please use Register And Checkout to easily get access to your order history, or use Checkout as Guest</p>
			</div>

			<div class="shopper-informations">
				<div class="row">
					
					<div class="col-sm-4 ">
						<div class="bill-to">
							<p>Thông tin gửi hàng</p>
							<div class="form-one">
								<form action="{{URL::to('/info')}}" method="post">
								@csrf
								<?php
									$customer_id=Session::get('customer_id');
									
								?>
									<input type="text" name="info_name" placeholder="Name *">
									<input type="text"name="info_address" placeholder="Address *">
									<input type="text" name="info_phone"placeholder="Phone *">
									<input type="hidden" name="customer_id" value="{{$customer_id}}">
									
								
							</div>
							 
						</div>
					</div>
					<div class="col-sm-4 clearfix">
						<div class="bill-to">
							<p>Hình thức thanh toán</p>
							<div class="form-one">
								
							</div>
							<div class="form-two">
								
									
									<select name="payment" class="form-control ">
										
										<option selected value="1">Thanh toán tiền mặt</option>
										<option value="2">Vẫn thanh toán tiền mặt</option>
										<option value="3">Như trên</option>
									
									</select>
									
								
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="order-message">
							<p>Ghi chú</p>
							<textarea name="info_notes"  placeholder="Để lại lời nhắn cho cửa hàng" rows="8"></textarea>
						
						</div>	
					</div>
									
				</div>
				<button type="submit" class="btn btn-success">Gửi</button>
				</form>		
            </div>
            @endsection