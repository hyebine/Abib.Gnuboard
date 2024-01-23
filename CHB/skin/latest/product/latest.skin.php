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
   <h3>
   <?php echo $bo_content ?>
   </h3>

    <ul class="product container d-md-flex p-0">
    <?php
    for ($i=0; $i<$list_count; $i++) {
    $thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

    if($thumb['src']) {
        $img = $thumb['ori'];
    } else {
        $img = G5_IMG_URL.'/no_img.png';
        $thumb['alt'] = '이미지가 없습니다.';
    }
    $img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
    $wr_href = get_pretty_url($bo_table, $list[$i]['wr_id']);
    ?>

        <li class="product_li align-items-center justify-content-between text-center mr-4">
  
        <?php
           echo "<a href=\"".$wr_href."\" class='h-100 d-block' style='background-image:url(".$img.")'> ";     
            echo "</a>";

            echo "<p class='mb-0'>".$list[$i]['wr_subject']."</p>";
            echo "<span>".$list[$i]['wr_content']."</span>";
           ?>
 
        </li>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
        <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>


</div>
