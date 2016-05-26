<?php 
 	$ID = $_SESSION['ID'];
    $select = $wpdb->get_row("SELECT * FROM csgd_i_thongtinchung WHERE ID = $ID",ARRAY_N); 
    //if (empty($_SESSION['ID'])) { echo 'empty';} else echo $_SESSION['ID'];
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
                                if ($select[15] = 'CongLap') {
                                    echo 'Công Lập';
                                } elseif ($select[15] = 'BanCong') {
                                    echo 'Bán công';
                                } elseif ($select[15] = 'DanLap') {
                                    echo 'Dân lập';
                                } elseif ($select[15] = 'TuThuc') {
                                    echo 'Tư thục';
                                } else {
                                    echo $select[15];
                                }
                                ?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </form>
        </div>
    </div> 
<?php get_template_part('csgd/pagination'); ?>