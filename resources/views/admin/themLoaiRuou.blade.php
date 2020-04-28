@extends('layoutAD')
@section('ad_content')

<h3><i class="fa fa-angle-right"></i> Thêm Loại Rượu</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Thêm</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="{{URL::to('/add-catalog')}}" method="POST">
@csrf
              <div class="form-group">
                <input type="name" name="catalog_name" class="form-control" id="contact-name" placeholder="Tên Loại Rượu" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="catalog_des" id="contact-message" placeholder="Mô tả" rows="5" ></textarea>
                <div class="validate"></div>
              </div>

              <div class="loading"></div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Thêm mới</button>
              </div>

            </form>
          </div>

          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Contact Details</h4>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry"s standard dummy text ever since the 1500s. Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <ul class="contact_details">
              <li><i class="fa fa-envelope-o"></i> info@yoursite.com</li>
              <li><i class="fa fa-phone-square"></i> +34 5565 6555</li>
              <li><i class="fa fa-home"></i> Some Fine Address, 887, Madrid, Spain.</li>
            </ul>
            <!-- contact_details -->
          </div>
        </div>

        @endsection