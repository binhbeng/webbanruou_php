@extends('layoutAD')
@section('ad_content')
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Đơn hàng</h4>
                <h4 style="color:green; margin-left:40px"> Gợi ý:Bấm vào tên khách hàng để xem chi tiết</h4>
                <hr>
                <thead>
                  <tr>
                    <th>  Khách hàng</th>
                    
                    <th class="hidden-phone">SĐT </th>
                    <th class="hidden-phone">Địa chỉ</th>
                    <th class="hidden-phone">Ghi chú</th>
                    <th class="hidden-phone">Ngày tạo</th>
                    <th class="hidden-phone">Tình trạng</th>
                   
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($hi as $key=>$hi)
                  <tr>
                    <td>
                    <form action="{{URL::to('/status')}}" method="post">
                    @csrf
                    <input type="hidden" name="info_id" value="{{$hi->info_id}}">
                    <a href="{{URL::to('/chitiethoadon/'.$hi->info_id)}}">{{$hi->info_name}}</a>
                    </td>
                   
                    <td class="hidden-phone">{{$hi->info_phone}}</td>
                    <td class="hidden-phone">{{$hi->info_address}}</td>
                    <td class="hidden-phone">{{$hi->info_notes}}</td>
                    <td class="hidden-phone">{{$hi->created_at}}</td>
                  
                
                  
                     <td class="hidden-phone">  <select name="status" >
										
										<option selected value="{{$hi->status}}">{{$hi->status}}</option>
										<option value="Đang giao">Đang giao</option>
                    <option value="Chưa xủ lý">Chưa xủ lý</option>
										<option value="Đã xong">Đã xong</option>
									
									</select>
                         <input type="submit" value="Cập nhật">
                    </td>
                
                 <div>
                 
                  </tr>
                  
                  </form>
              @endforeach
             
              
                </tbody>
               
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
@endsection