<?php 
	$select = $wpdb->get_results("SELECT ID,I1a FROM csgd_i_thongtinchung",ARRAY_N);
	$n = $wpdb->num_rows;
?>
<div class="panel panel-primary">
	<div class="panel-heading">
   		<h2 class="panel-title">Danh dách trường</h2>
 	</div>
	<div class="panel-body">
		<?php if ($n > 0): ?>
			<table class="table table-striped table-hover">
   			<thead>
   				<tr>
   					<th>#</th>
   					<th>Tên đơn vị</th>
   				</tr>
   			</thead>
   			<tbody>
			    <?php $stt=1;?>
			   	<?php foreach ($select as $data): ?>
	   				<tr>
	   					<td><?php echo $stt; ?></td>
	   					<td><a href="<?php echo home_url().'/thong-tin-csgd/?act=update&ID='.$data[0].'&trang=1&status=new'; ?>"><?php echo $data[1]; ?></a></td>
	   				</tr>
			   	<?php $stt++; endforeach ?>
	    	</tbody>
			</table>
			<?php else: ?>
				<p>Chưa có dữ liệu</p>
			<?php endif ?>
			<form action="" method="get">
				<input type="hidden" name="act" value="insert">
				<input type="hidden" name="trang" value="1">
				<input type="hidden" name="themmoi" value="true">
				<button type="submit" class="btn btn-primary">Thêm mới</button>
			</form>
	</div>
</div>