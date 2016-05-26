<?php
$ID = $_GET['ID'];
$select = $wpdb->get_row("SELECT * FROM csgd_i_thongtinchung WHERE ID = $ID",ARRAY_N);
if ($select[16]==0) {
?>
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
                        <td ><input type="text" class="form-control col-md-9" name ="I1a" value="<?php echo $select[1]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Anh</td>
                        <td ><input type="text" class="form-control col-md-9" name ="I1b" value="<?php echo $select[2]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="text-align:left" colspan="2" class="col-md-3"><b>2. Tên viết tắt của trường</b></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Việt</td>
                        <td ><input type="text" class="form-control col-md-9" name="I2a" value="<?php echo $select[3]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Anh</td>
                        <td ><input type="text" class="form-control col-md-9" name="I2b" value="<?php echo $select[4]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>3. Tên trước đây (nếu có)</b></td>
                        <td ><input type="text" class="form-control col-md-9" name="I3" value="<?php echo $select[5]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>4. Cơ quan/Bộ chủ quản</b></td>
                        <td ><input type="text" class="form-control col-md-9" name="I4" value="<?php echo $select[6]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>5. Địa chỉ trường</b></td>
                        <td ><input type="text" class="form-control col-md-9" name="I5" value="<?php echo $select[7]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="text-align:left" colspan="2" class="col-md-3"><b>6. Thông tin liên hệ</b></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle;" class="col-md-3">Điện thoại</td>
                        <td ><input type="text" class="form-control col-md-9" name="I6a" value="<?php echo $select[8]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle;" class="col-md-3">Fax</td>
                        <td ><input type="text" class="form-control col-md-9" name="I6b" value="<?php echo $select[9]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle;" class="col-md-3">Email</td>
                        <td ><input type="text" class="form-control col-md-9" name="I6c" value="<?php echo $select[10]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle;" class="col-md-3">Website</td>
                        <td ><input type="text" class="form-control col-md-9" name="I6d" value="<?php echo $select[11]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>7. Năm thành lập trường</b></td>
                        <td ><input type="text" class="form-control col-md-9" name="I7" value="<?php echo $select[12]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>8. Thời gian bắt đầu đào tạo khóa I</b></td>
                        <td ><input type="text" class="form-control col-md-9" name="I8" value="<?php echo $select[13]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>9. Thời gian cấp bằng tốt nghiệp cho khóa I</b></td>
                        <td ><input type="text" class="form-control col-md-9" name="I9" value="<?php echo $select[14]; ?>"></td>
                    </tr>
                    <tr>
                        <td style="vertical-align:middle; text-align:left" class="col-md-2"><b>10. Loại hình trường đào tạo</b></td>
                        <td style="vertical-align:middle; text-align:left" class="col-md-9" >
                            <div class="radio">
                                    <div class="row">
                                        <div class="col-md-2"><input type="radio" name="I10" value="CongLap" <?php if ($select[15] == 'CongLap') { echo 'checked="checked"';} ?> > Công lập</div>
                                        <div class="col-md-2"><input type="radio" name="I10" value="BanCong" <?php if ($select[15] == 'BanCong') { echo 'checked="checked"';} ?> > Bán công</div>
                                        <div class="col-md-2"><input type="radio" name="I10" value="DanLap" <?php if ($select[15] == 'DanLap') { echo 'checked="checked"';} ?> > Dân lập</div>
                                        <div class="col-md-2"><input type="radio" name="I10" value="TuThuc" <?php if ($select[15] == 'TuThuc') { echo 'checked="checked"';} ?> > Tư thục</div>
                                        <div class="col-md-2"><input type="radio" name="I10" value="Khac" <?php if ($select[15] != 'CongLap' && $select[15] != 'BanCong' && $select[15] != 'DanLap' && $select[15] != 'TuThuc') { echo 'checked="checked"';} ?> > Khác (ghi rõ)</div>
                                        <div class="col-md-2"><input type="text" class="form-control" name="I10_khac" value="<?php if ($select[15] != 'CongLap' && $select[15] != 'BanCong' && $select[15] != 'DanLap' && $select[15] != 'TuThuc') { echo $select[15];} ?>"></div>
                                    </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
            <input type="submit" name="update_trang1" value="Cập nhật" class="btn btn-primary">
        </form>
    </div>
</div>
<?php } else if (isset($_POST['update_trang1'])) {
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
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[1]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Anh</td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[2]; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left" colspan="2" class="col-md-3"><b>2. Tên viết tắt của trường</b></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Việt</td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[3]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Anh</td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[4]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>3. Tên trước đây (nếu có)</b></td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[5]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>4. Cơ quan/Bộ chủ quản</b></td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[6]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>5. Địa chỉ trường</b></td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[7]; ?></td>
                        </tr>
                        <tr>
                            <td style="text-align:left" colspan="2" class="col-md-3"><b>6. Thông tin liên hệ</b></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;" class="col-md-3">Điện thoại</td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[8]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;" class="col-md-3">Fax</td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[9]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;" class="col-md-3">Email</td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[10]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle;" class="col-md-3">Website</td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[11]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>7. Năm thành lập trường</b></td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[12]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>8. Thời gian bắt đầu đào tạo khóa I</b></td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[13]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>9. Thời gian cấp bằng tốt nghiệp cho khóa I</b></td>
                            <td style="vertical-align:middle; text-align:left"><?php echo $select[14]; ?></td>
                        </tr>
                        <tr>
                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>10. Loại hình trường đào tạo</b></td>
                            <td style="vertical-align:middle; text-align:left">
                                <?php 
                                if ($select[15] == 'CongLap') {
                                    echo 'Công Lập';
                                } elseif ($select[15] == 'BanCong') {
                                    echo 'Bán công';
                                } elseif ($select[15] == 'DanLap') {
                                    echo 'Dân lập';
                                } elseif ($select[15] == 'TuThuc') {
                                    echo 'Tư thục';
                                } else {
                                    echo $select[15];
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <input type="submit" name="update_lai_trang1" value="Cập nhật" class="btn btn-primary">
            </form>
        </div>
    </div>
<?php } ?>
<?php get_template_part('csgd/pagination'); ?>