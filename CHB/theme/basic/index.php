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

<div class="apply d-flex">
	<div class="wrap container text-center">
		<div>
			<h2>상담예약</h2>
			<p>고객님의 기본정보를 입력해 주시면 <strong>Abib</strong>가 연락드리겠습니다.</p>
		</div>
		<div class="col-6 mx-auto ">
			<form action="#">

	 		<div class="content d-md-flex justify-content-between align-items-center">
   		<label for="name">이름</label>
	 		<input type="text" name="name" placeholder="이름을 입력해주세요." require>
	 		</div>
	 		<div class="content d-md-flex justify-content-between align-items-center">
	 		<label for="phone">연락처</label>
	 		<input type="number" name="phone" placeholder="휴대폰번호를 입력해주세요." require>
	 		</div>

	 		<div class="content d-md-flex justify-content-between align-items-center">
				<label for="question">문의사항</label>
				<textarea name="question" placeholder="내용을 입력해주세요." require></textarea>
      </div>

	 		<div class="agree">
	 		<input type="checkbox" require>
			<span>개인정보 수집 및 활용동의</span>
	 		</div>

	 			<button type="submit">상담 예약하기</button>
				</form>
			</div>
		</div>
	</div>

<?php

include_once(G5_THEME_PATH.'/tail.php');