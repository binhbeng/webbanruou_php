@extends('layout_home')
@section('home_content')

<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="">Home</a></li>
				  <li class="active">Đăng nhập</li>
				</ol>
            </div>
		<div class="container">

			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form"><!--login form-->
						<h2>Login to your account</h2>
						<form action="{{URL::to('/xuly2')}}" method="post">
							@csrf
							<input type="email" name="customer_email"placeholder="Email Address" />
							<input type="password"name="customer_password" placeholder="Password" />
							<span>
								<input type="checkbox" class="checkbox"> 
								Keep me signed in  
							</span>
                            <button type="submit" class="btn btn-default">Login</button>
                            <br>
                            <p> Nếu chưa có tài khoản ,hãy <a href="{{URL::to('/dang-ky')}}">đăng ký</a></p>
						</form>
					</div><!--/login form-->
				</div>
				
			</div>
		</div>
   
    
    @endsection