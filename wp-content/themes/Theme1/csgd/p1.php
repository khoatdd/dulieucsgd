<div class="panel panel-primary">
  	<div class="panel-heading">
   		<h2 class="panel-title">I Thông tin chung của trường</h2>
 	</div>
  	<div class="panel-body">
    	<form action="" method="POST" class="form-horizontal" role="form">
    		<table class="table table-hover">
    			<tbody>
    				<tr>
    					<td style="text-align:left" colspan="2" class="col-md-3"><b>1. Tên đầy đủ của trường</b></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle;" class="col-md-3">Tên tiếng Việt</td>
    					<td ><input type="text" class="form-control col-md-9" name ="I1a"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle;" class="col-md-3">Tên tiếng Anh</td>
    					<td ><input type="text" class="form-control col-md-9" name ="I1b"></td>
    				</tr>
    				<tr>
    					<td style="text-align:left" colspan="2" class="col-md-3"><b>2. Tên viết tắt của trường</b></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle;" class="col-md-3">Tên tiếng Việt</td>
    					<td ><input type="text" class="form-control col-md-9" name="I2a"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle;" class="col-md-3">Tên tiếng Anh</td>
    					<td ><input type="text" class="form-control col-md-9" name="I2b"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle; text-align:left" class="col-md-3"><b>3. Tên trước đây (nếu có)</b></td>
    					<td ><input type="text" class="form-control col-md-9" name="I3"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle; text-align:left" class="col-md-3"><b>4. Cơ quan/Bộ chủ quản</b></td>
    					<td ><input type="text" class="form-control col-md-9" name="I4"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle; text-align:left" class="col-md-3"><b>5. Địa chỉ trường</b></td>
    					<td ><input type="text" class="form-control col-md-9" name="I5"></td>
    				</tr>
    				<tr>
    					<td style="text-align:left" colspan="2" class="col-md-3"><b>6. Thông tin liên hệ</b></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle;" class="col-md-3">Điện thoại</td>
    					<td ><input type="text" class="form-control col-md-9" name="I6a"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle;" class="col-md-3">Fax</td>
    					<td ><input type="text" class="form-control col-md-9" name="I6b"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle;" class="col-md-3">Email</td>
    					<td ><input type="text" class="form-control col-md-9" name="I6c"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle;" class="col-md-3">Website</td>
    					<td ><input type="text" class="form-control col-md-9" name="I6d"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle; text-align:left" class="col-md-3"><b>7. Năm thành lập trường</b></td>
    					<td ><input type="text" class="form-control col-md-9" name="I7"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle; text-align:left" class="col-md-3"><b>8. Thời gian bắt đầu đào tạo khóa I</b></td>
    					<td ><input type="text" class="form-control col-md-9" name="I8"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle; text-align:left" class="col-md-3"><b>9. Thời gian cấp bằng tốt nghiệp cho khóa I</b></td>
    					<td ><input type="text" class="form-control col-md-9" name="I9"></td>
    				</tr>
    				<tr>
    					<td style="vertical-align:middle; text-align:left" class="col-md-2"><b>10. Loại hình trường đào tạo</b></td>
    					<td style="vertical-align:middle; text-align:left" class="col-md-9" >
    						<div class="radio">
    								<div class="row">
    									<div class="col-md-2"><input type="radio" name="I10" value="CongLap"> Công lập</div>
    									<div class="col-md-2"><input type="radio" name="I10" value="BanCong"> Bán công</div>
    									<div class="col-md-2"><input type="radio" name="I10" value="DanLap"> Dân lập</div>
    									<div class="col-md-2"><input type="radio" name="I10" value="TuThuc"> Tư thục</div>
    									<div class="col-md-2"><input type="radio" name="I10" value="Khac"> Khác (ghi rõ)</div>
    									<div class="col-md-2"><input type="text" class="form-control" name="I10_khac"></div>
    								</div>
    						</div>
    					</td>
    				</tr>
    			</tbody>
    		</table>
            <input type="submit" name="submit_trang1" value="Cập nhật" class="btn btn-primary">
		</form>
  	</div>
</div>
<?php get_template_part('csgd/pagination'); ?>