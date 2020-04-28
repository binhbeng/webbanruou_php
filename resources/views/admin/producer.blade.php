@extends('layoutAD')
@section('ad_content')
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Nhà Sản Xuất</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Nhà sản xuất</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Địa chỉ</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Mô tả</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pro as $key=>$p)
                  <tr>
                    <td>
                      <a href="basic_table.html#">{{$p->producer_name}}</a>
                    </td>
                    <td class="hidden-phone">{{$p->producer_address}}</td>
                    <td class="hidden-phone">{{$p->producer_des}}</td>
                    <td>

                      <a href="{{URL::to('/sua-producer/'.$p->producer_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="{{URL::to('/xoa-producer/'.$p->producer_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                    </td>
                  </tr>
              
                  @endforeach
                </tbody>
                <div class="them" style="margin-left:605px"><a style="font-size:16px" href="{{URL::to('/them-producer')}}" class="btn btn-success btn-xs"> <i style="font-size:16px" class="fa fa-plus"></i>  Thêm mới</a></div> 
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
@endsection