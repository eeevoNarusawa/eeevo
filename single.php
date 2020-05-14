<?php
  if (in_category('jp')) {  //カテゴリ名だと反映されない？　IDだと反映確認済み
      include(TEMPLATEPATH.'/single-jp.php');
  } else {
      include(TEMPLATEPATH.'/single-en.php');
  }
?>
