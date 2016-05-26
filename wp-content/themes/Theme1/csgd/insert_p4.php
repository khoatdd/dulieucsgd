<?php if ($_SESSION['insert_p4'] != 1 && !isset($_POST['submit_trang4'])) { ?>
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
                <td><input type="text" name="IV20a_1" class="form-control"></td>
                <td><input type="text" name="IV20a_2" class="form-control"></td>
                <td><input type="text" name="IV20a_3" class="form-control"></td>
                <td><input type="text" name="IV20a_4" class="form-control"></td>
                <td><input type="text" name="IV20a_5" class="form-control"></td>
                <td><input type="text" name="IV20a_6" class="form-control"></td>
                <td><input type="text" name="IV20a_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">2011-2012</td>
                <td><input type="text" name="IV20b_1" class="form-control"></td>
                <td><input type="text" name="IV20b_2" class="form-control"></td>
                <td><input type="text" name="IV20b_3" class="form-control"></td>
                <td><input type="text" name="IV20b_4" class="form-control"></td>
                <td><input type="text" name="IV20b_5" class="form-control"></td>
                <td><input type="text" name="IV20b_6" class="form-control"></td>
                <td><input type="text" name="IV20b_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">2012-2013</td>
                <td><input type="text" name="IV20c_1" class="form-control"></td>
                <td><input type="text" name="IV20c_2" class="form-control"></td>
                <td><input type="text" name="IV20c_3" class="form-control"></td>
                <td><input type="text" name="IV20c_4" class="form-control"></td>
                <td><input type="text" name="IV20c_5" class="form-control"></td>
                <td><input type="text" name="IV20c_6" class="form-control"></td>
                <td><input type="text" name="IV20c_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">2013-2014</td>
                <td><input type="text" name="IV20d_1" class="form-control"></td>
                <td><input type="text" name="IV20d_2" class="form-control"></td>
                <td><input type="text" name="IV20d_3" class="form-control"></td>
                <td><input type="text" name="IV20d_4" class="form-control"></td>
                <td><input type="text" name="IV20d_5" class="form-control"></td>
                <td><input type="text" name="IV20d_6" class="form-control"></td>
                <td><input type="text" name="IV20d_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">2014-2015</td>
                <td><input type="text" name="IV20e_1" class="form-control"></td>
                <td><input type="text" name="IV20e_2" class="form-control"></td>
                <td><input type="text" name="IV20e_3" class="form-control"></td>
                <td><input type="text" name="IV20e_4" class="form-control"></td>
                <td><input type="text" name="IV20e_5" class="form-control"></td>
                <td><input type="text" name="IV20e_6" class="form-control"></td>
                <td><input type="text" name="IV20e_7" class="form-control"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <p>Số lượng sinh viên hệ chính quy đang học tập tại trường:</p>
        </div>
        <div class="col-md-1"><input type="text" name="IV20f" class="form-control"></div> người
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
                <td><input type="text" name="IV21a_1" class="form-control"></td>
                <td><input type="text" name="IV21a_2" class="form-control"></td>
                <td><input type="text" name="IV21a_3" class="form-control"></td>
                <td><input type="text" name="IV21a_4" class="form-control"></td>
                <td><input type="text" name="IV21a_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">2. Học viên cao học</td>
                <td><input type="text" name="IV21b_1" class="form-control"></td>
                <td><input type="text" name="IV21b_2" class="form-control"></td>
                <td><input type="text" name="IV21b_3" class="form-control"></td>
                <td><input type="text" name="IV21b_4" class="form-control"></td>
                <td><input type="text" name="IV21b_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">3. Sinh viên đại học, trong đó:</td>
                <td><input type="text" name="IV21c_1" class="form-control"></td>
                <td><input type="text" name="IV21c_2" class="form-control"></td>
                <td><input type="text" name="IV21c_3" class="form-control"></td>
                <td><input type="text" name="IV21c_4" class="form-control"></td>
                <td><input type="text" name="IV21c_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="padding-left:50px;text-align:left">Hệ chính quy</td>
                <td><input type="text" name="IV21d_1" class="form-control"></td>
                <td><input type="text" name="IV21d_2" class="form-control"></td>
                <td><input type="text" name="IV21d_3" class="form-control"></td>
                <td><input type="text" name="IV21d_4" class="form-control"></td>
                <td><input type="text" name="IV21d_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="padding-left:50px;text-align:left">Hệ không chính quy</td>
                <td><input type="text" name="IV21e_1" class="form-control"></td>
                <td><input type="text" name="IV21e_2" class="form-control"></td>
                <td><input type="text" name="IV21e_3" class="form-control"></td>
                <td><input type="text" name="IV21e_4" class="form-control"></td>
                <td><input type="text" name="IV21e_5" class="form-control"></td>
              </tr>
            </tbody>
          </table>
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>Tổng số sinh viên chính quy (chưa quy đổi): </td>
                <td><input type="text" name="IV21f" class="form-control"></td>
              </tr>
              <tr>
                <td>Tổng số sinh viên quy đổi: </td>
                <td><input type="text" name="IV21g" class="form-control"></td>
              </tr>
              <tr>
                <td>Tỷ lệ sinh viên trên giảng viên (sau khi quy đổi): </td>
                <td><input type="text" name="IV21h" class="form-control"></td>
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
                <td><input type="text" name="IV22a_1" class="form-control"></td>
                <td><input type="text" name="IV22a_2" class="form-control"></td>
                <td><input type="text" name="IV22a_3" class="form-control"></td>
                <td><input type="text" name="IV22a_4" class="form-control"></td>
                <td><input type="text" name="IV22a_5" class="form-control"></td>
              </tr>
              <tr>
                <td>Tỷ lệ (%) trên tổng số sinh viên quy đổi</td>
                <td><input type="text" name="IV22b_1" class="form-control"></td>
                <td><input type="text" name="IV22b_2" class="form-control"></td>
                <td><input type="text" name="IV22b_3" class="form-control"></td>
                <td><input type="text" name="IV22b_4" class="form-control"></td>
                <td><input type="text" name="IV22b_5" class="form-control"></td>
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
                <td><input type="text" name="IV23a_1" class="form-control"></td>
                <td><input type="text" name="IV23a_2" class="form-control"></td>
                <td><input type="text" name="IV23a_3" class="form-control"></td>
                <td><input type="text" name="IV23a_4" class="form-control"></td>
                <td><input type="text" name="IV23a_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">2. Số lượng sinh viên có nhu cầu về phòng ở (trong và ngoài ký túc xá)</td>
                <td><input type="text" name="IV23b_1" class="form-control"></td>
                <td><input type="text" name="IV23b_2" class="form-control"></td>
                <td><input type="text" name="IV23b_3" class="form-control"></td>
                <td><input type="text" name="IV23b_4" class="form-control"></td>
                <td><input type="text" name="IV23b_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">3. Số lượng sinh viên được ở trong ký túc xá</td>
                <td><input type="text" name="IV23c_1" class="form-control"></td>
                <td><input type="text" name="IV23c_2" class="form-control"></td>
                <td><input type="text" name="IV23c_3" class="form-control"></td>
                <td><input type="text" name="IV23c_4" class="form-control"></td>
                <td><input type="text" name="IV23c_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">4. Tỷ số diện tích trên đầu sinh viên ở trong ký túc xá, m2/người</td>
                <td><input type="text" name="IV23d_1" class="form-control"></td>
                <td><input type="text" name="IV23d_2" class="form-control"></td>
                <td><input type="text" name="IV23d_3" class="form-control"></td>
                <td><input type="text" name="IV23d_4" class="form-control"></td>
                <td><input type="text" name="IV23d_5" class="form-control"></td>
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
                <td><input type="text" name="IV24a_1" class="form-control"></td>
                <td><input type="text" name="IV24a_2" class="form-control"></td>
                <td><input type="text" name="IV24a_3" class="form-control"></td>
                <td><input type="text" name="IV24a_4" class="form-control"></td>
                <td><input type="text" name="IV24a_5" class="form-control"></td>
              </tr>
              <tr>
                <td>Tỷ lệ (%) trên tổng số sinh viên quy đổi</td>
                <td><input type="text" name="IV24b_1" class="form-control"></td>
                <td><input type="text" name="IV24b_2" class="form-control"></td>
                <td><input type="text" name="IV24b_3" class="form-control"></td>
                <td><input type="text" name="IV24b_4" class="form-control"></td>
                <td><input type="text" name="IV24b_5" class="form-control"></td>
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
                <td><input type="text" name="IV25a_1" class="form-control"></td>
                <td><input type="text" name="IV25a_2" class="form-control"></td>
                <td><input type="text" name="IV25a_3" class="form-control"></td>
                <td><input type="text" name="IV25a_4" class="form-control"></td>
                <td><input type="text" name="IV25a_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">2. Học viên tốt nghiệp cao học</td>
                <td><input type="text" name="IV25b_1" class="form-control"></td>
                <td><input type="text" name="IV25b_2" class="form-control"></td>
                <td><input type="text" name="IV25b_3" class="form-control"></td>
                <td><input type="text" name="IV25b_4" class="form-control"></td>
                <td><input type="text" name="IV25b_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">3. Sinh viên tốt nghiệp đại học, trong đó:</td>
                <td><input type="text" name="IV25c_1" class="form-control"></td>
                <td><input type="text" name="IV25c_2" class="form-control"></td>
                <td><input type="text" name="IV25c_3" class="form-control"></td>
                <td><input type="text" name="IV25c_4" class="form-control"></td>
                <td><input type="text" name="IV25c_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left;padding-left:50px">Hệ chính quy</td>
                <td><input type="text" name="IV25d_1" class="form-control"></td>
                <td><input type="text" name="IV25d_2" class="form-control"></td>
                <td><input type="text" name="IV25d_3" class="form-control"></td>
                <td><input type="text" name="IV25d_4" class="form-control"></td>
                <td><input type="text" name="IV25d_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left;padding-left:50px">Hệ không chính quy</td>
                <td><input type="text" name="IV25e_1" class="form-control"></td>
                <td><input type="text" name="IV25e_2" class="form-control"></td>
                <td><input type="text" name="IV25e_3" class="form-control"></td>
                <td><input type="text" name="IV25e_4" class="form-control"></td>
                <td><input type="text" name="IV25e_5" class="form-control"></td>
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
                <td><input type="text" name="IV26a_1" class="form-control"></td>
                <td><input type="text" name="IV26a_2" class="form-control"></td>
                <td><input type="text" name="IV26a_3" class="form-control"></td>
                <td><input type="text" name="IV26a_4" class="form-control"></td>
                <td><input type="text" name="IV26a_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">2. Tỷ lệ sinh viên tốt nghiệp so với số tuyển vào (%)</td>
                <td><input type="text" name="IV26b_1" class="form-control"></td>
                <td><input type="text" name="IV26b_2" class="form-control"></td>
                <td><input type="text" name="IV26b_3" class="form-control"></td>
                <td><input type="text" name="IV26b_4" class="form-control"></td>
                <td><input type="text" name="IV26b_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>3. Đánh giá của sinh viên tốt nghiệp về chất lượng đào tạo của nhà trường:</p>
                <p>A. Nhà trường không điều tra về vấn đề này --> chuyển xuống câu 4</p>
                <p>B. Nhà trường có điều tra về vấn đề này --> điền các thông tin dưới đây</p>
                </td>
                <td><input type="text" name="IV26c_1" class="form-control"></td>
                <td><input type="text" name="IV26c_2" class="form-control"></td>
                <td><input type="text" name="IV26c_3" class="form-control"></td>
                <td><input type="text" name="IV26c_4" class="form-control"></td>
                <td><input type="text" name="IV26c_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left"><p>3.1 Tỷ lệ sinh viên trả lời đã học được những kiến thức và kỹ năng cần thiết </p><p> cho công việc theo ngành tốt nghiệp (%)</p></td>
                <td><input type="text" name="IV26d_1" class="form-control"></td>
                <td><input type="text" name="IV26d_2" class="form-control"></td>
                <td><input type="text" name="IV26d_3" class="form-control"></td>
                <td><input type="text" name="IV26d_4" class="form-control"></td>
                <td><input type="text" name="IV26d_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>3.2 Tỷ lệ sinh viên trả lời chỉ học được một phần kiến thức và kỹ năng cần thiết </p><p> cho công việc theo ngành tốt nghiệp (%)</p>
                </td>
                <td><input type="text" name="IV26e_1" class="form-control"></td>
                <td><input type="text" name="IV26e_2" class="form-control"></td>
                <td><input type="text" name="IV26e_3" class="form-control"></td>
                <td><input type="text" name="IV26e_4" class="form-control"></td>
                <td><input type="text" name="IV26e_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>3.3 Tỷ lệ sinh viên trả lời KHÔNG học được những kiến thức và kỹ năng cần thiết </p><p> cho công việc theo ngành tốt nghiệp</p>
                </td>
                <td><input type="text" name="IV26f_1" class="form-control"></td>
                <td><input type="text" name="IV26f_2" class="form-control"></td>
                <td><input type="text" name="IV26f_3" class="form-control"></td>
                <td><input type="text" name="IV26f_4" class="form-control"></td>
                <td><input type="text" name="IV26f_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>4. Sinh viên có việc làm trong năm đầu tiên sau khi tốt nghiệp:</p>
                <p>A. Nhà trường không điều tra về vấn đề này  chuyển xuống câu 5</p>
                <p>B. Nhà trường có điều tra về vấn đề này  điền các thông tin dưới đây</p>
                </td>
                <td><input type="text" name="IV26g_1" class="form-control"></td>
                <td><input type="text" name="IV26g_2" class="form-control"></td>
                <td><input type="text" name="IV26g_3" class="form-control"></td>
                <td><input type="text" name="IV26g_4" class="form-control"></td>
                <td><input type="text" name="IV26g_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>4.1 Tỷ lệ sinh viên có việc làm đúng ngành đào tạo (%)</p>
                <p style="padding-left:50px">- Sau 6 tháng tốt nghiệp</p>
                <p style="padding-left:50px">- Sau 12 tháng tốt nghiệp</p>
                </td>
                <td style="vertical-align:bottom">
                <input type="text" name="IV26h_1_1" class="form-control">
                <input type="text" name="IV26h_2_1" class="form-control">
                </td>
                <td style="vertical-align:bottom">
                <input type="text" name="IV26h_1_2" class="form-control">
                <input type="text" name="IV26h_2_2" class="form-control">
                </td>
                <td style="vertical-align:bottom">
                <input type="text" name="IV26h_1_3" class="form-control">
                <input type="text" name="IV26h_2_3" class="form-control">
                </td>
                <td style="vertical-align:bottom">
                <input type="text" name="IV26h_1_4" class="form-control">
                <input type="text" name="IV26h_2_4" class="form-control">
                </td>
                <td style="vertical-align:bottom">
                <input type="text" name="IV26h_1_5" class="form-control">
                <input type="text" name="IV26h_2_5" class="form-control">
                </td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>4.2 Tỷ lệ sinh viên có việc làm trái ngành đào tạo (%)</p>
                </td>
                <td><input type="text" name="IV26i_1" class="form-control"></td>
                <td><input type="text" name="IV26i_2" class="form-control"></td>
                <td><input type="text" name="IV26i_3" class="form-control"></td>
                <td><input type="text" name="IV26i_4" class="form-control"></td>
                <td><input type="text" name="IV26i_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>4.3 Thu nhập bình quân/tháng của sinh viên có việc làm (triệu đồng</p>
                </td>
                <td><input type="text" name="IV26j_1" class="form-control"></td>
                <td><input type="text" name="IV26j_2" class="form-control"></td>
                <td><input type="text" name="IV26j_3" class="form-control"></td>
                <td><input type="text" name="IV26j_4" class="form-control"></td>
                <td><input type="text" name="IV26j_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>5. Đánh giá của nhà tuyển dụng về sinh viên tốt nghiệp có việc làm đúng ngành đào tạo:</p>
                <p>A. Nhà trường không điều tra về vấn đề này  chuyển xuống kết thúc bảng này</p>
                <p>B. Nhà trường có điều tra về vấn đề này  điền các thông tin dưới đây</p>
                </td>
                <td><input type="text" name="IV26k_1" class="form-control"></td>
                <td><input type="text" name="IV26k_2" class="form-control"></td>
                <td><input type="text" name="IV26k_3" class="form-control"></td>
                <td><input type="text" name="IV26k_4" class="form-control"></td>
                <td><input type="text" name="IV26k_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>5.1 Tỷ lệ sinh viên đáp ứng yêu cầu của công việc, có thể sử dụng được ngay (%)</p>
                </td>
                <td><input type="text" name="IV26l_1" class="form-control"></td>
                <td><input type="text" name="IV26l_2" class="form-control"></td>
                <td><input type="text" name="IV26l_3" class="form-control"></td>
                <td><input type="text" name="IV26l_4" class="form-control"></td>
                <td><input type="text" name="IV26l_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>5.2 Tỷ lệ sinh viên cơ bản đáp ứng yêu cầu của công việc, nhưng phải đào tạo thêm (%)</p>
                </td>
                <td><input type="text" name="IV26m_1" class="form-control"></td>
                <td><input type="text" name="IV26m_2" class="form-control"></td>
                <td><input type="text" name="IV26m_3" class="form-control"></td>
                <td><input type="text" name="IV26m_4" class="form-control"></td>
                <td><input type="text" name="IV26m_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:left">
                <p>5.3 Tỷ lệ sinh viên phải được đào tạo lại hoặc đào tạo bổ sung ít nhất 6 tháng (%)</p>
                </td>
                <td><input type="text" name="IV26n_1" class="form-control"></td>
                <td><input type="text" name="IV26n_2" class="form-control"></td>
                <td><input type="text" name="IV26n_3" class="form-control"></td>
                <td><input type="text" name="IV26n_4" class="form-control"></td>
                <td><input type="text" name="IV26n_5" class="form-control"></td>
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
      <input type="submit" name="submit_trang4" value="Cập nhật" class="btn btn-primary">
		</form>
 	</div>
</div>
<?php } else if (isset($_POST['submit_trang4'])) { 
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
<?php } else {?>
<!-- Nếu đã đăng ký rồi thì chỉ xem thông tin -->
<?php
$ID = $_SESSION['ID'];
$select = $wpdb->get_row("SELECT * FROM csgd_iv_nguoihoc WHERE ID= $ID",ARRAY_N); ?>
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
                <td><?php echo number_format($select[ 1 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 2 ],0,'.',','); ?></td>
                <td><?php echo $select[ 3 ]; ?></td>
                <td><?php echo number_format($select[ 4 ],0,'.',','); ?></td>
                <td><?php echo $select[ 5 ]; ?></td>
                <td><?php echo $select[ 6 ]; ?></td>
                <td><?php echo number_format($select[ 7 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">2011-2012</td>
                <td><?php echo number_format($select[ 8 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 9 ],0,'.',','); ?></td>
                <td><?php echo $select[ 10 ]; ?></td>
                <td><?php echo number_format($select[ 11 ],0,'.',','); ?></td>
                <td><?php echo $select[ 12 ]; ?></td>
                <td><?php echo $select[ 13 ]; ?></td>
                <td><?php echo number_format($select[ 14 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">2012-2013</td>
                <td><?php echo number_format($select[ 15 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 16 ],0,'.',','); ?></td>
                <td><?php echo $select[ 17 ]; ?></td>
                <td><?php echo number_format($select[ 18 ],0,'.',','); ?></td>
                <td><?php echo $select[ 19 ]; ?></td>
                <td><?php echo $select[ 20 ]; ?></td>
                <td><?php echo number_format($select[ 21 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">2013-2014</td>
                <td><?php echo number_format($select[ 22 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 23 ],0,'.',','); ?></td>
                <td><?php echo $select[ 24 ]; ?></td>
                <td><?php echo number_format($select[ 25 ],0,'.',','); ?></td>
                <td><?php echo $select[ 26 ]; ?></td>
                <td><?php echo $select[ 27 ]; ?></td>
                <td><?php echo number_format($select[ 28 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">2014-2015</td>
                <td><?php echo number_format($select[ 29 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 30 ],0,'.',','); ?></td>
                <td><?php echo $select[ 31 ]; ?></td>
                <td><?php echo number_format($select[ 32 ],0,'.',','); ?></td>
                <td><?php echo $select[ 33 ]; ?></td>
                <td><?php echo $select[ 34 ]; ?></td>
                <td><?php echo number_format($select[ 35 ],0,'.',','); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-5">
          <p>Số lượng sinh viên hệ chính quy đang học tập tại trường:</p>
        </div>
        <div class="col-md-1"><?php echo $select[ 36 ]; ?></div> người
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
                <td><?php echo number_format($select[ 37 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 38 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 39 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 40 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 41 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:left">2. Học viên cao học</td>
                <td><?php echo number_format($select[ 42 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 43 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 44 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 45 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 46 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:left">3. Sinh viên đại học, trong đó:</td>
                <td><?php echo number_format($select[ 47 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 48 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 49 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 50 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 51 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="padding-left:50px;text-align:left">Hệ chính quy</td>
                <td><?php echo number_format($select[ 52 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 53 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 54 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 55 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 56 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="padding-left:50px;text-align:left">Hệ không chính quy</td>
                <td><?php echo number_format($select[ 57 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 58 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 59 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 60 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 61 ],0,'.',','); ?></td>
              </tr>
            </tbody>
          </table>
          <table class="table table-hover">
            <tbody>
              <tr>
                <td>Tổng số sinh viên chính quy (chưa quy đổi): </td>
                <td><?php echo number_format($select[ 62 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td>Tổng số sinh viên quy đổi: </td>
                <td><?php echo $select[ 63 ]; ?></td>
              </tr>
              <tr>
                <td>Tỷ lệ sinh viên trên giảng viên (sau khi quy đổi): </td>
                <td><?php echo $select[ 64 ]; ?></td>
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
                <td><?php echo number_format($select[ 65 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 66 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 67 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 68 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 69 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td>Tỷ lệ (%) trên tổng số sinh viên quy đổi</td>
                <td><?php echo $select[ 70 ]; ?></td>
                <td><?php echo $select[ 71 ]; ?></td>
                <td><?php echo $select[ 72 ]; ?></td>
                <td><?php echo $select[ 73 ]; ?></td>
                <td><?php echo $select[ 74 ]; ?></td>
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
                <td><?php echo $select[ 75 ]; ?></td>
                <td><?php echo $select[ 76 ]; ?></td>
                <td><?php echo $select[ 77 ]; ?></td>
                <td><?php echo $select[ 78 ]; ?></td>
                <td><?php echo $select[ 79 ]; ?></td>
              </tr>
              <tr>
                <td style="text-align:left">2. Số lượng sinh viên có nhu cầu về phòng ở (trong và ngoài ký túc xá)</td>
                <td><?php echo number_format($select[ 80 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 81 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 82 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 83 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 84 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:left">3. Số lượng sinh viên được ở trong ký túc xá</td>
                <td><?php echo number_format($select[ 85 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 86 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 87 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 88 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 89 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:left">4. Tỷ số diện tích trên đầu sinh viên ở trong ký túc xá, m2/người</td>
                <td><?php echo $select[ 90 ]; ?></td>
                <td><?php echo $select[ 91 ]; ?></td>
                <td><?php echo $select[ 92 ]; ?></td>
                <td><?php echo $select[ 93 ]; ?></td>
                <td><?php echo $select[ 94 ]; ?></td>
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
                <td><?php echo number_format($select[ 95 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 96 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 97 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 98 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 99 ],0,'.',','); ?></td>
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
                <td><?php echo number_format($select[ 105 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 106 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 107 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 108 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 109 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:left">2. Học viên tốt nghiệp cao học</td>
                <td><?php echo number_format($select[ 110 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 111 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 112 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 113 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 114 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:left">3. Sinh viên tốt nghiệp đại học, trong đó:</td>
                <td><?php echo number_format($select[ 115 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 116 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 117 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 118 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 119 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:left;padding-left:50px">Hệ chính quy</td>
                <td><?php echo number_format($select[ 120 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 121 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 122 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 123 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 124 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:left;padding-left:50px">Hệ không chính quy</td>
                <td><?php echo number_format($select[ 125 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 126 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 127 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 128 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 129 ],0,'.',','); ?></td>
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
                <td><?php echo number_format($select[ 130 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 131 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 132 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 133 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 134 ],0,'.',','); ?></td>
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
                <p>A. Nhà trường không điều tra về vấn đề này -> chuyển xuống câu 5</p>
                <p>B. Nhà trường có điều tra về vấn đề này -> điền các thông tin dưới đây</p>
                </td>
                <td><?php echo number_format($select[ 160 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 161 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 162 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 163 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 164 ],0,'.',','); ?></td>
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
                <p>A. Nhà trường không điều tra về vấn đề này -> chuyển xuống kết thúc bảng này</p>
                <p>B. Nhà trường có điều tra về vấn đề này -> điền các thông tin dưới đây</p>
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
  </form>
  </div>
</div>
<?php  } ?>
<?php get_template_part('csgd/pagination'); ?>