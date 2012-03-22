
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
<div class="wrapper row3">
  <div id="featured_slide">
    <!-- ####################################################################################################### -->
    <?php print render ($page['content']); ?>
  </div>
  <!-- ####################################################################################################### -->
</div>
</div>

