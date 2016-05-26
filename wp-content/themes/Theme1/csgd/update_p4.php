<?php
$ID = $_GET['ID'];
$select = $wpdb->get_row("SELECT * FROM csgd_iv_nguoihoc WHERE ID = $ID",ARRAY_N);
if ($select[205]==0) {
?>
<div class="panel panel-primary">
  	<div class="panel-heading">
   		<h2 class="panel-title">IV. Người học</h2>
 	</div>
  	<div class="panel-body">
    	<form action="" method="POST" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12"><h4>20. Tổng số học sinh đăng ký dự thi đại học vào trường, số sinh viên trúng tuyển và nhập học trong các năm gần đây (hệ chính quy):</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th style="text-align:center; vertical-align:middle">Năm học</th>
                                <th style="text-align:center; vertical-align:middle">Số thí sinh dự thi (người)</th>
                                <th style="text-align:center; vertical-align:middle">Số trúng tuyển (người)</th>
                                <th style="text-align:center; vertical-align:middle">Tỷ lệ cạnh tranh (%)</th>
                                <th style="text-align:center; vertical-align:middle">Số nhập học thực tế (người)</th>
                                <th style="text-align:center; vertical-align:middle">Điểm tuyển đầu vào (thang điểm 30)</th>
                                <th style="text-align:center; vertical-align:middle">Điểm trung bình của sinh viên được tuyển</th>
                                <th style="text-align:center; vertical-align:middle">Số lượng sinh viên quốc tế nhập học</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="8"><b>Đại học</b></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2010-2011</td>
                                <td><input type="text" name="IV20a_1" class="form-control" value="<?php echo $select[1]; ?>"></td>
                                <td><input type="text" name="IV20a_2" class="form-control" value="<?php echo $select[2]; ?>"></td>
                                <td><input type="text" name="IV20a_3" class="form-control" value="<?php echo $select[3]; ?>"></td>
                                <td><input type="text" name="IV20a_4" class="form-control" value="<?php echo $select[4]; ?>"></td>
                                <td><input type="text" name="IV20a_5" class="form-control" value="<?php echo $select[5]; ?>"></td>
                                <td><input type="text" name="IV20a_6" class="form-control" value="<?php echo $select[6]; ?>"></td>
                                <td><input type="text" name="IV20a_7" class="form-control" value="<?php echo $select[7]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2011-2012</td>
                                <td><input type="text" name="IV20b_1" class="form-control" value="<?php echo $select[8]; ?>"></td>
                                <td><input type="text" name="IV20b_2" class="form-control" value="<?php echo $select[9]; ?>"></td>
                                <td><input type="text" name="IV20b_3" class="form-control" value="<?php echo $select[10]; ?>"></td>
                                <td><input type="text" name="IV20b_4" class="form-control" value="<?php echo $select[11]; ?>"></td>
                                <td><input type="text" name="IV20b_5" class="form-control" value="<?php echo $select[12]; ?>"></td>
                                <td><input type="text" name="IV20b_6" class="form-control" value="<?php echo $select[13]; ?>"></td>
                                <td><input type="text" name="IV20b_7" class="form-control" value="<?php echo $select[14]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2012-2013</td>
                                <td><input type="text" name="IV20c_1" class="form-control" value="<?php echo $select[15]; ?>"></td>
                                <td><input type="text" name="IV20c_2" class="form-control" value="<?php echo $select[16]; ?>"></td>
                                <td><input type="text" name="IV20c_3" class="form-control" value="<?php echo $select[17]; ?>"></td>
                                <td><input type="text" name="IV20c_4" class="form-control" value="<?php echo $select[18]; ?>"></td>
                                <td><input type="text" name="IV20c_5" class="form-control" value="<?php echo $select[19]; ?>"></td>
                                <td><input type="text" name="IV20c_6" class="form-control" value="<?php echo $select[20]; ?>"></td>
                                <td><input type="text" name="IV20c_7" class="form-control" value="<?php echo $select[21]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2013-2014</td>
                                <td><input type="text" name="IV20d_1" class="form-control" value="<?php echo $select[22]; ?>"></td>
                                <td><input type="text" name="IV20d_2" class="form-control" value="<?php echo $select[23]; ?>"></td>
                                <td><input type="text" name="IV20d_3" class="form-control" value="<?php echo $select[24]; ?>"></td>
                                <td><input type="text" name="IV20d_4" class="form-control" value="<?php echo $select[25]; ?>"></td>
                                <td><input type="text" name="IV20d_5" class="form-control" value="<?php echo $select[26]; ?>"></td>
                                <td><input type="text" name="IV20d_6" class="form-control" value="<?php echo $select[27]; ?>"></td>
                                <td><input type="text" name="IV20d_7" class="form-control" value="<?php echo $select[28]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2014-2015</td>
                                <td><input type="text" name="IV20e_1" class="form-control" value="<?php echo $select[29]; ?>"></td>
                                <td><input type="text" name="IV20e_2" class="form-control" value="<?php echo $select[30]; ?>"></td>
                                <td><input type="text" name="IV20e_3" class="form-control" value="<?php echo $select[31]; ?>"></td>
                                <td><input type="text" name="IV20e_4" class="form-control" value="<?php echo $select[32]; ?>"></td>
                                <td><input type="text" name="IV20e_5" class="form-control" value="<?php echo $select[33]; ?>"></td>
                                <td><input type="text" name="IV20e_6" class="form-control" value="<?php echo $select[34]; ?>"></td>
                                <td><input type="text" name="IV20e_7" class="form-control" value="<?php echo $select[35]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <p>Số lượng sinh viên hệ chính quy đang học tập tại trường:</p>
                </div>
                <div class="col-md-1"><input type="text" name="IV20f" class="form-control"  value="<?php echo $select[36]; ?>"></div> người
            </div>
            <div class="row">
                <div class="col-md-12"><h4>21. Thống kê, phân loại số lượng học viên nhập học (trong 5 năm gần nhất) các hệ chính quy và không chính quy </h4></div>
            </div>
           <div class="row">
                <div class="form-group col-md-12">
                   <table class="table table-striped table-hover" border="1">
                       <thead>
                           <tr>
                               <th>Các tiêu chí</th>
                               <th>2010-2011</th>
                               <th>2011-2012</th>
                               <th>2012-2013</th>
                               <th>2013-2014</th>
                               <th>2014-2015</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td style="text-align:left">1. Nghiên cứu sinh</td>
                               <td><input type="text" name="IV21a_1" class="form-control" value="<?php echo $select[37]; ?>"></td>
                               <td><input type="text" name="IV21a_2" class="form-control" value="<?php echo $select[38]; ?>"></td>
                               <td><input type="text" name="IV21a_3" class="form-control" value="<?php echo $select[39]; ?>"></td>
                               <td><input type="text" name="IV21a_4" class="form-control" value="<?php echo $select[40]; ?>"></td>
                               <td><input type="text" name="IV21a_5" class="form-control" value="<?php echo $select[41]; ?>"></td>
                           </tr>
                           <tr>
                               <td style="text-align:left">2. Học viên cao học</td>
                               <td><input type="text" name="IV21b_1" class="form-control" value="<?php echo $select[42]; ?>"></td>
                               <td><input type="text" name="IV21b_2" class="form-control" value="<?php echo $select[43]; ?>"></td>
                               <td><input type="text" name="IV21b_3" class="form-control" value="<?php echo $select[44]; ?>"></td>
                               <td><input type="text" name="IV21b_4" class="form-control" value="<?php echo $select[45]; ?>"></td>
                               <td><input type="text" name="IV21b_5" class="form-control" value="<?php echo $select[46]; ?>"></td>
                           </tr>
                           <tr>
                               <td style="text-align:left">3. Sinh viên đại học, trong đó:</td>
                               <td><input type="text" name="IV21c_1" class="form-control" value="<?php echo $select[47]; ?>"></td>
                               <td><input type="text" name="IV21c_2" class="form-control" value="<?php echo $select[48]; ?>"></td>
                               <td><input type="text" name="IV21c_3" class="form-control" value="<?php echo $select[49]; ?>"></td>
                               <td><input type="text" name="IV21c_4" class="form-control" value="<?php echo $select[50]; ?>"></td>
                               <td><input type="text" name="IV21c_5" class="form-control" value="<?php echo $select[51]; ?>"></td>
                           </tr>
                           <tr>
                               <td style="padding-left:50px;text-align:left">Hệ chính quy</td>
                               <td><input type="text" name="IV21d_1" class="form-control" value="<?php echo $select[52]; ?>"></td>
                               <td><input type="text" name="IV21d_2" class="form-control" value="<?php echo $select[53]; ?>"></td>
                               <td><input type="text" name="IV21d_3" class="form-control" value="<?php echo $select[54]; ?>"></td>
                               <td><input type="text" name="IV21d_4" class="form-control" value="<?php echo $select[55]; ?>"></td>
                               <td><input type="text" name="IV21d_5" class="form-control" value="<?php echo $select[56]; ?>"></td>
                           </tr>
                           <tr>
                               <td style="padding-left:50px;text-align:left">Hệ không chính quy</td>
                               <td><input type="text" name="IV21e_1" class="form-control" value="<?php echo $select[57]; ?>"></td>
                               <td><input type="text" name="IV21e_2" class="form-control" value="<?php echo $select[58]; ?>"></td>
                               <td><input type="text" name="IV21e_3" class="form-control" value="<?php echo $select[59]; ?>"></td>
                               <td><input type="text" name="IV21e_4" class="form-control" value="<?php echo $select[60]; ?>"></td>
                               <td><input type="text" name="IV21e_5" class="form-control" value="<?php echo $select[61]; ?>"></td>
                           </tr>
                       </tbody>
                   </table>
                   <table class="table table-hover">
                       <tbody>
                           <tr>
                               <td>Tổng số sinh viên chính quy (chưa quy đổi): </td>
                               <td><input type="text" name="IV21f" class="form-control" value="<?php echo $select[62]; ?>"></td>
                           </tr>
                           <tr>
                               <td>Tổng số sinh viên quy đổi: </td>
                               <td><input type="text" name="IV21g" class="form-control" value="<?php echo $select[63]; ?>"></td>
                           </tr>
                           <tr>
                               <td>Tỷ lệ sinh viên trên giảng viên (sau khi quy đổi): </td>
                               <td><input type="text" name="IV21h" class="form-control" value="<?php echo $select[64]; ?>"></td>
                           </tr>
                       </tbody>
                   </table>
               </div>
           </div>
            <div class="row">
                <div class="col-md-12"><h4>22. Số sinh viên quốc tế nhập học trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col"></th>
                                <th colspan="5" scope="col">Năm học</th>
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
                                <td>Số lượng</td>
                                <td><input type="text" name="IV22a_1" class="form-control" value="<?php echo $select[65]; ?>"></td>
                                <td><input type="text" name="IV22a_2" class="form-control" value="<?php echo $select[66]; ?>"></td>
                                <td><input type="text" name="IV22a_3" class="form-control" value="<?php echo $select[67]; ?>"></td>
                                <td><input type="text" name="IV22a_4" class="form-control" value="<?php echo $select[68]; ?>"></td>
                                <td><input type="text" name="IV22a_5" class="form-control" value="<?php echo $select[69]; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tỷ lệ (%) trên tổng số sinh viên quy đổi</td>
                                <td><input type="text" name="IV22b_1" class="form-control" value="<?php echo $select[70]; ?>"></td>
                                <td><input type="text" name="IV22b_2" class="form-control" value="<?php echo $select[71]; ?>"></td>
                                <td><input type="text" name="IV22b_3" class="form-control" value="<?php echo $select[72]; ?>"></td>
                                <td><input type="text" name="IV22b_4" class="form-control" value="<?php echo $select[73]; ?>"></td>
                                <td><input type="text" name="IV22b_5" class="form-control" value="<?php echo $select[74]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>23. Sinh viên có chỗ ở trong kí túc xá / tổng số sinh viên có nhu cầu trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th>Các tiêu chí</th>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:left">1. Tổng diện tích phòng ở (m2)</td>
                                <td><input type="text" name="IV23a_1" class="form-control" value="<?php echo $select[75]; ?>"></td>
                                <td><input type="text" name="IV23a_2" class="form-control" value="<?php echo $select[76]; ?>"></td>
                                <td><input type="text" name="IV23a_3" class="form-control" value="<?php echo $select[77]; ?>"></td>
                                <td><input type="text" name="IV23a_4" class="form-control" value="<?php echo $select[78]; ?>"></td>
                                <td><input type="text" name="IV23a_5" class="form-control" value="<?php echo $select[79]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">2. Số lượng sinh viên có nhu cầu về phòng ở (trong và ngoài ký túc xá)</td>
                                <td><input type="text" name="IV23b_1" class="form-control" value="<?php echo $select[80]; ?>"></td>
                                <td><input type="text" name="IV23b_2" class="form-control" value="<?php echo $select[81]; ?>"></td>
                                <td><input type="text" name="IV23b_3" class="form-control" value="<?php echo $select[82]; ?>"></td>
                                <td><input type="text" name="IV23b_4" class="form-control" value="<?php echo $select[83]; ?>"></td>
                                <td><input type="text" name="IV23b_5" class="form-control" value="<?php echo $select[84]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">3. Số lượng sinh viên được ở trong ký túc xá</td>
                                <td><input type="text" name="IV23c_1" class="form-control" value="<?php echo $select[85]; ?>"></td>
                                <td><input type="text" name="IV23c_2" class="form-control" value="<?php echo $select[86]; ?>"></td>
                                <td><input type="text" name="IV23c_3" class="form-control" value="<?php echo $select[87]; ?>"></td>
                                <td><input type="text" name="IV23c_4" class="form-control" value="<?php echo $select[88]; ?>"></td>
                                <td><input type="text" name="IV23c_5" class="form-control" value="<?php echo $select[89]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">4. Tỷ số diện tích trên đầu sinh viên ở trong ký túc xá, m2/người</td>
                                <td><input type="text" name="IV23d_1" class="form-control" value="<?php echo $select[90]; ?>"></td>
                                <td><input type="text" name="IV23d_2" class="form-control" value="<?php echo $select[91]; ?>"></td>
                                <td><input type="text" name="IV23d_3" class="form-control" value="<?php echo $select[92]; ?>"></td>
                                <td><input type="text" name="IV23d_4" class="form-control" value="<?php echo $select[93]; ?>"></td>
                                <td><input type="text" name="IV23d_5" class="form-control" value="<?php echo $select[94]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>24. Số lượng (người) và tỷ lệ (%) người học tham gia nghiên cứu khoa học:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col"></th>
                                <th colspan="5" scope="col">Năm học</th>
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
                                <td>Số lượng (người)</td>
                                <td><input type="text" name="IV24a_1" class="form-control" value="<?php echo $select[95]; ?>"></td>
                                <td><input type="text" name="IV24a_2" class="form-control" value="<?php echo $select[96]; ?>"></td>
                                <td><input type="text" name="IV24a_3" class="form-control" value="<?php echo $select[97]; ?>"></td>
                                <td><input type="text" name="IV24a_4" class="form-control" value="<?php echo $select[98]; ?>"></td>
                                <td><input type="text" name="IV24a_5" class="form-control" value="<?php echo $select[99]; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tỷ lệ (%) trên tổng số sinh viên quy đổi</td>
                                <td><input type="text" name="IV24b_1" class="form-control" value="<?php echo $select[101]; ?>"></td>
                                <td><input type="text" name="IV24b_2" class="form-control" value="<?php echo $select[101]; ?>"></td>
                                <td><input type="text" name="IV24b_3" class="form-control" value="<?php echo $select[102]; ?>"></td>
                                <td><input type="text" name="IV24b_4" class="form-control" value="<?php echo $select[103]; ?>"></td>
                                <td><input type="text" name="IV24b_5" class="form-control" value="<?php echo $select[104]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
             <div class="row">
                <div class="col-md-12"><h4>25. Thống kê số lượng người tốt nghiệp trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col">Các tiêu chí</th>
                                <th colspan="5" scope="col">Năm học</th>
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
                                <td style="text-align:left">1. Nghiên cứu sinh bảo vệ thành công luận án tiến sĩ</td>
                                <td><input type="text" name="IV25a_1" class="form-control" value="<?php echo $select[105]; ?>"></td>
                                <td><input type="text" name="IV25a_2" class="form-control" value="<?php echo $select[106]; ?>"></td>
                                <td><input type="text" name="IV25a_3" class="form-control" value="<?php echo $select[107]; ?>"></td>
                                <td><input type="text" name="IV25a_4" class="form-control" value="<?php echo $select[108]; ?>"></td>
                                <td><input type="text" name="IV25a_5" class="form-control" value="<?php echo $select[109]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">2. Học viên tốt nghiệp cao học</td>
                                <td><input type="text" name="IV25b_1" class="form-control" value="<?php echo $select[110]; ?>"></td>
                                <td><input type="text" name="IV25b_2" class="form-control" value="<?php echo $select[111]; ?>"></td>
                                <td><input type="text" name="IV25b_3" class="form-control" value="<?php echo $select[112]; ?>"></td>
                                <td><input type="text" name="IV25b_4" class="form-control" value="<?php echo $select[113]; ?>"></td>
                                <td><input type="text" name="IV25b_5" class="form-control" value="<?php echo $select[114]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">3. Sinh viên tốt nghiệp đại học, trong đó:</td>
                                <td><input type="text" name="IV25c_1" class="form-control" value="<?php echo $select[115]; ?>"></td>
                                <td><input type="text" name="IV25c_2" class="form-control" value="<?php echo $select[116]; ?>"></td>
                                <td><input type="text" name="IV25c_3" class="form-control" value="<?php echo $select[117]; ?>"></td>
                                <td><input type="text" name="IV25c_4" class="form-control" value="<?php echo $select[118]; ?>"></td>
                                <td><input type="text" name="IV25c_5" class="form-control" value="<?php echo $select[119]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;padding-left:50px">Hệ chính quy</td>
                                <td><input type="text" name="IV25d_1" class="form-control" value="<?php echo $select[120]; ?>"></td>
                                <td><input type="text" name="IV25d_2" class="form-control" value="<?php echo $select[121]; ?>"></td>
                                <td><input type="text" name="IV25d_3" class="form-control" value="<?php echo $select[122]; ?>"></td>
                                <td><input type="text" name="IV25d_4" class="form-control" value="<?php echo $select[123]; ?>"></td>
                                <td><input type="text" name="IV25d_5" class="form-control" value="<?php echo $select[124]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;padding-left:50px">Hệ không chính quy</td>
                                <td><input type="text" name="IV25e_1" class="form-control" value="<?php echo $select[125]; ?>"></td>
                                <td><input type="text" name="IV25e_2" class="form-control" value="<?php echo $select[126]; ?>"></td>
                                <td><input type="text" name="IV25e_3" class="form-control" value="<?php echo $select[127]; ?>"></td>
                                <td><input type="text" name="IV25e_4" class="form-control" value="<?php echo $select[128]; ?>"></td>
                                <td><input type="text" name="IV25e_5" class="form-control" value="<?php echo $select[129]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                    <i>(Tính cả những học viên đã đủ điều kiện tốt nghiệp theo quy định nhưng đang chờ cấp bằng).</i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>26. Tình trạng tốt nghiệp của sinh viên hệ chính quy:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">Các tiêu chí</th>
                                <th colspan="5">Năm tốt nghiệp</th>
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
                                <td style="text-align:left">1. Số lượng sinh viên tốt nghiệp (người)</td>
                                <td><input type="text" name="IV26a_1" class="form-control" value="<?php echo $select[130]; ?>"></td>
                                <td><input type="text" name="IV26a_2" class="form-control" value="<?php echo $select[131]; ?>"></td>
                                <td><input type="text" name="IV26a_3" class="form-control" value="<?php echo $select[132]; ?>"></td>
                                <td><input type="text" name="IV26a_4" class="form-control" value="<?php echo $select[133]; ?>"></td>
                                <td><input type="text" name="IV26a_5" class="form-control" value="<?php echo $select[134]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">2. Tỷ lệ sinh viên tốt nghiệp so với số tuyển vào (%)</td>
                                <td><input type="text" name="IV26b_1" class="form-control" value="<?php echo $select[135]; ?>"></td>
                                <td><input type="text" name="IV26b_2" class="form-control" value="<?php echo $select[136]; ?>"></td>
                                <td><input type="text" name="IV26b_3" class="form-control" value="<?php echo $select[137]; ?>"></td>
                                <td><input type="text" name="IV26b_4" class="form-control" value="<?php echo $select[138]; ?>"></td>
                                <td><input type="text" name="IV26b_5" class="form-control" value="<?php echo $select[139]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>3. Đánh giá của sinh viên tốt nghiệp về chất lượng đào tạo của nhà trường:</p>
                                <p>A. Nhà trường không điều tra về vấn đề này --> chuyển xuống câu 4</p>
                                <p>B. Nhà trường có điều tra về vấn đề này --> điền các thông tin dưới đây</p>
                                </td>
                                <td><input type="text" name="IV26c_1" class="form-control" value="<?php echo $select[140]; ?>"></td>
                                <td><input type="text" name="IV26c_2" class="form-control" value="<?php echo $select[141]; ?>"></td>
                                <td><input type="text" name="IV26c_3" class="form-control" value="<?php echo $select[142]; ?>"></td>
                                <td><input type="text" name="IV26c_4" class="form-control" value="<?php echo $select[143]; ?>"></td>
                                <td><input type="text" name="IV26c_5" class="form-control" value="<?php echo $select[144]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left"><p>3.1 Tỷ lệ sinh viên trả lời đã học được những kiến thức và kỹ năng cần thiết </p><p> cho công việc theo ngành tốt nghiệp (%)</p></td>
                                <td><input type="text" name="IV26d_1" class="form-control" value="<?php echo $select[145]; ?>"></td>
                                <td><input type="text" name="IV26d_2" class="form-control" value="<?php echo $select[146]; ?>"></td>
                                <td><input type="text" name="IV26d_3" class="form-control" value="<?php echo $select[147]; ?>"></td>
                                <td><input type="text" name="IV26d_4" class="form-control" value="<?php echo $select[148]; ?>"></td>
                                <td><input type="text" name="IV26d_5" class="form-control" value="<?php echo $select[149]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>3.2 Tỷ lệ sinh viên trả lời chỉ học được một phần kiến thức và kỹ năng cần thiết </p><p> cho công việc theo ngành tốt nghiệp (%)</p>
                                </td>
                                <td><input type="text" name="IV26e_1" class="form-control" value="<?php echo $select[150]; ?>"></td>
                                <td><input type="text" name="IV26e_2" class="form-control" value="<?php echo $select[151]; ?>"></td>
                                <td><input type="text" name="IV26e_3" class="form-control" value="<?php echo $select[152]; ?>"></td>
                                <td><input type="text" name="IV26e_4" class="form-control" value="<?php echo $select[153]; ?>"></td>
                                <td><input type="text" name="IV26e_5" class="form-control" value="<?php echo $select[154]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>3.3 Tỷ lệ sinh viên trả lời KHÔNG học được những kiến thức và kỹ năng cần thiết </p><p> cho công việc theo ngành tốt nghiệp</p>
                                </td>
                                <td><input type="text" name="IV26f_1" class="form-control" value="<?php echo $select[155]; ?>"></td>
                                <td><input type="text" name="IV26f_2" class="form-control" value="<?php echo $select[156]; ?>"></td>
                                <td><input type="text" name="IV26f_3" class="form-control" value="<?php echo $select[157]; ?>"></td>
                                <td><input type="text" name="IV26f_4" class="form-control" value="<?php echo $select[158]; ?>"></td>
                                <td><input type="text" name="IV26f_5" class="form-control" value="<?php echo $select[159]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>4. Sinh viên có việc làm trong năm đầu tiên sau khi tốt nghiệp:</p>
                                <p>A. Nhà trường không điều tra về vấn đề này  chuyển xuống câu 5</p>
                                <p>B. Nhà trường có điều tra về vấn đề này  điền các thông tin dưới đây</p>
                                </td>
                                <td><input type="text" name="IV26g_1" class="form-control" value="<?php echo $select[160]; ?>"></td>
                                <td><input type="text" name="IV26g_2" class="form-control" value="<?php echo $select[161]; ?>"></td>
                                <td><input type="text" name="IV26g_3" class="form-control" value="<?php echo $select[162]; ?>"></td>
                                <td><input type="text" name="IV26g_4" class="form-control" value="<?php echo $select[163]; ?>"></td>
                                <td><input type="text" name="IV26g_5" class="form-control" value="<?php echo $select[164]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>4.1 Tỷ lệ sinh viên có việc làm đúng ngành đào tạo (%)</p>
                                <p style="padding-left:50px">- Sau 6 tháng tốt nghiệp</p>
                                <p style="padding-left:50px">- Sau 12 tháng tốt nghiệp</p>
                                </td>
                                <td style="vertical-align:bottom">
                                <input type="text" name="IV26h_1_1" class="form-control" value="<?php echo $select[165]; ?>">
                                <input type="text" name="IV26h_2_1" class="form-control" value="<?php echo $select[166]; ?>">
                                </td>
                                <td style="vertical-align:bottom">
                                <input type="text" name="IV26h_1_2" class="form-control" value="<?php echo $select[167]; ?>">
                                <input type="text" name="IV26h_2_2" class="form-control" value="<?php echo $select[168]; ?>">
                                </td>
                                <td style="vertical-align:bottom">
                                <input type="text" name="IV26h_1_3" class="form-control" value="<?php echo $select[169]; ?>">
                                <input type="text" name="IV26h_2_3" class="form-control" value="<?php echo $select[170]; ?>">
                                </td>
                                <td style="vertical-align:bottom">
                                <input type="text" name="IV26h_1_4" class="form-control" value="<?php echo $select[171]; ?>">
                                <input type="text" name="IV26h_2_4" class="form-control" value="<?php echo $select[172]; ?>">
                                </td>
                                <td style="vertical-align:bottom">
                                <input type="text" name="IV26h_1_5" class="form-control" value="<?php echo $select[173]; ?>">
                                <input type="text" name="IV26h_2_5" class="form-control" value="<?php echo $select[174]; ?>">
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>4.2 Tỷ lệ sinh viên có việc làm trái ngành đào tạo (%)</p>
                                </td>
                                <td><input type="text" name="IV26i_1" class="form-control" value="<?php echo $select[175]; ?>"></td>
                                <td><input type="text" name="IV26i_2" class="form-control" value="<?php echo $select[176]; ?>"></td>
                                <td><input type="text" name="IV26i_3" class="form-control" value="<?php echo $select[177]; ?>"></td>
                                <td><input type="text" name="IV26i_4" class="form-control" value="<?php echo $select[178]; ?>"></td>
                                <td><input type="text" name="IV26i_5" class="form-control" value="<?php echo $select[179]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>4.3 Thu nhập bình quân/tháng của sinh viên có việc làm (triệu đồng)</p>
                                </td>
                                <td><input type="text" name="IV26j_1" class="form-control" value="<?php echo $select[180]; ?>"></td>
                                <td><input type="text" name="IV26j_2" class="form-control" value="<?php echo $select[181]; ?>"></td>
                                <td><input type="text" name="IV26j_3" class="form-control" value="<?php echo $select[182]; ?>"></td>
                                <td><input type="text" name="IV26j_4" class="form-control" value="<?php echo $select[183]; ?>"></td>
                                <td><input type="text" name="IV26j_5" class="form-control" value="<?php echo $select[184]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>5. Đánh giá của nhà tuyển dụng về sinh viên tốt nghiệp có việc làm đúng ngành đào tạo:</p>
                                <p>A. Nhà trường không điều tra về vấn đề này -> chuyển xuống kết thúc bảng này</p>
                                <p>B. Nhà trường có điều tra về vấn đề này -> điền các thông tin dưới đây</p>
                                </td>
                                <td><input type="text" name="IV26k_1" class="form-control" value="<?php echo $select[185]; ?>"></td>
                                <td><input type="text" name="IV26k_2" class="form-control" value="<?php echo $select[186]; ?>"></td>
                                <td><input type="text" name="IV26k_3" class="form-control" value="<?php echo $select[187]; ?>"></td>
                                <td><input type="text" name="IV26k_4" class="form-control" value="<?php echo $select[188]; ?>"></td>
                                <td><input type="text" name="IV26k_5" class="form-control" value="<?php echo $select[189]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>5.1 Tỷ lệ sinh viên đáp ứng yêu cầu của công việc, có thể sử dụng được ngay (%)</p>
                                </td>
                                <td><input type="text" name="IV26l_1" class="form-control" value="<?php echo $select[190]; ?>"></td>
                                <td><input type="text" name="IV26l_2" class="form-control" value="<?php echo $select[191]; ?>"></td>
                                <td><input type="text" name="IV26l_3" class="form-control" value="<?php echo $select[192]; ?>"></td>
                                <td><input type="text" name="IV26l_4" class="form-control" value="<?php echo $select[193]; ?>"></td>
                                <td><input type="text" name="IV26l_5" class="form-control" value="<?php echo $select[194]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>5.2 Tỷ lệ sinh viên cơ bản đáp ứng yêu cầu của công việc, nhưng phải đào tạo thêm (%)</p>
                                </td>
                                <td><input type="text" name="IV26m_1" class="form-control" value="<?php echo $select[195]; ?>"></td>
                                <td><input type="text" name="IV26m_2" class="form-control" value="<?php echo $select[196]; ?>"></td>
                                <td><input type="text" name="IV26m_3" class="form-control" value="<?php echo $select[197]; ?>"></td>
                                <td><input type="text" name="IV26m_4" class="form-control" value="<?php echo $select[198]; ?>"></td>
                                <td><input type="text" name="IV26m_5" class="form-control" value="<?php echo $select[199]; ?>"></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>5.3 Tỷ lệ sinh viên phải được đào tạo lại hoặc đào tạo bổ sung ít nhất 6 tháng (%)</p>
                                </td>
                                <td><input type="text" name="IV26n_1" class="form-control" value="<?php echo $select[200]; ?>"></td>
                                <td><input type="text" name="IV26n_2" class="form-control" value="<?php echo $select[201]; ?>"></td>
                                <td><input type="text" name="IV26n_3" class="form-control" value="<?php echo $select[202]; ?>"></td>
                                <td><input type="text" name="IV26n_4" class="form-control" value="<?php echo $select[203]; ?>"></td>
                                <td><input type="text" name="IV26n_5" class="form-control" value="<?php echo $select[204]; ?>"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Ghi chú: </p>
                    <p><i>- Sinh viên tốt nghiệp là sinh viên có đủ điều kiện để được công nhận tốt nghiệp theo quy định, kể cả những sinh viên chưa nhận được bằng tốt nghiệp.</i></p>
                    <p><i>- Sinh viên có việc làm là sinh viên tìm được việc làm hoặc tạo được việc làm.</i></p>
                    <p><i>- Năm đầu tiên sau khi tốt nghiệp: 12 tháng kể từ ngày tốt nghiệp.</i></p>
                    <p><i>- Các mục bỏ trống đều được xem là nhà trường không điều tra về việc này.</i></p>
                </div>
            </div>
            <input type="submit" name="update_trang4" value="Cập nhật" class="btn btn-primary">
		</form>
  	</div>
</div>
<?php } else if (isset($_POST['update_trang4'])) {
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
      <h2 class="panel-title">IV. Người học</h2>
  </div>
    <div class="panel-body">
      <form action="" method="POST" role="form" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12"><h4>20. Tổng số học sinh đăng ký dự thi đại học vào trường, số sinh viên trúng tuyển và nhập học trong các năm gần đây (hệ chính quy):</h4></div>
            </div>
            <div class="row">
                <div class="form-group col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th style="text-align:center; vertical-align:middle">Năm học</th>
                                <th style="text-align:center; vertical-align:middle">Số thí sinh dự thi (người)</th>
                                <th style="text-align:center; vertical-align:middle">Số trúng tuyển (người)</th>
                                <th style="text-align:center; vertical-align:middle">Tỷ lệ cạnh tranh (%)</th>
                                <th style="text-align:center; vertical-align:middle">Số nhập học thực tế (người)</th>
                                <th style="text-align:center; vertical-align:middle">Điểm tuyển đầu vào (thang điểm 30)</th>
                                <th style="text-align:center; vertical-align:middle">Điểm trung bình của sinh viên được tuyển</th>
                                <th style="text-align:center; vertical-align:middle">Số lượng sinh viên quốc tế nhập học</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="8"><b>Đại học</b></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2010-2011</td>
                                <td><?php echo $select[ 1 ]; ?></td>
                                <td><?php echo $select[ 2 ]; ?></td>
                                <td><?php echo $select[ 3 ]; ?></td>
                                <td><?php echo $select[ 4 ]; ?></td>
                                <td><?php echo $select[ 5 ]; ?></td>
                                <td><?php echo $select[ 6 ]; ?></td>
                                <td><?php echo $select[ 7 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2011-2012</td>
                                <td><?php echo $select[ 8 ]; ?></td>
                                <td><?php echo $select[ 9 ]; ?></td>
                                <td><?php echo $select[ 10 ]; ?></td>
                                <td><?php echo $select[ 11 ]; ?></td>
                                <td><?php echo $select[ 12 ]; ?></td>
                                <td><?php echo $select[ 13 ]; ?></td>
                                <td><?php echo $select[ 14 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2012-2013</td>
                                <td><?php echo $select[ 15  ]; ?></td>
                                <td><?php echo $select[ 16  ]; ?></td>
                                <td><?php echo $select[ 17  ]; ?></td>
                                <td><?php echo $select[ 18  ]; ?></td>
                                <td><?php echo $select[ 19  ]; ?></td>
                                <td><?php echo $select[ 20  ]; ?></td>
                                <td><?php echo $select[ 21  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2013-2014</td>
                                <td><?php echo $select[ 22  ]; ?></td>
                                <td><?php echo $select[ 23  ]; ?></td>
                                <td><?php echo $select[ 24  ]; ?></td>
                                <td><?php echo $select[ 25  ]; ?></td>
                                <td><?php echo $select[ 26  ]; ?></td>
                                <td><?php echo $select[ 27  ]; ?></td>
                                <td><?php echo $select[ 28  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:center; vertical-align:middle">2014-2015</td>
                                <td><?php echo $select[ 29  ]; ?></td>
                                <td><?php echo $select[ 30  ]; ?></td>
                                <td><?php echo $select[ 31  ]; ?></td>
                                <td><?php echo $select[ 32  ]; ?></td>
                                <td><?php echo $select[ 33  ]; ?></td>
                                <td><?php echo $select[ 34  ]; ?></td>
                                <td><?php echo $select[ 35  ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <p>Số lượng sinh viên hệ chính quy đang học tập tại trường:</p>
                </div>
                <div class="col-md-1"><?php echo $select[ 36  ]; ?></div> người
            </div>
            <div class="row">
                <div class="col-md-12"><h4>21. Thống kê, phân loại số lượng học viên nhập học (trong 5 năm gần nhất) các hệ chính quy và không chính quy </h4></div>
            </div>
           <div class="row">
                <div class="form-group col-md-12">
                   <table class="table table-striped table-hover" border="1">
                       <thead>
                           <tr>
                               <th>Các tiêu chí</th>
                               <th>2010-2011</th>
                               <th>2011-2012</th>
                               <th>2012-2013</th>
                               <th>2013-2014</th>
                               <th>2014-2015</th>
                           </tr>
                       </thead>
                       <tbody>
                           <tr>
                               <td style="text-align:left">1. Nghiên cứu sinh</td>
                                <td><?php echo $select[ 37  ]; ?></td>
                                <td><?php echo $select[ 38  ]; ?></td>
                                <td><?php echo $select[ 39  ]; ?></td>
                                <td><?php echo $select[ 40  ]; ?></td>
                                <td><?php echo $select[ 41  ]; ?></td>
                           </tr>
                           <tr>
                               <td style="text-align:left">2. Học viên cao học</td>
                                <td><?php echo $select[ 42  ]; ?></td>
                                <td><?php echo $select[ 43  ]; ?></td>
                                <td><?php echo $select[ 44  ]; ?></td>
                                <td><?php echo $select[ 45  ]; ?></td>
                                <td><?php echo $select[ 46  ]; ?></td>
                           </tr>
                           <tr>
                               <td style="text-align:left">3. Sinh viên đại học, trong đó:</td>
                                <td><?php echo $select[ 47  ]; ?></td>
                                <td><?php echo $select[ 48  ]; ?></td>
                                <td><?php echo $select[ 49  ]; ?></td>
                                <td><?php echo $select[ 50  ]; ?></td>
                                <td><?php echo $select[ 51  ]; ?></td>
                           </tr>
                           <tr>
                               <td style="padding-left:50px;text-align:left">Hệ chính quy</td>
                                <td><?php echo $select[ 52  ]; ?></td>
                                <td><?php echo $select[ 53  ]; ?></td>
                                <td><?php echo $select[ 54  ]; ?></td>
                                <td><?php echo $select[ 55  ]; ?></td>
                                <td><?php echo $select[ 56  ]; ?></td>
                           </tr>
                           <tr>
                               <td style="padding-left:50px;text-align:left">Hệ không chính quy</td>
                                <td><?php echo $select[ 57  ]; ?></td>
                                <td><?php echo $select[ 58  ]; ?></td>
                                <td><?php echo $select[ 59  ]; ?></td>
                                <td><?php echo $select[ 60  ]; ?></td>
                                <td><?php echo $select[ 61  ]; ?></td>
                           </tr>
                       </tbody>
                   </table>
                   <table class="table table-hover">
                       <tbody>
                           <tr>
                               <td>Tổng số sinh viên chính quy (chưa quy đổi): </td>
                               <td><?php echo $select[ 62  ]; ?></td>
                           </tr>
                           <tr>
                               <td>Tổng số sinh viên quy đổi: </td>
                               <td><?php echo $select[ 63 ]; ?></td>
                           </tr>
                           <tr>
                               <td>Tỷ lệ sinh viên trên giảng viên (sau khi quy đổi): </td>
                               <td><?php echo $select[ 64  ]; ?></td>
                           </tr>
                       </tbody>
                   </table>
               </div>
           </div>
            <div class="row">
                <div class="col-md-12"><h4>22. Số sinh viên quốc tế nhập học trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col"></th>
                                <th colspan="5" scope="col">Năm học</th>
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
                                <td>Số lượng</td>
                                <td><?php echo $select[ 65  ]; ?></td>
                                <td><?php echo $select[ 66  ]; ?></td>
                                <td><?php echo $select[ 67  ]; ?></td>
                                <td><?php echo $select[ 68  ]; ?></td>
                                <td><?php echo $select[ 69  ]; ?></td>
                            </tr>
                            <tr>
                                <td>Tỷ lệ (%) trên tổng số sinh viên quy đổi</td>
                                <td><?php echo $select[ 70  ]; ?></td>
                                <td><?php echo $select[ 71  ]; ?></td>
                                <td><?php echo $select[ 72  ]; ?></td>
                                <td><?php echo $select[ 73  ]; ?></td>
                                <td><?php echo $select[ 74  ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>23. Sinh viên có chỗ ở trong kí túc xá / tổng số sinh viên có nhu cầu trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th>Các tiêu chí</th>
                                <th>2010-2011</th>
                                <th>2011-2012</th>
                                <th>2012-2013</th>
                                <th>2013-2014</th>
                                <th>2014-2015</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="text-align:left">1. Tổng diện tích phòng ở (m2)</td>
                                <td><?php echo $select[ 75  ]; ?></td>
                                <td><?php echo $select[ 76  ]; ?></td>
                                <td><?php echo $select[ 77  ]; ?></td>
                                <td><?php echo $select[ 78  ]; ?></td>
                                <td><?php echo $select[ 79  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">2. Số lượng sinh viên có nhu cầu về phòng ở (trong và ngoài ký túc xá)</td>
                                <td><?php echo $select[ 80  ]; ?></td>
                                <td><?php echo $select[ 81  ]; ?></td>
                                <td><?php echo $select[ 82  ]; ?></td>
                                <td><?php echo $select[ 83  ]; ?></td>
                                <td><?php echo $select[ 84  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">3. Số lượng sinh viên được ở trong ký túc xá</td>
                                <td><?php echo $select[ 85  ]; ?></td>
                                <td><?php echo $select[ 86  ]; ?></td>
                                <td><?php echo $select[ 87  ]; ?></td>
                                <td><?php echo $select[ 88  ]; ?></td>
                                <td><?php echo $select[ 89  ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">4. Tỷ số diện tích trên đầu sinh viên ở trong ký túc xá, m2/người</td>
                                <td><?php echo $select[ 90  ]; ?></td>
                                <td><?php echo $select[ 91  ]; ?></td>
                                <td><?php echo $select[ 92  ]; ?></td>
                                <td><?php echo $select[ 93  ]; ?></td>
                                <td><?php echo $select[ 94  ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>24. Số lượng (người) và tỷ lệ (%) người học tham gia nghiên cứu khoa học:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col"></th>
                                <th colspan="5" scope="col">Năm học</th>
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
                                <td>Số lượng (người)</td>
                                <td><?php echo $select[ 95  ]; ?></td>
                                <td><?php echo $select[ 96  ]; ?></td>
                                <td><?php echo $select[ 97  ]; ?></td>
                                <td><?php echo $select[ 98  ]; ?></td>
                                <td><?php echo $select[ 99  ]; ?></td>
                            </tr>
                            <tr>
                                <td>Tỷ lệ (%) trên tổng số sinh viên quy đổi</td>
                                <td><?php echo $select[ 100 ]; ?></td>
                                <td><?php echo $select[ 101 ]; ?></td>
                                <td><?php echo $select[ 102 ]; ?></td>
                                <td><?php echo $select[ 103 ]; ?></td>
                                <td><?php echo $select[ 104 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
             <div class="row">
                <div class="col-md-12"><h4>25. Thống kê số lượng người tốt nghiệp trong 5 năm gần đây:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2" scope="col">Các tiêu chí</th>
                                <th colspan="5" scope="col">Năm học</th>
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
                                <td style="text-align:left">1. Nghiên cứu sinh bảo vệ thành công luận án tiến sĩ</td>
                                <td><?php echo $select[ 105 ]; ?></td>
                                <td><?php echo $select[ 106 ]; ?></td>
                                <td><?php echo $select[ 107 ]; ?></td>
                                <td><?php echo $select[ 108 ]; ?></td>
                                <td><?php echo $select[ 109 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">2. Học viên tốt nghiệp cao học</td>
                                <td><?php echo $select[ 110 ]; ?></td>
                                <td><?php echo $select[ 111 ]; ?></td>
                                <td><?php echo $select[ 112 ]; ?></td>
                                <td><?php echo $select[ 113 ]; ?></td>
                                <td><?php echo $select[ 114 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">3. Sinh viên tốt nghiệp đại học, trong đó:</td>
                                <td><?php echo $select[ 115 ]; ?></td>
                                <td><?php echo $select[ 116 ]; ?></td>
                                <td><?php echo $select[ 117 ]; ?></td>
                                <td><?php echo $select[ 118 ]; ?></td>
                                <td><?php echo $select[ 119 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;padding-left:50px">Hệ chính quy</td>
                                <td><?php echo $select[ 120 ]; ?></td>
                                <td><?php echo $select[ 121 ]; ?></td>
                                <td><?php echo $select[ 122 ]; ?></td>
                                <td><?php echo $select[ 123 ]; ?></td>
                                <td><?php echo $select[ 124 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left;padding-left:50px">Hệ không chính quy</td>
                                <td><?php echo $select[ 125 ]; ?></td>
                                <td><?php echo $select[ 126 ]; ?></td>
                                <td><?php echo $select[ 127 ]; ?></td>
                                <td><?php echo $select[ 128 ]; ?></td>
                                <td><?php echo $select[ 129 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                    <i>(Tính cả những học viên đã đủ điều kiện tốt nghiệp theo quy định nhưng đang chờ cấp bằng).</i>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"><h4>26. Tình trạng tốt nghiệp của sinh viên hệ chính quy:</h4></div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" border="1">
                        <thead>
                            <tr>
                                <th rowspan="2">Các tiêu chí</th>
                                <th colspan="5">Năm tốt nghiệp</th>
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
                                <td style="text-align:left">1. Số lượng sinh viên tốt nghiệp (người)</td>
                                <td><?php echo $select[ 130 ]; ?></td>
                                <td><?php echo $select[ 131 ]; ?></td>
                                <td><?php echo $select[ 132 ]; ?></td>
                                <td><?php echo $select[ 133 ]; ?></td>
                                <td><?php echo $select[ 134 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">2. Tỷ lệ sinh viên tốt nghiệp so với số tuyển vào (%)</td>
                                <td><?php echo $select[ 135 ]; ?></td>
                                <td><?php echo $select[ 136 ]; ?></td>
                                <td><?php echo $select[ 137 ]; ?></td>
                                <td><?php echo $select[ 138 ]; ?></td>
                                <td><?php echo $select[ 139 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>3. Đánh giá của sinh viên tốt nghiệp về chất lượng đào tạo của nhà trường:</p>
                                <p>A. Nhà trường không điều tra về vấn đề này --> chuyển xuống câu 4</p>
                                <p>B. Nhà trường có điều tra về vấn đề này --> điền các thông tin dưới đây</p>
                                </td>
                                <td><?php echo $select[ 140 ]; ?></td>
                                <td><?php echo $select[ 141 ]; ?></td>
                                <td><?php echo $select[ 142 ]; ?></td>
                                <td><?php echo $select[ 143 ]; ?></td>
                                <td><?php echo $select[ 144 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left"><p>3.1 Tỷ lệ sinh viên trả lời đã học được những kiến thức và kỹ năng cần thiết </p><p> cho công việc theo ngành tốt nghiệp (%)</p></td>
                                <td><?php echo $select[ 145 ]; ?></td>
                                <td><?php echo $select[ 146 ]; ?></td>
                                <td><?php echo $select[ 147 ]; ?></td>
                                <td><?php echo $select[ 148 ]; ?></td>
                                <td><?php echo $select[ 149 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>3.2 Tỷ lệ sinh viên trả lời chỉ học được một phần kiến thức và kỹ năng cần thiết </p><p> cho công việc theo ngành tốt nghiệp (%)</p>
                                </td>
                                <td><?php echo $select[ 150 ]; ?></td>
                                <td><?php echo $select[ 151 ]; ?></td>
                                <td><?php echo $select[ 152 ]; ?></td>
                                <td><?php echo $select[ 153 ]; ?></td>
                                <td><?php echo $select[ 154 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>3.3 Tỷ lệ sinh viên trả lời KHÔNG học được những kiến thức và kỹ năng cần thiết </p><p> cho công việc theo ngành tốt nghiệp</p>
                                </td>
                                <td><?php echo $select[ 155 ]; ?></td>
                                <td><?php echo $select[ 156 ]; ?></td>
                                <td><?php echo $select[ 157 ]; ?></td>
                                <td><?php echo $select[ 158 ]; ?></td>
                                <td><?php echo $select[ 159 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>4. Sinh viên có việc làm trong năm đầu tiên sau khi tốt nghiệp:</p>
                                <p>A. Nhà trường không điều tra về vấn đề này  chuyển xuống câu 5</p>
                                <p>B. Nhà trường có điều tra về vấn đề này  điền các thông tin dưới đây</p>
                                </td>
                                <td><?php echo $select[ 160 ]; ?></td>
                                <td><?php echo $select[ 161 ]; ?></td>
                                <td><?php echo $select[ 162 ]; ?></td>
                                <td><?php echo $select[ 163 ]; ?></td>
                                <td><?php echo $select[ 164 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>4.1 Tỷ lệ sinh viên có việc làm đúng ngành đào tạo (%)</p>
                                <p style="padding-left:50px">- Sau 6 tháng tốt nghiệp</p>
                                <p style="padding-left:50px">- Sau 12 tháng tốt nghiệp</p>
                                </td>
                                <td style="vertical-align:bottom">
                                <p><?php echo $select[ 165 ]; ?></p>
                                <p><?php echo $select[ 170 ]; ?></p>
                                </td>
                                <td style="vertical-align:bottom">
                                <p><?php echo $select[ 166 ]; ?></p>
                                <p><?php echo $select[ 171 ]; ?></p>
                                </td>
                                <td style="vertical-align:bottom">
                                <p><?php echo $select[ 167 ]; ?></p>
                                <p><?php echo $select[ 172 ]; ?></p>
                                </td>
                                <td style="vertical-align:bottom">
                                <p><?php echo $select[ 168 ]; ?></p>
                                <p><?php echo $select[ 173]; ?></p>
                                </td>
                                <td style="vertical-align:bottom">
                                <p><?php echo $select[ 169 ]; ?></p>
                                <p><?php echo $select[ 174 ]; ?></p>
                                </td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>4.2 Tỷ lệ sinh viên có việc làm trái ngành đào tạo (%)</p>
                                </td>
                                <td><?php echo $select[ 175 ]; ?></td>
                                <td><?php echo $select[ 176 ]; ?></td>
                                <td><?php echo $select[ 177 ]; ?></td>
                                <td><?php echo $select[ 178 ]; ?></td>
                                <td><?php echo $select[ 179 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>4.3 Thu nhập bình quân/tháng của sinh viên có việc làm (triệu đồng</p>
                                </td>
                                <td><?php echo $select[ 180 ]; ?></td>
                                <td><?php echo $select[ 181 ]; ?></td>
                                <td><?php echo $select[ 182 ]; ?></td>
                                <td><?php echo $select[ 183 ]; ?></td>
                                <td><?php echo $select[ 184 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>5. Đánh giá của nhà tuyển dụng về sinh viên tốt nghiệp có việc làm đúng ngành đào tạo:</p>
                                <p>A. Nhà trường không điều tra về vấn đề này  chuyển xuống kết thúc bảng này</p>
                                <p>B. Nhà trường có điều tra về vấn đề này  điền các thông tin dưới đây</p>
                                </td>
                                <td><?php echo $select[ 185 ]; ?></td>
                                <td><?php echo $select[ 186 ]; ?></td>
                                <td><?php echo $select[ 187 ]; ?></td>
                                <td><?php echo $select[ 188 ]; ?></td>
                                <td><?php echo $select[ 189 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>5.1 Tỷ lệ sinh viên đáp ứng yêu cầu của công việc, có thể sử dụng được ngay (%)</p>
                                </td>
                                <td><?php echo $select[ 190 ]; ?></td>
                                <td><?php echo $select[ 191 ]; ?></td>
                                <td><?php echo $select[ 192 ]; ?></td>
                                <td><?php echo $select[ 193 ]; ?></td>
                                <td><?php echo $select[ 194 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>5.2 Tỷ lệ sinh viên cơ bản đáp ứng yêu cầu của công việc, nhưng phải đào tạo thêm (%)</p>
                                </td>
                                <td><?php echo $select[ 195 ]; ?></td>
                                <td><?php echo $select[ 196 ]; ?></td>
                                <td><?php echo $select[ 197 ]; ?></td>
                                <td><?php echo $select[ 198 ]; ?></td>
                                <td><?php echo $select[ 199 ]; ?></td>
                            </tr>
                            <tr>
                                <td style="text-align:left">
                                <p>5.3 Tỷ lệ sinh viên phải được đào tạo lại hoặc đào tạo bổ sung ít nhất 6 tháng (%)</p>
                                </td>
                                <td><?php echo $select[ 200 ]; ?></td>
                                <td><?php echo $select[ 201 ]; ?></td>
                                <td><?php echo $select[ 202 ]; ?></td>
                                <td><?php echo $select[ 203 ]; ?></td>
                                <td><?php echo $select[ 204 ]; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>Ghi chú: </p>
                    <p><i>- Sinh viên tốt nghiệp là sinh viên có đủ điều kiện để được công nhận tốt nghiệp theo quy định, kể cả những sinh viên chưa nhận được bằng tốt nghiệp.</i></p>
                    <p><i>- Sinh viên có việc làm là sinh viên tìm được việc làm hoặc tạo được việc làm.</i></p>
                    <p><i>- Năm đầu tiên sau khi tốt nghiệp: 12 tháng kể từ ngày tốt nghiệp.</i></p>
                    <p><i>- Các mục bỏ trống đều được xem là nhà trường không điều tra về việc này.</i></p>
                </div>
            </div>
      <input type="submit" name="update_lai_trang4" value="Cập nhật" class="btn btn-primary">
    </form>
    </div>
</div>
<?php   } ?>
<?php get_template_part('csgd/pagination'); ?>