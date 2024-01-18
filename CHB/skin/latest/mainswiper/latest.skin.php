<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');


$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>



<div class="swiper <?php echo $bo_table; ?>">

    <div class="swiper-wrapper">
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

        <div class="swiper-slide">

        <?php
            echo "<a href='".$wr_href."'>";
            echo $img_content; 
            echo "</a>";
           ?>

        </div>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>

    <?php }  ?>
    </div>
  <div class="swiper-button-next"></div>
  <div class="swiper-button-prev"></div>
  <div class="swiper-pagination"></div>


</div>
<script>
const swiper<?php echo $bo_table; ?> = new Swiper('.swiper.<?php echo $bo_table; ?>', {
  loop: true, 
  effect: "fade",
  autoplay: {
        delay: 4000,
        disableOnInteraction: false
      },
  pagination: {
    el: '.swiper.<?php echo $bo_table; ?> .swiper-pagination',
    clickable: true,
  }, 
  navigation: {
    nextEl: '.swiper.<?php echo $bo_table; ?> .swiper-button-next',
    prevEl: '.swiper.<?php echo $bo_table; ?> .swiper-button-prev',
  }
});
</script>