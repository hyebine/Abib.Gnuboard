<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');
?>


<?php 
//슬라이드
	echo latest('mainswiper','adm_mainbanner',4, 100); 
	//카테고리
	echo latest('category','category',5, 10);
	//베스트 상품
	echo latest('product','products',3, 10);
	// 브랜드스토리
	echo latest('brand','brand',1, 100);
	// 인스타그램
	echo latest('instagram','instagram',1, 100);

	?>

<!-- 폼태그 -->

	<div class="">
	<form action="">

</form>
	</div>


<?php

include_once(G5_THEME_PATH.'/tail.php');