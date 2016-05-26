$(function(){
    $('.current-menu-item').addClass("active");
});

//function them dai bieu
$(function(){
	$("#themdaibieu").click(function() {
		var n = $("#stt").val();
		n++;
        $(".form-container").append(
        	'<div class="panel panel-primary" id="daibieu'+n+'">'+
				'<div class="panel-heading">'+
				    '<h3 class="panel-title">Đại biểu '+n+'</h3>'+
				'</div>'+
				'<div class="panel-body">'+
				    '<div class="row">'+
					 	'<div class="form-group col-md-3">'+
					 		'<label for="">Họ và tên</label>'+
					 		'<input type="text" name="hovaten'+n+'" class="form-control" id="" placeholder="Họ và tên">'+
					 	'</div>'+
					 	'<div class="form-group col-md-1">'+
					 		'<label for="">Năm sinh</label>'+
					 		'<input type="text" name="namsinh'+n+'" class="form-control" id="" placeholder="Năm">'+
					 	'</div>'+
					 	'<div class="form-group col-md-2">'+
					 		'<label for="">Giới tinh</label>'+
					 		'<select name="gioitinh'+n+'" class="form-control">'+
			 					'<option value="1">Nam</option>'+
			 					'<option value="0">Nữ</option>'+
			 				'</select>'+
					 	'</div>'+
					 	'<div class="form-group col-md-3">'+
					 		'<label for="">Điện thoại</label>'+
					 		'<input type="text" name="dienthoai'+n+'" class="form-control" id="" placeholder="Điện thoại">'+
					 	'</div>'+
					 	'<div class="form-group col-md-3">'+
					 		'<label for="">Email</label>'+
					 		'<input type="text" name="email'+n+'" class="form-control" id="" placeholder="Email">'+
					 	'</div>'+
				 	'</div>'+
				 	'<div class="row">'+
					 	'<div class="form-group col-md-4">'+
					 		'<label for="">Đơn vị</label>'+
					 		'<input type="text" name="donvi'+n+'" class="form-control" id="" placeholder="Đơn vị">'+
					 	'</div>'+
					 	'<div class="form-group col-md-4">'+
					 		'<label for="">Chức vụ</label>'+
					 		'<input type="text" name="chucvu'+n+'" class="form-control" id="" placeholder="Chức vụ">'+
					 	'</div>'+
					 	'<div class="form-group col-md-4">'+
					 		'<label for="">Bộ phận công tác</label>'+
					 		'<input type="text" name="bophancongtac'+n+'"  class="form-control" id="" placeholder="Bộ phận công tác">'+
					 	'</div>'+
				 	'</div>'+
				'</div>'+
			'</div>'
        );
		$("#stt").val(n);
		$('html, body').animate({ scrollTop: $(document).height() }, "slow");
    });
});

//
$(document).ready(function(){
	var n= $('#page_id').val();
    $('.page-item-'+n).addClass('active');
});
$(function(){
	$('#loaihinhtruong').change(function(){
		$('#tentruong_select option').remove();
		var loaihinh = $(this).val();
		$('#tentruong_select').load("lay-loai-hinh?loaihinh="+loaihinh);
	})
});
$(function(){
	$('#tentruong_input').hide();
});

$(function(){
	$('#tentruong_khac').change(function(){
		var khacvalue = $(this).is(':checked');
		if (khacvalue) {
			$('#tentruong_input').show();
			$('#tentruong_select').hide();
		} else { 
			$('#tentruong_input').hide();
			$('#tentruong_select').show();
		}
	});
	
});
// $(function(){
// 	$('#tentruong_khac').change(function(){ alert($('#tentruong_khac').val()) });
// });
$(function(){
	var trang = $('#trang').val();
	if (trang != 0) {$('#trang'+trang).addClass('active');} else {$('#trang1').addClass('active');}
});

////////////////////////////////////////////////////////////////////////
$(function(){
	var stt = $('#II12_stt').val();
	$("#II12_themdanhsachcanbo").click(function(){
		stt++;
		$("#II12_danhsachcanbochuchot tbody").append(
			'<tr>'+
	            '<td style="line-height:30px">'+stt+'</td>'+
	            '<td><input type="text" name="II12_'+stt+'a" class="form-control"></td>'+
	            '<td><input type="text" name="II12_'+stt+'b" class="form-control"></td>'+
	            '<td><input type="text" name="II12_'+stt+'c" class="form-control"></td>'+
	        '</tr>'
		);
		$('#II12_stt').val(stt);
	});
});

$(function(){
	var stt = $('#II15b_stt').val();
	$("#II15b_them").click(function(){
		stt++;
		$("#II15b_lietketencackhoadaotao tbody").append(
			'<tr>'+
	            '<td style="line-height:30px">'+stt+'</td>'+
	            '<td><input type="text" name="II15b_'+stt+'" class="form-control"></td>'+
	        '</tr>'
		);
		$('#II15b_stt').val(stt);
	});
});


$(function(){
	var stt = $('#VI39_stt').val();
	$("#VI39_them").click(function(){
		stt++;
		$("#IV39 tbody").append(
			'<tr>'+
                '<td style="vertical-align:middle">Tên:</td>'+
                '<td style="min-width:150px"><input type="text" name="VI39c_'+stt+'a" class="form-control"></td>'+
                '<td style="vertical-align:middle">Số lượng:</td>'+
                '<td><input type="text" name="VI39c_'+stt+'b" class="form-control"></td>'+
                '<td style="vertical-align:middle">Diện tích trên mỗi sân</td>'+
                '<td style="min-width:150px"><input type="text" name="VI39c_'+stt+'c" class="form-control"></td>'+
                '<td><button type="button" class="btn btn-warning xoa">Xóa</button></td>'+
            '</tr>'
		);
		$('#VI39_stt').val(stt);
	});
});

$(function(){
	$('table').on('click','.xoa',function(){
		$(this).parent().parent().remove();
	});
});

// $(function(){
// 	$('legend').click(function(){
// 		$(this).parent().remove();
// 	});
// });
function themdaibieu(thutuhoithao,n,tenHT) {
       $("#hoithao"+thutuhoithao).append(
        	'<div class="panel panel-primary" id="'+tenHT+'daibieu'+n+'">'+
				'<div class="panel-heading">'+
				    '<h3 class="panel-title">Đại biểu '+n+'</h3>'+
				'</div>'+
				'<div class="panel-body">'+
				    '<div class="row">'+
					 	'<div class="form-group col-md-3">'+
					 		'<label for="">Họ và tên</label>'+
					 		'<input type="text" name="'+tenHT+'hovaten'+n+'" class="form-control" id="" placeholder="Họ và tên">'+
					 	'</div>'+
					 	'<div class="form-group col-md-1">'+
					 		'<label for="">Năm sinh</label>'+
					 		'<input type="text" name="'+tenHT+'namsinh'+n+'" class="form-control" id="" placeholder="Năm">'+
					 	'</div>'+
					 	'<div class="form-group col-md-2">'+
					 		'<label for="">Giới tinh</label>'+
					 		'<select name="'+tenHT+'gioitinh'+n+'" class="form-control">'+
			 					'<option value="1">Nam</option>'+
			 					'<option value="0">Nữ</option>'+
			 				'</select>'+
					 	'</div>'+
					 	'<div class="form-group col-md-3">'+
					 		'<label for="">Điện thoại</label>'+
					 		'<input type="text" name="'+tenHT+'dienthoai'+n+'" class="form-control" id="" placeholder="Điện thoại">'+
					 	'</div>'+
					 	'<div class="form-group col-md-3">'+
					 		'<label for="">Email</label>'+
					 		'<input type="text" name="'+tenHT+'email'+n+'" class="form-control" id="" placeholder="Email">'+
					 	'</div>'+
				 	'</div>'+
				 	'<div class="row">'+
					 	'<div class="form-group col-md-4">'+
					 		'<label for="">Đơn vị</label>'+
					 		'<input type="text" name="'+tenHT+'donvi'+n+'" class="form-control" id="" placeholder="Đơn vị">'+
					 	'</div>'+
					 	'<div class="form-group col-md-4">'+
					 		'<label for="">Chức vụ</label>'+
					 		'<input type="text" name="'+tenHT+'chucvu'+n+'" class="form-control" id="" placeholder="Chức vụ">'+
					 	'</div>'+
					 	'<div class="form-group col-md-4">'+
					 		'<label for="">Bộ phận công tác</label>'+
					 		'<input type="text" name="'+tenHT+'bophancongtac'+n+'"  class="form-control" id="" placeholder="Bộ phận công tác">'+
					 	'</div>'+
				 	'</div>'+
				'</div>'+
			'</div>'
        );
}

$(function(){
	$('#HT2_themdaibieu').click(function(){
		var n = $("#HT2_stt").val();
		n++;
		themdaibieu(2,n,'HT2_');
		$("#HT2_stt").val(n);
	});
	$('#HT3_themdaibieu').click(function(){
		var n = $("#HT3_stt").val();
		n++;
		themdaibieu(3,n,'HT3_');
		$("#HT3_stt").val(n);
	});
	$('#HT4_themdaibieu').click(function(){
		var n = $("#HT4_stt").val();
		n++;
		themdaibieu(4,n,'HT4_');
		$("#HT4_stt").val(n);
		alert(n);
	});
	$('#HT5_themdaibieu').click(function(){
		var n = $("#HT5_stt").val();
		n++;
		themdaibieu(5,n,'HT5_');
		alert(n);
		$("#HT5_stt").val(n);
	});
	$('#HT6_themdaibieu').click(function(){
		var n = $("#HT6_stt").val();
		n++;
		themdaibieu(6,n,'HT6_');
		$("#HT6_stt").val(n);
	});
});

//Tinh toan tren client

//PageIII
// $(function(){
// 	$("[name='III17a_3']").val( $("[name='III17a_1']").val() + $("[name='III17a_2']").val() )
// });