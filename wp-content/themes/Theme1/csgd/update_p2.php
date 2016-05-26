<?php
$ID = $_GET['ID'];
$select = $wpdb->get_row("SELECT * FROM csgd_ii_khaiquatvetruong WHERE ID = $ID",ARRAY_N);
if ($select[16]==0) {
?>
<div class="panel panel-primary">
  	<div class="panel-heading">
   		<h2 class="panel-title">II. Giới thiệu khái quát về trường</h2>
 	</div>
  	<div class="panel-body">
    	<form action="" method="POST" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12"><p style="vertical-align:middle"><h4>11. Cơ cấu tổ chức của nhà trường</h4></p></div>
                <div class="col-md-4"><input type="file" name="II11" id="file" class="form-control"></div>
            </div>
            <div class="row">
                <div class="col-md-12"><p style="vertical-align:middle"><h4>12. Danh sách cán bộ chủ chốt</h4></p></div>
                <div class="col-md-4"><input type="file" name="II12" id="file" class="form-control" value="<?php echo $select[2]; ?>"></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <legend style="text-align:center">Theo mẫu sau</legend>
                    <table class="table table-striped table-hover" id="II12_danhsachcanbochuchot">
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Họ và tên</th>
                                <th>Chức danh, học vị, chức vụ</th>
                                <th>Điện thoại, Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="line-height:30px">1</td>
                                <td><input type="text" name="II12_1a" class="form-control" disabled></td>
                                <td><input type="text" name="II12_1b" class="form-control" disabled></td>
                                <td><input type="text" name="II12_1c" class="form-control" disabled></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>13. Các ngành, chuyên ngành đào tạo</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="" style="padding-left:20px">Số lượng chuyên ngành đào tạo tiến sĩ</label></div>
                    <div class="col-md-2"><input type="text" name="II13a" class="form-control" value="<?php echo $select[3]; ?>"></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="" style="padding-left:20px">Số lượng chuyên ngành đào tạo thạc sĩ</label></div>
                    <div class="col-md-2"><input type="text" name="II13b" class="form-control" value="<?php echo $select[4]; ?>"></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="" style="padding-left:20px">Số lượng ngành đào tạo đại học</label></div>
                    <div class="col-md-2"><input type="text" name="II13c" class="form-control" value="<?php echo $select[5]; ?>"></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="" style="padding-left:20px">Số lượng ngành đào tạo cao đẳng</label></div>
                    <div class="col-md-2"><input type="text" name="II13d" class="form-control" value="<?php echo $select[6]; ?>"></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="" style="padding-left:20px">Số lượng ngành (chuyên ngành) đào tạo khác</label></div>
                    <div class="col-md-2"><input type="text" name="II13e" class="form-control" value="<?php echo $select[7]; ?>"></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>14. Các loại hình đào tạo của nhà trường</h4></div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="text-align:center">Loại hình đào tạo</th>
                                <th style="text-align:center">Có</th>
                                <th style="text-align:center">Không</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chính quy</td>
                                <td><input type="radio" name="II14a" value="1" <?php if ($select[8]==1) { echo 'checked="checked"';} ?> ></td>
                                <td><input type="radio" name="II14a" value="0" <?php if ($select[8]==0) { echo 'checked="checked"';} ?> ></td>
                            </tr>
                            <tr>
                                <td>Không chính quy</td>
                                <td><input type="radio" name="II14b" value="1" <?php if ($select[9]==1) { echo 'checked="checked"';} ?> ></td>
                                <td><input type="radio" name="II14b" value="0" <?php if ($select[9]==0) { echo 'checked="checked"';} ?> ></td>
                            </tr>
                            <tr>
                                <td>Từ xa</td>
                                <td><input type="radio" name="II14c" value="1" <?php if ($select[10]==1) { echo 'checked="checked"';} ?> ></td>
                                <td><input type="radio" name="II14c" value="0" <?php if ($select[10]==0) { echo 'checked="checked"';} ?>> </td>
                            </tr>
                            <tr>
                                <td>Liên kết đào tạo với nước ngoài</td>
                                <td><input type="radio" name="II14d" value="1" <?php if ($select[11]==1) { echo 'checked="checked"';} ?> ></td>
                                <td><input type="radio" name="II14d" value="0" <?php if ($select[11]==0) { echo 'checked="checked"';} ?> ></td>
                            </tr>
                            <tr>
                                <td>Liên kết đào tạo trong nước</td>
                                <td><input type="radio" name="II14e" value="1" <?php if ($select[12]==1) { echo 'checked="checked"';} ?> ></td>
                                <td><input type="radio" name="II14e" value="0" <?php if ($select[12]==0) { echo 'checked="checked"';} ?> ></td>
                            </tr>
                            <tr>
                                <td>Các loại hình đào tạo khác</td>
                                <td><input type="radio" name="II14f" value="1" <?php if ($select[13]==1) { echo 'checked="checked"';} ?> ></td>
                                <td><input type="radio" name="II14f" value="0" <?php if ($select[13]==0) { echo 'checked="checked"';} ?> ></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>15. Các khoa đào tạo</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="">Tổng số các khoa đào tạo</label></div>
                    <div class="col-md-2"><input type="text" name="II15a" class="form-control" value="<?php echo $select[14]; ?>"></div>
                </div>
            </div>
             <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="">Liệt kê tên các khoa đào tạo</label><input type="file" name="II15b" id="file" class="form-control" value="<?php echo $select[15]; ?>"> </div>
                </div>
            </div>
            <input type="submit" name="update_trang2" value="Cập nhật" class="btn btn-primary">
		</form>
  	</div>
</div>
<?php } else if (isset($_POST['update_trang2'])) {
    $trang = $_GET['trang'];
    $trangtiep = $trang+1;
?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <p style="text-align:center">
                <a href="<?php echo home_url().'/thong-tin-csgd/?act=update&ID='.$ID.'&trang='.$trang; ?>" class="btn btn-primary">Xem lại thông tin</a>
                <a href="<?php echo home_url().'/thong-tin-csgd/?act=update&ID='.$ID.'&trang='.$trangtiep; ?>" class="btn btn-primary">Qua trang tiếp theo</a>
            </p>
        </div>
    </div>
<?php } else { ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="panel-title">II. Giới thiệu khái quát về trường</h2>
    </div>
    <div class="panel-body">
            <div class="row">
                <div class="col-md-12"><p style="vertical-align:middle"><h4>11. Cơ cấu tổ chức của nhà trường</h4></p></div>
                <div class="col-md-4"><?php echo $select[1]; ?></div>
            </div>
            <div class="row">
                <div class="col-md-12"><p style="vertical-align:middle"><h4>12. Danh sách cán bộ chủ chốt</h4></p></div>
                <div class="col-md-4"><?php echo $select[2]; ?></div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>13. Các ngành, chuyên ngành đào tạo</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="" style="padding-left:20px">Số lượng chuyên ngành đào tạo tiến sĩ</label></div>
                    <div class="col-md-2"><?php echo $select[3]; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="" style="padding-left:20px">Số lượng chuyên ngành đào tạo thạc sĩ</label></div>
                    <div class="col-md-2"><?php echo $select[4]; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="" style="padding-left:20px">Số lượng ngành đào tạo đại học</label></div>
                    <div class="col-md-2"><?php echo $select[5]; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="" style="padding-left:20px">Số lượng ngành đào tạo cao đẳng</label></div>
                    <div class="col-md-2"><?php echo $select[6]; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="" style="padding-left:20px">Số lượng ngành (chuyên ngành) đào tạo khác</label></div>
                    <div class="col-md-2"><?php echo $select[7]; ?></div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>14. Các loại hình đào tạo của nhà trường</h4></div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="text-align:center">Loại hình đào tạo</th>
                                <th style="text-align:center">Có</th>
                                <th style="text-align:center">Không</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Chính quy</td>
                                <td><?php if ($select[8] == 1) echo 'X'; ?></td>
                                <td><?php if ($select[8] == 0) echo 'X'; ?></td>
                            </tr>
                            <tr>
                                <td>Không chính quy</td>
                                <td><?php if ($select[9] == 1) echo 'X'; ?></td>
                                <td><?php if ($select[9] == 0) echo 'X'; ?></td>
                            </tr>
                            <tr>
                                <td>Từ xa</td>
                                <td><?php if ($select[10] == 1) echo 'X'; ?></td>
                                <td><?php if ($select[10] == 0) echo 'X'; ?></td>
                            </tr>
                            <tr>
                                <td>Liên kết đào tạo với nước ngoài</td>
                                <td><?php if ($select[11] == 1) echo 'X'; ?></td>
                                <td><?php if ($select[11] == 0) echo 'X'; ?></td>
                            </tr>
                            <tr>
                                <td>Liên kết đào tạo trong nước</td>
                                <td><?php if ($select[12] == 1) echo 'X'; ?></td>
                                <td><?php if ($select[12] == 0) echo 'X'; ?></td>
                            </tr>
                            <tr>
                                <td>Các loại hình đào tạo khác</td>
                                <td><?php if ($select[13] == 1) echo 'X'; ?></td>
                                <td><?php if ($select[13] == 0) echo 'X'; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>15. Các khoa đào tạo</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="">Tổng số các khoa đào tạo</label></div>
                    <div class="col-md-2"><?php echo $select[14]; ?></div>
                </div>
            </div>
             <div class="row">
                <div class="form-group col-md-12">
                    <div class="col-md-4"><label for="">Liệt kê tên các khoa đào tạo</label><?php echo $select[15]; ?></div>
                </div>
            </div>
    <form action="" method="post"><input type="submit" name="update_lai_trang2" value="Cập nhật" class="btn btn-primary"></form>
    </div>
</div>
<?php } ?>
<?php get_template_part('csgd/pagination'); ?>