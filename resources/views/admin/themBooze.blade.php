@extends('layoutAD')
@section('ad_content')

<h3><i class="fa fa-angle-right"></i> Thêm Rượu</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Thêm</h4>
            <div id="message"></div>
            <form class="contact-form php-mail-form" role="form" action="{{URL::to('/add-booze')}}" method="POST" enctype="multipart/form-data">
@csrf
              <div class="form-group">
                <input type="name" name="booze_name" class="form-control" id="contact-name" placeholder="Tên Rượu" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="file" name="booze_img" class="form-control" id="contact-name" placeholder="Ảnh" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="name" name="booze_price" class="form-control" id="contact-name" placeholder="Giá" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="name" name="booze_discount" class="form-control" id="contact-name" placeholder="Mức giảm giá" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>

              <div class="form-group">
                <textarea class="form-control" name="booze_des" id="contact-message" placeholder="Mô tả" rows="5" ></textarea>
                <div class="validate"></div>
              </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Loại rượu</label>
                        <select name="catalog" class="form-control input-sm m-bot15">
                        @foreach($cata as $key => $c)
                            <option value="{{$c->catalog_id}}">{{$c->catalog_name}}</option>
                        @endforeach
                            
                    </select>
                </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Nhà Sản Xuất</label>
                        <select name="producer" class="form-control input-sm m-bot15">
                        @foreach($pro as $key => $p)
                            <option value="{{$p->producer_id}}">{{$p->producer_name}}</option>
                        @endforeach
                            
                    </select>
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