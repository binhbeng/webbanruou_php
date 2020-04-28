@extends('layoutAD')
@section('ad_content')
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i> Loại Rượu</h4>
                <hr>
                <thead>
                  <tr>
                    <th><i class="fa fa-bullhorn"></i> Loại Rượu</th>
                    <th class="hidden-phone"><i class="fa fa-question-circle"></i> Mô tả</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($loai as $key=>$l)
                  <tr>
                    <td>
                      <a href="basic_table.html#">{{$l->catalog_name}}</a>
                    </td>
                    <td class="hidden-phone">{{$l->catalog_des}}</td>
                    <td>
                      
                      <a href="{{URL::to('/sua-loai-ruou/'.$l->catalog_id)}}" class="btn btn-primary btn-xs"><i class="fa fa-pencil"></i></a>
                      <a href="{{URL::to('/xoa-loai-ruou/'.$l->catalog_id)}}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></a>
                    </td>
                  </tr>
              
                  @endforeach
                </tbody>
                <div class="them" style="margin-left:605px"><a style="font-size:16px" href="{{URL::to('/them-loai-ruou')}}" class="btn btn-success btn-xs"> <i style="font-size:16px" class="fa fa-plus"></i>  Thêm mới</a></div> 
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
@endsection