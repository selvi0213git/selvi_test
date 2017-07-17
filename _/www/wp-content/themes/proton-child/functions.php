<?php
/**
* [init]     
* [20170515] | 파일 최초 수정                                         | eley 
* ---------------------------------------------------------------------
* [after]
* [20170515] | CRUD TEST - mystatus.php                          | eley 
* [20170607] | 이벤트등록 및 응모 crud php파일 include - eventinfo.php    | eley 
* [20170623] | 이벤트배달정보입력 crud php파일 include - eventdelivery.php | eley 
* [20170629] | 마이페이지정보입력 crud php파일 include - myinfo.php        | eley 
* [20170703] | 이벤트응모리스트 crud php파일 include - evententerlist.php | eley 
* [20170707] | mypage화면 통합을 위한 php파일 include - mypage.php       | eley 
*/

//20170515 eley
include 'inc/mystatus.php';
$GLOBALS['mystatus'] = new MY_Status();

//20170607 eley
include 'inc/eventinfo.php';
$GLOBALS['eventinfo'] = new event_info();

//20170623 eley
include 'inc/eventdelivery.php';
$GLOBALS['eventdelivery'] = new event_delivery();

//20170629 eley
include 'inc/myinfo.php';
$GLOBALS['myinfo'] = new my_info();

//20170703 eley
include 'inc/evententerlist.php';
$GLOBALS['evententerlist'] = new event_enterlist();

//20170707 eley
include 'inc/mypage.php';
$GLOBALS['mypage'] = new mypage();
add_action( 'wp_enqueue_scripts', 'enqueue_child_theme_styles', PHP_INT_MAX);

//style
function enqueue_child_theme_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

/** 보류
//글 작성자 이메일전송기능 추가 20170518 eley
add_action('kboard_comments_insert', 'my_kboard_comments_insert', 10, 2);
function my_kboard_comments_insert($comment_uid, $content_uid){
    $content = new KBContent();
    $content->initWithUID($content_uid);
    if($content->option->email){
        $email = $content->option->email;
        $title = '등록하신 글에 대해 답변이 등록 되었습니다.';
        $content = '등록하신 글에 대해 답변이 등록 되었습니다. 게시판을 확인해주세요.';
        wp_mail($email, $title, $content);
    }
}
*/
?>