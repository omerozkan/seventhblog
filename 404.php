	<?php
header("HTTP/1.0 404 Not Found");
header("Status: 404 Not Found");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Design by TemplateAccess.com
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title><?php _e('Not Found', 'seventhblog') ?> | <?php echo bloginfo('name'); ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link href="<?php echo bloginfo('template_directory')?>/errorstyle.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/404/cufon-yui.js"></script>
<!--<script type="text/javascript" src="js/cufon-libsans-r-b.js"></script>-->
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/404/Blue_Highway_Condensed_400.font.js"></script>
<script type="text/javascript" src="<?php echo bloginfo('template_directory')?>/js/404/script.js"></script>
</head>
<body>
<div class="main">
  <div class="main_resize">
    <div class="logo">
      <h1><a href="<?php bloginfo('url');?>"><?php bloginfo('name') ?> <?php bloginfo('description'); ?></a></h1>
    </div>
    <div class="bigtext">
      <div class="bigtext_bg">
        <h2><big>404</big> <?php _e('Not Found', 'seventhblog') ?>!</h2>
        <div class="ribbon"><img src="<?php echo bloginfo('template_directory')?>/images/error/ribbon.png" width="137" height="137" alt="404 Error" /></div>
      </div>
    </div>
    <div class="moretext">
      <div class="mt_bg">
        <p><strong><?php _e('The page has not found. Please go to home page and try again!', 'seventhblog') ?></strong></p>
      </div>
    </div>
    <div class="menu">
      <ul>
        <li><a href="<?php bloginfo('url');?>"><?php _e('Home Page', 'seventhblog') ?></a></li>
      </ul>
    </div>
  </div>
</div>
<br><br><br><div align="center">Design: (<strong><a href="http://www.dreamtemplate.com" target="_blank">dt</a></strong>)</div>

</body>
</html>
