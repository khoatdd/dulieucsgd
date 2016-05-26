<?php if ($_SESSION['insert_p3'] != 1 && !isset($_POST['submit_trang3'])) { ?>
<div class="panel panel-primary">
  	<div class="panel-heading">
   		<h2 class="panel-title">III. Cán bộ, giảng viên, nhân viên của Trường</h2>
 	</div>
  	<div class="panel-body">
    	<form action="" method="POST" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12"><h4>17. Thống kê số lượng cán bộ, giảng viên và nhân viên (gọi chung là cán bộ) của nhà trường</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="text-align:center">STT</th>
                                <th style="text-align:center">Phân loại</th>
                                <th style="text-align:center">Nam</th>
                                <th style="text-align:center">Nữ</th>
                                <th style="text-align:center">Tổng số</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>I</td>
                                <td style="text-align:left;"><b>Cán bộ cơ hữu</b></td>
                                <td><input type="text" name="III17a_1" class="form-control"></td>
                                <td><input type="text" name="III17a_2" class="form-control"></td>
                                <td><input type="text" name="III17a_3" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>I.1</td>
                                <td style="text-align:left;padding-left:30px;">Cán bộ trong biên chế</td>
                                <td><input type="text" name="III17b_1" class="form-control"></td>
                                <td><input type="text" name="III17b_2" class="form-control"></td>
                                <td><input type="text" name="III17b_3" class="form-control"></td>
                            </tr>
                            <tr>
                                <td >I.2</td>
                                <td style="text-align:left;padding-left:30px;">Cán bộ hợp đồng dài hạn (từ 1 năm trở lên) và hợp đồng không xác định thời hạn</td>
                                <td><input type="text" name="III17c_1" class="form-control"></td>
                                <td><input type="text" name="III17c_2" class="form-control"></td>
                                <td><input type="text" name="III17c_3" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>II</td>
                                <td style="text-align:left"><b>Các cán bộ khác: </b>Hợp đồng ngắn hạn (dưới 1 năm, bao gồm cả giảng viên thỉnh giảng )
                                </td>
                                <td><input type="text" name="III17d_1" class="form-control"></td>
                                <td><input type="text" name="III17d_2" class="form-control"></td>
                                <td><input type="text" name="III17d_3" class="form-control"></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><b>Tổng số</b></td>
                                <td><input type="text" name="III17e_1" class="form-control"></td>
                                <td><input type="text" name="III17e_2" class="form-control"></td>
                                <td><input type="text" name="III17e_3" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                    <i style="text-align:justify;font-size:14px">
                        <p> 
                            Cán bộ cơ hữu là cán bộ quản lý, giảng viên, nhân viên trong biên chế (đối với các trường công lập) và cán bộ hợp đồng dài hạn (từ 1 năm trở lên) hoặc cán bộ hợp đồng không xác định thời hạn theo quy định của Luật lao động sửa đổi.
                            Giảng viên thỉnh giảng là cán bộ ở các cơ quan khác hoặc cán bộ nghỉ hưu hoặc diện tự do được nhà trường mời tham gia giảng dạy theo những chuyên đề, khoá học ngắn hạn, môn học, thông thường được ký các hợp đồng thời vụ, hợp đồng ngắn hạn (dưới 1 năm) theo quy định của Luật lao động sửa đổi.
                        </p>
                        <p>  
                            Cán bộ cơ hữu là cán bộ quản lý, giảng viên, nhân viên trong biên chế (đối với các trường công lập) và cán bộ hợp đồng dài hạn (từ 1 năm trở lên) hoặc cán bộ hợp đồng không xác định thời hạn theo quy định của Luật lao động sửa đổi.
                            Giảng viên thỉnh giảng là cán bộ ở các cơ quan khác hoặc cán bộ nghỉ hưu hoặc diện tự do được nhà trường mời tham gia giảng dạy theo những chuyên đề, khoá học ngắn hạn, môn học, thông thường được ký các hợp đồng thời vụ, hợp đồng ngắn hạn (dưới 1 năm) theo quy định của Luật lao động sửa đổi.
                        </p>
                    </i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>18. Thống kê, phân loại giảng viên <i>(chỉ tính những giảng viên trực tiếp giảng dạy trong 5 năm gần đây)</i>:</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                              <tr>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">STT</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Trình độ, học vị, chức danh</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Số lượng giảng viên</th>
                                <th colspan="3" scope="col" style="text-align:center; vertical-align:middle">Giảng viên cơ hữu</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên thỉnh giảng trong nước</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên quốc tế</th>
                              </tr>
                              <tr>
                                <th scope="col" style="text-align:center; vertical-align:middle">GV trong biên chế trực tiếp giảng dạy</th>
                                <th scope="col" style="text-align:center; vertical-align:middle">GV hợp đồng dài hạn  trực tiếp giảng dạy</th>
                                <th scope="col" style="text-align:center; vertical-align:middle">Giảng viên kiêm nhiệm là cán bộ quản lý</th>
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
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Giáo sư, Viện sĩ</td>
                                <td><input type="text" name="III18_1a_1" class="form-control"></td>
                                <td><input type="text" name="III18_1a_2" class="form-control"></td>
                                <td><input type="text" name="III18_1a_3" class="form-control"></td>
                                <td><input type="text" name="III18_1a_4" class="form-control"></td>
                                <td><input type="text" name="III18_1a_5" class="form-control"></td>
                                <td><input type="text" name="III18_1a_6" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Phó Giáo sư</td>
                                <td><input type="text" name="III18_1b_1" class="form-control"></td>
                                <td><input type="text" name="III18_1b_2" class="form-control"></td>
                                <td><input type="text" name="III18_1b_3" class="form-control"></td>
                                <td><input type="text" name="III18_1b_4" class="form-control"></td>
                                <td><input type="text" name="III18_1b_5" class="form-control"></td>
                                <td><input type="text" name="III18_1b_6" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tiến sĩ khoa học</td>
                                <td><input type="text" name="III18_1c_1" class="form-control"></td>
                                <td><input type="text" name="III18_1c_2" class="form-control"></td>
                                <td><input type="text" name="III18_1c_3" class="form-control"></td>
                                <td><input type="text" name="III18_1c_4" class="form-control"></td>
                                <td><input type="text" name="III18_1c_5" class="form-control"></td>
                                <td><input type="text" name="III18_1c_6" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tiến sĩ</td>
                                <td><input type="text" name="III18_1d_1" class="form-control"></td>
                                <td><input type="text" name="III18_1d_2" class="form-control"></td>
                                <td><input type="text" name="III18_1d_3" class="form-control"></td>
                                <td><input type="text" name="III18_1d_4" class="form-control"></td>
                                <td><input type="text" name="III18_1d_5" class="form-control"></td>
                                <td><input type="text" name="III18_1d_6" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Thạc sĩ</td>
                                <td><input type="text" name="III18_1e_1" class="form-control"></td>
                                <td><input type="text" name="III18_1e_2" class="form-control"></td>
                                <td><input type="text" name="III18_1e_3" class="form-control"></td>
                                <td><input type="text" name="III18_1e_4" class="form-control"></td>
                                <td><input type="text" name="III18_1e_5" class="form-control"></td>
                                <td><input type="text" name="III18_1e_6" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Đại học</td>
                                <td><input type="text" name="III18_1f_1" class="form-control"></td>
                                <td><input type="text" name="III18_1f_2" class="form-control"></td>
                                <td><input type="text" name="III18_1f_3" class="form-control"></td>
                                <td><input type="text" name="III18_1f_4" class="form-control"></td>
                                <td><input type="text" name="III18_1f_5" class="form-control"></td>
                                <td><input type="text" name="III18_1f_6" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Cao đẳng</td>
                                <td><input type="text" name="III18_1g_1" class="form-control"></td>
                                <td><input type="text" name="III18_1g_2" class="form-control"></td>
                                <td><input type="text" name="III18_1g_3" class="form-control"></td>
                                <td><input type="text" name="III18_1g_4" class="form-control"></td>
                                <td><input type="text" name="III18_1g_5" class="form-control"></td>
                                <td><input type="text" name="III18_1g_6" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Trung cấp</td>
                                <td><input type="text" name="III18_1h_1" class="form-control"></td>
                                <td><input type="text" name="III18_1h_2" class="form-control"></td>
                                <td><input type="text" name="III18_1h_3" class="form-control"></td>
                                <td><input type="text" name="III18_1h_4" class="form-control"></td>
                                <td><input type="text" name="III18_1h_5" class="form-control"></td>
                                <td><input type="text" name="III18_1h_6" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Trình độ khác</td>
                                <td><input type="text" name="III18_1i_1" class="form-control"></td>
                                <td><input type="text" name="III18_1i_2" class="form-control"></td>
                                <td><input type="text" name="III18_1i_3" class="form-control"></td>
                                <td><input type="text" name="III18_1i_4" class="form-control"></td>
                                <td><input type="text" name="III18_1i_5" class="form-control"></td>
                                <td><input type="text" name="III18_1i_6" class="form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2">Tổng số</td>
                                <td><input type="text" name="III18_1j_1" class="form-control"></td>
                                <td><input type="text" name="III18_1j_2" class="form-control"></td>
                                <td><input type="text" name="III18_1j_3" class="form-control"></td>
                                <td><input type="text" name="III18_1j_4" class="form-control"></td>
                                <td><input type="text" name="III18_1j_5" class="form-control"></td>
                                <td><input type="text" name="III18_1j_6" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>(Khi tính số lượng các TSKH, TS thì không bao gồm những giảng viên vừa có học vị vừa có chức danh khoa học vì đã tính ở 2 dòng trên)</p>
                    <p>Tổng số giảng viên cơ hữu = Cột (3) - cột (7) = 224 người</p>
                    <p>Tỷ lệ giảng viên cơ hữu trên tổng số cán bộ cơ hữu: 66%</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                              <tr>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">STT</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Trình độ, học vị, chức danh</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Hệ số quy đổi</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Số lượng giảng viên</th>
                                <th colspan="3" scope="col" style="text-align:center; vertical-align:middle">Giảng viên cơ hữu</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên thỉnh giảng trong nước</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên quốc tế</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên quy đổi</th>
                              </tr>
                              <tr>
                                <th scope="col" style="text-align:center; vertical-align:middle">GV trong biên chế trực tiếp giảng dạy</th>
                                <th scope="col" style="text-align:center; vertical-align:middle">GV hợp đồng dài hạn  trực tiếp giảng dạy</th>
                                <th scope="col" style="text-align:center; vertical-align:middle">Giảng viên kiêm nhiệm là cán bộ quản lý</th>
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
                                <td>(10)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Hệ số quy đổi</td>
                                <td></td>
                                <td></td>
                                <td>1,0</td>
                                <td>1,0</td>
                                <td>0,3</td>
                                <td>0,2</td>
                                <td>0,2</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Giáo sư</td>
                                <td><input type="text" name="III18_2a_1" class="form-control"></td>
                                <td><input type="text" name="III18_2a_2" class="form-control"></td>
                                <td><input type="text" name="III18_2a_3" class="form-control"></td>
                                <td><input type="text" name="III18_2a_4" class="form-control"></td>
                                <td><input type="text" name="III18_2a_5" class="form-control"></td>
                                <td><input type="text" name="III18_2a_6" class="form-control"></td>
                                <td><input type="text" name="III18_2a_7" class="form-control"></td>
                                <td><input type="text" name="III18_2a_8" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Phó Giáo sư</td>
                                <td><input type="text" name="III18_2b_1" class="form-control"></td>
                                <td><input type="text" name="III18_2b_2" class="form-control"></td>
                                <td><input type="text" name="III18_2b_3" class="form-control"></td>
                                <td><input type="text" name="III18_2b_4" class="form-control"></td>
                                <td><input type="text" name="III18_2b_5" class="form-control"></td>
                                <td><input type="text" name="III18_2b_6" class="form-control"></td>
                                <td><input type="text" name="III18_2b_7" class="form-control"></td>
                                <td><input type="text" name="III18_2b_8" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tiến sĩ khoa học</td>
                                <td><input type="text" name="III18_2c_1" class="form-control"></td>
                                <td><input type="text" name="III18_2c_2" class="form-control"></td>
                                <td><input type="text" name="III18_2c_3" class="form-control"></td>
                                <td><input type="text" name="III18_2c_4" class="form-control"></td>
                                <td><input type="text" name="III18_2c_5" class="form-control"></td>
                                <td><input type="text" name="III18_2c_6" class="form-control"></td>
                                <td><input type="text" name="III18_2c_7" class="form-control"></td>
                                <td><input type="text" name="III18_2c_8" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tiến sĩ</td>
                                <td><input type="text" name="III18_2d_1" class="form-control"></td>
                                <td><input type="text" name="III18_2d_2" class="form-control"></td>
                                <td><input type="text" name="III18_2d_3" class="form-control"></td>
                                <td><input type="text" name="III18_2d_4" class="form-control"></td>
                                <td><input type="text" name="III18_2d_5" class="form-control"></td>
                                <td><input type="text" name="III18_2d_6" class="form-control"></td>
                                <td><input type="text" name="III18_2d_7" class="form-control"></td>
                                <td><input type="text" name="III18_2d_8" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Thạc sĩ</td>
                                <td><input type="text" name="III18_2e_1" class="form-control"></td>
                                <td><input type="text" name="III18_2e_2" class="form-control"></td>
                                <td><input type="text" name="III18_2e_3" class="form-control"></td>
                                <td><input type="text" name="III18_2e_4" class="form-control"></td>
                                <td><input type="text" name="III18_2e_5" class="form-control"></td>
                                <td><input type="text" name="III18_2e_6" class="form-control"></td>
                                <td><input type="text" name="III18_2e_7" class="form-control"></td>
                                <td><input type="text" name="III18_2e_8" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Đại học</td>
                                <td><input type="text" name="III18_2f_1" class="form-control"></td>
                                <td><input type="text" name="III18_2f_2" class="form-control"></td>
                                <td><input type="text" name="III18_2f_3" class="form-control"></td>
                                <td><input type="text" name="III18_2f_4" class="form-control"></td>
                                <td><input type="text" name="III18_2f_5" class="form-control"></td>
                                <td><input type="text" name="III18_2f_6" class="form-control"></td>
                                <td><input type="text" name="III18_2f_7" class="form-control"></td>
                                <td><input type="text" name="III18_2f_8" class="form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="3">Tổng số</td>
                                <td><input type="text" name="III18_2g_2" class="form-control"></td>
                                <td><input type="text" name="III18_2g_3" class="form-control"></td>
                                <td><input type="text" name="III18_2g_4" class="form-control"></td>
                                <td><input type="text" name="III18_2g_5" class="form-control"></td>
                                <td><input type="text" name="III18_2g_6" class="form-control"></td>
                                <td><input type="text" name="III18_2g_7" class="form-control"></td>
                                <td><input type="text" name="III18_2g_8" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>19. Thống kê, phân loại giảng viên cơ hữu theo trình độ, giới tính và độ tuổi (số người):</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">STT</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Trình độ/học vị</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Số lượng</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Tỷ lệ (%)</th>
                                <th colspan="2" scope="col" style="text-align:center; vertical-align:middle">Phân loại theo giới tính</th>
                                <th colspan="5" scope="col" style="text-align:center; vertical-align:middle">Phân loại theo tuổi (người)</th>
                            </tr>
                            <tr>
                                <th style="text-align:center; vertical-align:middle">Nam</th>
                                <th style="text-align:center; vertical-align:middle">Nữ</th>
                                <th style="text-align:center; vertical-align:middle"><30</th>
                                <th style="text-align:center; vertical-align:middle">30-40</th>
                                <th style="text-align:center; vertical-align:middle">41-50</th>
                                <th style="text-align:center; vertical-align:middle">51-60</th>
                                <th style="text-align:center; vertical-align:middle">>60</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">1</td>
                                <td style="text-align:center; vertical-align:middle">Giáo sư, Viện sĩ</td>
                                <td><input type="text" name="III19a_1" class="form-control"></td>
                                <td><input type="text" name="III19a_2" class="form-control"></td>
                                <td><input type="text" name="III19a_3" class="form-control"></td>
                                <td><input type="text" name="III19a_4" class="form-control"></td>
                                <td><input type="text" name="III19a_5" class="form-control"></td>
                                <td><input type="text" name="III19a_6" class="form-control"></td>
                                <td><input type="text" name="III19a_7" class="form-control"></td>
                                <td><input type="text" name="III19a_8" class="form-control"></td>
                                <td><input type="text" name="III19a_9" class="form-control"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2</td>
                                <td style="text-align:center; vertical-align:middle">Phó Giáo sư</td>
                                <td><input type="text" name="III19b_1" class="form-control"></td>
                                <td><input type="text" name="III19b_2" class="form-control"></td>
                                <td><input type="text" name="III19b_3" class="form-control"></td>
                                <td><input type="text" name="III19b_4" class="form-control"></td>
                                <td><input type="text" name="III19b_5" class="form-control"></td>
                                <td><input type="text" name="III19b_6" class="form-control"></td>
                                <td><input type="text" name="III19b_7" class="form-control"></td>
                                <td><input type="text" name="III19b_8" class="form-control"></td>
                                <td><input type="text" name="III19b_9" class="form-control"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">3</td>
                                <td style="text-align:center; vertical-align:middle">Tiến sĩ khoa học</td>
                                <td><input type="text" name="III19c_1" class="form-control"></td>
                                <td><input type="text" name="III19c_2" class="form-control"></td>
                                <td><input type="text" name="III19c_3" class="form-control"></td>
                                <td><input type="text" name="III19c_4" class="form-control"></td>
                                <td><input type="text" name="III19c_5" class="form-control"></td>
                                <td><input type="text" name="III19c_6" class="form-control"></td>
                                <td><input type="text" name="III19c_7" class="form-control"></td>
                                <td><input type="text" name="III19c_8" class="form-control"></td>
                                <td><input type="text" name="III19c_9" class="form-control"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">4</td>
                                <td style="text-align:center; vertical-align:middle">Tiến sĩ</td>
                                <td><input type="text" name="III19d_1" class="form-control"></td>
                                <td><input type="text" name="III19d_2" class="form-control"></td>
                                <td><input type="text" name="III19d_3" class="form-control"></td>
                                <td><input type="text" name="III19d_4" class="form-control"></td>
                                <td><input type="text" name="III19d_5" class="form-control"></td>
                                <td><input type="text" name="III19d_6" class="form-control"></td>
                                <td><input type="text" name="III19d_7" class="form-control"></td>
                                <td><input type="text" name="III19d_8" class="form-control"></td>
                                <td><input type="text" name="III19d_9" class="form-control"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">5</td>
                                <td style="text-align:center; vertical-align:middle">Thạc sĩ</td>
                                <td><input type="text" name="III19e_1" class="form-control"></td>
                                <td><input type="text" name="III19e_2" class="form-control"></td>
                                <td><input type="text" name="III19e_3" class="form-control"></td>
                                <td><input type="text" name="III19e_4" class="form-control"></td>
                                <td><input type="text" name="III19e_5" class="form-control"></td>
                                <td><input type="text" name="III19e_6" class="form-control"></td>
                                <td><input type="text" name="III19e_7" class="form-control"></td>
                                <td><input type="text" name="III19e_8" class="form-control"></td>
                                <td><input type="text" name="III19e_9" class="form-control"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">6</td>
                                <td style="text-align:center; vertical-align:middle">Đại học</td>
                                <td><input type="text" name="III19f_1" class="form-control"></td>
                                <td><input type="text" name="III19f_2" class="form-control"></td>
                                <td><input type="text" name="III19f_3" class="form-control"></td>
                                <td><input type="text" name="III19f_4" class="form-control"></td>
                                <td><input type="text" name="III19f_5" class="form-control"></td>
                                <td><input type="text" name="III19f_6" class="form-control"></td>
                                <td><input type="text" name="III19f_7" class="form-control"></td>
                                <td><input type="text" name="III19f_8" class="form-control"></td>
                                <td><input type="text" name="III19f_9" class="form-control"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">7</td>
                                <td style="text-align:center; vertical-align:middle">Cao đẳng</td>
                                <td><input type="text" name="III19g_1" class="form-control"></td>
                                <td><input type="text" name="III19g_2" class="form-control"></td>
                                <td><input type="text" name="III19g_3" class="form-control"></td>
                                <td><input type="text" name="III19g_4" class="form-control"></td>
                                <td><input type="text" name="III19g_5" class="form-control"></td>
                                <td><input type="text" name="III19g_6" class="form-control"></td>
                                <td><input type="text" name="III19g_7" class="form-control"></td>
                                <td><input type="text" name="III19g_8" class="form-control"></td>
                                <td><input type="text" name="III19g_9" class="form-control"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">8</td>
                                <td style="text-align:center; vertical-align:middle">Trung cấp</td>
                                <td><input type="text" name="III19h_1" class="form-control"></td>
                                <td><input type="text" name="III19h_2" class="form-control"></td>
                                <td><input type="text" name="III19h_3" class="form-control"></td>
                                <td><input type="text" name="III19h_4" class="form-control"></td>
                                <td><input type="text" name="III19h_5" class="form-control"></td>
                                <td><input type="text" name="III19h_6" class="form-control"></td>
                                <td><input type="text" name="III19h_7" class="form-control"></td>
                                <td><input type="text" name="III19h_8" class="form-control"></td>
                                <td><input type="text" name="III19h_9" class="form-control"></td>
                            </tr>
                             <tr>
                                <td style="text-align:center; vertical-align:middle">9</td>
                                <td style="text-align:center; vertical-align:middle">Trình độ khác</td>
                                <td><input type="text" name="III19i_1" class="form-control"></td>
                                <td><input type="text" name="III19i_2" class="form-control"></td>
                                <td><input type="text" name="III19i_3" class="form-control"></td>
                                <td><input type="text" name="III19i_4" class="form-control"></td>
                                <td><input type="text" name="III19i_5" class="form-control"></td>
                                <td><input type="text" name="III19i_6" class="form-control"></td>
                                <td><input type="text" name="III19i_7" class="form-control"></td>
                                <td><input type="text" name="III19i_8" class="form-control"></td>
                                <td><input type="text" name="III19i_9" class="form-control"></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center; vertical-align:middle">Tổng</td>
                                <td><input type="text" name="III19j_1" class="form-control"></td>
                                <td><input type="text" name="III19j_2" class="form-control"></td>
                                <td><input type="text" name="III19j_3" class="form-control"></td>
                                <td><input type="text" name="III19j_4" class="form-control"></td>
                                <td><input type="text" name="III19j_5" class="form-control"></td>
                                <td><input type="text" name="III19j_6" class="form-control"></td>
                                <td><input type="text" name="III19j_7" class="form-control"></td>
                                <td><input type="text" name="III19j_8" class="form-control"></td>
                                <td><input type="text" name="III19j_9" class="form-control"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <input type="submit" name="submit_trang3" value="Cập nhật" class="btn btn-primary">
		</form>
  	</div>
</div>
<?php  } else if (isset($_POST['submit_trang3'])) { 
    $trang = $_GET['trang'];
    $trangtiep = $trang+1;
?>
<!-- Nếu đã đăng ký rồi thì chỉ xem thông tin -->
    <div class="row">
        <div class="col-md-4 col-md-offset-4 text-center">
            <a href="<?php echo home_url().'/thong-tin-csgd/?act=insert&trang='.$trang; ?>" class="btn btn-primary">Xem lại thông tin</a>
            <a href="<?php echo home_url().'/thong-tin-csgd/?act=insert&trang='.$trangtiep; ?>" class="btn btn-primary">Qua trang tiếp theo</a>
        </div>
    </div>
<?php } else  {?>
<!-- Nếu đã đăng ký rồi thì chỉ xem thông tin -->
<?php
$ID = $_SESSION['ID'];
$select = $wpdb->get_row("SELECT * FROM csgd_iii_canbogiangviennhanvien WHERE ID= $ID",ARRAY_N); ?>
<div class="panel panel-primary">
    <div class="panel-heading">
        <h2 class="panel-title">III. Cán bộ, giảng viên, nhân viên của Trường</h2>
    </div>
    <div class="panel-body">
        <form action="" method="POST" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12"><h4>17. Thống kê số lượng cán bộ, giảng viên và nhân viên (gọi chung là cán bộ) của nhà trường</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th style="text-align:center">STT</th>
                                <th style="text-align:center">Phân loại</th>
                                <th style="text-align:center">Nam</th>
                                <th style="text-align:center">Nữ</th>
                                <th style="text-align:center">Tổng số</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>I</td>
                                <td style="text-align:left;"><b>Cán bộ cơ hữu</b></td>
                                <td><?php echo $select[1]; ?></td>
                                <td><?php echo $select[2]; ?></td>
                                <td><?php echo $select[3]; ?></td>
                            </tr>
                            <tr>
                                <td>I.1</td>
                                <td style="text-align:left;padding-left:30px;">Cán bộ trong biên chế</td>
                                <td><?php echo $select[4]; ?></td>
                                <td><?php echo $select[5]; ?></td>
                                <td><?php echo $select[6]; ?></td>
                            </tr>
                            <tr>
                                <td >I.2</td>
                                <td style="text-align:left;padding-left:30px;">Cán bộ hợp đồng dài hạn (từ 1 năm trở lên) và hợp đồng không xác định thời hạn</td>
                                <td><?php echo $select[7]; ?></td>
                                <td><?php echo $select[8]; ?></td>
                                <td><?php echo $select[9]; ?></td>
                            </tr>
                            <tr>
                                <td>II</td>
                                <td style="text-align:left"><b>Các cán bộ khác: </b>Hợp đồng ngắn hạn (dưới 1 năm, bao gồm cả giảng viên thỉnh giảng )
                                </td>
                                <td><?php echo $select[10]; ?></td>
                                <td><?php echo $select[11]; ?></td>
                                <td><?php echo $select[12]; ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td><b>Tổng số</b></td>
                                <td><?php echo $select[13]; ?></td>
                                <td><?php echo $select[14]; ?></td>
                                <td><?php echo $select[15]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <i style="text-align:justify;font-size:14px">
                        <p> 
                            Cán bộ cơ hữu là cán bộ quản lý, giảng viên, nhân viên trong biên chế (đối với các trường công lập) và cán bộ hợp đồng dài hạn (từ 1 năm trở lên) hoặc cán bộ hợp đồng không xác định thời hạn theo quy định của Luật lao động sửa đổi.
                            Giảng viên thỉnh giảng là cán bộ ở các cơ quan khác hoặc cán bộ nghỉ hưu hoặc diện tự do được nhà trường mời tham gia giảng dạy theo những chuyên đề, khoá học ngắn hạn, môn học, thông thường được ký các hợp đồng thời vụ, hợp đồng ngắn hạn (dưới 1 năm) theo quy định của Luật lao động sửa đổi.
                        </p>
                        <p>  
                            Cán bộ cơ hữu là cán bộ quản lý, giảng viên, nhân viên trong biên chế (đối với các trường công lập) và cán bộ hợp đồng dài hạn (từ 1 năm trở lên) hoặc cán bộ hợp đồng không xác định thời hạn theo quy định của Luật lao động sửa đổi.
                            Giảng viên thỉnh giảng là cán bộ ở các cơ quan khác hoặc cán bộ nghỉ hưu hoặc diện tự do được nhà trường mời tham gia giảng dạy theo những chuyên đề, khoá học ngắn hạn, môn học, thông thường được ký các hợp đồng thời vụ, hợp đồng ngắn hạn (dưới 1 năm) theo quy định của Luật lao động sửa đổi.
                        </p>
                    </i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>18. Thống kê, phân loại giảng viên <i>(chỉ tính những giảng viên trực tiếp giảng dạy trong 5 năm gần đây)</i>:</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                              <tr>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">STT</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Trình độ, học vị, chức danh</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Số lượng giảng viên</th>
                                <th colspan="3" scope="col" style="text-align:center; vertical-align:middle">Giảng viên cơ hữu</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên thỉnh giảng trong nước</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên quốc tế</th>
                              </tr>
                              <tr>
                                <th scope="col" style="text-align:center; vertical-align:middle">GV trong biên chế trực tiếp giảng dạy</th>
                                <th scope="col" style="text-align:center; vertical-align:middle">GV hợp đồng dài hạn  trực tiếp giảng dạy</th>
                                <th scope="col" style="text-align:center; vertical-align:middle">Giảng viên kiêm nhiệm là cán bộ quản lý</th>
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
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Giáo sư, Viện sĩ</td>
                                <td><?php echo $select[16]; ?></td>
                                <td><?php echo $select[17]; ?></td>
                                <td><?php echo $select[18]; ?></td>
                                <td><?php echo $select[19]; ?></td>
                                <td><?php echo $select[20]; ?></td>
                                <td><?php echo $select[21]; ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Phó Giáo sư</td>
                                <td><?php echo $select[22]; ?></td>
                                <td><?php echo $select[23]; ?></td>
                                <td><?php echo $select[24]; ?></td>
                                <td><?php echo $select[25]; ?></td>
                                <td><?php echo $select[26]; ?></td>
                                <td><?php echo $select[27]; ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tiến sĩ khoa học</td>
                                <td><?php echo $select[28]; ?></td>
                                <td><?php echo $select[29]; ?></td>
                                <td><?php echo $select[30]; ?></td>
                                <td><?php echo $select[31]; ?></td>
                                <td><?php echo $select[32]; ?></td>
                                <td><?php echo $select[33]; ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tiến sĩ</td>
                                <td><?php echo $select[34]; ?></td>
                                <td><?php echo $select[35]; ?></td>
                                <td><?php echo $select[36]; ?></td>
                                <td><?php echo $select[37]; ?></td>
                                <td><?php echo $select[38]; ?></td>
                                <td><?php echo $select[39]; ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Thạc sĩ</td>
                                <td><?php echo $select[40]; ?></td>
                                <td><?php echo $select[41]; ?></td>
                                <td><?php echo $select[42]; ?></td>
                                <td><?php echo $select[43]; ?></td>
                                <td><?php echo $select[44]; ?></td>
                                <td><?php echo $select[45]; ?></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Đại học</td>
                                <td><?php echo $select[46]; ?></td>
                                <td><?php echo $select[47]; ?></td>
                                <td><?php echo $select[48]; ?></td>
                                <td><?php echo $select[49]; ?></td>
                                <td><?php echo $select[50]; ?></td>
                                <td><?php echo $select[51]; ?></td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Cao đẳng</td>
                                <td><?php echo $select[52]; ?></td>
                                <td><?php echo $select[53]; ?></td>
                                <td><?php echo $select[54]; ?></td>
                                <td><?php echo $select[55]; ?></td>
                                <td><?php echo $select[56]; ?></td>
                                <td><?php echo $select[57]; ?></td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Trung cấp</td>
                                <td><?php echo $select[58]; ?></td>
                                <td><?php echo $select[59]; ?></td>
                                <td><?php echo $select[60]; ?></td>
                                <td><?php echo $select[61]; ?></td>
                                <td><?php echo $select[62]; ?></td>
                                <td><?php echo $select[63]; ?></td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Trình độ khác</td>
                                <td><?php echo $select[64]; ?></td>
                                <td><?php echo $select[65]; ?></td>
                                <td><?php echo $select[66]; ?></td>
                                <td><?php echo $select[67]; ?></td>
                                <td><?php echo $select[68]; ?></td>
                                <td><?php echo $select[69]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2">Tổng số</td>
                                <td><?php echo $select[70]; ?></td>
                                <td><?php echo $select[71]; ?></td>
                                <td><?php echo $select[72]; ?></td>
                                <td><?php echo $select[73]; ?></td>
                                <td><?php echo $select[74]; ?></td>
                                <td><?php echo $select[75]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <p>(Khi tính số lượng các TSKH, TS thì không bao gồm những giảng viên vừa có học vị vừa có chức danh khoa học vì đã tính ở 2 dòng trên)</p>
                    <p>Tổng số giảng viên cơ hữu = Cột (3) - cột (7) = 224 người</p>
                    <p>Tỷ lệ giảng viên cơ hữu trên tổng số cán bộ cơ hữu: 66%</p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                              <tr>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">STT</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Trình độ, học vị, chức danh</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Hệ số quy đổi</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Số lượng giảng viên</th>
                                <th colspan="3" scope="col" style="text-align:center; vertical-align:middle">Giảng viên cơ hữu</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên thỉnh giảng trong nước</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên quốc tế</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Giảng viên quy đổi</th>
                              </tr>
                              <tr>
                                <th scope="col" style="text-align:center; vertical-align:middle">GV trong biên chế trực tiếp giảng dạy</th>
                                <th scope="col" style="text-align:center; vertical-align:middle">GV hợp đồng dài hạn  trực tiếp giảng dạy</th>
                                <th scope="col" style="text-align:center; vertical-align:middle">Giảng viên kiêm nhiệm là cán bộ quản lý</th>
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
                                <td>(10)</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>Hệ số quy đổi</td>
                                <td></td>
                                <td></td>
                                <td>1,0</td>
                                <td>1,0</td>
                                <td>0,3</td>
                                <td>0,2</td>
                                <td>0,2</td>
                                <td></td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Giáo sư</td>
                                <td><?php echo $select[76]; ?></td>
                                <td><?php echo $select[77]; ?></td>
                                <td><?php echo $select[78]; ?></td>
                                <td><?php echo $select[79]; ?></td>
                                <td><?php echo $select[80]; ?></td>
                                <td><?php echo $select[81]; ?></td>
                                <td><?php echo $select[82]; ?></td>
                                <td><?php echo $select[83]; ?></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Phó Giáo sư</td>
                                <td><?php echo $select[84]; ?></td>
                                <td><?php echo $select[85]; ?></td>
                                <td><?php echo $select[86]; ?></td>
                                <td><?php echo $select[87]; ?></td>
                                <td><?php echo $select[88]; ?></td>
                                <td><?php echo $select[89]; ?></td>
                                <td><?php echo $select[90]; ?></td>
                                <td><?php echo $select[91]; ?></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tiến sĩ khoa học</td>
                                <td><?php echo $select[92]; ?></td>
                                <td><?php echo $select[93]; ?></td>
                                <td><?php echo $select[94]; ?></td>
                                <td><?php echo $select[95]; ?></td>
                                <td><?php echo $select[96]; ?></td>
                                <td><?php echo $select[97]; ?></td>
                                <td><?php echo $select[98]; ?></td>
                                <td><?php echo $select[99]; ?></td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tiến sĩ</td>
                                <td><?php echo $select[ 100 ]; ?></td>
                                <td><?php echo $select[ 101 ]; ?></td>
                                <td><?php echo $select[ 102 ]; ?></td>
                                <td><?php echo $select[ 103 ]; ?></td>
                                <td><?php echo $select[ 104 ]; ?></td>
                                <td><?php echo $select[ 105 ]; ?></td>
                                <td><?php echo $select[ 106 ]; ?></td>
                                <td><?php echo $select[ 107 ]; ?></td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Thạc sĩ</td>
                                <td><?php echo $select[ 108 ]; ?></td>
                                <td><?php echo $select[ 109 ]; ?></td>
                                <td><?php echo $select[ 110 ]; ?></td>
                                <td><?php echo $select[ 111 ]; ?></td>
                                <td><?php echo $select[ 112 ]; ?></td>
                                <td><?php echo $select[ 113 ]; ?></td>
                                <td><?php echo $select[ 114 ]; ?></td>
                                <td><?php echo $select[ 115 ]; ?></td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Đại học</td>
                                <td><?php echo $select[ 116 ]; ?></td>
                                <td><?php echo $select[ 117 ]; ?></td>
                                <td><?php echo $select[ 118 ]; ?></td>
                                <td><?php echo $select[ 119 ]; ?></td>
                                <td><?php echo $select[ 120 ]; ?></td>
                                <td><?php echo $select[ 121 ]; ?></td>
                                <td><?php echo $select[ 122 ]; ?></td>
                                <td><?php echo $select[ 123 ]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="3">Tổng số</td>
                                <td><?php echo $select[ 124 ]; ?></td>
                                <td><?php echo $select[ 125 ]; ?></td>
                                <td><?php echo $select[ 126 ]; ?></td>
                                <td><?php echo $select[ 127 ]; ?></td>
                                <td><?php echo $select[ 128 ]; ?></td>
                                <td><?php echo $select[ 129 ]; ?></td>
                                <td><?php echo $select[ 130 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>  
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>19. Thống kê, phân loại giảng viên cơ hữu theo trình độ, giới tính và độ tuổi (số người):</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">STT</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Trình độ/học vị</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Số lượng</th>
                                <th rowspan="2" scope="col" style="text-align:center; vertical-align:middle">Tỷ lệ (%)</th>
                                <th colspan="2" scope="col" style="text-align:center; vertical-align:middle">Phân loại theo giới tính</th>
                                <th colspan="5" scope="col" style="text-align:center; vertical-align:middle">Phân loại theo tuổi (người)</th>
                            </tr>
                            <tr>
                                <th style="text-align:center; vertical-align:middle">Nam</th>
                                <th style="text-align:center; vertical-align:middle">Nữ</th>
                                <th style="text-align:center; vertical-align:middle"><30</th>
                                <th style="text-align:center; vertical-align:middle">30-40</th>
                                <th style="text-align:center; vertical-align:middle">41-50</th>
                                <th style="text-align:center; vertical-align:middle">51-60</th>
                                <th style="text-align:center; vertical-align:middle">>60</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">1</td>
                                <td style="text-align:center; vertical-align:middle">Giáo sư, Viện sĩ</td>
                                <td><?php echo $select[ 131 ]; ?></td>
                                <td><?php echo $select[ 132 ]; ?></td>
                                <td><?php echo $select[ 133 ]; ?></td>
                                <td><?php echo $select[ 134 ]; ?></td>
                                <td><?php echo $select[ 135 ]; ?></td>
                                <td><?php echo $select[ 136 ]; ?></td>
                                <td><?php echo $select[ 137 ]; ?></td>
                                <td><?php echo $select[ 138 ]; ?></td>
                                <td><?php echo $select[ 139 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2</td>
                                <td style="text-align:center; vertical-align:middle">Phó Giáo sư</td>
                                <td><?php echo $select[ 140 ]; ?></td>
                                <td><?php echo $select[ 141 ]; ?></td>
                                <td><?php echo $select[ 142 ]; ?></td>
                                <td><?php echo $select[ 143 ]; ?></td>
                                <td><?php echo $select[ 144 ]; ?></td>
                                <td><?php echo $select[ 145 ]; ?></td>
                                <td><?php echo $select[ 146 ]; ?></td>
                                <td><?php echo $select[ 147 ]; ?></td>
                                <td><?php echo $select[ 148 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">3</td>
                                <td style="text-align:center; vertical-align:middle">Tiến sĩ khoa học</td>
                                <td><?php echo $select[ 149 ]; ?></td>
                                <td><?php echo $select[ 150 ]; ?></td>
                                <td><?php echo $select[ 151 ]; ?></td>
                                <td><?php echo $select[ 152 ]; ?></td>
                                <td><?php echo $select[ 153 ]; ?></td>
                                <td><?php echo $select[ 154 ]; ?></td>
                                <td><?php echo $select[ 155 ]; ?></td>
                                <td><?php echo $select[ 156 ]; ?></td>
                                <td><?php echo $select[ 157 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">4</td>
                                <td style="text-align:center; vertical-align:middle">Tiến sĩ</td>
                                <td><?php echo $select[ 158 ]; ?></td>
                                <td><?php echo $select[ 159 ]; ?></td>
                                <td><?php echo $select[ 160 ]; ?></td>
                                <td><?php echo $select[ 161 ]; ?></td>
                                <td><?php echo $select[ 162 ]; ?></td>
                                <td><?php echo $select[ 163 ]; ?></td>
                                <td><?php echo $select[ 164 ]; ?></td>
                                <td><?php echo $select[ 165 ]; ?></td>
                                <td><?php echo $select[ 166 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">5</td>
                                <td style="text-align:center; vertical-align:middle">Thạc sĩ</td>
                                <td><?php echo $select[ 167 ]; ?></td>
                                <td><?php echo $select[ 168 ]; ?></td>
                                <td><?php echo $select[ 169 ]; ?></td>
                                <td><?php echo $select[ 170 ]; ?></td>
                                <td><?php echo $select[ 171 ]; ?></td>
                                <td><?php echo $select[ 172 ]; ?></td>
                                <td><?php echo $select[ 173 ]; ?></td>
                                <td><?php echo $select[ 174 ]; ?></td>
                                <td><?php echo $select[ 175 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">6</td>
                                <td style="text-align:center; vertical-align:middle">Đại học</td>
                                <td><?php echo $select[ 176 ]; ?></td>
                                <td><?php echo $select[ 177 ]; ?></td>
                                <td><?php echo $select[ 178 ]; ?></td>
                                <td><?php echo $select[ 179 ]; ?></td>
                                <td><?php echo $select[ 180 ]; ?></td>
                                <td><?php echo $select[ 181 ]; ?></td>
                                <td><?php echo $select[ 182 ]; ?></td>
                                <td><?php echo $select[ 183 ]; ?></td>
                                <td><?php echo $select[ 184 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">7</td>
                                <td style="text-align:center; vertical-align:middle">Cao đẳng</td>
                                <td><?php echo $select[ 185 ]; ?></td>
                                <td><?php echo $select[ 186 ]; ?></td>
                                <td><?php echo $select[ 187 ]; ?></td>
                                <td><?php echo $select[ 188 ]; ?></td>
                                <td><?php echo $select[ 189 ]; ?></td>
                                <td><?php echo $select[ 190 ]; ?></td>
                                <td><?php echo $select[ 191 ]; ?></td>
                                <td><?php echo $select[ 192 ]; ?></td>
                                <td><?php echo $select[ 193 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">8</td>
                                <td style="text-align:center; vertical-align:middle">Trung cấp</td>
                                <td><?php echo $select[ 194 ]; ?></td>
                                <td><?php echo $select[ 195 ]; ?></td>
                                <td><?php echo $select[ 196 ]; ?></td>
                                <td><?php echo $select[ 197 ]; ?></td>
                                <td><?php echo $select[ 198 ]; ?></td>
                                <td><?php echo $select[ 199 ]; ?></td>
                                <td><?php echo $select[ 200 ]; ?></td>
                                <td><?php echo $select[ 201 ]; ?></td>
                                <td><?php echo $select[ 202 ]; ?></td>
                            </tr>
                             <tr>
                                <td style="text-align:center; vertical-align:middle">9</td>
                                <td style="text-align:center; vertical-align:middle">Trình độ khác</td>
                                <td><?php echo $select[ 203 ]; ?></td>
                                <td><?php echo $select[ 204 ]; ?></td>
                                <td><?php echo $select[ 205 ]; ?></td>
                                <td><?php echo $select[ 206 ]; ?></td>
                                <td><?php echo $select[ 207 ]; ?></td>
                                <td><?php echo $select[ 208 ]; ?></td>
                                <td><?php echo $select[ 209 ]; ?></td>
                                <td><?php echo $select[ 210 ]; ?></td>
                                <td><?php echo $select[ 211 ]; ?></td>
                            </tr>
                            <tr>
                                <td colspan="2" style="text-align:center; vertical-align:middle">Tổng</td>
                                <td><?php echo $select[ 212 ]; ?></td>
                                <td><?php echo $select[ 213 ]; ?></td>
                                <td><?php echo $select[ 214 ]; ?></td>
                                <td><?php echo $select[ 215 ]; ?></td>
                                <td><?php echo $select[ 216 ]; ?></td>
                                <td><?php echo $select[ 217 ]; ?></td>
                                <td><?php echo $select[ 218 ]; ?></td>
                                <td><?php echo $select[ 219 ]; ?></td>
                                <td><?php echo $select[ 220 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <input type="submit" name="submit_trang3" value="Cập nhật" class="btn btn-primary">
        </form>
    </div>
</div>
<?php } ?>
<?php get_template_part('csgd/pagination'); ?>