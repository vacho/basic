<?php

?>
<div id="page-wrapper">
  <div id="header">
    <?php 
    if($logo){
      ?>
      <a href="<?php check_url($front_page) ?>" ><img src="<?php print $logo;?>"></a>
      <?php
    }
    ?>
    <?php
    if($page["top-menu"]){
    ?>
    <div id="top-menu">
      <?php print render($page["top_menu"]); ?>
    </div>
    <?php
    }
    if($page["banner"]){
    ?>
    <div id="banner">
      <?php print render($page["banner"]); ?>
    </div>
    <?php
    }
    ?>
  </div>
  <?php
  if($page["sidebar_first"]){
  ?>
    <div id="sidebar_first">
      <?php print render($page["sidebar_first"]); ?>
    </div>
    <?php
  }
?>

</div>
