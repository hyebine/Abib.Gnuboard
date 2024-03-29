<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');

?>

<!-- 상단 시작 { -->
<div id="hd" class="fixed-top">
    <h1 id="hd_h1"><?php echo $g5['title'] ?></h1>
    <div id="skip_to_container"><a href="#container">본문 바로가기</a></div>

    <?php
    if(defined('_INDEX_')) { // index에서만 실행
       include G5_BBS_PATH.'/newwin.inc.php'; // 팝업레이어
    }
    ?>

    <div id="hd_wrapper" >
    <?php echo latest("ad_basic","adtop", 1, 50); ?>

    <div class="container p-0 d-flex align-items-center justify-content-between">
        <div id="logo">
            <a href="<?php echo G5_URL ?>"><img src="<?php echo G5_URL ?>/bin/img/logo.png" alt="<?php echo $config['cf_title']; ?>"></a>
        </div>
        <nav id="gnb">
            <h2>메인메뉴</h2>
            <div class="gnb_wrap">
            
             <ul id="gnb_1dul" class="d-none d-lg-block">
                   
                    <?php
                    $menu_datas = get_menu_db(0, true);
                    $gnb_zindex = 999; // gnb_1dli z-index 값 설정용
                    $i = 0;
                    foreach( $menu_datas as $row ){
                        if( empty($row) ) continue;
                        $add_class = (isset($row['sub']) && $row['sub']) ? 'gnb_al_li_plus' : '';
                    ?>
                    <li class="gnb_1dli <?php echo $add_class; ?>" style="z-index:<?php echo $gnb_zindex--; ?>">
                        <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_1da"><?php echo $row['me_name'] ?></a>
                        <?php
                        $k = 0;
                        foreach( (array) $row['sub'] as $row2 ){

                            if( empty($row2) ) continue; 

                            if($k == 0)
                                echo '<span class="bg">하위분류</span><div class="gnb_2dul"><ul class="gnb_2dul_box">'.PHP_EOL;
                        ?>
                            <li class="gnb_2dli"><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>" class="gnb_2da"><?php echo $row2['me_name'] ?></a></li>
                        <?php
                        $k++;
                        }   //end foreach $row2

                        if($k > 0)
                            echo '</ul></div>'.PHP_EOL;
                        ?>
                    </li>
                    <?php
                    $i++;
                    }   //end foreach $row

                    if ($i == 0) {  ?>
                        <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                    <?php } ?>
                </ul>
                <div id="gnb_all" class="postion-absolute">
                    <!-- <h2>전체메뉴</h2> -->
                    <ul class="gnb_al_ul">
                        <?php
                        
                        $i = 0;
                        foreach( $menu_datas as $row ){
                        ?>
                        <li class="gnb_al_li">
                            <a href="<?php echo $row['me_link']; ?>" target="_<?php echo $row['me_target']; ?>" class="gnb_al_a"><?php echo $row['me_name'] ?></a>
                            <?php
                            $k = 0;
                            foreach( (array) $row['sub'] as $row2 ){
                                if($k == 0)
                                    echo '<ul class="ul2ul">'.PHP_EOL;
                            ?>
                                <li><a href="<?php echo $row2['me_link']; ?>" target="_<?php echo $row2['me_target']; ?>"><?php echo $row2['me_name'] ?></a></li>
                            <?php
                            $k++;
                            }   //end foreach $row2

                            if($k > 0)
                                echo '</ul>'.PHP_EOL;
                            ?>
                        </li>
                        <?php
                        $i++;
                        }   //end foreach $row

                        if ($i == 0) {  ?>
                            <li class="gnb_empty">메뉴 준비 중입니다.<?php if ($is_admin) { ?> <br><a href="<?php echo G5_ADMIN_URL; ?>/menu_list.php">관리자모드 &gt; 환경설정 &gt; 메뉴설정</a>에서 설정하실 수 있습니다.<?php } ?></li>
                        <?php } ?>
                    </ul>

                    <button type="button" class="gnb_close_btn d-none"><i class="bi bi-x-lg" aria-hidden="true"></i></button>

                </div>


                <div id="gnb_all_bg"></div>
            </div>
        </nav>
        <ul class="hd_login d-flex mb-0 ml-auto ml-lg-0">        
            <?php if ($is_member) {  ?>
                <li class="d-none d-lg-block"><a href="<?php echo G5_BBS_URL ?>/member_confirm.php?url=<?php echo G5_BBS_URL ?>/register_form.php">MODIFY</a></li>
                <li >
                  <a href="<?php echo G5_BBS_URL ?>/logout.php">
                     <i class="bi bi-person-fill d-block d-lg-none"></i>
                    <span class="d-none d-lg-block">LOGOUT</span>
                </a>
                </li>
                <?php if ($is_admin) {  ?>
                    <li class="tnb_admin d-none"><a href="<?php echo correct_goto_url(G5_ADMIN_URL); ?>">관리자</a></li>
                <?php }  ?>
            <?php } else {  ?>
                <li class="d-none d-lg-block" ><a href="<?php echo G5_BBS_URL ?>/register.php">JOIN</a></li>
                <li >
                  <a href="<?php echo G5_BBS_URL ?>/login.php">
                     <i class="bi bi-person d-block d-lg-none"></i>
                     <span class="d-none d-lg-block">LOGIN</span></a>
              </li>
            <?php }  ?>

            <!-- 만듦 -->
      
     
            <li ><a href="#hd_sch"><i class="bi bi-search d-block d-lg-none"></i><span class="d-none d-lg-block">SEARCH<span></a></li>
   

        </ul>
        <button type="button" class="gnb_menu_btn d-lg-none border-0 pl-3" title="전체메뉴">
                <i class="bi bi-list" aria-hidden="true"></i>
                <span class="sound_only">전체메뉴열기</span></button>

    </div>

        

        <div class="hd_sch_wr position-absolute ">
            <fieldset id="hd_sch" class="d-none">
                <legend>사이트 내 전체검색</legend>
                <form name="fsearchbox" method="get" action="<?php echo G5_BBS_URL ?>/search.php" onsubmit="return fsearchbox_submit(this);">
                <input type="hidden" name="sfl" value="wr_subject||wr_content">
                <input type="hidden" name="sop" value="and">
                <label for="sch_stx" class="sound_only">검색어 필수</label>
                <input type="text" name="stx" id="sch_stx" maxlength="20" placeholder="검색어를 입력해주세요">
                <button type="submit" id="sch_submit" value="검색"><i class="fa fa-search" aria-hidden="true"></i><span class="sound_only">검색</span></button>
                </form>

                <script>
                function fsearchbox_submit(f)
                {
                    var stx = f.stx.value.trim();
                    if (stx.length < 2) {
                        alert("검색어는 두글자 이상 입력하십시오.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }

                    // 검색에 많은 부하가 걸리는 경우 이 주석을 제거하세요.
                    var cnt = 0;
                    for (var i = 0; i < stx.length; i++) {
                        if (stx.charAt(i) == ' ')
                            cnt++;
                    }

                    if (cnt > 1) {
                        alert("빠른 검색을 위하여 검색어에 공백은 한개만 입력할 수 있습니다.");
                        f.stx.select();
                        f.stx.focus();
                        return false;
                    }
                    f.stx.value = stx;

                    return true;
                }
                </script>

            </fieldset>
                
            
        </div>
        
    </div>
    

    <script>
    
    $(function(){


        $(".gnb_menu_btn").click(function(){
            $("#gnb_all, #gnb_all_bg").toggle();
            $("body").toggleClass("viewmenu");
         
        });
        $(".gnb_close_btn, #gnb_all_bg").click(function(){
            $("#gnb_all, #gnb_all_bg").hide();
     
        });

        //텍스트 hover했을때 색 변경
        $(".gnb_al_li_plus").hover(function(){
            $("#hd").addClass("hover"+$(this).index());
        }, function(){
            $("#hd").removeClass("hover"+$(this).index());
        })

        $(window).scroll(function(){
            if( $(window).scrollTop() > 80 ){
                 $("body").addClass("scroll");
            }else{
                $("body").removeClass("scroll");
            }
        })

        //모바일 2단 메뉴 
        $(".gnb_al_li").click(function(){
            
             $(this).children(".ul2ul").toggleClass("act").parent().siblings().find(".ul2ul").removeClass("act");
        })

 
    });

    

    </script>
</div>
<!-- } 상단 끝 -->


<hr>

<!-- 콘텐츠 시작 { -->
<div id="wrapper">
    <div id="container_wr">
   
    <div id="container" class="container-lg px-3 <?php if (!defined("_INDEX_")) { if($bo_table) echo "boardcontent ".$bo_table; }; if(defined("_LOGIN_")) echo ' loginpage d-flex flex-column justify-content-center align-items-center'; ?> "   >
  
        