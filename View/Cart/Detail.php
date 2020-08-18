
<section id="cart_items" >
		<div class="container">
			<div class="table cart_info" >
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu" style ="background-color : #337ab7">
							<td style = "color : white">Tên sản phẩm</td>
							<td style = "color : white">Ảnh</td>
							<td style = "color : white">Giá</td>
							<td style = "color : white">Số lượng</td>
                            <td style = "color : white">Total</td>
                            <th class="product-remove">Xoá</th>
						</tr>
                       

                    
<?php
$sum=0;

    foreach($_SESSION["MyCart"] as $key=>$val){
        $row=$pro->GetProductByID($key);
        $sum+=$val*$row["GiaBan"];
        $totaldon = $val*$row["GiaBan"];
        $valtang = $val+1;
        $valgiam = $val-1;
        $chuoi = <<<EDO
        <tr>
            <td class="cart_description">
                <h4><a href="">{$row['TenSP']}</a></h4>
                <!-- <p>Web ID: 1089772</p> -->
            </td>
            <td class="cart_product">
                <a href=""><img style ="height : 60px" src="hinhsp/$row[Hinh]" alt=""></a>
            </td>
            <td class="cart_price">
                <p>{$row['GiaBan']}</p>
            </td>
            <td class="cart_quantity">
                <div class="cart_quantity_button">
                    <a class="cart_quantity_up" href="index.php?mod=cart&act=DownItem&id={$key}&quantity={$valgiam}"> - </a>
                    <input class="cart_quantity_input" type="text" name="quantity" value="{$val}" autocomplete="off" size="2">
                    <a class="cart_quantity_down" href="index.php?mod=cart&act=UpItem&&id={$key}&quantity={$valtang}"> + </a>
                </div>
            </td>
            <td class="cart_total">
                <p class="cart_total_price">{$totaldon}</p>
            </td>
            <td class="cart_delete">
                <a class="cart_quantity_delete" href="index.php?mod=cart&act=delete&CT=1&id=$key" onclick="return IsDelete()"><i class="fa fa-times"></i></a>
            </td>
        </tr>
EDO;
    echo $chuoi;
    }

?>
                                          <tr >
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Tổng giỏ hàng</td>
                                            <td><span><?php echo number_format($sum,0);?>đ</span></td>
                                            <td></td>
                                        </tr>

                                        <tr >
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Phí ship</td>
                                            <td>Free shipping</td>
                                            <td></td>
                                        </tr>

                                        <tr >
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td>Tổng tiền</td>
                                            <td><strong><span ><?php echo number_format($sum,0);?>đ</span></strong> </td>
                                            <td><a type ="button" class="btn btn-success" data-toggle="modal" data-target="#modaltotal"> Đặt Hàng </a></td>
                                        </tr>
                      

					
					</tbody>
				</table>
			</div>
		</div>
	</section> <!--/#cart_items-->

    <!-- Modal Total --><div class="modal fade" id="modaltotal" tabindex="-1" role="dialog" aria-labelledby="modaltotal"
		aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;</button>
                        <h4 class="modal-title" style ="text-align:center" id="myModalLabel">Dưới Đây Là Hóa Đơn Của Khách Hàng <?php echo "<strong>{$_SESSION['hoten']}</strong>"; ?></h4>
				</div>
				<div class="modal-body modal-body-sub">
					<div class="row">
						<div class="col-md-7 modal_body_left modal_body_left1" style="border-right: 1px dotted #C2C2C2;padding-right:3em;">
							<div class="sap_tabs">	
								<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
							
									<table class="table table-bordered">
									<tr>
												<td height="35" colspan="2" align="center" class="tieude"><div align="center" style="font-size:18px; font-weight:bolder; line-height:35px; color:black">XÁC NHẬN THÔNG TIN</div></td>
											</tr>
									<form action="index.php?mod=Order&act=Them" method="post" class="form" enctype="multipart/form-data">
									<tr>
									<tr>
										<td style="padding-left:80px" height="30">Tên khách hàng:</td>
										<td><input readonly type="text" name="txtTenKH" id="txtTenKH" value="<?php echo $_SESSION['hoten']; ?>"/></td>
									</tr>
									<tr>
									<tr>
										<td style="padding-left:80px" height="30" >Nơi giao:</td>
										<td><input required type="text" name="txtNoiGiao" id="txtNoiGiao"/></td>
									</tr>
									<tr>
										<td class="ketthuc" colspan="2" height="35" align="center">
										<input class="button1" type="submit" name="btnChange" id="btnChange" value="Đặt hàng">
										</td>
									</tr>
									</form>
									</table>
									</div>
								</div>	
					
							
							<div id="OR" class="hidden-xs">-></div>
						</div>
						<div class="col-md-5 modal_body_right modal_body_right1">
							<div class="row text-center sign-with">
				
								<div class="col-md-12">
								<br>
								<br>
								<br>
								<h4 class="modal-title" style ="text-align:center" >Tổng Tiền Của Hóa Đơn </h4>
								<h4 class="modal-title" style ="text-align:center" ><?php echo number_format($sum,0);?> VND </h4>
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
    <!-- End Modal Total -->
       
                            