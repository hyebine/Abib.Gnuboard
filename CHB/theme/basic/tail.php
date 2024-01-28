<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가




?>

    </div>

</div>

</div>
<!-- } 콘텐츠 끝 -->

<hr>

<!-- 하단 시작 { -->
<div id="ft">

    <div id="ft_wr" class="d-flex container justify-content-between align-items-center py-2">
        <div class="ft_cnt">
            <div class="logo py-3">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_URL ?>/bin/img/f_logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
            </div>
            <ul class="icons d-flex justify-content-between">
               <li>
                    <a href="#"><i class="bi bi-instagram"></i></a>
               </li> 
                <li>
                    <a href="#"><i class="bi bi-facebook"></i></a>
                </li>
                <li>
                    <a href="#"><i class="bi bi-youtube"></i></a>
                </li>
            </ul>
        </div>

        <div id="consult" class="ft_cnt">
            <h3>제품 상담</h3>
            <p>070-4131-5906</p>
            <p>abib@fourco.co.kr</p>
        </div>

        <div id="ft_company" class="ft_cnt">
        	<h3>회사 정보</h3>
	        <ul class="ft_info">
	        	<li><span>대표자.</span> 김민우</li>
	        	<li><span>통신판매업신고.</span> 2017-서울송파-0651</li>
	        	<li><span>사업등록번호.</span> 232-88-00610 [사업자정보확인]</li>
	        	<li><span>주소.</span> (주)포컴퍼니서울시 송파구 백제고분로9길 14, 301(잠실동)</li>
             </ul>
	    </div>

       <div id="ft_link" class="ft_cnt">
        <h3>고객 서비스</h3>
        <ul>
            <li>
                <a href="<?php echo get_pretty_url('content', 'company'); ?>">주문조희</a>
            </li>
            <li>
                <a href="<?php echo get_pretty_url('content', 'privacy'); ?>">문의</a>
            </li>
            <li>
              <a href="<?php echo get_pretty_url('content', 'provision'); ?>">자주 묻는 질문</a>
            </li>
            <li>
              <a href="<?php echo get_pretty_url('content', 'provision'); ?>">고객 센터</a>
            </li>
            <li>
              <a href="<?php echo get_pretty_url('content', 'provision'); ?>">매장 정보</a>
            </li>
            <li>
              <a href="<?php echo get_pretty_url('content', 'provision'); ?>">이용약관</a>
            </li>
            <li>
              <a href="<?php echo get_pretty_url('content', 'provision'); ?>"><strong>개인정보처리방침<strong></a>
            </li>
        </ul>
        </div>
       
	</div>      
        <!-- <div id="ft_catch"><img src="<?php echo G5_IMG_URL; ?>/ft_logo.png" alt="<?php echo G5_VERSION ?>"></div> -->
        <div id="ft_copy" class="text-center py-3">The digital platform for <b>ABIB</b> CO.Manual for Freedom, Research and Creativity
    </div>
        
    <button type="button" id="top_btn">
    	<i class="bi bi-arrow-up" aria-hidden="true"></i><span class="sound_only">상단으로</span>
    </button>
    <script>
    $(function() {
        $("#top_btn").on("click", function() {
            $("html, body").animate({scrollTop:0}, '500');
            return false;
        });
    });
    </script>
</div>

<?php
if(G5_DEVICE_BUTTON_DISPLAY && !G5_IS_MOBILE) { ?>
<?php
}

if ($config['cf_analytics']) {
    echo $config['cf_analytics'];
}
?>

<!-- } 하단 끝 -->

<script>
$(function() {
    // 폰트 리사이즈 쿠키있으면 실행
    font_resize("container", get_cookie("ck_font_resize_rmv_class"), get_cookie("ck_font_resize_add_class"));
});
</script>

<?php
include_once(G5_THEME_PATH."/tail.sub.php");