<?php
if (!defined('_INDEX_')) define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

include_once(G5_THEME_PATH.'/head.php');
?>



<?php 

	echo latest('mainswiper','adm_mainbanner',4, 100); 
	?>


<?php

    // include_once(G5_THEME_PATH.'/tail.php');