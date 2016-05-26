<?php
@ini_set( 'upload_max_size' , '10M' );
@ini_set( 'post_max_size', '10M');
@ini_set( 'max_execution_time', '300' );

/**
  @ Thiết lập các hằng dữ liệu quan trọng
  @ THEME_URL = get_stylesheet_directory() - đường dẫn tới thư mục theme
  @ CORE = thư mục /core của theme, chứa các file nguồn quan trọng.
  **/
  define( 'THEME_URL', get_stylesheet_directory() );
  define( 'CORE', THEME_URL . '/core' );

/**
  @ Load file /core/init.php
  @ Đây là file cấu hình ban đầu của theme mà sẽ không nên được thay đổi sau này.
  **/

  require_once( CORE . '/init.php' );

 /**
  @ Thiết lập $content_width để khai báo kích thước chiều rộng của nội dung
  **/
  if ( ! isset( $content_width ) ) {
  	/*
  	 * Nếu biến $content_width chưa có dữ liệu thì gán giá trị cho nó
  	 */
  	$content_width = 620;
   }

/**
  @ Thiết lập các chức năng sẽ được theme hỗ trợ
  **/
  if ( ! function_exists( 'ttkd_theme_setup' ) ) {
  	/*
  	 * Nếu chưa có hàm ttkd_theme_setup() thì sẽ tạo mới hàm đó
  	 */
  	function ttkd_theme_setup() {
  		/*
  		 * Thiết lập theme có thể dịch được
  		 */
  		$language_folder = THEME_URL . '/languages';
  		load_theme_textdomain( 'ttkd', $language_folder );

  		/*
  		 * Tự chèn RSS Feed links trong <head>
  		 */
  		add_theme_support( 'automatic-feed-links' );

  		/*
  		 * Thêm chức năng post thumbnail
  		 */
  		add_theme_support( 'post-thumbnails' );

  		/*
  		 * Thêm chức năng title-tag để tự thêm <title>
  		 */
  		add_theme_support( 'title-tag' );

  		/*
  		 * Thêm chức năng post format
  		 */
  		add_theme_support( 'post-formats',
  			array(
  				'video',
  				'image',
  				'audio',
  				'gallery'
  			)
  		 );

  		/*
  		 * Thêm chức năng custom background
  		 */
  		$default_background = array(
  			'default-color' => '#e8e8e8',
  		);
  		add_theme_support( 'custom-background', $default_background );

                /*
                 * Tạo menu cho theme
                 */
                 register_nav_menu ( 'primary-menu', __('Primary Menu', 'ttkd') );
                 register_nav_menu ( 'side-menu', __('Side Menu', 'ttkd') );

                /*
                 * Tạo sidebar cho theme
                 */
                 $sidebar = array(
                    'name' => __('Main Sidebar', 'ttkd'),
                    'id' => 'main-sidebar',
                    'description' => 'Main sidebar for ttkd theme',
                    'class' => 'main-sidebar',
                    'before_title' => '<h3 class="widgettitle">',
                    'after_sidebar' => '</h3>'
                 );
                 register_sidebar( $sidebar );
  	}
  	add_action ( 'init', 'ttkd_theme_setup' );

  }
// Add Password, Repeat Password  to WordPress registration form
// http://wp.me/p1Ehkq-gn
add_action( 'register_form', 'ts_show_extra_register_fields' );
function ts_show_extra_register_fields(){
?>
  <p>
    <label for="password">Password<br/>
    <input id="password" class="input" type="password" tabindex="30" size="25" value="" name="password" />
    </label>
  </p>
  <p>
    <label for="repeat_password">Repeat password<br/>
    <input id="repeat_password" class="input" type="password" tabindex="40" size="25" value="" name="repeat_password" />
    </label>
  </p>
<?php
}
// Check the form for errors
add_action( 'register_post', 'ts_check_extra_register_fields', 10, 3 );
function ts_check_extra_register_fields($login, $email, $errors) {
  if ( $_POST['password'] !== $_POST['repeat_password'] ) {
    $errors->add( 'passwords_not_matched', "<strong>ERROR</strong>: Passwords must match" );
  }
  if ( strlen( $_POST['password'] ) < 8 ) {
    $errors->add( 'password_too_short', "<strong>ERROR</strong>: Passwords must be at least eight characters long" );
  }
}
// Storing WordPress user-selected password into database on registration
// http://wp.me/p1Ehkq-gn
add_action( 'user_register', 'ts_register_extra_fields', 100 );
function ts_register_extra_fields( $user_id ){
  $userdata = array();
  $userdata['ID'] = $user_id;
  if ( $_POST['password'] !== '' ) {
    $userdata['user_pass'] = $_POST['password'];
  }
  $new_user_id = wp_update_user( $userdata );
}

//Dịch ra tiếng viết trang đăng ký
// function my_translatorr()
// {
// $our_content= ob_get_contents();
// $our_content= str_replace('Register For This Site','Đăng ký Tài khoản',$our_content);
// $our_content= str_replace('Username','Tài khoản',$our_content);
// $our_content= str_replace('Password','Mật khẩu',$our_content);
// $our_content= str_replace('Repeat password','Xác nhận mật khẩu',$our_content);
// $our_content= str_replace('Register','Đăng ký',$our_content);
// $our_content= str_replace('Log in','Đăng nhập',$our_content);
// ob_get_clean(); 
// echo $our_content;
// }
// add_action( 'register_form', 'my_translatorr' );

//Function thay đổi logo
function my_login_logo() { ?>
    <style type="text/css">
        .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
            padding-bottom: 20px;
            background-size: 130px;
            height: 110px;
            margin: 0 auto 30px;
            width: 130px;
        }
        #login {
          padding: 2% 0 0;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/* Tự động chuyển đến một trang khác sau khi login */
function my_login_redirect( $redirect_to, $request, $user ) {
        //is there a user to check?
        global $user;
        if ( isset( $user->roles ) && is_array( $user->roles ) ) {
                //check for admins
                if ( in_array( 'administrator', $user->roles ) ) {
                        // redirect them to the default place
                        return admin_url();
                } else {
                        return home_url();
                }
        } else {
                return $redirect_to;
        }
} 
add_filter( 'login_redirect', 'my_login_redirect', 10, 3 );

//
function stripUnicode($str){
  if(!$str) return false;
   $unicode = array(
     'a'=>'á|à|ả|ã|ạ|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ',
     'A'=>'Á|À|Ả|Ã|Ạ|Ă|Ắ|Ằ|Ẳ|Ẵ|Ặ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
     'd'=>'đ',
     'D'=>'Đ',
    'e'=>'é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ',
    'E'=>'É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
    'i'=>'í|ì|ỉ|ĩ|ị',   
    'I'=>'Í|Ì|Ỉ|Ĩ|Ị',
     'o'=>'ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ',
    'O'=>'Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
     'u'=>'ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự',
    'U'=>'Ú|Ù|Ủ|Ũ|Ụ|Ư|Ứ|Ừ|Ử|Ữ|Ự',
     'y'=>'ý|ỳ|ỷ|ỹ|ỵ',
     'Y'=>'Ý|Ỳ|Ỷ|Ỹ|Ỵ'
   );
foreach($unicode as $khongdau=>$codau) {
  $arr=explode("|",$codau);
  $str = str_replace($arr,$khongdau,$str);
}
return $str;
}
function changeTitle($str){
    $str = stripUnicode($str);
    $str = str_replace("?","",$str);
    $str = str_replace("&","",$str);
    $str = str_replace("'","",$str);
    $str = str_replace("+","",$str);    
    $str = str_replace(" - "," ",$str);
    $str = trim($str);
    $str = mb_convert_case($str,MB_CASE_TITLE,'utf-8');// MB_CASE_UPPER/MB_CASE_TITLE/MB_CASE_LOWER
    $str = str_replace(" ","-",$str);
    return $str;
  }
//
function new_filename($filename,$filename_raw) {
    
    global $wpdb;
  $get_ID = get_current_user_id();
  $selectid = $wpdb->get_row("SELECT TenDayDu_TV FROM ttkd_user_truong WHERE ID = '$get_ID'",ARRAY_N);
  $info = pathinfo($filename);
  $ext  = empty($info['extension']) ? '' : '.' . $info['extension'];
  $new = $selectid[0].'';
  $new = changeTitle($new).$ext;
  // the if is to make sure the script goes into an indefinate loop
  if( $new != $filename_raw ) {
      $new = sanitize_file_name( $new );
  }
  return $new;
}
if (isset($_POST['Upload'])) {
  add_filter('sanitize_file_name', 'new_filename', 10, 2);
}


add_action('init', 'myStartSession', 1);
add_action('wp_logout', 'myEndSession');
add_action('wp_login', 'myEndSession');
// if (isset($_POST['themmoi'])) {
//     session_destroy();
//     session_start();
// }

function myStartSession() {
    if(!session_id()) {
        session_start();
    }
}

function myEndSession() {
    session_destroy ();
}