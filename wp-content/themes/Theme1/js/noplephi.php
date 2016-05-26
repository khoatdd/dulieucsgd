<!-- 
	Template Name: Nop-Le-Phi
 -->
 <?php get_header(); ?>
 <?php
 	$get_ID = get_current_user_id();
	$selectid = $wpdb->get_results( 
	"
	SELECT ID
	FROM ttkd_user_truong
	WHERE ID = '$get_ID'
	"
	);
	$n = $wpdb->num_rows;
?>
sss
 <?php get_template_part('noplephi-handle'); ?>
 <?php if (!is_user_logged_in()) {
 	echo "<div class='alert alert-danger'>";
	echo "<h4>Vui lòng đăng nhập để xem được nội dung!</h4>";
	echo '<a class="btn btn-primary" href="'.wp_login_url().'" role="button">Đăng nhập</a>';
	echo "</div>";
	} elseif ($n==0) {
		echo "<div class='alert alert-danger'>";
		echo "<h4>Vui lòng cung cấp thông tin liên hệ về trường trước!</h4>";
		echo '<a class="btn btn-primary" href="'.home_url().'/thong-tin-lien-he" role="button">Cung cấp thông tin</a>';
		echo "</div>";
	} else if ($n > 0 && !isset($_POST['submit'])) { ?>
	 <form action="" method="post" role="form">
	 	<div class="form-container">
	 		<div class="panel panel-primary" id="">
				<div class="panel-heading">
				    <h3 class="panel-title">Thông báo về lệ phí tham dự hội thảo <b>"Kiểm định chất lượng giáo dục và quản lý đào tạo"</b></h3>
				</div>
				<div class="panel-body">
					<b style="font-size:16px;">
					<p>800.000 đồng/người (nộp trước ngày 9/12/2015: 700.000 đồng/người)</p>
					<p>Bao gồm: Tài liệu in ấn, CD, ăn trưa, ăn nhẹ giữa buổi.</p>
					<p>Ghi chú: </p>
					<p>- Lệ phí trên chưa bao gồm thuế GTGT 10% (vui lòng tính thêm thuế GTGT 10% khi cần xuất HĐTC)</p>
					<p>Lệ phí nộp qua tài khoản:</p>
					<p>- Tên tài khoản:  Trung tâm Kiểm định chất lượng giáo dục – ĐHQG-HCM</p>
					<p>- Số TK: 130100 01363314</p>
					<p>- Ngân hàng: Đầu tư và Phát triển Việt Nam BIDV, Chi nhánh: Sở Giao dịch 2, Tp.HCM.</p>
					</b>
				</div>
			</div>
	 		<div class="panel panel-primary" id="">
				<div class="panel-heading">
				    <h3 class="panel-title">Thông tin xuất hóa đơn</h3>
				</div>
				<div class="panel-body">
				    <div class="row">
					 	<div class="form-group col-md-4">
					 		<label for="">Tên đơn vị (để xuất hóa đơn)</label>
					 		<input type="text" name="tendonvi" class="form-control" id="" placeholder="Tên đơn vị">
					 	</div>
					 	<div class="form-group col-md-5">
					 		<label for="">Địa chỉ</label>
					 		<input type="text" name="diachi" class="form-control" id="" placeholder="Địa chỉ">
					 	</div>
					 	<div class="form-group col-md-3">
					 		<label for="">Mã số thuế</label>
					 		<input type="text" name="masothue" class="form-control" id="" placeholder="Mã số thuế">
					 	</div>
				 	</div>
				</div>
			</div>
	 	</div>
	 	<button type="submit" name="submit" class="btn btn-primary">Đăng ký</button>
	</form>
	<?php } else if ($n > 0 && $soluongdangky > 0){ get_template_part('noplephi-view');} ?>
 <?php get_footer(); ?>