<?php if ($_SESSION['insert_p5'] != 1 && !isset($_POST['submit_trang5'])) { ?>
<div class="panel panel-primary">
 	<div class="panel-heading">
  		<h2 class="panel-title">V. Nghiên cứu khoa học và chuyển giao công nghệ</h2>
 	</div>
 	<div class="panel-body">
  	<form action="" method="POST" role="form" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12"><h4>27. Số lượng đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ của nhà trường được nghiệm thu trong 5 năm gần đây:</h4></div>
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
                <td><input type="text" name="V27a_1" class="form-control"></td>
                <td><input type="text" name="V27a_2" class="form-control"></td>
                <td><input type="text" name="V27a_3" class="form-control"></td>
                <td><input type="text" name="V27a_4" class="form-control"></td>
                <td><input type="text" name="V27a_5" class="form-control"></td>
                <td><input type="text" name="V27a_6" class="form-control"></td>
                <td><input type="text" name="V27a_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2</td>
                <td style="vertical-align:middle">Đề tài cấp Bộ*</td>
                <td><input type="text" name="V27b_1" class="form-control"></td>
                <td><input type="text" name="V27b_2" class="form-control"></td>
                <td><input type="text" name="V27b_3" class="form-control"></td>
                <td><input type="text" name="V27b_4" class="form-control"></td>
                <td><input type="text" name="V27b_5" class="form-control"></td>
                <td><input type="text" name="V27b_6" class="form-control"></td>
                <td><input type="text" name="V27b_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">3</td>
                <td style="vertical-align:middle">Đề tài cấp trường</td>
                <td><input type="text" name="V27c_1" class="form-control"></td>
                <td><input type="text" name="V27c_2" class="form-control"></td>
                <td><input type="text" name="V27c_3" class="form-control"></td>
                <td><input type="text" name="V27c_4" class="form-control"></td>
                <td><input type="text" name="V27c_5" class="form-control"></td>
                <td><input type="text" name="V27c_6" class="form-control"></td>
                <td><input type="text" name="V27c_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">4</td>
                <td colspan="2" style="vertical-align:middle">Tổng</td>
                <td><input type="text" name="V27d_1" class="form-control"></td>
                <td><input type="text" name="V27d_2" class="form-control"></td>
                <td><input type="text" name="V27d_3" class="form-control"></td>
                <td><input type="text" name="V27d_4" class="form-control"></td>
                <td><input type="text" name="V27d_5" class="form-control"></td>
                <td><input type="text" name="V27d_6" class="form-control"></td>
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
          <!-- <p>Tổng số đề tài quy đổi: 44,5</p>
          <p>Tỷ số đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ (quy đổi) trên cán bộ cơ hữu: 1 đề tài/5 giảng viên cơ hữu</p> -->
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
               <td><input type="text" name="V28a_1" class="form-control"></td>
               <td><input type="text" name="V28a_2" class="form-control"></td>
               <td><input type="text" name="V28a_3" class="form-control"></td>
              </tr>
              <tr>
               <td style="vertical-align:middle">2</td>
               <td style="vertical-align:middle">2011-2012</td>
               <td><input type="text" name="V28b_1" class="form-control"></td>
               <td><input type="text" name="V28b_2" class="form-control"></td>
               <td><input type="text" name="V28b_3" class="form-control"></td>
              </tr>
              <tr>
               <td style="vertical-align:middle">3</td>
               <td style="vertical-align:middle">2012-2013</td>
               <td><input type="text" name="V28c_1" class="form-control"></td>
               <td><input type="text" name="V28c_2" class="form-control"></td>
               <td><input type="text" name="V28c_3" class="form-control"></td>
              </tr>
              <tr>
               <td style="vertical-align:middle">4</td>
               <td style="vertical-align:middle">2013-2014</td>
               <td><input type="text" name="V28d_1" class="form-control"></td>
               <td><input type="text" name="V28d_2" class="form-control"></td>
               <td><input type="text" name="V28d_3" class="form-control"></td>
              </tr>
              <tr>
               <td style="vertical-align:middle">5</td>
               <td style="vertical-align:middle">2014-2015</td>
               <td><input type="text" name="V28e_1" class="form-control"></td>
               <td><input type="text" name="V28e_2" class="form-control"></td>
               <td><input type="text" name="V28e_3" class="form-control"></td>
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
                <th colspan="3" scope="col">Số lượng cán bộ tham gia</th>
                <th rowspan="2" scope="col">Ghi chú</th>
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
                <td><input type="text" name="V29a_1" class="form-control"></td>
                <td><input type="text" name="V29a_2" class="form-control"></td>
                <td><input type="text" name="V29a_3" class="form-control"></td>
                <td><input type="text" name="V29a_4" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">Từ 4 đến 6 đề tài</td>
                <td><input type="text" name="V29b_1" class="form-control"></td>
                <td><input type="text" name="V29b_2" class="form-control"></td>
                <td><input type="text" name="V29b_3" class="form-control"></td>
                <td><input type="text" name="V29b_4" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">Trên 6 đề tài</td>
                <td><input type="text" name="V29c_1" class="form-control"></td>
                <td><input type="text" name="V29c_2" class="form-control"></td>
                <td><input type="text" name="V29c_3" class="form-control"></td>
                <td><input type="text" name="V29c_4" class="form-control"></td>
              </tr>
               <tr>
                <td style="text-align:center; vertical-align:middle">Tổng số cán bộ tham gia</td>
                <td><input type="text" name="V29d_1" class="form-control"></td>
                <td><input type="text" name="V29d_2" class="form-control"></td>
                <td><input type="text" name="V29d_3" class="form-control"></td>
                <td><input type="text" name="V29d_4" class="form-control"></td>
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
                <td><input type="text" name="V30a_1" class="form-control"></td>
                <td><input type="text" name="V30a_2" class="form-control"></td>
                <td><input type="text" name="V30a_3" class="form-control"></td>
                <td><input type="text" name="V30a_4" class="form-control"></td>
                <td><input type="text" name="V30a_5" class="form-control"></td>
                <td><input type="text" name="V30a_6" class="form-control"></td>
                <td><input type="text" name="V30a_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2</td>
                <td style="vertical-align:middle">Sách giáo trình</td>
                <td><input type="text" name="V30b_1" class="form-control"></td>
                <td><input type="text" name="V30b_2" class="form-control"></td>
                <td><input type="text" name="V30b_3" class="form-control"></td>
                <td><input type="text" name="V30b_4" class="form-control"></td>
                <td><input type="text" name="V30b_5" class="form-control"></td>
                <td><input type="text" name="V30b_6" class="form-control"></td>
                <td><input type="text" name="V30b_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">3</td>
                <td style="vertical-align:middle">Sách tham khảo</td>
                <td><input type="text" name="V30c_1" class="form-control"></td>
                <td><input type="text" name="V30c_2" class="form-control"></td>
                <td><input type="text" name="V30c_3" class="form-control"></td>
                <td><input type="text" name="V30c_4" class="form-control"></td>
                <td><input type="text" name="V30c_5" class="form-control"></td>
                <td><input type="text" name="V30c_6" class="form-control"></td>
                <td><input type="text" name="V30c_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">4</td>
                <td style="vertical-align:middle">Sách hướng dẫn</td>
                <td><input type="text" name="V30d_1" class="form-control"></td>
                <td><input type="text" name="V30d_2" class="form-control"></td>
                <td><input type="text" name="V30d_3" class="form-control"></td>
                <td><input type="text" name="V30d_4" class="form-control"></td>
                <td><input type="text" name="V30d_5" class="form-control"></td>
                <td><input type="text" name="V30d_6" class="form-control"></td>
                <td><input type="text" name="V30d_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">5</td>
                <td colspan="2" style="vertical-align:middle">Tổng</td>
                <td><input type="text" name="V30e_1" class="form-control"></td>
                <td><input type="text" name="V30e_2" class="form-control"></td>
                <td><input type="text" name="V30e_3" class="form-control"></td>
                <td><input type="text" name="V30e_4" class="form-control"></td>
                <td><input type="text" name="V30e_5" class="form-control"></td>
                <td><input type="text" name="V30e_6" class="form-control"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học Nhà nước (có điều chỉnh).</p>
          <!-- <p>Tổng số sách (quy đổi): 44,5</p>
          <p>Tỷ số sách đã được xuất bản (quy đổi) trên cán bộ cơ hữu: 1/5 giảng viên</p> -->
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
                <td><input type="text" name="V31a_1" class="form-control"></td>
                <td><input type="text" name="V31a_2" class="form-control"></td>
                <td><input type="text" name="V31a_3" class="form-control"></td>
                <td><input type="text" name="V31a_4" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Từ 4 đến 6 cuốn sách</td>
                <td><input type="text" name="V31b_1" class="form-control"></td>
                <td><input type="text" name="V31b_2" class="form-control"></td>
                <td><input type="text" name="V31b_3" class="form-control"></td>
                <td><input type="text" name="V31b_4" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Trên 6 cuốn sách</td>
                <td><input type="text" name="V31c_1" class="form-control"></td>
                <td><input type="text" name="V31c_2" class="form-control"></td>
                <td><input type="text" name="V31c_3" class="form-control"></td>
                <td><input type="text" name="V31c_4" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Tổng số cán bộ tham gia</td>
                <td><input type="text" name="V31d_1" class="form-control"></td>
                <td><input type="text" name="V31d_2" class="form-control"></td>
                <td><input type="text" name="V31d_3" class="form-control"></td>
                <td><input type="text" name="V31d_4" class="form-control"></td>
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
                <td><input type="text" name="V32a_1" class="form-control"></td>
                <td><input type="text" name="V32a_2" class="form-control"></td>
                <td><input type="text" name="V32a_3" class="form-control"></td>
                <td><input type="text" name="V32a_4" class="form-control"></td>
                <td><input type="text" name="V32a_5" class="form-control"></td>
                <td><input type="text" name="V32a_6" class="form-control"></td>
                <td><input type="text" name="V32a_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2</td>
                <td style="vertical-align:middle">Tạp chí KH cấp Ngành trong nước</td>
                <td><input type="text" name="V32b_1" class="form-control"></td>
                <td><input type="text" name="V32b_2" class="form-control"></td>
                <td><input type="text" name="V32b_3" class="form-control"></td>
                <td><input type="text" name="V32b_4" class="form-control"></td>
                <td><input type="text" name="V32b_5" class="form-control"></td>
                <td><input type="text" name="V32b_6" class="form-control"></td>
                <td><input type="text" name="V32b_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">3</td>
                <td style="vertical-align:middle">Tạp chí / tập san của cấp trường</td>
                <td><input type="text" name="V32c_1" class="form-control"></td>
                <td><input type="text" name="V32c_2" class="form-control"></td>
                <td><input type="text" name="V32c_3" class="form-control"></td>
                <td><input type="text" name="V32c_4" class="form-control"></td>
                <td><input type="text" name="V32c_5" class="form-control"></td>
                <td><input type="text" name="V32c_6" class="form-control"></td>
                <td><input type="text" name="V32c_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">4</td>
                <td colspan="2" style="vertical-align:middle">Tổng</td>
                <td><input type="text" name="V32d_1" class="form-control"></td>
                <td><input type="text" name="V32d_2" class="form-control"></td>
                <td><input type="text" name="V32d_3" class="form-control"></td>
                <td><input type="text" name="V32d_4" class="form-control"></td>
                <td><input type="text" name="V32d_5" class="form-control"></td>
                <td><input type="text" name="V32d_6" class="form-control"></td>
              </tr>
            </tbody>
          </table>
          <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
          <!-- <p>Tổng số bài đăng tạp chí (quy đổi): 432</p>
          <p>Tỷ số bài đăng tạp chí (quy đổi) trên cán bộ cơ hữu: 2 bài báo/ 1 giảng viên</p> -->
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
                <td><input type="text" name="V33a_1" class="form-control"></td>
                <td><input type="text" name="V33a_2" class="form-control"></td>
                <td><input type="text" name="V33a_3" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Từ 6 đến 10 bài báo </td>
                <td><input type="text" name="V33b_1" class="form-control"></td>
                <td><input type="text" name="V33b_2" class="form-control"></td>
                <td><input type="text" name="V33b_3" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Từ 11 đến 15 bài báo </td>
                <td><input type="text" name="V33c_1" class="form-control"></td>
                <td><input type="text" name="V33c_2" class="form-control"></td>
                <td><input type="text" name="V33c_3" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Trên 15 bài báo </td>
                <td><input type="text" name="V33d_1" class="form-control"></td>
                <td><input type="text" name="V33d_2" class="form-control"></td>
                <td><input type="text" name="V33d_3" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Tổng số cán bộ tham gia</td>
                <td><input type="text" name="V33e_1" class="form-control"></td>
                <td><input type="text" name="V33e_2" class="form-control"></td>
                <td><input type="text" name="V33e_3" class="form-control"></td>
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
                <td><input type="text" name="V34a_1" class="form-control"></td>
                <td><input type="text" name="V34a_2" class="form-control"></td>
                <td><input type="text" name="V34a_3" class="form-control"></td>
                <td><input type="text" name="V34a_4" class="form-control"></td>
                <td><input type="text" name="V34a_5" class="form-control"></td>
                <td><input type="text" name="V34a_6" class="form-control"></td>
                <td><input type="text" name="V34a_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2</td>
                <td style="vertical-align:middle">Hội thảo trong nước</td>
                <td><input type="text" name="V34b_1" class="form-control"></td>
                <td><input type="text" name="V34b_2" class="form-control"></td>
                <td><input type="text" name="V34b_3" class="form-control"></td>
                <td><input type="text" name="V34b_4" class="form-control"></td>
                <td><input type="text" name="V34b_5" class="form-control"></td>
                <td><input type="text" name="V34b_6" class="form-control"></td>
                <td><input type="text" name="V34b_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">3</td>
                <td style="vertical-align:middle">Hội thảo cấp trường</td>
                <td><input type="text" name="V34c_1" class="form-control"></td>
                <td><input type="text" name="V34c_2" class="form-control"></td>
                <td><input type="text" name="V34c_3" class="form-control"></td>
                <td><input type="text" name="V34c_4" class="form-control"></td>
                <td><input type="text" name="V34c_5" class="form-control"></td>
                <td><input type="text" name="V34c_6" class="form-control"></td>
                <td><input type="text" name="V34c_7" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">4</td>
                <td colspan="2" style="vertical-align:middle">Tổng</td>
                <td><input type="text" name="V34d_1" class="form-control"></td>
                <td><input type="text" name="V34d_2" class="form-control"></td>
                <td><input type="text" name="V34d_3" class="form-control"></td>
                <td><input type="text" name="V34d_4" class="form-control"></td>
                <td><input type="text" name="V34d_5" class="form-control"></td>
                <td><input type="text" name="V34d_6" class="form-control"></td>
              </tr>
            </tbody>
          </table>
          <p><i>(Khi tính hội thảo trong nước sẽ không bao gồm các hội thảo của trường vì đã được tính 1 lần)</i></p>
          <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
          <!-- <p>Tổng số bài báo cáo (quy đổi): 219 bài</p>
          <p>Tỷ số bài báo cáo (quy đổi) trên cán bộ cơ hữu: 0.98 bài/ giảng viên</p> -->
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
                <td><input type="text" name="V35a_1" class="form-control"></td>
                <td><input type="text" name="V35a_2" class="form-control"></td>
                <td><input type="text" name="V35a_3" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Từ 6 đến 10 báo cáo</td>
                <td><input type="text" name="V35b_1" class="form-control"></td>
                <td><input type="text" name="V35b_2" class="form-control"></td>
                <td><input type="text" name="V35b_3" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Từ 11 đến 15 báo cáotd>
                <td><input type="text" name="V35c_1" class="form-control"></td>
                <td><input type="text" name="V35c_2" class="form-control"></td>
                <td><input type="text" name="V35c_3" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Trên 15 báo cáo</td>
                <td><input type="text" name="V35d_1" class="form-control"></td>
                <td><input type="text" name="V35d_2" class="form-control"></td>
                <td><input type="text" name="V35d_3" class="form-control"></td>
              </tr>
              <tr>
                <td>Tổng số cán bộ tham gia</td>
                <td><input type="text" name="V35e_1" class="form-control"></td>
                <td><input type="text" name="V35e_2" class="form-control"></td>
                <td><input type="text" name="V35e_3" class="form-control"></td>
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
                <td><input type="text" name="V36a" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2011-2012</td>
                <td><input type="text" name="V36b" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2012-2013</td>
                <td><input type="text" name="V36c" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2013-2014</td>
                <td><input type="text" name="V36d" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2014-2015</td>
                <td><input type="text" name="V36e" class="form-control"></td>
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
                <th colspan="3" scope="col">Số lượng cán bộ tham gia</th>
                <th rowspan="2" scope="col">Ghi chú</th>
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
                <td><input type="text" name="V37_1a_1" class="form-control"></td>
                <td><input type="text" name="V37_1a_2" class="form-control"></td>
                <td><input type="text" name="V37_1a_3" class="form-control"></td>
                <td><input type="text" name="V37_1a_4" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">Từ 4 đến 6 đề tài</td>
                <td><input type="text" name="V37_1b_1" class="form-control"></td>
                <td><input type="text" name="V37_1b_2" class="form-control"></td>
                <td><input type="text" name="V37_1b_3" class="form-control"></td>
                <td><input type="text" name="V37_1b_4" class="form-control"></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">Trên 6 đề tài</td>
                <td><input type="text" name="V37_1c_1" class="form-control"></td>
                <td><input type="text" name="V37_1c_2" class="form-control"></td>
                <td><input type="text" name="V37_1c_3" class="form-control"></td>
                <td><input type="text" name="V37_1c_4" class="form-control"></td>
              </tr>
               <tr>
                <td style="text-align:center; vertical-align:middle">Tổng số sinh viên tham gia</td>
                <td><input type="text" name="V37_1d_1" class="form-control"></td>
                <td><input type="text" name="V37_1d_2" class="form-control"></td>
                <td><input type="text" name="V37_1d_3" class="form-control"></td>
                <td><input type="text" name="V37_1d_4" class="form-control"></td>
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
                <td><input type="text" name="V37_2a_1" class="form-control"></td>
                <td><input type="text" name="V37_2a_2" class="form-control"></td>
                <td><input type="text" name="V37_2a_3" class="form-control"></td>
                <td><input type="text" name="V37_2a_4" class="form-control"></td>
                <td><input type="text" name="V37_2a_5" class="form-control"></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2</td>
                <td style="vertical-align:middle">Số bài báo được đăng, công trình được công bố</td>
                <td><input type="text" name="V37_2b_1" class="form-control"></td>
                <td><input type="text" name="V37_2b_2" class="form-control"></td>
                <td><input type="text" name="V37_2b_3" class="form-control"></td>
                <td><input type="text" name="V37_2b_4" class="form-control"></td>
                <td><input type="text" name="V37_2b_5" class="form-control"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <input type="submit" name="submit_trang5" value="Cập nhật" class="btn btn-primary">
		</form>
 	</div>
</div>
<?php } else if (isset($_POST['submit_trang5'])) { 
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
<?php } else { ?>
<?php
  $ID = $_SESSION['ID'];
  $select = $wpdb->get_row("SELECT * FROM csgd_v_nckhvacgcn WHERE ID = $ID",ARRAY_N);
  // if (empty($_SESSION['ID'])) {echo 'empty';} else echo $_SESSION['ID'];
?>
<div class="panel panel-primary">
  <div class="panel-heading">
   <h2 class="panel-title">V. Nghiên cứu khoa học và chuyển giao công nghệ</h2>
 </div>
  <div class="panel-body">
   <form action="" method="POST" role="form" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12"><h4>27. Số lượng đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ của nhà trường được nghiệm thu trong 5 năm gần đây:</h4></div>
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
                <td><?php echo number_format($select[ 2 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 3 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 4 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 5 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 6 ],0,'.',','); ?></td>
                <td><?php echo $select[ 7 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2</td>
                <td style="vertical-align:middle">Đề tài cấp Bộ*</td>
                <td><?php echo $select[ 8 ]; ?></td>
                <td><?php echo number_format($select[ 9 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 10 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 11 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 12 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 13 ],0,'.',','); ?></td>
                <td><?php echo $select[ 14 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">3</td>
                <td style="vertical-align:middle">Đề tài cấp trường</td>
                <td><?php echo $select[ 15 ]; ?></td>
                <td><?php echo number_format($select[ 16 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 17 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 18 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 19 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 20 ],0,'.',','); ?></td>
                <td><?php echo $select[ 21 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">4</td>
                <td colspan="2" style="vertical-align:middle">Tổng</td>
                <td><?php echo number_format($select[ 22 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 23 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 24 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 25 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 26 ],0,'.',','); ?></td>
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
          <!-- <p>Tổng số đề tài quy đổi: 44,5</p>
          <p>Tỷ số đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ (quy đổi) trên cán bộ cơ hữu: 1 đề tài/5 giảng viên cơ hữu</p> -->
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
                <th colspan="3" scope="col">Số lượng cán bộ tham gia</th>
                <th rowspan="2" scope="col">Ghi chú</th>
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
                <td><?php echo number_format($select[ 43 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 44 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 45 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 46 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">Từ 4 đến 6 đề tài</td>
                <td><?php echo number_format($select[ 47 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 48 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 49 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 50 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">Trên 6 đề tài</td>
                <td><?php echo number_format($select[ 51 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 52 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 53 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 54 ],0,'.',','); ?></td>
              </tr>
               <tr>
                <td style="text-align:center; vertical-align:middle">Tổng số cán bộ tham gia</td>
                <td><?php echo number_format($select[ 55 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 56 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 57 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 58 ],0,'.',','); ?></td>
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
                <td><?php echo $select[ 59 ]; ?></td>
                <td><?php echo number_format($select[ 60 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 61 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 62 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 63 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 64 ],0,'.',','); ?></td>
                <td><?php echo $select[ 65 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2</td>
                <td style="vertical-align:middle">Sách giáo trình</td>
                <td><?php echo $select[ 66 ]; ?></td>
                <td><?php echo number_format($select[ 67 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 68 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 69 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 70 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 71 ],0,'.',','); ?></td>
                <td><?php echo $select[ 72 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">3</td>
                <td style="vertical-align:middle">Sách tham khảo</td>
                <td><?php echo $select[ 73 ]; ?></td>
                <td><?php echo number_format($select[ 74 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 75 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 76 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 77 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 78 ],0,'.',','); ?></td>
                <td><?php echo $select[ 79 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">4</td>
                <td style="vertical-align:middle">Sách hướng dẫn</td>
                <td><?php echo $select[ 80 ]; ?></td>
                <td><?php echo number_format($select[ 81 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 82 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 83 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 84 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 85 ],0,'.',','); ?></td>
                <td><?php echo $select[ 86 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">5</td>
                <td colspan="2" style="vertical-align:middle">Tổng</td>
                <td><?php echo number_format($select[ 87 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 88 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 89 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 90 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 91 ],0,'.',','); ?></td>
                <td><?php echo $select[ 92 ]; ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học Nhà nước (có điều chỉnh).</p>
          <!-- <p>Tổng số sách (quy đổi): 44,5</p>
          <p>Tỷ số sách đã được xuất bản (quy đổi) trên cán bộ cơ hữu: 1/5 giảng viên</p> -->
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
                <td><?php echo number_format($select[ 93 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 94 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 95 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 96 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Từ 4 đến 6 cuốn sách</td>
                <td><?php echo number_format($select[ 97 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 98 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 99 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 100 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Trên 6 cuốn sách</td>
                <td><?php echo number_format($select[ 101 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 102 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 103 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 104 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Tổng số cán bộ tham gia</td>
                <td><?php echo number_format($select[ 105 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 106 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 107 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 108 ],0,'.',','); ?></td>
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
                <td><?php echo number_format($select[ 110 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 111 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 112 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 113 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 114 ],0,'.',','); ?></td>
                <td><?php echo $select[ 115 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2</td>
                <td style="vertical-align:middle">Tạp chí KH cấp Ngành trong nước</td>
                <td><?php echo $select[ 116 ]; ?></td>
                <td><?php echo number_format($select[ 117 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 118 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 119 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 120 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 121 ],0,'.',','); ?></td>
                <td><?php echo $select[ 122 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">3</td>
                <td style="vertical-align:middle">Tạp chí / tập san của cấp trường</td>
                <td><?php echo $select[ 123 ]; ?></td>
                <td><?php echo number_format($select[ 124 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 125 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 126 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 127 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 128 ],0,'.',','); ?></td>
                <td><?php echo $select[ 129 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">4</td>
                <td colspan="2" style="vertical-align:middle">Tổng</td>
                <td><?php echo number_format($select[ 130 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 131 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 132 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 133 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 134 ],0,'.',','); ?></td>
                <td><?php echo $select[ 135 ]; ?></td>
              </tr>
            </tbody>
          </table>
          <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
          <!-- <p>Tổng số bài đăng tạp chí (quy đổi): 432</p>
          <p>Tỷ số bài đăng tạp chí (quy đổi) trên cán bộ cơ hữu: 2 bài báo/ 1 giảng viên</p> -->
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
                <td><?php echo number_format($select[ 136 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 137 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 138 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Từ 6 đến 10 bài báo </td>
                <td><?php echo number_format($select[ 139 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 140 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 141 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Từ 11 đến 15 bài báo </td>
                <td><?php echo number_format($select[ 142 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 143 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 144 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Trên 15 bài báo </td>
                <td><?php echo number_format($select[ 145 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 146 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 147 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Tổng số cán bộ tham gia</td>
                <td><?php echo number_format($select[ 148 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 149 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 150 ],0,'.',','); ?></td>
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
                <td><?php echo number_format($select[ 152 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 153 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 154 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 155 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 156 ],0,'.',','); ?></td>
                <td><?php echo $select[ 157 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2</td>
                <td style="vertical-align:middle">Hội thảo trong nước</td>
                <td><?php echo $select[ 158 ]; ?></td>
                <td><?php echo number_format($select[ 159 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 160 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 161 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 162 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 163 ],0,'.',','); ?></td>
                <td><?php echo $select[ 164 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">3</td>
                <td style="vertical-align:middle">Hội thảo cấp trường</td>
                <td><?php echo $select[ 165 ]; ?></td>
                <td><?php echo number_format($select[ 166 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 167 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 168 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 169 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 170 ],0,'.',','); ?></td>
                <td><?php echo $select[ 171 ]; ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">4</td>
                <td colspan="2" style="vertical-align:middle">Tổng</td>
                <td><?php echo number_format($select[ 172 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 173 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 174 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 175 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 176 ],0,'.',','); ?></td>
                <td><?php echo $select[ 177 ]; ?></td>
              </tr>
            </tbody>
          </table>
          <p><i>(Khi tính hội thảo trong nước sẽ không bao gồm các hội thảo của trường vì đã được tính 1 lần)</i></p>
          <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
          <!-- <p>Tổng số bài báo cáo (quy đổi): 219 bài</p>
          <p>Tỷ số bài báo cáo (quy đổi) trên cán bộ cơ hữu: 0.98 bài/ giảng viên</p> -->
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
                <td><?php echo number_format($select[ 178 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 179 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 180 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Từ 6 đến 10 báo cáo</td>
                <td><?php echo number_format($select[ 181 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 182 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 183 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Từ 11 đến 15 báo cáotd>
                <td><?php echo number_format($select[ 184 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 185 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 186 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">Trên 15 báo cáo</td>
                <td><?php echo number_format($select[ 187 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 188 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 189 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td>Tổng số cán bộ tham gia</td>
                <td><?php echo number_format($select[ 190 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 191 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 192 ],0,'.',','); ?></td>
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
                <td><?php echo number_format($select[ 193 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2011-2012</td>
                <td><?php echo number_format($select[ 194 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2012-2013</td>
                <td><?php echo number_format($select[ 195 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2013-2014</td>
                <td><?php echo number_format($select[ 196 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2014-2015</td>
                <td><?php echo number_format($select[ 197 ],0,'.',','); ?></td>
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
                <th colspan="3" scope="col">Số lượng cán bộ tham gia</th>
                <th rowspan="2" scope="col">Ghi chú</th>
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
                <td><?php echo number_format($select[ 198 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 199 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 200 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 201 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">Từ 4 đến 6 đề tài</td>
                <td><?php echo number_format($select[ 202 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 203 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 204 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 205 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="text-align:center; vertical-align:middle">Trên 6 đề tài</td>
                <td><?php echo number_format($select[ 206 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 207 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 208 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 209 ],0,'.',','); ?></td>
              </tr>
               <tr>
                <td style="text-align:center; vertical-align:middle">Tổng số sinh viên tham gia</td>
                <td><?php echo number_format($select[ 210 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 211 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 212 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 213 ],0,'.',','); ?></td>
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
                <td><?php echo number_format($select[ 214 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 215 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 216 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 217 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 218 ],0,'.',','); ?></td>
              </tr>
              <tr>
                <td style="vertical-align:middle">2</td>
                <td style="vertical-align:middle">Số bài báo được đăng, công trình được công bố</td>
                <td><?php echo number_format($select[ 219 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 220 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 221 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 222 ],0,'.',','); ?></td>
                <td><?php echo number_format($select[ 223 ],0,'.',','); ?></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
  </form>
  </div>
</div>
<?php } ?>
<?php get_template_part('csgd/pagination'); ?>