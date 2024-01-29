<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');


$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>



<div class="best">
   <h2 class="title text-center">
    <?php echo $bo_subject ?>
   </h2>
   <h3 class="text-center">
   <!-- <?php echo $bo_content ?> -->
   제품이 내포하는 가장 고요한 순수성에 충실한 아비브의 베스트 제품들을 확인해 보세요.
   </h3>

    <ul class="product container d-md-flex px-4 py-0 px-md-0">
        

    <?php

// $result = sql_query($sql);
// while ($row = sql_fetch_array($result)) {
//     $file = G5_DATA_PATH.'/file/게시판 테이블명/'.$row['bf_file']; // 파일 경로 설정
//     $file_url = G5_DATA_URL.'/file/게시판 테이블명/'.$row['bf_file']; // 파일 URL 설정

//     // 이미지 출력
//     echo '<img src="'.$file_url.'" alt="첨부 이미지">';
// }

    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true); // 썸네일

    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']); //링크

    $listwrid=  $list[$i]['wr_id'];
    $sql = "SELECT * FROM {$g5['board_file_table']} WHERE bo_table = '$bo_table' AND wr_id = $listwrid ORDER BY bf_no";



  
?>

        <li class="product_li align-items-center justify-content-lg-between justify-content-center text-center">
  <style>
        <?php
        
$result = sql_query($sql);
$numcount = 0;
$file_url = [];

while ($row = sql_fetch_array($result)) {

    $file = G5_DATA_PATH.'/file/'.$bo_table.'/'.$row['bf_file']; // 파일 경로 설정
    $file_url[$numcount] = G5_DATA_URL.'/file/'.$bo_table.'/'.$row['bf_file'];
    $numcount++;
  

 

}
 ?>
 </style>
           <?php  
            echo "<a href=\"".$wr_href."\" class='d-block bg_cg' style='background-image:url(".$file_url[0].")' data-bgsrc='".$file_url[1]."' data-bgsrcori='".$file_url[0]."' ></a>";
       
            echo "<p class='mb-0 mt-4'>".$list[$i]['wr_subject']."</p>";
            echo "<span>".$list[$i]['wr_content']."</span>";
           ?>
 
        </li>

    <?php }   ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>


</div>
<script>

    // 이미지 hover 했을때 이미지 변경

    $(function(){

        $(".bg_cg").hover(function(){
           
            $(this).css("background-image", "url("+$(this).data('bgsrc')+")")
        }, function(){
            $(this).css("background-image", "url("+$(this).data('bgsrcori')+")")
          
        })

    })

</script>
