<?php die;?>
<body id="top">
<div class="wrapper row1">
  <div id="header" class="clear">
    <div class="fl_left">
    <?php if ($logo || $site_name): ?> 
      <h1><a href="index.html"><?php print $site_name; ?></a></h1>
    <?php endif; ?>
    <?php if ($site_slogan): ?> 
      <p><?php print $site_slogan; ?></p>
    <?php endif; ?>
    </div> 
    <?php print render($page['header']); ?>   
    </div>         
  </div>  
</div>
<div>
<div class="wrapper row2">
  <div id="topnav">   
    <?php print render($page['topnav']);?>      
    <div  class="clear"></div>     
</div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
  <div id="content"> 
    <?php print render ($page['content']); ?>
  </div>
  <!-- ####################################################################################################### -->
  <div id="column">
    <div class="subnav">
    <?php print render ($page['sidebar_second']); ?>
     </div>
  </div>
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
    <div class="foot_contact">
     
    <div class="footbox last">
    
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper">
  <div id="copyright" class="clear">
    <p class="fl_left">Copyright &copy; 2011 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <p class="fl_right">Template by <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
  </div>
</div>
