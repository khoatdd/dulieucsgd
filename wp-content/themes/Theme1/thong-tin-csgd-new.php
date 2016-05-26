<!-- 
	Template Name: thong-tin-CSGD-new
 -->
 <?php get_header();?>
 <nav id="sidebar" class="sidebar" role="navigation">
    <!-- need this .js class to initiate slimscroll -->
    <div class="js-sidebar-content">
        <header class="logo hidden-xs">
            <a href="#">CEA-VNUHCM</a>
        </header>
        <!-- seems like lots of recent admin template have this feature of user info in the sidebar.
             looks good, so adding it and enhancing with notifications -->
        <div class="sidebar-status visible-xs">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="thumb-sm avatar pull-right">
                    <img class="img-circle" src="<?php echo get_template_directory_uri().'/demo/img/people/a5.jpg' ?>" alt="...">
                </span>
                <!-- .circle is a pretty cool way to add a bit of beauty to raw data.
                     should be used with bg-* and text-* classes for colors -->
                <span class="circle bg-warning fw-bold text-gray-dark">
                    13
                </span>
                &nbsp;
                Philip <strong>Smith</strong>
                <b class="caret"></b>
            </a>
            <!-- #notifications-dropdown-menu goes here when screen collapsed to xs or sm -->
        </div>
        <!-- main notification links are placed inside of .sidebar-nav -->
        <ul class="sidebar-nav" role="tablist">
            <li class="active">
                <!-- an example of nested submenu. basic bootstrap collapse component -->
                <a href="#sidebar-dashboard" data-toggle="collapse" data-parent="#sidebar">
                    <span class="icon">
                        <span class="fa fa-book"></span>
                    </span>
                    Báo cáo TĐG
                </a>
            </li>
            <li>
                <a href="ket-qua-dgn.php" class="ajax-load">
                    <span class="icon">
                        <i class="fa fa-file-text-o fa-2x"></i>
                    </span>
                    Kết quả ĐGN
                </a>
            </li>
            <!-- <li>
            	<a href="#tab1" data-toggle="tab" class="in active">tab1</a>
            </li>
            <li>
            	<a href="#tab2" data-toggle="tab">tab2</a>
            </li> -->
        </ul>
    </div>
</nav>
<!-- This is the white navigation bar seen on the top. A bit enhanced BS navbar. See .page-controls in _base.scss. -->
<nav class="page-controls navbar navbar-default">
    <div class="container-fluid">
        <!-- .navbar-header contains links seen on xs & sm screens -->
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li>
                    <!-- whether to automatically collapse sidebar on mouseleave. If activated acts more like usual admin templates -->
                    <a class="hidden-sm hidden-xs" id="nav-state-toggle" href="#" title="Turn on/off sidebar collapsing" data-placement="bottom">
                        <i class="fa fa-bars fa-lg"></i>
                    </a>
                    <!-- shown on xs & sm screen. collapses and expands navigation -->
                    <a class="visible-sm visible-xs" id="nav-collapse-toggle" href="#" title="Show/hide sidebar" data-placement="bottom">
                        <span class="rounded rounded-lg bg-gray text-white visible-xs"><i class="fa fa-bars fa-lg"></i></span>
                        <i class="fa fa-bars fa-lg hidden-xs"></i>
                    </a>
                </li>
                <li class="ml-sm mr-n-xs hidden-xs"><a href="#"><i class="fa fa-refresh fa-lg"></i></a></li>
                <li class="ml-n-xs hidden-xs"><a href="#"><i class="fa fa-times fa-lg"></i></a></li>
            </ul>
            <!-- xs & sm screen logo -->
            <a class="navbar-brand visible-xs" href="#">
                <i class="fa fa-circle text-gray mr-n-sm"></i>
                <i class="fa fa-circle text-warning"></i>
                &nbsp;
                CEA - VNUHCM
                &nbsp;
                <i class="fa fa-circle text-warning mr-n-sm"></i>
                <i class="fa fa-circle text-gray"></i>
            </a>
        </div>
        <!-- this part is hidden for xs screens -->
        <div class="collapse navbar-collapse">
            <!-- search form! link it to your search server -->
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <div class="input-group input-group-no-border">
                    <span class="input-group-addon">
                        <i class="fa fa-search"></i>
                    </span>
                        <input class="form-control" type="text" placeholder="Search Dashboard">
                    </div>
                </div>
            </form>
        </div>
    </div>
</nav>
<div class="content-wrap">
	<!-- main page content. the place to put widgets in. usually consists of .row > .col-md-* > .widget.  -->
    <main id="content" class="content" role="main">
	    <div class="clearfix">
            <ul id="tabs1" class="nav nav-tabs"> <!-- remove pull-left to get a cool effect too -->
                <li class="active"><a href="#thongtinchung" data-toggle="tab"><span class="fa fa-circle text-warning mr-xs"></span> Thông tin chung</a></li>
                <li class=""><a href="#gioithieukhaiquat" data-toggle="tab"><span class="fa fa-circle text-warning mr-xs"></span> Giới thiệu khái quát</a></li>
                <li class=""><a href="#canbogvnv" data-toggle="tab"><span class="fa fa-circle text-warning mr-xs"></span> Cán bộ GV, NV</a></li>
                <li class=""><a href="#nguoihoc" data-toggle="tab"><span class="fa fa-circle text-warning mr-xs"></span> Người học</a></li>
                <li class=""><a href="#nckhcgcn" data-toggle="tab"><span class="fa fa-circle text-warning mr-xs"></span> NCKH & CGCN</a></li>
                <li class=""><a href="#csvctvtc" data-toggle="tab"><span class="fa fa-circle text-warning mr-xs"></span> CSVC, thư viện, tài chinh</a></li>
            </ul>
        </div>
		<div id="tabs1c" class="tab-content mb-lg">
            <div class="tab-pane active fade in clearfix" id="thongtinchung">
            	<h1 class="page-title"><i class="fa fa-bookmark"></i> Thông tin chung<small><small><!-- The Lucky One --></small></small></h1>
				<div class="row">
				    <div class="col-md-11 center-block">
				        <section class="widget">
				            <form action="" id="form-thongtinchung" method="POST" class="form-horizontal" role="form">
				                <table class="table table-hover">
				                    <tbody>
				                        <tr>
				                            <td style="text-align:left" colspan="2" class="col-md-3"><b>1. Tên đầy đủ của trường</b></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Việt</td>
				                            <td ><input type="text" class="form-control col-md-9" name ="I1a"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Anh</td>
				                            <td ><input type="text" class="form-control col-md-9" name ="I1b"></td>
				                        </tr>
				                        <tr>
				                            <td style="text-align:left" colspan="2" class="col-md-3"><b>2. Tên viết tắt của trường</b></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Việt</td>
				                            <td ><input type="text" class="form-control col-md-9" name="I2a"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle;" class="col-md-3">Tên tiếng Anh</td>
				                            <td ><input type="text" class="form-control col-md-9" name="I2b"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>3. Tên trước đây (nếu có)</b></td>
				                            <td ><input type="text" class="form-control col-md-9" name="I3"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>4. Cơ quan/Bộ chủ quản</b></td>
				                            <td ><input type="text" class="form-control col-md-9" name="I4"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>5. Địa chỉ trường</b></td>
				                            <td ><input type="text" class="form-control col-md-9" name="I5"></td>
				                        </tr>
				                        <tr>
				                            <td style="text-align:left" colspan="2" class="col-md-3"><b>6. Thông tin liên hệ</b></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle;" class="col-md-3">Điện thoại</td>
				                            <td ><input type="text" class="form-control col-md-9" name="I6a"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle;" class="col-md-3">Fax</td>
				                            <td ><input type="text" class="form-control col-md-9" name="I6b"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle;" class="col-md-3">Email</td>
				                            <td ><input type="text" class="form-control col-md-9" name="I6c"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle;" class="col-md-3">Website</td>
				                            <td ><input type="text" class="form-control col-md-9" name="I6d"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>7. Năm thành lập trường</b></td>
				                            <td ><input type="text" class="form-control col-md-9" name="I7"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>8. Thời gian bắt đầu đào tạo khóa I</b></td>
				                            <td ><input type="text" class="form-control col-md-9" name="I8"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle; text-align:left" class="col-md-3"><b>9. Thời gian cấp bằng tốt nghiệp cho khóa I</b></td>
				                            <td ><input type="text" class="form-control col-md-9" name="I9"></td>
				                        </tr>
				                        <tr>
				                            <td style="vertical-align:middle; text-align:left" class="col-md-2"><b>10. Loại hình trường đào tạo</b></td>
				                            <td style="vertical-align:middle; text-align:left" class="col-md-9" >
				                                <div class="row">
				                                    <div class="col-md-2">
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="I10" id="radio_1a" value="CongLap">
				                                            <label for="radio_1a">Công lập</label>
				                                        </div>
				                                    </div>
				                                    <div class="col-md-2">
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="I10" id="radio_1b" value="BanCong">
				                                            <label for="radio_1b">Bán công</label>
				                                        </div>
				                                    </div>
				                                    <div class="col-md-2">
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="I10" id="radio_1c" value="DanLap">
				                                            <label for="radio_1c">Dân lập</label>
				                                        </div>
				                                    </div>
				                                    <div class="col-md-2">
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="I10" id="radio_1d" value="TuThuc">
				                                            <label for="radio_1d">Tư thục</label>
				                                        </div>
				                                    </div>
				                                    <div class="col-md-2">
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="I10" id="radio_1e" value="Khac">
				                                            <label for="radio_1e">Khác</label>
				                                        </div>
				                                    </div>
				                                    <div class="col-md-2">
				                                        <input type="text" class="form-control" name="I10_khac" style="display:none;">
				                                    </div>
				                                </div>
				                            </td>
				                        </tr>
				                    </tbody>
				                </table>
				                <div class="pull-right">
				                	<input type="submit" name="submit_trang1" value="Cập nhật" class="btn btn-primary">
				                </div>
				            </form>
				        </section>
				    </div>
				</div>
            </div>
            <div class="tab-pane fade" id="gioithieukhaiquat">
            	<h1 class="page-title"><i class="fa fa-bookmark"></i> Giới thiệu khái quát <small><small><!-- The Lucky One --></small></small></h1>
				<div class="row">
				    <div class="col-md-11 center-block">
				        <section class="widget">
				            <form action="" id="form-gioithieukhaiquat" method="POST" role="form" enctype="multipart/form-data" class="form-horizontal">
				                <div class="form-group">
				                    <label class="control-label col-md-4 text-left" for="fileupload1">
				                        <b>11. Cơ cấu tổ chức của nhà trường</b>
				                    </label>
				                    <div class="col-md-8">
				                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
				                            <div class="form-control" data-trigger="fileinput">
				                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
				                                <span class="fileinput-filename"></span>
				                            </div>
				                            <span class="input-group-addon btn btn-default btn-file">
				                                <span class="fileinput-new">Select file</span>
				                                <span class="fileinput-exists">Change</span>
				                                <input id="file-1" type="file" name="II11">
				                            </span>
				                            <a href="http://demo.flatlogic.com/sing-wrapbootstrap-2.1.0-plus/ajax-bootstrap3/form_elements.html#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				                        </div>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label class="control-label col-md-4 text-left" for="fileupload1">
				                        <b>12. Danh sách cán bộ chủ chốt</b>
				                    </label>
				                    <div class="col-md-8">
				                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
				                            <div class="form-control" data-trigger="fileinput">
				                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
				                                <span class="fileinput-filename"></span>
				                            </div>
				                            <span class="input-group-addon btn btn-default btn-file">
				                                <span class="fileinput-new">Select file</span>
				                                <span class="fileinput-exists">Change</span>
				                                <input id="file-2" type="file" name="II12">
				                            </span>
				                            <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				                        </div>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <div class="col-md-10 col-md-offset-1">
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
				                <div class="form-group">
				                    <label for="" class="control-label col-md-4 text-left"><b>13. Các ngành, chuyên ngành đào tạo</b></label>
				                </div>
				                <div class="form-group">
				                    <div class="col-md-5 col-md-offset-1"><label class="control-label">Số lượng chuyên ngành đào tạo tiến sĩ</label></div>
				                    <div class="col-md-2"><input type="text" name="II13a" class="form-control"></div>
				                </div>
				                <div class="form-group">
				                    <div class="col-md-5 col-md-offset-1"><label class="control-label">Số lượng chuyên ngành đào tạo thạc sĩ</label></div>
				                    <div class="col-md-2"><input type="text" name="II13b" class="form-control"></div>
				                </div>
				                <div class="form-group">
				                    <div class="col-md-5 col-md-offset-1"><label class="control-label">Số lượng ngành đào tạo đại học</label></div>
				                    <div class="col-md-2"><input type="text" name="II13c" class="form-control"></div>
				                </div>
				                <div class="form-group">
				                    <div class="col-md-5 col-md-offset-1"><label class="control-label">Số lượng ngành đào tạo cao đẳng</label></div>
				                    <div class="col-md-2"><input type="text" name="II13d" class="form-control"></div>
				                </div>
				                <div class="form-group">
				                    <div class="col-md-5 col-md-offset-1"><label class="control-label">Số lượng ngành (chuyên ngành) đào tạo khác</label></div>
				                    <div class="col-md-2"><input type="text" name="II13e" class="form-control"></div>
				                </div>
				                <div class="form-group">
				                    <label for="" class="control-label col-md-5 text-left"><b>14. Các loại hình đào tạo của nhà trường</b></label>
				                </div>
				                <div class="form-group">
				                    <div class="col-md-6 col-md-offset-1">
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
				                                    <td>
				                                        <div class="radio radio-primary">
				                                            <input type="radio" name="II14a" id="radio_2_1" value="1">
				                                            <label for="radio_2_1"></label>
				                                        </div>
				                                    </td>
				                                    <td>
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="II14a" id="radio_2_2" value="0">
				                                            <label for="radio_2_2"></label>
				                                        </div>
				                                    </td>
				                                </tr>
				                                <tr>
				                                    <td>Không chính quy</td>
				                                    <td>
				                                        <div class="radio radio-primary">
				                                            <input type="radio" name="II14b" id="radio_2_3" value="1">
				                                            <label for="radio_2_3"></label>
				                                        </div>
				                                    </td>
				                                    <td>
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="II14b" id="radio_2_4" value="0">
				                                            <label for="radio_2_4"></label>
				                                        </div>
				                                    </td>
				                                </tr>
				                                <tr>
				                                    <td>Từ xa</td>
				                                    <td>
				                                        <div class="radio radio-primary">
				                                            <input type="radio" name="II14c" id="radio_2_5" value="1">
				                                            <label for="radio_2_5"></label>
				                                        </div>
				                                    </td>
				                                    <td>
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="II14c" id="radio_26" value="0">
				                                            <label for="radio_26"></label>
				                                        </div>
				                                    </td>
				                                </tr>
				                                <tr>
				                                    <td>Liên kết đào tạo với nước ngoài</td>
				                                    <td>
				                                        <div class="radio radio-primary">
				                                            <input type="radio" name="II14d" id="radio_2_7" value="1">
				                                            <label for="radio_2_7"></label>
				                                        </div>
				                                    </td>
				                                    <td>
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="II14d" id="radio_2_8" value="0">
				                                            <label for="radio_2_8"></label>
				                                        </div>
				                                    </td>
				                                </tr>
				                                <tr>
				                                    <td>Liên kết đào tạo trong nước</td>
				                                    <td>
				                                        <div class="radio radio-primary">
				                                            <input type="radio" name="II14e" id="radio_2_9" value="1">
				                                            <label for="radio_2_9"></label>
				                                        </div>
				                                    </td>
				                                    <td>
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="II14e" id="radio_2_10" value="0">
				                                            <label for="radio_2_10"></label>
				                                        </div>
				                                    </td>
				                                </tr>
				                                <tr>
				                                    <td>Các loại hình đào tạo khác</td>
				                                    <td>
				                                        <div class="radio radio-primary">
				                                            <input type="radio" name="II14f" id="radio_2_11" value="1">
				                                            <label for="radio_2_11"></label>
				                                        </div>
				                                    </td>
				                                    <td>
				                                        <div class="radio radio-danger">
				                                            <input type="radio" name="II14f" id="radio_2_12" value="0">
				                                            <label for="radio_2_12"></label>
				                                        </div>
				                                    </td>
				                                </tr>
				                            </tbody>
				                        </table>
				                    </div>
				                </div>
				                <div class="form-group">
				                    <label for="" class="control-label col-md-5 text-left"><b>15. Các khoa đào tạo</b></label>
				                </div>
			                    <div class="form-group">
			                        <label for="" class="control-label col-md-4 col-md-offset-1 text-left">Tổng số các khoa đào tạo</label>
			                        <div class="col-md-2"><input type="text" name="II15a" class="form-control"></div>
			                    </div>
				                <div class="form-group">
				                    <label class="control-label col-md-4 text-left col-md-offset-1" for="fileupload1">
				                        Liệt kê tên các khoa đào tạo
				                    </label>
				                    <div class="col-md-7">
				                        <div class="fileinput fileinput-new input-group" data-provides="fileinput">
				                            <div class="form-control" data-trigger="fileinput">
				                                <i class="glyphicon glyphicon-file fileinput-exists"></i>
				                                <span class="fileinput-filename"></span>
				                            </div>
				                            <span class="input-group-addon btn btn-default btn-file">
				                                <span class="fileinput-new">Select file</span>
				                                <span class="fileinput-exists">Change</span>
				                                <input id="file-3" type="file" name="II15b">
				                            </span>
				                            <a href="http://demo.flatlogic.com/sing-wrapbootstrap-2.1.0-plus/ajax-bootstrap3/form_elements.html#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
				                        </div>
				                    </div>
				                </div>
				                <div class="pull-right">
				                	<input type="submit" name="submit_trang2" value="Cập nhật" class="btn btn-primary">
				                </div>
				            </form>
				        </section>
				    </div>
				</div>
            </div>
            <div class="tab-pane fade" id="canbogvnv">
            	<h1 class="page-title"><i class="fa fa-bookmark"></i> Cán bộ giảng viên, nhân viên<small><small><!-- The Lucky One --></small></small></h1>
				<div class="row">
				    <div class="col-md-11 center-block">
				        <section class="widget">
				            <form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
				                <div class="form-group  mb-xs">
				                    <label for="" class="control-label text-left"><b>17. Thống kê số lượng cán bộ, giảng viên và nhân viên (gọi chung là cán bộ) của nhà trường</b></label>
				                </div>
			                    <div class="form-group">
			                        <table class="table table-striped table-hover" border="1">
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
			                                    <td colspan="2"><b>Tổng số</b></td>
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
				                <div class="form-group mb-xs">
				                    <label for="" class="control-label text-left"><b>18. Thống kê, phân loại giảng viên <i>(chỉ tính những giảng viên trực tiếp giảng dạy trong 5 năm gần đây)</i></b></label>
				                </div>
				                <div class="form-group">
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
				                <div class="form-group">
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
				                <div class="form-group mb-xs">
				                    <label for="" class="control-label text-left"><b>19. Thống kê, phân loại giảng viên cơ hữu theo trình độ, giới tính và độ tuổi (số người):</b></label>
				                </div>
				                <div class="form-group">
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
				                <div class="pull-right">
				                	<input type="submit" name="submit_trang3" value="Cập nhật" class="btn btn-primary">
				                </div>
				            </form>
				        </section>
				    </div>
				</div>
            </div>
            <div class="tab-pane fade" id="nguoihoc">
				<h1 class="page-title"><i class="fa fa-bookmark"></i> Người học<small><small><!-- The Lucky One --></small></small></h1>
				<div class="row">
				  <div class="col-md-11 center-block">
				    <section class="widget">
				      <form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
				        <div class="form-group mb-xs">
				        	 <label for="" class="control-label text-left"><b>20. Tổng số học sinh đăng ký dự thi đại học vào trường, số SV trúng tuyển và nhập học trong các năm gần đây (hệ chính quy):</b></label>
				        </div>
				        <div class="form-group">
				            <table class="table table-striped table-hover table-responsive" border="1">
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
				        <div class="form-group">
		        			<label class="col-md-6 col-md-offset-1 control-label">Số lượng sinh viên hệ chính quy đang học tập tại trường:</label>
		        			<div class="col-md-2"><input type="text" name="IV20f" class="form-control"></div>
				        </div>
				        <div class="form-group mb-xs">
				          	<label for="" class="control-label text-left"><b>21. Thống kê, phân loại số lượng học viên nhập học (trong 5 năm gần nhất) các hệ chính quy và không chính quy</b></label>
				        </div>
				        <div class="form-group">
				            <table class="table table-striped table-hover table-responsive" border="1">
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
				            <table class="table table-hover table-responsive">
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
				        <div class="form-group mb-xs">
				         	<label for="" class="label-control text-left"><b>22. Số sinh viên quốc tế nhập học trong 5 năm gần đây:</b></label>
				        </div>
				        <div class="form-group">
				            <table class="table table-striped table-hover table-responsive" border="1">
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
				        <div class="form-group mb-xs">
				        	<label for="" class="label-control text-left"><b>23. Sinh viên có chỗ ở trong kí túc xá / tổng số sinh viên có nhu cầu trong 5 năm gần đây:</b></label>
				        </div>
				        <div class="form-group">
				            <table class="table table-striped table-hover table-responsive" border="1">
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
				        <div class="form-group mb-xs">
				        	<label for="" class="label-control text-left"><b>24. Số lượng (người) và tỷ lệ (%) người học tham gia nghiên cứu khoa học:</b></label>
				        </div>
				        <div class="form-group">
				            <table class="table table-striped table-hover table-responsive" border="1">
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
				        <div class="form-group mb-xs">
				        	<label for="" class="label-control text-left"><b>25. Thống kê số lượng người tốt nghiệp trong 5 năm gần đây:</b></label>
				        </div>
				        <div class="form-group mb-md">
				            <table class="table table-striped table-hover mb-xs table-responsive" border="1">
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
				        <div class="form-group mt-md mb-xs">
				         	<label for="" class="label-control text-left"><b>26. Tình trạng tốt nghiệp của sinh viên hệ chính quy:</b></label>
				        </div>
				        <div class="form-group">
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
				        <div class="form-group">
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
				    </section>
				  </div>
				</div>
            </div>
            <div class="tab-pane fade" id="nckhcgcn">
            	<h1 class="page-title"><i class="fa fa-bookmark"></i> Nghiên cứu khoa học và chuyên giao công nghệ<small><small><!-- The Lucky One --></small></small></h1>
				<div class="row">
				    <div class="col-md-11 center-block">
				        <section class="widget">
				            <form id="form-nckhvacgcn" class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
				              	<div class="form-group mb-xs">
				                	<label for="" class="control-label text-left"><b>27. Số lượng đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ của nhà trường được nghiệm thu trong 5 năm gần đây:</b></label>
				             	</div>
			                	<div class="form-group">
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
				              	<div class="form-group">
									<p>Cách tính: Cột 9 = cột 3 . (cột 4 + cột 5 + cột 6 + cột 7 + cột 8)</p>
									<p>* Bao gồm đề tài cấp Bộ hoặc tương đương, đề tài nhánh cấp Nhà nước</p>
									<p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học nhà nước (có điều chỉnh).</p>
									<!-- <p>Tổng số đề tài quy đổi: 44,5</p>
									<p>Tỷ số đề tài nghiên cứu khoa học và chuyển giao khoa học công nghệ (quy đổi) trên cán bộ cơ hữu: 1 đề tài/5 giảng viên cơ hữu</p> -->
				              	</div>
				              	<div class="form-group mb-xs">
				                	<label for="" class="control-label text-left"><b>28. Doanh thu từ nghiên cứu khoa học và chuyển giao công nghệ của nhà trường trong 5 năm gần đây:</b></label>
				              	</div>
				             	<div class="form-group">
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
				              	<div class="form-group mb-xs">
				                	<label for="" class="control-label text-left"><b>29. Số lượng cán bộ cơ hữu của nhà trường tham gia thực hiện đề tài khoa học trong 5 năm gần đây:</b></label>
				              	</div>
				                <div class="form-group">
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
				              	<div class="form-group mb-xs">
				                	<label for="" class="control-label text-left"><b>30. Số lượng sách của nhà trường được xuất bản trong 5 năm gần đây:</b></label>
				              	</div>
				                <div class="form-group">
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
				                <div class="form-group">
				                  <p>**Hệ số quy đổi: Dựa trên nguyên tắc tính điểm công trình của Hội đồng học hàm và chức danh khoa học Nhà nước (có điều chỉnh).</p>
				                  <!-- <p>Tổng số sách (quy đổi): 44,5</p>
				                  <p>Tỷ số sách đã được xuất bản (quy đổi) trên cán bộ cơ hữu: 1/5 giảng viên</p> -->
				                </div>
				              	<div class="form-group mb-xs">
				                	<label for="" class="control-label text-left"><b>31. Số lượng cán bộ cơ hữu của nhà trường tham gia viết sách trong 5 năm gần đây:</b></label>
				              	</div>
				                <div class="form-group">
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
				              	<div class="form-group mb-xs">
				                	<label for="" class="control-label text-left"><b>32. Số lượng bài của các cán bộ cơ hữu của nhà trường được đăng tạp chí trong 5 năm gần đây:</b></label>
				              	</div>
				                <div class="form-group mb-xs">
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
				              	<div class="form-group">
				                	<label for="" class="control-label text-left"><b>33. Số lượng cán bộ cơ hữu của nhà trường tham gia viết bài đăng tạp chí trong 5 năm gần đây:</b></label>
				              	</div>
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
				              	<div class="form-group mb-xs">
				                	<label for="" class="control-label text-left"><b>34. Số lượng báo cáo khoa học do cán bộ cơ hữu của nhà trường báo cáo tại các hội nghị, hội thảo, được đăng toàn văn trong tuyển tập công trình hay kỷ yếu trong 5 năm gần đây:</b></label>
				             	</div>
				                <div class="form-group">
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
				              	<div class="form-group mb-xs">
				                	<label for="" class="control-label text-left"><b>35. Số lượng cán bộ cơ hữu của nhà trường có báo cáo khoa học tại các hội nghị, hội thảo được đăng toàn văn trong tuyển tập công trình hay kỷ yếu trong 5 năm gần đây:</b></label>
				              	</div>
				                <div class="form-group">
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
				              	<div class="form-group mb-xs">
				                	<label for="" class="control-label text-left"><b>36. Số bằng phát minh, sáng chế được cấp trong 5 năm gần đây:</b></label>
				              	</div>
				                <div class="form-group">
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
				              	<div class="form-group mb-xs">
				                	<label for="" class="control-label text-left"><b>37. Nghiên cứu khoa học của sinh viên</b></label>
				              	</div>
				              	<div class="form-group mb-xs col-md-offset-1">
				                	<label for="" class="control-label text-left"><b>37.1 Số lượng sinh viên của nhà trường tham gia thực hiện đề tài khoa học trong 5 năm gần đây:</b></label>
				              	</div>
				                <div class="form-group">
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
				              	<div class="form-group mb-xs col-md-offset-1">
				                  	<label for="" class="control-label text-left"><b>37.2 Thành tích nghiên cứu khoa học của sinh viên:</b></label>
				                  	<p><i>(Thống kê các giải thưởng nghiên cứu khoa học, sáng tạo, các bài báo, công trình được công bố)</i></p>
				              	</div>
				                <div class="form-group">
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
				                <div class="pull-right">
				                	<input type="submit" name="submit_trang5" value="Cập nhật" class="btn btn-primary">
				                </div>
				            </form>
				        </section>
				    </div>
				</div>
            </div>
			<div class="tab-pane fade" id="csvctvtc">
				<h1 class="page-title"><i class="fa fa-bookmark"></i> Cơ sở vật chất, thư viện, tài chính<small><small><!-- The Lucky One --></small></small></h1>
				<div class="row">
				    <div class="col-md-11 center-block">
				        <section class="widget">
				            <form class="form-horizontal" action="" method="POST" role="form" enctype="multipart/form-data">
				                <div class="form-group mb-xs">
				                    <label for="" class="control-label text-left col-md-6" style="margin-left:-15px"><b>38.Tổng diện tích đất sử dụng của trường (tính bằng m2):</b></label>
				                    <div class="col-md-2"><input type="text" name="VI38" id="input" class="form-control"></div>
				                </div>
				                <div class="form-group mb-xs">
				                    <label for="" class="control-label text-left"><b>39. Diện tích sử dụng cho các hạng mục sau (tính bằng m2):</b></label>
				                </div>
				                <div class="form-group">
			                        <div class="col-md-10 col-md-offset-1">
			                        	<table class="table table-striped table-hover" id="IV39">
			                        	    <tbody>
			                        	        <tr>
			                        	            <td style="vertical-align:middle">Nơi làm việc</td>
			                        	            <td colspan="6"><input type="text" name="VI39a" class="form-control"></td>
			                        	        </tr>
			                        	        <tr>
			                        	            <td style="vertical-align:middle">Nơi học</td>
			                        	            <td colspan="6"><input type="text" name="VI39b" class="form-control"></td>
			                        	        </tr>
			                        	        <tr>
			                        	            <td colspan="7" style="vertical-align:middle">Nơi vui chơi giải trí <p>(Điền tên vào bên dưới /Ví dụ: Sân bóng đá, sân bóng chuyền...)</p></td>
			                        	        </tr>
			                        	        <tr>
			                        	            <td style="vertical-align:middle">Tên:</td>
			                        	            <td style="min-width:150px"><input type="text" name="VI39c_1a" class="form-control"></td>
			                        	            <td style="vertical-align:middle">Số lượng:</td>
			                        	            <td><input type="text" name="VI39c_1b" class="form-control"></td>
			                        	            <td style="vertical-align:middle">Diện tích trên mỗi sân</td>
			                        	            <td style="min-width:150px"><input type="text" name="VI39c_1c" class="form-control"></td>
			                        	            <td><button type="button" class="btn btn-warning xoa">Xóa</button></td>
			                        	        </tr>
			                        	    </tbody>
			                        	</table>
			                        	<button type="button" class="btn btn-primary" id="VI39_them">Thêm</button>
			                        	<input type="hidden" id="VI39_stt" name="VI39_stt" value="1">
			                        </div>
			                    </div>
				                <div class="form-group mb-xs">
				                    <label for="" class="control-label text-left"><b>40.Diện tích phòng học (tính bằng m2):</b></label>
				                </div>
			                    <div class="form-group mb-xs">
			                        <div class="col-md-7 col-md-offset-1">
			                        	<table class="table table-striped table-hover">
			                        	    <tbody>
			                        	        <tr>
			                        	            <td class="alignleft" style="vertical-align:middle">- Tổng diện tích phòng học:</td>
			                        	            <td><input type="text" name="VI40a" id="input" class="form-control"></td>
			                        	        </tr>
			                        	        <tr>
			                        	            <td class="alignleft" style="vertical-align:middle">- Tỷ số diện tích phòng học trên sinh viên chính quy:</td>
			                        	            <td><input type="text" name="VI40b" id="input" class="form-control"></td>
			                        	        </tr>
			                        	    </tbody>
			                        	</table>
			                        </div>
			                    </div>
				                <div class="form-group mb-xs">
				                    <label for="" class="control-label text-left col-md-6" style="margin-left:-15px"><b>41.Tổng số đầu sách trong thư viện của nhà trường :</b></label>
				                    <div class="col-md-2"><input type="text" name="VI41" id="input" class="form-control"></div>
				                </div>
				                <div class="form-group mb-xs">
				                    <label for="" class="control-label text-left col-md-6" style="margin-left:-15px"><b>42.Tổng số đầu sách gắn với các ngành đào tạo có cấp bằng của nhà trường:</b></label>
				                    <div class="col-md-2"><input type="text" name="VI42" id="input" class="form-control"></div>
				                </div>
				                <div class="form-group mb-xs">
				                    <label for="" class="control-label text-left"><b>43. Tổng số máy tính của trường:</b></label>
				                </div>
				                <div class="form-group">
			                        <div class="col-md-7 col-md-offset-1">
			                        	<table class="table table-striped table-hover">
			                        	    <tbody>
			                        	        <tr>
			                        	            <td class="alignleft" style="vertical-align:middle">- Dùng cho hệ thống văn phòng:</td>
			                        	            <td><input type="text" name="VI43a" id="input" class="form-control"></td>
			                        	        </tr>
			                        	        <tr>
			                        	            <td class="alignleft" style="vertical-align:middle">- Dùng cho sinh viên học tập:</td>
			                        	            <td><input type="text" name="VI43b" id="input" class="form-control"></td>
			                        	        </tr>
			                        	        <tr>
			                        	            <td class="alignleft" style="vertical-align:middle">- Tỷ số số máy tính dùng cho sinh viên trên sinh viên chính quy:</td>
			                        	            <td><input type="text" name="VI43c" id="input" class="form-control"></td>
			                        	        </tr>
			                        	    </tbody>
			                        	</table>
			                        </div>
			                    </div>
				                <div class="form-group mb-xs">
				                    <label for="" class="control-label text-left"><b>44. Tổng kinh phí từ các nguồn thu của trường trong 5 năm gần đây:</b></label>
				                </div>
				                <div class="form-group">
			                        <div class="col-md-7 col-md-offset-1">
			                        	<table class="table table-striped table-hover">
			                        	    <tbody>
			                        	        <tr>
			                        	            <td style="vertical-align:middle">Năm 2010</td>
			                        	            <td><input type="text" name="VI44a" id="input" class="form-control"></td>
			                        	        </tr>
			                        	        <tr>
			                        	            <td style="vertical-align:middle">Năm 2011</td>
			                        	            <td><input type="text" name="VI44b" id="input" class="form-control"></td>
			                        	        </tr>
			                        	        <tr>
			                        	            <td style="vertical-align:middle">Năm 2012</td>
			                        	            <td><input type="text" name="VI44c" id="input" class="form-control"></td>
			                        	        </tr>
			                        	        <tr>
			                        	            <td style="vertical-align:middle">Năm 2013</td>
			                        	            <td><input type="text" name="VI44d" id="input" class="form-control"></td>
			                        	        </tr>
			                        	        <tr>
			                        	            <td style="vertical-align:middle">Năm 2014</td>
			                        	            <td><input type="text" name="VI44e" id="input" class="form-control"></td>
			                        	        </tr>
			                        	    </tbody>
			                        	</table>
			                        </div>
			                    </div>
				                <div class="form-group mb-xs">
				                    <label for="" class="control-label text-left"><b>45. Tổng thu học phí (chỉ tính hệ chính quy) trong 5 năm gần đây:</b></label>
				                </div>
				                <div class="form-group">
			                    	<div class="col-md-7 col-md-offset-1">
			                    	    <table class="table table-striped table-hover">
			                    	        <tbody>
			                    	            <tr>
			                    	                <td style="vertical-align:middle">Năm 2009-2010</td>
			                    	                <td><input type="text" name="VI45a" id="input" class="form-control"></td>
			                    	            </tr>
			                    	            <tr>
			                    	                <td style="vertical-align:middle">Năm 2010-2011</td>
			                    	                <td><input type="text" name="VI45b" id="input" class="form-control"></td>
			                    	            </tr>
			                    	            <tr>
			                    	                <td style="vertical-align:middle">Năm 2011-2012</td>
			                    	                <td><input type="text" name="VI45c" id="input" class="form-control"></td>
			                    	            </tr>
			                    	            <tr>
			                    	                <td style="vertical-align:middle">Năm 2012-2013</td>
			                    	                <td><input type="text" name="VI45d" id="input" class="form-control"></td>
			                    	            </tr>
			                    	            <tr>
			                    	                <td style="vertical-align:middle">Năm 2013-2014</td>
			                    	                <td><input type="text" name="VI45e" id="input" class="form-control"></td>
			                    	            </tr>
			                    	        </tbody>
			                    	    </table>
			                    	</div>
			                    </div>
				                <div class="pull-right">
				                	<input type="submit" name="submit_trang6" value="Cập nhật" class="btn btn-primary">
				                </div>
				            </form>
				        </section>
				    </div>
				</div>
            </div>
        </div>
    </main>
</div>
<input type="hidden" name="get-url" value="<?php echo get_template_directory_uri()."/"; ?>" id="get-url">
<?php get_footer();?>
<script>
function getPage(url) {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            $("main#content").html(xmlhttp.responseText);
        }
    };
    xmlhttp.open("GET", url, true);
    xmlhttp.send();
}
function changeNavigationItem() {
	$('.active').removeClass('active');
	$(this).parent().addClass('active');
}
$('.ajax-load').on('click',function(event){
	event.preventDefault();
	var url = $(this).attr('href');
	var pre_url = $('#get-url').val();
	var real_url = pre_url+url;
	// console.log(real_url);
	getPage(real_url);
	$('.active').removeClass('active');
	$(this).parent().addClass('active');
	$(this).parents('li').addClass('active');
});
$('a').click(function(e){
	e.preventDefault;
});

// <---- Submit form data ----->
// $('#content').on('click','input[name="submit_trang2"]',function(event){
// 	event.preventDefault();
// 	$(this).attr("disabled","disabled");
// 	$(this).parents('form#form-gioithieukhaiquat').find('input, a, span').attr("disabled","disabled");
// 	// val = $('input[name="II14b"]').attr();
// 	// console.log(val);
// 	// var dataString = "II14b="+ $('input[name="II14b"]').val() + "&";
// 	// console.log(dataString);
// 	var data = "";
// 	//Get data form input with type = text
// 	$(this).parents('form').find('input[type="text"]').each(function(){
// 		var name = $(this).attr('name');
// 		var disabled = $(this).attr('disabled');
// 		if ( $(this).attr('disabled')!='disabled' && $(this).val() != "") {
// 			data= data + name + "=" + $(this).val() + "&";
// 		};
// 	});
// 	//Get data form input with type = radio
// 	$(this).parents('form').find('input[type="radio"]:checked').each(function(){
// 		var name = $(this).attr('name');
// 		var disabled = $(this).attr('disabled');
// 		if ($(this).attr('disabled')!='disabled' && $(this).val() !== '') {
// 			data= data + name + "=" + $(this).val() + "&";
// 		};
// 	});
// 	length = data.length;
// 	data = data.substring(0,length-1);
// 	// testdataform = $('form');
// 	// formdata = testdataform.data();
// 	// console.log(formdata);
// 	console.log(data);
// 	var pre_url = $('#get-url').val();
// 	var real_url = pre_url + '/database-handle.php'
// 	$.ajax({
// 		type: "POST",
// 		url: real_url,
// 		data: data,
// 		cache: false,
// 		processData: false,
//         // contentType: false,
// 		success: function(result){
// 			console.log(result);
// 		},
// 		error: function () {
// 			console.log('error')
// 		}
// 	});
// });
$('input[name="I10"]').on('change',function(){
    if ($(this).val() == "Khac") {
        $('input[name="I10_khac"]').show();
    } else { $('input[name="I10_khac"]').hide(); }
});
// $("#form-thongtinchung").on('submit', (function(e) {
//         e.preventDefault();
//         var pre_url = $('#get-url').val();
//         var url = pre_url + 'csgd_new/database-handle.php';
//         console.log(url);
//         $.ajax({
//             url: url, // Url to which the request is send
//             type: "POST", // Type of request to be send, called as method
//             data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
//             contentType: false, // The content type used when sending data to the server.
//             cache: false, // To unable request pages to be cached
//             processData: false, // To send DOMDocument or non processed data file it is set to false
//             success: function(result) // A function to be called if request succeeds
//                 {
//                     console.log(result);
//                 }
//         });
//     }));

// function submitDatable(str) {
//     if (window.XMLHttpRequest) {
//         // code for IE7+, Firefox, Chrome, Opera, Safari
//         xmlhttp = new XMLHttpRequest();
//     } else {
//         // code for IE6, IE5
//         xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
//     }
//     xmlhttp.onreadystatechange = function() {
//         if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//             document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
//         }
//     };
//     xmlhttp.open("POST","getuser.php?q="+str,true);
//     xmlhttp.send();
// }required
(function ($) {
	$(function () {
		window.Database = function (formID) {
			this.form = $('#' + formID);
			this.pre_url = $('#get-url').val();
			this.url = this.pre_url + 'csgd_new/database-handle.php';
			this.getUrl = function () {
				return this.url;
			};
			// this.data = new FormData(this.form[0]);
			// this.data.append('name','Khoa');
			// console.log(this.data);
		};
		Database.prototype = {
			ajaxCall: function (fID) {
				$.ajax({
					url: this.url, // Url to which the request is send
					type: "POST", // Type of request to be send, called as method
					data: new FormData(this.form[0]), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
					contentType: false, // The content type used when sending data to the server.
					cache: false, // To unable request pages to be cached
					processData: false, // To send DOMDocument or non processed data file it is set to false
					success: function (result) // A function to be called if request succeeds
					{
						console.log(result);
					}
				});
			}
		};
// var step1 = new Database('form-thongtinchung');
// var step0ItemsId = {
//                 item: {
//                     itemInput: {
//                         house: "houseNumber",
//                         street: "streetName",
//                         zipCode: "zipCode"
//                     },
//                     itemSelectPicker: {
//                         province: "provincesSelect",
//                         district: "districtsSelect",
//                         ward: "wardsSelect"
//                     }
//                 },
//                 event: {
//                     btnSubmit: "btnSubmitStep0"
//                 }
//             };
// var step2 = new Step('a','b',step0ItemsId);
// $('input[name="submit_trang1"]').on('click',function(){
//     step1.ajaxCall();
// });
		$('input[name="submit_trang1"]').on('click', function (event) {
			event.preventDefault();
			var data = new Database('form-thongtinchung');
			data.ajaxCall();
		});
	});
})(jQuery);
</script>