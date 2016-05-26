<?php
define( 'SHORTINIT', true );
require_once( $_SERVER['DOCUMENT_ROOT'] . '/dulieucsgd/wp-load.php' );
global $wpdb;
// // print_r($_POST);
// // print_r($_FILES);
// // foreach ($_FILES as $key => $value) {
// // 	$sourcePath = $_FILES[$key]['tmp_name']; // Storing source path of the file in a variable
// // 	$targetPath = "BCTDG/".$_FILES[$key]['name']; // Target path where file is to be stored
// // 	move_uploaded_file($sourcePath,$targetPath) ; // Moving Uploaded file
// // }
// // function buildSqlQuery ($tableName,$variableArray) {
// // 	$sql = "'".$tableName."',";
// // 	$sql.= "array(";
// // 	foreach ($variableArray as $key => $value) {
// // 		$sql.= "'".$key."' => '".$value."',";
// // 	}
// // 	$sql = substr($sql,0,strlen($sql)-2);
// // 	$sql.= ")";
// // 	return $sql;
// // }
// // foreach ($_POST as $key => $value) {
// // 	# code...
// // }
// // $data1 = $_POST['II13a'];
// // $data2 = $_POST['II13b'];
// // // $wpdb->insert( 
// // // 	'csgd_ii_khaiquatvetruong', 
// // // 	array( 
// // // 		'column1' => 'value1', 
// // // 		'column2' => 123 
// // // 	)
// // // );
// // $sql = buildSqlQuery('csgd_ii_khaiquatvetruong',$_POST);
if (isset($_POST['submit_trang1'])) {
	$_POST['I10'] = ($_POST['I10'] == "Khac") ? $_POST['I10_khac'] : $_POST['I10'];
}
function filterData($array,$keys){
	$data = $array;
	foreach ($keys as $key => $value) {
		unset($data[$value]);
	}
	return $data;
}
$data = filterData($_POST,array("submit_trang1","I10_khac"));
print_r($data);
// $wpdb->insert('csgd_i_thongtinchung',$data);
// // echo $sql;

// print_r($_POST);