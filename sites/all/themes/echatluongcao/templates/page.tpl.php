

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

<!-- ####################################################################################################### -->
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
<!-- ####################################################################################################### -->
<div class="wrapper row4">
  <div id="container" class="clear">
    <!-- ####################################################################################################### -->
    <div id="homepage" class="clear">
      <div class="fl_left">
        <h2 class="title">Quick Links</h2>
        <div id="hpage_quicklinks">
          <ul class="clear">
            <li><a href="#">Academic departments</a></li>
            <li><a href="#">Alumni</a></li>
            <li><a href="#">Business &amp; Enterprise</a></li>
            <li><a href="#">Departments A-Z</a></li>
            <li><a href="#">Events</a></li>
            <li><a href="#">Graduate Courses</a></li>
            <li><a href="#">International Students</a></li>
            <li><a href="#">Job opportunities</a></li>
            <li><a href="#">Lifelong Learning</a></li>
            <li><a href="#">Maps and Directions</a></li>
            <li><a href="#">Online Courses</a></li>
            <li><a href="#">Parents</a></li>
            <li><a href="#">Postgraduate research</a></li>
            <li><a href="#">Postgraduate taught</a></li>
            <li><a href="#">Prospective Students</a></li>
            <li><a href="#">Research</a></li>
            <li><a href="#">Students</a></li>
            <li><a href="#">Teaching &amp; Learning</a></li>
            <li><a href="#">Undergraduate Courses</a></li>
            <li><a href="#">Videos</a></li>
            <li><a href="#">Visiting the University</a></li>
            <li><a href="#">What's On</a></li>
          </ul>
        </div>
        <h2 class="title">Latest Gallery Images</h2>
        <div id="hpage_gallery">
          <ul class="clear">
            <li><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li class="last"><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
            <li class="last"><a href="#"><img src="images/demo/175x130.gif" alt="" /></a></li>
          </ul>
        </div>
        <h2 class="title">Keep Up With What's Happening</h2>
        <div id="hpage_socialize">
          <ul>
            <li><span>Facebook:</span> <a href="#">www.facebook.com/myhandel</a></li>
            <li><span>Twitter:</span> <a href="#">www.twitter.com/myhandel</a></li>
            <li class="last"><span>LinkedIn:</span> <a href="#">www.linkedin.com/myhandel</a></li>
          </ul>
          <p><strong>Subscribe To Our Newsletter</strong></p>
          <p>Justoid nonummy laoreet phasellent penatoque in antesque pellus elis eget tincidunt. Nequatdui laorem justo a non tellus laoreet tincidunt ut vel velit.</p>
          <form action="#" method="post">
            <fieldset>
              <legend>Newsletter Signup:</legend>
              <input type="text" id="newsletter" value="Enter Email Here&hellip;" onfocus="this.value=(this.value=='Enter Email Here&hellip;')? '' : this.value ;" />
              <input type="image" id="subscribe" src="images/sign-up.gif" alt="Submit" />
            </fieldset>
          </form>
          <p class="form_hint">* Please add name@domain.com to your trusted email list</p>
        </div>
      </div>
      <!-- ############### -->
      <div class="fl_right">
        <h2 class="title">Latest News</h2>
        <div id="hpage_latestnews">
          <ul>
            <li>
              <div class="imgl"><img src="images/demo/160x80.gif" alt="" /></div>
              <p class="latestnews">This is a W3C compliant free website template from <a href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a>. This template is distributed using a <a href="http://www.os-templates.com/template-terms">Website Template Licence</a>.</p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
            <li>
              <div class="imgl"><img src="images/demo/160x80.gif" alt="" /></div>
              <p class="latestnews">You can use and modify the template for both personal and commercial use. You must keep all copyright information and credit links in the template and associated files. For more CSS templates visit <a href="http://www.os-templates.com/">Free Website Templates</a>.</p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
            <li class="last">
              <div class="imgl"><img src="images/demo/160x80.gif" alt="" /></div>
              <p class="latestnews">Attincidunt vel nam a maurisus lacinia consectetus magnisl sed ac morbi. Inmaurisus habitur pretium eu et ac vest penatibus id lacus parturpis. Maecenaset adipiscinia tellentum nullam velit et a convallis curabitae vitae laoreet niseros ligula sem sed susp en at.</p>
              <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
            </li>
          </ul>
        </div>
        <div id="hpage_specials" class="clear">
          <ul>
            <li>
              <h2 class="title">Virtual Tour</h2>
              <div class="box">
                <div class="imgholder"><img src="images/demo/160x160.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis molesuada amet. Tricessem faucibulum sit sed eleifendisse accumsan justo in tor vel purus.</p>
                <p class="readmore"><a href="#">Take The Tour &raquo;</a></p>
              </div>
            </li>
            <li>
              <h2 class="title">Sporting Activities</h2>
              <div class="box">
                <p><strong>Jan 01:</strong> <a href="#">Rugby</a></p>
                <div class="imgholder"><img src="images/demo/160x80.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget.</p>
              </div>
              <div class="box">
                <p><strong>Jan 06:</strong> <a href="#">Volleyball</a></p>
                <div class="imgholder"><img src="images/demo/160x80.gif" alt="" /></div>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget.</p>
              </div>
            </li>
            <li class="last">
              <h2 class="title">Upcoming Events</h2>
              <div class="box">
                <p><a href="#">Magna phasellus</a></p>
                <p>Monday 21st January</p>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant curabiturpis.</p>
              </div>
              <div class="box">
                <p><a href="#">Sentumquisque morbi dui congue tincidunt eu quis</a></p>
                <p>Monday 21st January</p>
                <p>Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phasellus sagittitor ant.</p>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <!-- ####################################################################################################### -->
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper row5">
  <div id="footer" class="clear">
    <!-- ####################################################################################################### -->
    <div class="foot_contact">
      <h2>University Name Here</h2>
      <address>
      Address Line 1<br />
      Address Line 2<br />
      Town/City<br />
      Postcode/Zip
      </address>
      <ul>
        <li><strong>Tel:</strong> xxxxx xxxxxxxxxx</li>
        <li><strong>Fax:</strong> xxxxx xxxxxxxxxx</li>
        <li class="last"><strong>Email:</strong> <a href="#">contact@mydomain.com</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Administration</h2>
      <ul>
        <li><a href="#">Disclaimer</a></li>
        <li><a href="#">Accessibility</a></li>
        <li><a href="#">Freedom of Information</a></li>
        <li><a href="#">Website Privacy</a></li>
        <li><a href="#">Press Release Information</a></li>
        <li><a href="#">Annual Report</a></li>
        <li><a href="#">Financial Statements</a></li>
        <li><a href="#">Job Vacancies</a></li>
        <li class="last"><a href="#">Semester Dates</a></li>
      </ul>
    </div>
    <div class="footbox">
      <h2>Link Block 2</h2>
      <ul>
        <li><a href="#">Schools and Colleges</a></li>
        <li><a href="#">Student Activities</a></li>
        <li><a href="#">Student Affairs</a></li>
        <li><a href="#">Student Development</a></li>
        <li><a href="#">Student Financial Services</a></li>
        <li><a href="#">Student Group Directory</a></li>
        <li><a href="#">Student Life</a></li>
        <li><a href="#">International Students</a></li>
        <li class="last"><a href="#">Global Learning</a></li>
      </ul>
    </div>
    <div class="footbox last">
      <h2>Link Block 3</h2>
      <ul>
        <li><a href="#">Academic Advisory</a></li>
        <li><a href="#">Academic Assistance</a></li>
        <li><a href="#">Academic Calendars</a></li>
        <li><a href="#">Academics Office</a></li>
        <li><a href="#">Administration</a></li>
        <li><a href="#">Adult Learners</a></li>
        <li><a href="#">Alumni Chapters</a></li>
        <li><a href="#">Alumni Events</a></li>
        <li class="last"><a href="#">Residential Colleges</a></li>
      </ul>
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
<script type="text/javascript">$('.slidedeck').slidedeck();</script>
</body>
</html>