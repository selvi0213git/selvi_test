<?php 
/**
* [init]     
* [20170707] |  마이페이지 php파일 생성           | eley 
* ---------------------------------------------------
* [after]
*
* [RENEWAL]------------------------------------------
* [20170807] | RENEWAL                     | eley 
*/
class mypage {
	function __construct(){
		//숏코드 등록
		add_shortcode( 'mypage', array($this, 'shortcode') );
	}

	//숏코드 실행
	function shortcode(){
		ob_start();
		?>
		
		<!-- yeonok: 마이페이지 시작 -->
		<article class="page-basic">
			<div class="inner-container">
				
				<!-- Head -->
				<div class="page-basic-header">
					<h1 class="page-title">마이페이지</h1>
					<text class="page-desc">기본정보 관리</text>
				</div><!-- /.page-basic-header -->
				
				<!-- Contents -->
				<div class="page-basic-content">
				
					<!-- Info -->
					<section class="my-basic-info">
						<?php echo do_shortcode('[myinfo]');?>
					</section><!-- /.my-basic-info -->
					
					<!-- Enter list-->
					<span id="list"></span>
					<h2 class="section-title">응모내역 &amp; 당첨내역</h2>
					
					<section class="my-history">
						<?php echo do_shortcode('[evententerlist]');?>
					</section><!-- /.my-history -->
				
				</div><!-- /.page-basic-content -->
					
			</div><!-- /.inner-container -->
		</article><!-- /.page-basic -->
		<!-- yeonok: 마이페이지 끝 -->
		
		<?php
		return ob_get_clean();
	}
}?>