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
		<?php include_once(G5_THEME_PATH.'/mainform.php');?>
		<!-- <div class="col-lg-6 col-md-10 mx-auto">
		<form name=frm method=post action="<?php echo G5_BBS_URL;?>/write_update.php" onsubmit="return checkFrm(this);">
		  <input type=hidden   name=w        value="">
			<input type="hidden" name="token" value="<?php echo get_write_token('myform'); ?>">
		  <input type=hidden name=bo_table value="myform">
			<input type=hidden name=wr_id    value="">
			<input type=hidden name=sca      value="">
			<input type=hidden name=sfl      value="">
			<input type=hidden name=stx      value="">
			<input type=hidden name=spt      value="">
			<input type=hidden name=sst      value="">
			<input type=hidden name=sod      value="">

			<input type=hidden name=wr_subject  value="빠른 상담 신청">
		  <input type=hidden name=wr_content  value="빠른 상담 신청">

	 		<div class="content d-flex justify-content-between align-items-center mt-5">
   		<label for="wr_1">이름</label>
	 		<input type="text" name="wr_1" id="wr_1" value="" placeholder="이름을 입력해주세요." require>
	 		</div>
	 		<div class="content d-flex justify-content-between align-items-center">
	 		<label for="wr_2">연락처</label>
	 		<input type="number" name="wr_2" id="wr_2" value="" placeholder="휴대폰번호를 입력해주세요." require>
	 		</div>

	 		<div class="content d-flex justify-content-between align-items-center">
				<label for="wr_3">문의사항</label>
				<textarea name="wr_3" id="wr_3" value="" placeholder="내용을 입력해주세요." require></textarea>
      </div>

	 		<div class="agree">
	
	 	
			<input type=checkbox name=wr_6 value="6"  required id="consent">
			<label for="consent">개인정보 수집 및 활용동의</label>
	 		</div>

	 			<button type="submit">상담 예약하기</button>
				</form>
			</div>
		</div> -->



	</div>
	<script type="text/javascript">
		
		function checkFrm(obj) {
			if(obj.wr_6.checked == false) {
				alert('개인정보 활동동의에 체크해주세요.');
				obj.wr_6.focus();
				return false;
			}
		}

</script>

<?php

include_once(G5_THEME_PATH.'/tail.php');