<?php
$ID = $_GET['ID'];
$select = $wpdb->get_row("SELECT * FROM csgd_v_nckhvacgcn WHERE ID = $ID",ARRAY_N);
if ($select[224]==0) {
?>
<div class="panel panel-primary">
  	<div class="panel-heading">
   		<h2 class="panel-title">V. Nghiên cứu khoa học và chuyển giao công nghệ</h2>
 	</div>
  	<div class="panel-body">
    	<form action="" method="POST" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12"><h4>27.  Số lượng đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ của nhà trường được nghiệm thu trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col">STT</th>
                                <th rowspan="2" scope="col">Phân loại đề tài</th>
                                <th rowspan="2" scope="col">Hệ số**</th>
                                <th colspan="6" scope="col">Số lượng</th>
                            </tr>
                            <tr>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                                <th>Tổng (đã quy đổi)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td>(7)</td>
                                <td>(8)</td>
                                <td>(9)</td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">1</td>
                                <td style="vertical-align:middle">Đề tài cấp NN</td>
                                <td><input type="text" name="V27a_1" class="form-control" value="<?php echo $select[1]; ?>"></td>
                                <td><input type="text" name="V27a_2" class="form-control" value="<?php echo $select[2]; ?>"></td>
                                <td><input type="text" name="V27a_3" class="form-control" value="<?php echo $select[3]; ?>"></td>
                                <td><input type="text" name="V27a_4" class="form-control" value="<?php echo $select[4]; ?>"></td>
                                <td><input type="text" name="V27a_5" class="form-control" value="<?php echo $select[5]; ?>"></td>
                                <td><input type="text" name="V27a_6" class="form-control" value="<?php echo $select[6]; ?>"></td>
                                <td><input type="text" name="V27a_7" class="form-control" value="<?php echo $select[7]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2</td>
                                <td style="vertical-align:middle">Đề tài cấp Bộ*</td>
                                <td><input type="text" name="V27b_1" class="form-control" value="<?php echo $select[8]; ?>"></td>
                                <td><input type="text" name="V27b_2" class="form-control" value="<?php echo $select[9]; ?>"></td>
                                <td><input type="text" name="V27b_3" class="form-control" value="<?php echo $select[10]; ?>"></td>
                                <td><input type="text" name="V27b_4" class="form-control" value="<?php echo $select[11]; ?>"></td>
                                <td><input type="text" name="V27b_5" class="form-control" value="<?php echo $select[12]; ?>"></td>
                                <td><input type="text" name="V27b_6" class="form-control" value="<?php echo $select[13]; ?>"></td>
                                <td><input type="text" name="V27b_7" class="form-control" value="<?php echo $select[14]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">3</td>
                                <td style="vertical-align:middle">Đề tài cấp trường</td>
                                <td><input type="text" name="V27c_1" class="form-control" value="<?php echo $select[15]; ?>"></td>
                                <td><input type="text" name="V27c_2" class="form-control" value="<?php echo $select[16]; ?>"></td>
                                <td><input type="text" name="V27c_3" class="form-control" value="<?php echo $select[17]; ?>"></td>
                                <td><input type="text" name="V27c_4" class="form-control" value="<?php echo $select[18]; ?>"></td>
                                <td><input type="text" name="V27c_5" class="form-control" value="<?php echo $select[19]; ?>"></td>
                                <td><input type="text" name="V27c_6" class="form-control" value="<?php echo $select[20]; ?>"></td>
                                <td><input type="text" name="V27c_7" class="form-control" value="<?php echo $select[21]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">4</td>
                                <td colspan="2" style="vertical-align:middle">Tổng</td>
                                <td><input type="text" name="V27d_1" class="form-control" value="<?php echo $select[22]; ?>"></td>
                                <td><input type="text" name="V27d_2" class="form-control" value="<?php echo $select[23]; ?>"></td>
                                <td><input type="text" name="V27d_3" class="form-control" value="<?php echo $select[24]; ?>"></td>
                                <td><input type="text" name="V27d_4" class="form-control" value="<?php echo $select[25]; ?>"></td>
                                <td><input type="text" name="V27d_5" class="form-control" value="<?php echo $select[26]; ?>"></td>
                                <td><input type="text" name="V27d_6" class="form-control" value="<?php echo $select[27]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Cách tính: Cột 9 = cột 3 . (cột 4 + cột 5 + cột 6 + cột 7 + cột 8)</p>
                    <p>* Bao gồm đề tài cấp Bộ hoặc tương đương, đề tài nhánh cấp Nhà nước</p>
                    <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
                    <p>Tổng số đề tài quy đổi: 44,5</p>
                    <p>Tỷ số đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ (quy đổi) trên cán bộ cơ hữu: 1 đề tài/5 giảng viên cơ hữu</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>28. Doanh thu từ nghiên cứu khoa học và chuyển giao công nghệ của nhà trường trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                   <table class="table table-striped table-hover" border="1">
                       <thead>
                           <tr>
                               <th>STT</th>
                               <th>Năm</th>
                               <th>Doanh thu từ NCKH và chuyển giao công nghệ (triệu VNĐ)</th>
                               <th>Tỷ lệ doanh thu từ NCKH và chuyển giao công nghệ so với tổng kinh phí đầu vào của nhà trường (%)</th>
                               <th>Tỷ số doanh thu từ NCKH và chuyển giao công nghệ trên cán bộ cơ hữu (triệu VNĐ/ người)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td style="vertical-align:middle">1</td>
                              <td style="vertical-align:middle">2010-2011</td>
                              <td><input type="text" name="V28a_1" class="form-control" value="<?php echo $select[28]; ?>"></td>
                              <td><input type="text" name="V28a_2" class="form-control" value="<?php echo $select[29]; ?>"></td>
                              <td><input type="text" name="V28a_3" class="form-control" value="<?php echo $select[30]; ?>"></td>
                           </tr>
                           <tr>
                              <td style="vertical-align:middle">2</td>
                              <td style="vertical-align:middle">2011-2012</td>
                              <td><input type="text" name="V28b_1" class="form-control" value="<?php echo $select[31]; ?>"></td>
                              <td><input type="text" name="V28b_2" class="form-control" value="<?php echo $select[32]; ?>"></td>
                              <td><input type="text" name="V28b_3" class="form-control" value="<?php echo $select[33]; ?>"></td>
                           </tr>
                           <tr>
                              <td style="vertical-align:middle">3</td>
                              <td style="vertical-align:middle">2012-2013</td>
                              <td><input type="text" name="V28c_1" class="form-control" value="<?php echo $select[34]; ?>"></td>
                              <td><input type="text" name="V28c_2" class="form-control" value="<?php echo $select[35]; ?>"></td>
                              <td><input type="text" name="V28c_3" class="form-control" value="<?php echo $select[36]; ?>"></td>
                           </tr>
                           <tr>
                              <td style="vertical-align:middle">4</td>
                              <td style="vertical-align:middle">2013-2014</td>
                              <td><input type="text" name="V28d_1" class="form-control" value="<?php echo $select[37]; ?>"></td>
                              <td><input type="text" name="V28d_2" class="form-control" value="<?php echo $select[38]; ?>"></td>
                              <td><input type="text" name="V28d_3" class="form-control" value="<?php echo $select[39]; ?>"></td>
                           </tr>
                           <tr>
                              <td style="vertical-align:middle">5</td>
                              <td style="vertical-align:middle">2014-2015</td>
                              <td><input type="text" name="V28e_1" class="form-control" value="<?php echo $select[40]; ?>"></td>
                              <td><input type="text" name="V28e_2" class="form-control" value="<?php echo $select[41]; ?>"></td>
                              <td><input type="text" name="V28e_3" class="form-control" value="<?php echo $select[42]; ?>"></td>
                           </tr>
                       </tbody>
                   </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>29. Số lượng cán bộ cơ hữu của nhà trường tham gia thực hiện đề tài khoa học trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col">Số lượng đề tài</th>
                                <th colspan="3" scope="col">Số lượng cán bộ tham  gia</th>
                                <th  rowspan="2" scope="col">Ghi chú</th>
                            </tr>
                            <tr>
                                <th style="vertical-align:middle">Đề tài cấp NN</th>
                                <th style="vertical-align:middle">Đề tài cấp Bộ*</th>
                                <th style="vertical-align:middle">Đề tài cấp trường</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Từ 1 đến 3 đề tài</td>
                                <td><input type="text" name="V29a_1" class="form-control" value="<?php echo $select[43]; ?>"></td>
                                <td><input type="text" name="V29a_2" class="form-control" value="<?php echo $select[44]; ?>"></td>
                                <td><input type="text" name="V29a_3" class="form-control" value="<?php echo $select[45]; ?>"></td>
                                <td><input type="text" name="V29a_4" class="form-control" value="<?php echo $select[46]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Từ 4 đến 6 đề tài</td>
                                <td><input type="text" name="V29b_1" class="form-control" value="<?php echo $select[47]; ?>"></td>
                                <td><input type="text" name="V29b_2" class="form-control" value="<?php echo $select[48]; ?>"></td>
                                <td><input type="text" name="V29b_3" class="form-control" value="<?php echo $select[49]; ?>"></td>
                                <td><input type="text" name="V29b_4" class="form-control" value="<?php echo $select[50]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Trên 6 đề tài</td>
                                <td><input type="text" name="V29c_1" class="form-control" value="<?php echo $select[51]; ?>"></td>
                                <td><input type="text" name="V29c_2" class="form-control" value="<?php echo $select[52]; ?>"></td>
                                <td><input type="text" name="V29c_3" class="form-control" value="<?php echo $select[53]; ?>"></td>
                                <td><input type="text" name="V29c_4" class="form-control" value="<?php echo $select[54]; ?>"></td>
                            </tr>
                             <tr>
                                <td style="text-align:center; vertical-align:middle">Tổng số cán bộ tham gia</td>
                                <td><input type="text" name="V29d_1" class="form-control" value="<?php echo $select[55]; ?>"></td>
                                <td><input type="text" name="V29d_2" class="form-control" value="<?php echo $select[56]; ?>"></td>
                                <td><input type="text" name="V29d_3" class="form-control" value="<?php echo $select[57]; ?>"></td>
                                <td><input type="text" name="V29d_4" class="form-control" value="<?php echo $select[58]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>* Bao gồm đề tài cấp Bộ hoặc tương đương, đề tài nhánh cấp Nhà nước</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>30. Số lượng sách của nhà trường được xuất bản trong 5 năm gần đây:</h4></div>
            </div>
             <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col">STT</th>
                                <th rowspan="2" scope="col">Phân loại sách</th>
                                <th rowspan="2" scope="col">Hệ số**</th>
                                <th colspan="6" scope="col">Số lượng</th>
                            </tr>
                            <tr>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                                <th>Tổng (đã quy đổi)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">1</td>
                                <td style="vertical-align:middle">Sách chuyên khảo</td>
                                <td><input type="text" name="V30a_1" class="form-control" value="<?php echo $select[59]; ?>"></td>
                                <td><input type="text" name="V30a_2" class="form-control" value="<?php echo $select[60]; ?>"></td>
                                <td><input type="text" name="V30a_3" class="form-control" value="<?php echo $select[61]; ?>"></td>
                                <td><input type="text" name="V30a_4" class="form-control" value="<?php echo $select[62]; ?>"></td>
                                <td><input type="text" name="V30a_5" class="form-control" value="<?php echo $select[63]; ?>"></td>
                                <td><input type="text" name="V30a_6" class="form-control" value="<?php echo $select[64]; ?>"></td>
                                <td><input type="text" name="V30a_7" class="form-control" value="<?php echo $select[65]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2</td>
                                <td style="vertical-align:middle">Sách giáo trình</td>
                                <td><input type="text" name="V30b_1" class="form-control" value="<?php echo $select[66]; ?>"></td>
                                <td><input type="text" name="V30b_2" class="form-control" value="<?php echo $select[67]; ?>"></td>
                                <td><input type="text" name="V30b_3" class="form-control" value="<?php echo $select[68]; ?>"></td>
                                <td><input type="text" name="V30b_4" class="form-control" value="<?php echo $select[69]; ?>"></td>
                                <td><input type="text" name="V30b_5" class="form-control" value="<?php echo $select[70]; ?>"></td>
                                <td><input type="text" name="V30b_6" class="form-control" value="<?php echo $select[71]; ?>"></td>
                                <td><input type="text" name="V30b_7" class="form-control" value="<?php echo $select[72]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">3</td>
                                <td style="vertical-align:middle">Sách tham khảo</td>
                                <td><input type="text" name="V30c_1" class="form-control" value="<?php echo $select[73]; ?>"></td>
                                <td><input type="text" name="V30c_2" class="form-control" value="<?php echo $select[74]; ?>"></td>
                                <td><input type="text" name="V30c_3" class="form-control" value="<?php echo $select[75]; ?>"></td>
                                <td><input type="text" name="V30c_4" class="form-control" value="<?php echo $select[76]; ?>"></td>
                                <td><input type="text" name="V30c_5" class="form-control" value="<?php echo $select[77]; ?>"></td>
                                <td><input type="text" name="V30c_6" class="form-control" value="<?php echo $select[78]; ?>"></td>
                                <td><input type="text" name="V30c_7" class="form-control" value="<?php echo $select[79]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">4</td>
                                <td style="vertical-align:middle">Sách hướng dẫn</td>
                                <td><input type="text" name="V30d_1" class="form-control" value="<?php echo $select[80]; ?>"></td>
                                <td><input type="text" name="V30d_2" class="form-control" value="<?php echo $select[81]; ?>"></td>
                                <td><input type="text" name="V30d_3" class="form-control" value="<?php echo $select[82]; ?>"></td>
                                <td><input type="text" name="V30d_4" class="form-control" value="<?php echo $select[83]; ?>"></td>
                                <td><input type="text" name="V30d_5" class="form-control" value="<?php echo $select[84]; ?>"></td>
                                <td><input type="text" name="V30d_6" class="form-control" value="<?php echo $select[85]; ?>"></td>
                                <td><input type="text" name="V30d_7" class="form-control" value="<?php echo $select[86]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">5</td>
                                <td colspan="2" style="vertical-align:middle">Tổng</td>
                                <td><input type="text" name="V30e_1" class="form-control" value="<?php echo $select[87]; ?>"></td>
                                <td><input type="text" name="V30e_2" class="form-control" value="<?php echo $select[88]; ?>"></td>
                                <td><input type="text" name="V30e_3" class="form-control" value="<?php echo $select[89]; ?>"></td>
                                <td><input type="text" name="V30e_4" class="form-control" value="<?php echo $select[90]; ?>"></td>
                                <td><input type="text" name="V30e_5" class="form-control" value="<?php echo $select[91]; ?>"></td>
                                <td><input type="text" name="V30e_6" class="form-control" value="<?php echo $select[92]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học Nhà nước (có điều chỉnh).</p>
                    <p>Tổng số sách (quy đổi): 44,5</p>
                    <p>Tỷ số sách đã được xuất bản (quy đổi) trên cán bộ cơ hữu: 1/5 giảng viên</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>31. Số lượng cán bộ cơ hữu của nhà trường tham gia viết sách trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">Số lượng sách</th>
                                <th colspan="4">Số lượng cán bộ cơ hữu tham gia viết sách</th>
                            </tr>
                            <tr>
                                <th>Sách chuyên khảo</th>
                                <th>Sách giáo trình</th>
                                <th>Sách tham khảo</th>
                                <th>Sách hướng dẫn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Từ 1 đến 3 cuốn sách</td>
                                <td><input type="text" name="V31a_1" class="form-control" value="<?php echo $select[93]; ?>"></td>
                                <td><input type="text" name="V31a_2" class="form-control" value="<?php echo $select[94]; ?>"></td>
                                <td><input type="text" name="V31a_3" class="form-control" value="<?php echo $select[95]; ?>"></td>
                                <td><input type="text" name="V31a_4" class="form-control" value="<?php echo $select[96]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Từ 4 đến 6 cuốn sách</td>
                                <td><input type="text" name="V31b_1" class="form-control" value="<?php echo $select[97]; ?>"></td>
                                <td><input type="text" name="V31b_2" class="form-control" value="<?php echo $select[98]; ?>"></td>
                                <td><input type="text" name="V31b_3" class="form-control" value="<?php echo $select[99]; ?>"></td>
                                <td><input type="text" name="V31b_4" class="form-control" value="<?php echo $select[101]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Trên 6 cuốn sách</td>
                                <td><input type="text" name="V31c_1" class="form-control" value="<?php echo $select[101]; ?>"></td>
                                <td><input type="text" name="V31c_2" class="form-control" value="<?php echo $select[102]; ?>"></td>
                                <td><input type="text" name="V31c_3" class="form-control" value="<?php echo $select[103]; ?>"></td>
                                <td><input type="text" name="V31c_4" class="form-control" value="<?php echo $select[104]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Tổng số cán bộ tham gia</td>
                                <td><input type="text" name="V31d_1" class="form-control" value="<?php echo $select[105]; ?>"></td>
                                <td><input type="text" name="V31d_2" class="form-control" value="<?php echo $select[106]; ?>"></td>
                                <td><input type="text" name="V31d_3" class="form-control" value="<?php echo $select[107]; ?>"></td>
                                <td><input type="text" name="V31d_4" class="form-control" value="<?php echo $select[108]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>32. Số lượng bài của các cán bộ cơ hữu của nhà trường được đăng tạp chí trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">STT</th>
                                <th rowspan="2">Phân loại tạp chí</th>
                                <th rowspan="2">Hệ số**</th>
                                <th colspan="6">Số lượng</th>
                            </tr>
                            <tr>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                                <th>Tổng (đã quy đổi)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">1</td>
                                <td style="vertical-align:middle">Tạp chí KH quốc tế</td>
                                <td><input type="text" name="V32a_1" class="form-control" value="<?php echo $select[109]; ?>"></td>
                                <td><input type="text" name="V32a_2" class="form-control" value="<?php echo $select[110]; ?>"></td>
                                <td><input type="text" name="V32a_3" class="form-control" value="<?php echo $select[111]; ?>"></td>
                                <td><input type="text" name="V32a_4" class="form-control" value="<?php echo $select[112]; ?>"></td>
                                <td><input type="text" name="V32a_5" class="form-control" value="<?php echo $select[113]; ?>"></td>
                                <td><input type="text" name="V32a_6" class="form-control" value="<?php echo $select[114]; ?>"></td>
                                <td><input type="text" name="V32a_7" class="form-control" value="<?php echo $select[115]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2</td>
                                <td style="vertical-align:middle">Tạp chí KH cấp Ngành trong nước</td>
                                <td><input type="text" name="V32b_1" class="form-control" value="<?php echo $select[116]; ?>"></td>
                                <td><input type="text" name="V32b_2" class="form-control" value="<?php echo $select[117]; ?>"></td>
                                <td><input type="text" name="V32b_3" class="form-control" value="<?php echo $select[118]; ?>"></td>
                                <td><input type="text" name="V32b_4" class="form-control" value="<?php echo $select[119]; ?>"></td>
                                <td><input type="text" name="V32b_5" class="form-control" value="<?php echo $select[120]; ?>"></td>
                                <td><input type="text" name="V32b_6" class="form-control" value="<?php echo $select[121]; ?>"></td>
                                <td><input type="text" name="V32b_7" class="form-control" value="<?php echo $select[122]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">3</td>
                                <td style="vertical-align:middle">Tạp chí / tập san của cấp trường</td>
                                <td><input type="text" name="V32c_1" class="form-control" value="<?php echo $select[123]; ?>"></td>
                                <td><input type="text" name="V32c_2" class="form-control" value="<?php echo $select[124]; ?>"></td>
                                <td><input type="text" name="V32c_3" class="form-control" value="<?php echo $select[125]; ?>"></td>
                                <td><input type="text" name="V32c_4" class="form-control" value="<?php echo $select[126]; ?>"></td>
                                <td><input type="text" name="V32c_5" class="form-control" value="<?php echo $select[127]; ?>"></td>
                                <td><input type="text" name="V32c_6" class="form-control" value="<?php echo $select[128]; ?>"></td>
                                <td><input type="text" name="V32c_7" class="form-control" value="<?php echo $select[129]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">4</td>
                                <td colspan="2" style="vertical-align:middle">Tổng</td>
                                <td><input type="text" name="V32d_1" class="form-control" value="<?php echo $select[130]; ?>"></td>
                                <td><input type="text" name="V32d_2" class="form-control" value="<?php echo $select[131]; ?>"></td>
                                <td><input type="text" name="V32d_3" class="form-control" value="<?php echo $select[132]; ?>"></td>
                                <td><input type="text" name="V32d_4" class="form-control" value="<?php echo $select[133]; ?>"></td>
                                <td><input type="text" name="V32d_5" class="form-control" value="<?php echo $select[134]; ?>"></td>
                                <td><input type="text" name="V32d_6" class="form-control" value="<?php echo $select[135]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
                    <p>Tổng số bài đăng tạp chí (quy đổi): 432</p>
                    <p>Tỷ số bài đăng tạp chí (quy đổi) trên cán bộ cơ hữu:  2 bài báo/ 1 giảng viên</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>33. Số lượng cán bộ cơ hữu của nhà trường tham gia viết bài đăng tạp chí trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">Số lượng CBGD có bài báo đăng trên tạp chí</th>
                                <th colspan="3">Nơi đăng</th>
                            </tr>
                            <tr>
                                <th>Tạp chí KH quốc tế</th>
                                <th>Tạp chí KH cấp Ngành trong nước</th>
                                <th>Tạp chí / tập san của cấp trường</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Từ 1 đến 5 bài báo </td>
                                <td><input type="text" name="V33a_1" class="form-control" value="<?php echo $select[136]; ?>"></td>
                                <td><input type="text" name="V33a_2" class="form-control" value="<?php echo $select[137]; ?>"></td>
                                <td><input type="text" name="V33a_3" class="form-control" value="<?php echo $select[138]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Từ 6 đến 10 bài báo </td>
                                <td><input type="text" name="V33b_1" class="form-control" value="<?php echo $select[139]; ?>"></td>
                                <td><input type="text" name="V33b_2" class="form-control" value="<?php echo $select[140]; ?>"></td>
                                <td><input type="text" name="V33b_3" class="form-control" value="<?php echo $select[141]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Từ 11 đến 15 bài báo </td>
                                <td><input type="text" name="V33c_1" class="form-control" value="<?php echo $select[142]; ?>"></td>
                                <td><input type="text" name="V33c_2" class="form-control" value="<?php echo $select[143]; ?>"></td>
                                <td><input type="text" name="V33c_3" class="form-control" value="<?php echo $select[144]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Trên 15 bài báo </td>
                                <td><input type="text" name="V33d_1" class="form-control" value="<?php echo $select[145]; ?>"></td>
                                <td><input type="text" name="V33d_2" class="form-control" value="<?php echo $select[146]; ?>"></td>
                                <td><input type="text" name="V33d_3" class="form-control" value="<?php echo $select[147]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Tổng số cán bộ tham gia</td>
                                <td><input type="text" name="V33e_1" class="form-control" value="<?php echo $select[148]; ?>"></td>
                                <td><input type="text" name="V33e_2" class="form-control" value="<?php echo $select[149]; ?>"></td>
                                <td><input type="text" name="V33e_3" class="form-control" value="<?php echo $select[150]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>34. Số lượng báo cáo khoa học do cán bộ cơ hữu của nhà trường báo cáo tại các hội nghị, hội thảo, được đăng toàn văn trong tuyển tập công trình hay kỷ yếu trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">STT</th>
                                <th rowspan="2">Phân loại hội thảo</th>
                                <th rowspan="2">Hệ số**</th>
                                <th colspan="6">Số lượng</th>
                            </tr>
                            <tr>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                                <th>Tổng (đã quy đổi)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">1</td>
                                <td style="vertical-align:middle">Hội thảo quốc tế</td>
                                <td><input type="text" name="V34a_1" class="form-control" value="<?php echo $select[151]; ?>"></td>
                                <td><input type="text" name="V34a_2" class="form-control" value="<?php echo $select[152]; ?>"></td>
                                <td><input type="text" name="V34a_3" class="form-control" value="<?php echo $select[153]; ?>"></td>
                                <td><input type="text" name="V34a_4" class="form-control" value="<?php echo $select[154]; ?>"></td>
                                <td><input type="text" name="V34a_5" class="form-control" value="<?php echo $select[155]; ?>"></td>
                                <td><input type="text" name="V34a_6" class="form-control" value="<?php echo $select[156]; ?>"></td>
                                <td><input type="text" name="V34a_7" class="form-control" value="<?php echo $select[157]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2</td>
                                <td style="vertical-align:middle">Hội thảo trong nước</td>
                                <td><input type="text" name="V34b_1" class="form-control" value="<?php echo $select[158]; ?>"></td>
                                <td><input type="text" name="V34b_2" class="form-control" value="<?php echo $select[159]; ?>"></td>
                                <td><input type="text" name="V34b_3" class="form-control" value="<?php echo $select[160]; ?>"></td>
                                <td><input type="text" name="V34b_4" class="form-control" value="<?php echo $select[161]; ?>"></td>
                                <td><input type="text" name="V34b_5" class="form-control" value="<?php echo $select[162]; ?>"></td>
                                <td><input type="text" name="V34b_6" class="form-control" value="<?php echo $select[163]; ?>"></td>
                                <td><input type="text" name="V34b_7" class="form-control" value="<?php echo $select[164]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">3</td>
                                <td style="vertical-align:middle">Hội thảo cấp trường</td>
                                <td><input type="text" name="V34c_1" class="form-control" value="<?php echo $select[165]; ?>"></td>
                                <td><input type="text" name="V34c_2" class="form-control" value="<?php echo $select[166]; ?>"></td>
                                <td><input type="text" name="V34c_3" class="form-control" value="<?php echo $select[167]; ?>"></td>
                                <td><input type="text" name="V34c_4" class="form-control" value="<?php echo $select[168]; ?>"></td>
                                <td><input type="text" name="V34c_5" class="form-control" value="<?php echo $select[169]; ?>"></td>
                                <td><input type="text" name="V34c_6" class="form-control" value="<?php echo $select[170]; ?>"></td>
                                <td><input type="text" name="V34c_7" class="form-control" value="<?php echo $select[171]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">4</td>
                                <td colspan="2" style="vertical-align:middle">Tổng</td>
                                <td><input type="text" name="V34d_1" class="form-control" value="<?php echo $select[172]; ?>"></td>
                                <td><input type="text" name="V34d_2" class="form-control" value="<?php echo $select[173]; ?>"></td>
                                <td><input type="text" name="V34d_3" class="form-control" value="<?php echo $select[174]; ?>"></td>
                                <td><input type="text" name="V34d_4" class="form-control" value="<?php echo $select[175]; ?>"></td>
                                <td><input type="text" name="V34d_5" class="form-control" value="<?php echo $select[176]; ?>"></td>
                                <td><input type="text" name="V34d_6" class="form-control" value="<?php echo $select[177]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                    <p><i>(Khi tính hội thảo trong nước sẽ không bao gồm các hội thảo của trường vì đã được tính 1 lần)</i></p>
                    <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
                    <p>Tổng số bài báo cáo (quy đổi): 219 bài</p>
                    <p>Tỷ số bài báo cáo (quy đổi) trên cán bộ cơ hữu:  0.98 bài/ giảng viên</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>35. Số lượng cán bộ cơ hữu của nhà trường có báo cáo khoa học tại các hội nghị, hội thảo được đăng toàn văn trong tuyển tập công trình hay kỷ yếu trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">Số lượng CB có báo cáo khoa học tại các hội nghị, hội thảo</th>
                                <th colspan="3">Cấp hội thảo</th>
                            </tr>
                            <tr>
                                <th>Hội thảo quốc tế</th>
                                <th>Hội thảo trong nước</th>
                                <th>Hội thảo ở trường</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Từ 1 đến 5 báo cáo</td>
                                <td><input type="text" name="V35a_1" class="form-control" value="<?php echo $select[178]; ?>"></td>
                                <td><input type="text" name="V35a_2" class="form-control" value="<?php echo $select[179]; ?>"></td>
                                <td><input type="text" name="V35a_3" class="form-control" value="<?php echo $select[180]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Từ 6 đến 10 báo cáo</td>
                                <td><input type="text" name="V35b_1" class="form-control" value="<?php echo $select[181]; ?>"></td>
                                <td><input type="text" name="V35b_2" class="form-control" value="<?php echo $select[182]; ?>"></td>
                                <td><input type="text" name="V35b_3" class="form-control" value="<?php echo $select[183]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Từ 11 đến 15 báo cáotd>
                                <td><input type="text" name="V35c_1" class="form-control" value="<?php echo $select[184]; ?>"></td>
                                <td><input type="text" name="V35c_2" class="form-control" value="<?php echo $select[185]; ?>"></td>
                                <td><input type="text" name="V35c_3" class="form-control" value="<?php echo $select[186]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Trên 15 báo cáo</td>
                                <td><input type="text" name="V35d_1" class="form-control" value="<?php echo $select[187]; ?>"></td>
                                <td><input type="text" name="V35d_2" class="form-control" value="<?php echo $select[188]; ?>"></td>
                                <td><input type="text" name="V35d_3" class="form-control" value="<?php echo $select[189]; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tổng số cán bộ tham gia</td>
                                <td><input type="text" name="V35e_1" class="form-control" value="<?php echo $select[190]; ?>"></td>
                                <td><input type="text" name="V35e_2" class="form-control" value="<?php echo $select[191]; ?>"></td>
                                <td><input type="text" name="V35e_3" class="form-control" value="<?php echo $select[192]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>(Khi tính Hội thảo trong nước sẽ không bao gồm các Hội thảo của trường)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>36. Số bằng phát minh, sáng chế được cấp trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th>Số lượng đề tài</th>
                                <th>Số bằng phát minh, sáng chế được cấp (ghi rõ nơi cấp, thời gian cấp, người được cấp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">2010-2011</td>
                                <td><input type="text" name="V36a" class="form-control" value="<?php echo $select[193]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2011-2012</td>
                                <td><input type="text" name="V36b" class="form-control" value="<?php echo $select[194]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2012-2013</td>
                                <td><input type="text" name="V36c" class="form-control" value="<?php echo $select[195]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2013-2014</td>
                                <td><input type="text" name="V36d" class="form-control" value="<?php echo $select[196]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2014-2015</td>
                                <td><input type="text" name="V36e" class="form-control" value="<?php echo $select[197]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>37. Nghiên cứu khoa học của sinh viên</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>37.1 Số lượng sinh viên của nhà trường tham gia thực hiện đề tài khoa học trong 5 năm gần đây: </h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col">Số lượng đề tài</th>
                                <th colspan="3" scope="col">Số lượng cán bộ tham  gia</th>
                                <th  rowspan="2" scope="col">Ghi chú</th>
                            </tr>
                            <tr>
                                <th >Đề tài cấp NN</th>
                                <th >Đề tài cấp Bộ*</th>
                                <th >Đề tài cấp trường</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Từ 1 đến 3 đề tài</td>
                                <td><input type="text" name="V37_1a_1" class="form-control" value="<?php echo $select[198]; ?>"></td>
                                <td><input type="text" name="V37_1a_2" class="form-control" value="<?php echo $select[199]; ?>"></td>
                                <td><input type="text" name="V37_1a_3" class="form-control" value="<?php echo $select[200]; ?>"></td>
                                <td><input type="text" name="V37_1a_4" class="form-control" value="<?php echo $select[201]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Từ 4 đến 6 đề tài</td>
                                <td><input type="text" name="V37_1b_1" class="form-control" value="<?php echo $select[202]; ?>"></td>
                                <td><input type="text" name="V37_1b_2" class="form-control" value="<?php echo $select[203]; ?>"></td>
                                <td><input type="text" name="V37_1b_3" class="form-control" value="<?php echo $select[204]; ?>"></td>
                                <td><input type="text" name="V37_1b_4" class="form-control" value="<?php echo $select[205]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Trên 6 đề tài</td>
                                <td><input type="text" name="V37_1c_1" class="form-control" value="<?php echo $select[206]; ?>"></td>
                                <td><input type="text" name="V37_1c_2" class="form-control" value="<?php echo $select[207]; ?>"></td>
                                <td><input type="text" name="V37_1c_3" class="form-control" value="<?php echo $select[208]; ?>"></td>
                                <td><input type="text" name="V37_1c_4" class="form-control" value="<?php echo $select[209]; ?>"></td>
                            </tr>
                             <tr>
                                <td style="text-align:center; vertical-align:middle">Tổng số sinh viên tham gia</td>
                                <td><input type="text" name="V37_1d_1" class="form-control" value="<?php echo $select[210]; ?>"></td>
                                <td><input type="text" name="V37_1d_2" class="form-control" value="<?php echo $select[211]; ?>"></td>
                                <td><input type="text" name="V37_1d_3" class="form-control" value="<?php echo $select[212]; ?>"></td>
                                <td><input type="text" name="V37_1d_4" class="form-control" value="<?php echo $select[213]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>*Bao gồm đề tài cấp Bộ hoặc tương đương, đề tài nhánh cấp Nhà nước</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>37.2 Thành tích nghiên cứu khoa học của sinh viên:</h4>
                    <p><i>(Thống kê các giải thưởng nghiên cứu khoa học, sáng tạo, các bài báo, công trình được công bố)</i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">STT</th>
                                <th rowspan="2">Thành tích nghiên cứu khoa học</th>
                                <th colspan="5">Số lượng</th>
                            </tr>
                            <tr>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">1</td>
                                <td style="vertical-align:middle">Số giải thưởng nghiên cứu khoa học, sáng tạo</td>
                                <td><input type="text" name="V37_2a_1" class="form-control" value="<?php echo $select[214]; ?>"></td>
                                <td><input type="text" name="V37_2a_2" class="form-control" value="<?php echo $select[215]; ?>"></td>
                                <td><input type="text" name="V37_2a_3" class="form-control" value="<?php echo $select[216]; ?>"></td>
                                <td><input type="text" name="V37_2a_4" class="form-control" value="<?php echo $select[217]; ?>"></td>
                                <td><input type="text" name="V37_2a_5" class="form-control" value="<?php echo $select[218]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2</td>
                                <td style="vertical-align:middle">Số bài báo được đăng, công trình được công bố</td>
                                <td><input type="text" name="V37_2b_1" class="form-control" value="<?php echo $select[219]; ?>"></td>
                                <td><input type="text" name="V37_2b_2" class="form-control" value="<?php echo $select[220]; ?>"></td>
                                <td><input type="text" name="V37_2b_3" class="form-control" value="<?php echo $select[221]; ?>"></td>
                                <td><input type="text" name="V37_2b_4" class="form-control" value="<?php echo $select[222]; ?>"></td>
                                <td><input type="text" name="V37_2b_5" class="form-control" value="<?php echo $select[223]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <input type="submit" name="update_trang5" value="Cập nhật" class="btn btn-primary">
		</form>
  	</div>
</div>
<?php } else if (isset($_POST['update_trang5'])) {
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
      <h2 class="panel-title">V. Nghiên cứu khoa học và chuyển giao công nghệ</h2>
  </div>
    <div class="panel-body">
      <form action="" method="POST" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12"><h4>27.  Số lượng đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ của nhà trường được nghiệm thu trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col">STT</th>
                                <th rowspan="2" scope="col">Phân loại đề tài</th>
                                <th rowspan="2" scope="col">Hệ số**</th>
                                <th colspan="6" scope="col">Số lượng</th>
                            </tr>
                            <tr>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                                <th>Tổng (đã quy đổi)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>(1)</td>
                                <td>(2)</td>
                                <td>(3)</td>
                                <td>(4)</td>
                                <td>(5)</td>
                                <td>(6)</td>
                                <td>(7)</td>
                                <td>(8)</td>
                                <td>(9)</td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">1</td>
                                <td style="vertical-align:middle">Đề tài cấp NN</td>
                                <td><?php echo $select[ 1 ]; ?></td>
                                <td><?php echo $select[ 2 ]; ?></td>
                                <td><?php echo $select[ 3 ]; ?></td>
                                <td><?php echo $select[ 4 ]; ?></td>
                                <td><?php echo $select[ 5 ]; ?></td>
                                <td><?php echo $select[ 6 ]; ?></td>
                                <td><?php echo $select[ 7 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2</td>
                                <td style="vertical-align:middle">Đề tài cấp Bộ*</td>
                                <td><?php echo $select[ 8 ]; ?></td>
                                <td><?php echo $select[ 9 ]; ?></td>
                                <td><?php echo $select[ 10 ]; ?></td>
                                <td><?php echo $select[ 11 ]; ?></td>
                                <td><?php echo $select[ 12 ]; ?></td>
                                <td><?php echo $select[ 13 ]; ?></td>
                                <td><?php echo $select[ 14 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">3</td>
                                <td style="vertical-align:middle">Đề tài cấp trường</td>
                                <td><?php echo $select[ 15 ]; ?></td>
                                <td><?php echo $select[ 16 ]; ?></td>
                                <td><?php echo $select[ 17 ]; ?></td>
                                <td><?php echo $select[ 18 ]; ?></td>
                                <td><?php echo $select[ 19 ]; ?></td>
                                <td><?php echo $select[ 20 ]; ?></td>
                                <td><?php echo $select[ 21 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">4</td>
                                <td colspan="2" style="vertical-align:middle">Tổng</td>
                                <td><?php echo $select[ 22 ]; ?></td>
                                <td><?php echo $select[ 23 ]; ?></td>
                                <td><?php echo $select[ 24 ]; ?></td>
                                <td><?php echo $select[ 25 ]; ?></td>
                                <td><?php echo $select[ 26 ]; ?></td>
                                <td><?php echo $select[ 27 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Cách tính: Cột 9 = cột 3 . (cột 4 + cột 5 + cột 6 + cột 7 + cột 8)</p>
                    <p>* Bao gồm đề tài cấp Bộ hoặc tương đương, đề tài nhánh cấp Nhà nước</p>
                    <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
                    <p>Tổng số đề tài quy đổi: 44,5</p>
                    <p>Tỷ số đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ (quy đổi) trên cán bộ cơ hữu: 1 đề tài/5 giảng viên cơ hữu</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>28. Doanh thu từ nghiên cứu khoa học và chuyển giao công nghệ của nhà trường trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                   <table class="table table-striped table-hover" border="1">
                       <thead>
                           <tr>
                               <th>STT</th>
                               <th>Năm</th>
                               <th>Doanh thu từ NCKH và chuyển giao công nghệ (triệu VNĐ)</th>
                               <th>Tỷ lệ doanh thu từ NCKH và chuyển giao công nghệ so với tổng kinh phí đầu vào của nhà trường (%)</th>
                               <th>Tỷ số doanh thu từ NCKH và chuyển giao công nghệ trên cán bộ cơ hữu (triệu VNĐ/ người)</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                              <td style="vertical-align:middle">1</td>
                              <td style="vertical-align:middle">2010-2011</td>
                              <td><?php echo $select[ 28 ]; ?></td>
                              <td><?php echo $select[ 29 ]; ?></td>
                              <td><?php echo $select[ 30 ]; ?></td>
                           </tr>
                           <tr>
                              <td style="vertical-align:middle">2</td>
                              <td style="vertical-align:middle">2011-2012</td>
                              <td><?php echo $select[ 31 ]; ?></td>
                              <td><?php echo $select[ 32 ]; ?></td>
                              <td><?php echo $select[ 33 ]; ?></td>
                           </tr>
                           <tr>
                              <td style="vertical-align:middle">3</td>
                              <td style="vertical-align:middle">2012-2013</td>
                              <td><?php echo $select[ 34]; ?></td>
                              <td><?php echo $select[ 35 ]; ?></td>
                              <td><?php echo $select[ 36 ]; ?></td>
                           </tr>
                           <tr>
                              <td style="vertical-align:middle">4</td>
                              <td style="vertical-align:middle">2013-2014</td>
                              <td><?php echo $select[ 37 ]; ?></td>
                              <td><?php echo $select[ 38 ]; ?></td>
                              <td><?php echo $select[ 39 ]; ?></td>
                           </tr>
                           <tr>
                              <td style="vertical-align:middle">5</td>
                              <td style="vertical-align:middle">2014-2015</td>
                              <td><?php echo $select[ 40 ]; ?></td>
                              <td><?php echo $select[ 41 ]; ?></td>
                              <td><?php echo $select[ 42 ]; ?></td>
                           </tr>
                       </tbody>
                   </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>29. Số lượng cán bộ cơ hữu của nhà trường tham gia thực hiện đề tài khoa học trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col">Số lượng đề tài</th>
                                <th colspan="3" scope="col">Số lượng cán bộ tham  gia</th>
                                <th  rowspan="2" scope="col">Ghi chú</th>
                            </tr>
                            <tr>
                                <th style="vertical-align:middle">Đề tài cấp NN</th>
                                <th style="vertical-align:middle">Đề tài cấp Bộ*</th>
                                <th style="vertical-align:middle">Đề tài cấp trường</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Từ 1 đến 3 đề tài</td>
                                <td><?php echo $select[ 43 ]; ?></td>
                                <td><?php echo $select[ 44 ]; ?></td>
                                <td><?php echo $select[ 45 ]; ?></td>
                                <td><?php echo $select[ 46 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Từ 4 đến 6 đề tài</td>
                                <td><?php echo $select[ 47  ]; ?></td>
                                <td><?php echo $select[ 48  ]; ?></td>
                                <td><?php echo $select[ 49  ]; ?></td>
                                <td><?php echo $select[ 50  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Trên 6 đề tài</td>
                                <td><?php echo $select[ 51  ]; ?></td>
                                <td><?php echo $select[ 52  ]; ?></td>
                                <td><?php echo $select[ 53  ]; ?></td>
                                <td><?php echo $select[ 54  ]; ?></td>
                            </tr>
                             <tr>
                                <td style="text-align:center; vertical-align:middle">Tổng số cán bộ tham gia</td>
                                <td><?php echo $select[ 55  ]; ?></td>
                                <td><?php echo $select[ 56  ]; ?></td>
                                <td><?php echo $select[ 57  ]; ?></td>
                                <td><?php echo $select[ 58  ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>* Bao gồm đề tài cấp Bộ hoặc tương đương, đề tài nhánh cấp Nhà nước</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>30. Số lượng sách của nhà trường được xuất bản trong 5 năm gần đây:</h4></div>
            </div>
             <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col">STT</th>
                                <th rowspan="2" scope="col">Phân loại sách</th>
                                <th rowspan="2" scope="col">Hệ số**</th>
                                <th colspan="6" scope="col">Số lượng</th>
                            </tr>
                            <tr>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                                <th>Tổng (đã quy đổi)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">1</td>
                                <td style="vertical-align:middle">Sách chuyên khảo</td>
                                <td><?php echo $select[ 59  ]; ?></td>
                                <td><?php echo $select[ 60  ]; ?></td>
                                <td><?php echo $select[ 61  ]; ?></td>
                                <td><?php echo $select[ 62  ]; ?></td>
                                <td><?php echo $select[ 63  ]; ?></td>
                                <td><?php echo $select[ 64  ]; ?></td>
                                <td><?php echo $select[ 65  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2</td>
                                <td style="vertical-align:middle">Sách giáo trình</td>
                                <td><?php echo $select[ 66  ]; ?></td>
                                <td><?php echo $select[ 67  ]; ?></td>
                                <td><?php echo $select[ 68  ]; ?></td>
                                <td><?php echo $select[ 69  ]; ?></td>
                                <td><?php echo $select[ 70  ]; ?></td>
                                <td><?php echo $select[ 71  ]; ?></td>
                                <td><?php echo $select[ 72  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">3</td>
                                <td style="vertical-align:middle">Sách tham khảo</td>
                                <td><?php echo $select[ 73  ]; ?></td>
                                <td><?php echo $select[ 74  ]; ?></td>
                                <td><?php echo $select[ 75  ]; ?></td>
                                <td><?php echo $select[ 76  ]; ?></td>
                                <td><?php echo $select[ 77  ]; ?></td>
                                <td><?php echo $select[ 78  ]; ?></td>
                                <td><?php echo $select[ 79  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">4</td>
                                <td style="vertical-align:middle">Sách hướng dẫn</td>
                                <td><?php echo $select[ 80  ]; ?></td>
                                <td><?php echo $select[ 81  ]; ?></td>
                                <td><?php echo $select[ 82  ]; ?></td>
                                <td><?php echo $select[ 83  ]; ?></td>
                                <td><?php echo $select[ 84  ]; ?></td>
                                <td><?php echo $select[ 85  ]; ?></td>
                                <td><?php echo $select[ 86  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">5</td>
                                <td colspan="2" style="vertical-align:middle">Tổng</td>
                                <td><?php echo $select[ 87  ]; ?></td>
                                <td><?php echo $select[ 88  ]; ?></td>
                                <td><?php echo $select[ 89  ]; ?></td>
                                <td><?php echo $select[ 90  ]; ?></td>
                                <td><?php echo $select[ 91  ]; ?></td>
                                <td><?php echo $select[ 92  ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học Nhà nước (có điều chỉnh).</p>
                    <p>Tổng số sách (quy đổi): 44,5</p>
                    <p>Tỷ số sách đã được xuất bản (quy đổi) trên cán bộ cơ hữu: 1/5 giảng viên</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>31. Số lượng cán bộ cơ hữu của nhà trường tham gia viết sách trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">Số lượng sách</th>
                                <th colspan="4">Số lượng cán bộ cơ hữu tham gia viết sách</th>
                            </tr>
                            <tr>
                                <th>Sách chuyên khảo</th>
                                <th>Sách giáo trình</th>
                                <th>Sách tham khảo</th>
                                <th>Sách hướng dẫn</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Từ 1 đến 3 cuốn sách</td>
                                <td><?php echo $select[ 93  ]; ?></td>
                                <td><?php echo $select[ 94  ]; ?></td>
                                <td><?php echo $select[ 95  ]; ?></td>
                                <td><?php echo $select[ 96  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Từ 4 đến 6 cuốn sách</td>
                                <td><?php echo $select[ 97  ]; ?></td>
                                <td><?php echo $select[ 98  ]; ?></td>
                                <td><?php echo $select[ 99  ]; ?></td>
                                <td><?php echo $select[ 100 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Trên 6 cuốn sách</td>
                                <td><?php echo $select[ 101 ]; ?></td>
                                <td><?php echo $select[ 102 ]; ?></td>
                                <td><?php echo $select[ 103 ]; ?></td>
                                <td><?php echo $select[ 104 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Tổng số cán bộ tham gia</td>
                                <td><?php echo $select[ 105 ]; ?></td>
                                <td><?php echo $select[ 106 ]; ?></td>
                                <td><?php echo $select[ 107 ]; ?></td>
                                <td><?php echo $select[ 108 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>32. Số lượng bài của các cán bộ cơ hữu của nhà trường được đăng tạp chí trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">STT</th>
                                <th rowspan="2">Phân loại tạp chí</th>
                                <th rowspan="2">Hệ số**</th>
                                <th colspan="6">Số lượng</th>
                            </tr>
                            <tr>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                                <th>Tổng (đã quy đổi)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">1</td>
                                <td style="vertical-align:middle">Tạp chí KH quốc tế</td>
                                <td><?php echo $select[ 109 ]; ?></td>
                                <td><?php echo $select[ 110 ]; ?></td>
                                <td><?php echo $select[ 111 ]; ?></td>
                                <td><?php echo $select[ 112 ]; ?></td>
                                <td><?php echo $select[ 113 ]; ?></td>
                                <td><?php echo $select[ 114 ]; ?></td>
                                <td><?php echo $select[ 115 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2</td>
                                <td style="vertical-align:middle">Tạp chí KH cấp Ngành trong nước</td>
                                <td><?php echo $select[ 116 ]; ?></td>
                                <td><?php echo $select[ 117 ]; ?></td>
                                <td><?php echo $select[ 118 ]; ?></td>
                                <td><?php echo $select[ 119 ]; ?></td>
                                <td><?php echo $select[ 120 ]; ?></td>
                                <td><?php echo $select[ 121 ]; ?></td>
                                <td><?php echo $select[ 122 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">3</td>
                                <td style="vertical-align:middle">Tạp chí / tập san của cấp trường</td>
                                <td><?php echo $select[ 123 ]; ?></td>
                                <td><?php echo $select[ 124 ]; ?></td>
                                <td><?php echo $select[ 125 ]; ?></td>
                                <td><?php echo $select[ 126 ]; ?></td>
                                <td><?php echo $select[ 127 ]; ?></td>
                                <td><?php echo $select[ 128 ]; ?></td>
                                <td><?php echo $select[ 129 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">4</td>
                                <td colspan="2" style="vertical-align:middle">Tổng</td>
                                <td><?php echo $select[ 130 ]; ?></td>
                                <td><?php echo $select[ 131 ]; ?></td>
                                <td><?php echo $select[ 132 ]; ?></td>
                                <td><?php echo $select[ 133 ]; ?></td>
                                <td><?php echo $select[ 134 ]; ?></td>
                                <td><?php echo $select[ 135 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
                    <p>Tổng số bài đăng tạp chí (quy đổi): 432</p>
                    <p>Tỷ số bài đăng tạp chí (quy đổi) trên cán bộ cơ hữu:  2 bài báo/ 1 giảng viên</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>33. Số lượng cán bộ cơ hữu của nhà trường tham gia viết bài đăng tạp chí trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">Số lượng CBGD có bài báo đăng trên tạp chí</th>
                                <th colspan="3">Nơi đăng</th>
                            </tr>
                            <tr>
                                <th>Tạp chí KH quốc tế</th>
                                <th>Tạp chí KH cấp Ngành trong nước</th>
                                <th>Tạp chí / tập san của cấp trường</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Từ 1 đến 5 bài báo </td>
                                <td><?php echo $select[ 136 ]; ?></td>
                                <td><?php echo $select[ 137 ]; ?></td>
                                <td><?php echo $select[ 138 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Từ 6 đến 10 bài báo </td>
                                <td><?php echo $select[ 139 ]; ?></td>
                                <td><?php echo $select[ 140 ]; ?></td>
                                <td><?php echo $select[ 141 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Từ 11 đến 15 bài báo </td>
                                <td><?php echo $select[ 142 ]; ?></td>
                                <td><?php echo $select[ 143 ]; ?></td>
                                <td><?php echo $select[ 144 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Trên 15 bài báo </td>
                                <td><?php echo $select[ 145 ]; ?></td>
                                <td><?php echo $select[ 146 ]; ?></td>
                                <td><?php echo $select[ 147 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Tổng số cán bộ tham gia</td>
                                <td><?php echo $select[ 148 ]; ?></td>
                                <td><?php echo $select[ 149 ]; ?></td>
                                <td><?php echo $select[ 150 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>34. Số lượng báo cáo khoa học do cán bộ cơ hữu của nhà trường báo cáo tại các hội nghị, hội thảo, được đăng toàn văn trong tuyển tập công trình hay kỷ yếu trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">STT</th>
                                <th rowspan="2">Phân loại hội thảo</th>
                                <th rowspan="2">Hệ số**</th>
                                <th colspan="6">Số lượng</th>
                            </tr>
                            <tr>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                                <th>Tổng (đã quy đổi)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">1</td>
                                <td style="vertical-align:middle">Hội thảo quốc tế</td>
                                <td><?php echo $select[ 151 ]; ?></td>
                                <td><?php echo $select[ 152 ]; ?></td>
                                <td><?php echo $select[ 153 ]; ?></td>
                                <td><?php echo $select[ 154 ]; ?></td>
                                <td><?php echo $select[ 155 ]; ?></td>
                                <td><?php echo $select[ 156 ]; ?></td>
                                <td><?php echo $select[ 157 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2</td>
                                <td style="vertical-align:middle">Hội thảo trong nước</td>
                                <td><?php echo $select[ 158 ]; ?></td>
                                <td><?php echo $select[ 159 ]; ?></td>
                                <td><?php echo $select[ 160 ]; ?></td>
                                <td><?php echo $select[ 161 ]; ?></td>
                                <td><?php echo $select[ 162 ]; ?></td>
                                <td><?php echo $select[ 163 ]; ?></td>
                                <td><?php echo $select[ 164 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">3</td>
                                <td style="vertical-align:middle">Hội thảo cấp trường</td>
                                <td><?php echo $select[ 165 ]; ?></td>
                                <td><?php echo $select[ 166 ]; ?></td>
                                <td><?php echo $select[ 167 ]; ?></td>
                                <td><?php echo $select[ 168 ]; ?></td>
                                <td><?php echo $select[ 169 ]; ?></td>
                                <td><?php echo $select[ 170 ]; ?></td>
                                <td><?php echo $select[ 171 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">4</td>
                                <td colspan="2" style="vertical-align:middle">Tổng</td>
                                <td><?php echo $select[ 172 ]; ?></td>
                                <td><?php echo $select[ 173 ]; ?></td>
                                <td><?php echo $select[ 174 ]; ?></td>
                                <td><?php echo $select[ 175 ]; ?></td>
                                <td><?php echo $select[ 176 ]; ?></td>
                                <td><?php echo $select[ 177 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <p><i>(Khi tính hội thảo trong nước sẽ không bao gồm các hội thảo của trường vì đã được tính 1 lần)</i></p>
                    <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
                    <p>Tổng số bài báo cáo (quy đổi): 219 bài</p>
                    <p>Tỷ số bài báo cáo (quy đổi) trên cán bộ cơ hữu:  0.98 bài/ giảng viên</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>35. Số lượng cán bộ cơ hữu của nhà trường có báo cáo khoa học tại các hội nghị, hội thảo được đăng toàn văn trong tuyển tập công trình hay kỷ yếu trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">Số lượng CB có báo cáo khoa học tại các hội nghị, hội thảo</th>
                                <th colspan="3">Cấp hội thảo</th>
                            </tr>
                            <tr>
                                <th>Hội thảo quốc tế</th>
                                <th>Hội thảo trong nước</th>
                                <th>Hội thảo ở trường</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">Từ 1 đến 5 báo cáo</td>
                                <td><?php echo $select[ 178 ]; ?></td>
                                <td><?php echo $select[ 179 ]; ?></td>
                                <td><?php echo $select[ 180 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Từ 6 đến 10 báo cáo</td>
                                <td><?php echo $select[ 181 ]; ?></td>
                                <td><?php echo $select[ 182 ]; ?></td>
                                <td><?php echo $select[ 183 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Từ 11 đến 15 báo cáotd>
                                <td><?php echo $select[ 184 ]; ?></td>
                                <td><?php echo $select[ 185 ]; ?></td>
                                <td><?php echo $select[ 186 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">Trên 15 báo cáo</td>
                                <td><?php echo $select[ 187 ]; ?></td>
                                <td><?php echo $select[ 188 ]; ?></td>
                                <td><?php echo $select[ 189 ]; ?></td>
                            </tr>
                            <tr>
                                <td>Tổng số cán bộ tham gia</td>
                                <td><?php echo $select[ 190 ]; ?></td>
                                <td><?php echo $select[ 191 ]; ?></td>
                                <td><?php echo $select[ 192 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>(Khi tính Hội thảo trong nước sẽ không bao gồm các Hội thảo của trường)</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>36. Số bằng phát minh, sáng chế được cấp trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th>Số lượng đề tài</th>
                                <th>Số bằng phát minh, sáng chế được cấp (ghi rõ nơi cấp, thời gian cấp, người được cấp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">2010-2011</td>
                                <td><?php echo $select[ 193 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2011-2012</td>
                                <td><?php echo $select[ 194 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2012-2013</td>
                                <td><?php echo $select[ 195 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2013-2014</td>
                                <td><?php echo $select[ 196 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2014-2015</td>
                                <td><?php echo $select[ 197 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>37. Nghiên cứu khoa học của sinh viên</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>37.1 Số lượng sinh viên của nhà trường tham gia thực hiện đề tài khoa học trong 5 năm gần đây: </h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col">Số lượng đề tài</th>
                                <th colspan="3" scope="col">Số lượng cán bộ tham  gia</th>
                                <th  rowspan="2" scope="col">Ghi chú</th>
                            </tr>
                            <tr>
                                <th >Đề tài cấp NN</th>
                                <th >Đề tài cấp Bộ*</th>
                                <th >Đề tài cấp trường</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Từ 1 đến 3 đề tài</td>
                                <td><?php echo $select[ 198 ]; ?></td>
                                <td><?php echo $select[ 199 ]; ?></td>
                                <td><?php echo $select[ 200 ]; ?></td>
                                <td><?php echo $select[ 201 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Từ 4 đến 6 đề tài</td>
                                <td><?php echo $select[ 202 ]; ?></td>
                                <td><?php echo $select[ 203 ]; ?></td>
                                <td><?php echo $select[ 204 ]; ?></td>
                                <td><?php echo $select[ 205 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">Trên 6 đề tài</td>
                                <td><?php echo $select[ 206 ]; ?></td>
                                <td><?php echo $select[ 207 ]; ?></td>
                                <td><?php echo $select[ 208 ]; ?></td>
                                <td><?php echo $select[ 209 ]; ?></td>
                            </tr>
                             <tr>
                                <td style="text-align:center; vertical-align:middle">Tổng số sinh viên tham gia</td>
                                <td><?php echo $select[ 210 ]; ?></td>
                                <td><?php echo $select[ 211 ]; ?></td>
                                <td><?php echo $select[ 212 ]; ?></td>
                                <td><?php echo $select[ 213 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>*Bao gồm đề tài cấp Bộ hoặc tương đương, đề tài nhánh cấp Nhà nước</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <h4>37.2 Thành tích nghiên cứu khoa học của sinh viên:</h4>
                    <p><i>(Thống kê các giải thưởng nghiên cứu khoa học, sáng tạo, các bài báo, công trình được công bố)</i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">STT</th>
                                <th rowspan="2">Thành tích nghiên cứu khoa học</th>
                                <th colspan="5">Số lượng</th>
                            </tr>
                            <tr>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="vertical-align:middle">1</td>
                                <td style="vertical-align:middle">Số giải thưởng nghiên cứu khoa học, sáng tạo</td>
                                <td><?php echo $select[ 214 ]; ?></td>
                                <td><?php echo $select[ 215 ]; ?></td>
                                <td><?php echo $select[ 216 ]; ?></td>
                                <td><?php echo $select[ 217 ]; ?></td>
                                <td><?php echo $select[ 218 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="vertical-align:middle">2</td>
                                <td style="vertical-align:middle">Số bài báo được đăng, công trình được công bố</td>
                                <td><?php echo $select[ 219 ]; ?></td>
                                <td><?php echo $select[ 220 ]; ?></td>
                                <td><?php echo $select[ 221 ]; ?></td>
                                <td><?php echo $select[ 222 ]; ?></td>
                                <td><?php echo $select[ 223 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
      <input type="submit" name="update_lai_trang5" value="Cập nhật" class="btn btn-primary">
    </form>
    </div>
</div>
<?php } ?>
<?php get_template_part('csgd/pagination'); ?>