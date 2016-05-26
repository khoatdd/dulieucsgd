<!-- 
	Template Name: Lay-loai-hinh
 -->
<?php
	$loaihinh = $_GET["loaihinh"];  
		if ($loaihinh=='') {
			echo '<option value="0">Chọn trường</option>';
		} else {
			$lenh = $wpdb->get_results("SELECT TenTruong FROM ttkd_danhsachtruong WHERE LoaiHinh_VT='$loaihinh'",ARRAY_N);
	 			foreach ($lenh as $data) {
				echo '<option value="'.$data[0].'">'.$data[0].'</option>';
			  }
		}
	
?>
