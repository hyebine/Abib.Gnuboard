<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');


$thumb_width = 210;
$thumb_height = 150;
$list_count = (is_array($list) && $list) ? count($list) : 0;
?>



<div class="instagram container d-flex justify-content-between align-items-center">

    <div class="d-flex">
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
    <div class="pic col-8 d-flex align-items-center">
        <div>
          <img src="<?php echo G5_URL ?>/bin/img/IMG0.jpg" alt="<?php echo $config['cf_title']; ?>" class="d-block m-2">
          <img src="<?php echo G5_URL ?>/bin/img/IMG1.jpg" alt="<?php echo $config['cf_title']; ?>" class="d-block m-2">
        </div>

        <div>
          <img src="<?php echo G5_URL ?>/bin/img/IMG2.jpg" alt="<?php echo $config['cf_title']; ?>" >
        </div>
    </div>
         <div class="col-4 d-flex justify-content-center flex-column ml-5">
            <div class="content">
                <?php
                   echo $list[$i]['wr_subject'];
                   echo $list[$i]['wr_content'];
                  ?>

                <a href="<?php echo $list[$i]['wr_link1']; ?>">VISIT INSTAGRAM</a>
            </div>
     
            </div>

    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>

    <?php }  ?>
    </div>
 
</div>
