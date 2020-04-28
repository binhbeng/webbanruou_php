@extends('layoutAD')
@section('ad_content')
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Rượu</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Tên Rượu</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Hình ảnh</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Giá</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Mô tả</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Giảm giá</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Loại rượu</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Nhà SX</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($booze as $key=>$b)
                  <tr>
                    <td>
                      <a href="basic_table.html#">{{$b->booze_name}}</a>
                    </td>
                    <td><img src="{{URL::to('public/upload/'.$b->booze_img)}}" height="100" width="100"></td>
                    <td class="hidden-phone">{{$b->booze_price}}</td>
                    <td class="hidden-phone">{{$b->booze_des}}</td>
                    <td class="hidden-phone">{{$b->booze_discount}}</td>
                    <td class="hidden-phone">{{$b->catalog_name}}</td>
                    <td class="hidden-phone">{{$b->producer_name}}</td>
                    <td>
                     
                      <a href="{{URL::to('/sua-booze/'.$b->booze_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="{{URL::to('/xoa-booze/'.$b->booze_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                    </td>
                  </tr>
              
                  @endforeach
                  
                </tbody>
              <div class="them" style="margin-left:600px"><a style="font-size:16px" href="{{URL::to('/them-booze')}}" class="btn btn-success btn-xs"> <i style="font-size:16px" class="fa fa-plus"></i>  Thêm mới</a></div>  
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
@endsection