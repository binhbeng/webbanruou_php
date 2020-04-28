@extends('layoutAD')
@section('ad_content')
<div class="row mt">
          <div class="col-md-12">
            <div class="content-panel">
              <table class="table table-striped table-advance table-hover">
                <h4><i class="fa fa-angle-right"></i>Chi Tiết Đơn hàng</h4>
                <hr>
                <thead>
                  <tr>
                    <th>  Tên sản phẩm</th>
                    <th class="hidden-phone">Số lượng </th>
                    <th class="hidden-phone">Giá</th>
                    <th class="hidden-phone">Thành tiền</th>
     
                   
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                // $list_odd = array();
                ?>

                  @foreach($ha as $key=>$ha)
                  <tr>
                    <td>{{$ha->booze_name}}</td>
                   
                    <td class="hidden-phone">{{$ha->booze_qty}}</td>
                    <td class="hidden-phone">{{$ha->booze_price}} $</td>
                    <td class="hidden-phone">{{$ha->booze_price*$ha->booze_qty}} $</td>
                    <?php
            // $list_odd[] = $ha->booze_price*$ha->booze_qty;
            ?>
                
                  </tr>
  
              @endforeach
             <?php 
            //  $tong= array_sum($list_odd);
            // echo $tong;
            ?> 
              
                </tbody>
               
              </table>
            </div>
            <!-- /content-panel -->
          </div>
          <!-- /col-md-12 -->
        </div>
@endsection