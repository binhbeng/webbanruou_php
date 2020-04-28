@extends('layout_home')
@section('home_content')
<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Thanks you</li>
				</ol>
            </div>
<h3>Sản phẩm của bạn đã đặt hàng thành công </h3>
<a   style="font-size:20px" href="{{URL::to('/home')}}">Quay lại trang chủ</a>

@endsection