<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가


$list_count = (is_array($list) && $list) ? count($list) : 0;
?>

<div class="adtop bg-dark">

    <ul class="m-0 p-0">
    <?php for ($i=0; $i<$list_count; $i++) {  ?>
        <li class="text-center py-1">
            <?php
          

            echo "<a href=\"".get_pretty_url($bo_table, $list[$i]['wr_id'])."\" class='text-white'> ";
           
                echo $list[$i]['subject'];

            echo "</a>";
           
            ?>
           
        </li>
    <?php }  ?>
    <?php if ($list_count == 0) { //게시물이 없을 때  ?>
    <li class="empty_li">게시물이 없습니다.</li>
    <?php }  ?>
    </ul>
</div>
