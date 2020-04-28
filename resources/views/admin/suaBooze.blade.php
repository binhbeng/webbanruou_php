@extends('layoutAD')
@section('ad_content')

<h3><i class="fa fa-angle-right"></i> Sửa Rượu</h3>
        <!-- BASIC FORM ELELEMNTS -->
        <div class="row mt">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <h4 class="title">Sửa</h4>
            <div id="message"></div>
            @foreach($edit as $key=>$edit)
            <form class="contact-form php-mail-form" role="form" action="{{URL::to('/edit-booze/'.$edit->booze_id)}}" method="POST" enctype="multipart/form-data">
@csrf
              <div class="form-group">
              <label for="exampleInputPassword1">Tên rượu</label>
                <input type="name" name="booze_name" value="{{$edit->booze_name}}" class="form-control" id="contact-name" placeholder="Tên Rượu" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
              <label for="exampleInputPassword1">Hình ảnh</label>
                <input type="file" name="booze_img" value="{{$edit->booze_img}}" class=" form-control" id="contact-name" placeholder="Ảnh" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <img src="{{URL::to('public/upload/'.$edit->booze_img)}}" alt="" height="100" width="100">
                <div class="validate"></div>
              </div>
              <div class="form-group">
              <label for="exampleInputPassword1">Giá</label>
                <input type="name" name="booze_price" value="{{$edit->booze_price}}" class="form-control" id="contact-name" placeholder="Giá" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>
              <div class="form-group">
              <label for="exampleInputPassword1">Mức giảm giá</label>
                <input type="name" name="booze_discount" value="{{$edit->booze_discount}}" class="form-control" id="contact-name" placeholder="Mức giảm giá" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                <div class="validate"></div>
              </div>

              <div class="form-group">
              <label for="exampleInputPassword1">Chi tiết</label>
                <textarea class="form-control" name="booze_des"  id="contact-message" placeholder="Mô tả" rows="5" >{{$edit->booze_des}}</textarea>
                <div class="validate"></div>
              </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Loại rượu</label>
                        <select name="catalog" class="form-control input-sm m-bot15">
                        @foreach($cata as $key => $c)
                            @if($c->catalog_id=$edit->catalog_id)
                            <option selected value="{{$c->catalog_id}}">{{$c->catalog_name}}</option>
                            @else
                            <option value="{{$c->catalog_id}}">{{$c->catalog_name}}</option>
                            @endif
                        @endforeach
                            
                    </select>
                </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Nhà Sản Xuất</label>
                        <select name="producer" class="form-control input-sm m-bot15">
                        @foreach($pro as $key => $p)
                        @if($p->producer_id=$edit->producer_id)
                            <option selected value="{{$p->producer_id}}">{{$p->producer_name}}</option>
                            @else
                            <option value="{{$p->producer_id}}">{{$p->producer_name}}</option>
                            @endif
                        @endforeach
                            
                    </select>
                </div>
              <div class="loading"></div>

              <div class="form-send">
                <button type="submit" class="btn btn-large btn-primary">Lưu Lại</button>
              </div>

            </form>
            @endforeach
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