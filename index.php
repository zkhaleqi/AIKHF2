<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fa_AF">
<!--<![endif]-->

<head>
<title>AIKHF | صفحه نخست</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-language" content="fa_AF">
<meta name="developer" content="http://www.codenavis.com/">
<meta http-equiv="pics-label" content="http://www.wahdatdaily.com/images/nahoor-voice.png">
<meta name="publisher" content="http://www.nahoorvoice.com/">
<meta name="keywords" content="ناهور وایس، اخبار ناهور، ولسوالی ناهور، ولایت غزنی، ولسوالی ناهور افغانستان، ولسوالی ناور، ناور، اخبار ولسوالی ناهور، اخبار ولسوالی ناور، اخبار تازه، اخبار تازه افغانستان، اخبار داغ افغانستان و منطقه، مقالات اقتصادی، مقالات و اخبار فرهنگی، اخبار علمی، اخبار پژوهشی، اخبار ناور، nahoorvoice, صدای ناهور، nahoor voice, nohoorvoice afghanistan, nahoor voice ghazni">
<meta name="news_keywords" content="nahoor voice, ناهور وایس ، اخبار اجتماعی، اقتصادی، سیاسی، اخبار افغانستان و جهان">
<meta name="title" content="nahoor voice | ناهور وایس">
<meta name="description" content="سایت خبری: اجتماعی، اقتصادی، سیاسی مردم افغانستان، ناهور وایس با پوشش گسترده ویب سایت خبری مردم افغانستان به خصوص ولسوالی ناهور">
<meta name="author" content="nahoor voice">
<!--OGM-->
<meta property="og:title" content="ناهور وایس" />
<meta property="og:site_name" content="ناهور وایس"/>
<meta property="og:url" content="http://www.nahoorvoice.com/" />
<meta property="og:description" content="سایت خبری: اجتماعی، اقتصادی، تحلیلی، سیاسی مردم افغانستان، روزنامه وحدت با پوشش گسترده ویب سایت خبری مردم افغانستان"/>
<meta property="og:type" content="Website" />
<meta property="og:locale" content="fa_AF" />  
<meta property="article:author" content="nahoor voice" />
<meta property="article:publisher" content="https://www.facebook.com/nahoorvoice/"/>
<meta property="og:image" content="http://www.nahoorvoice.com/images/nahoor-voice.png">

 
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/960.css">
<link rel="stylesheet" href="css/style.css"> 
<link href="css/font-awesome.min.css" rel="stylesheet">
<link rel="icon" type="image/png" href="favicon.ico"/>
<script src="js/respond.min.js"></script>
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=605724716153097&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<header id="header-place"><!--Start full width header-->
<div class="container_12 header"> <!--Start Head Container-->
    <!--Header-->
    <?php include 'include/header.php'; ?>
    <!--Header-->
    <nav id="nav-bar"><!--Navigation Bar-->
        <ul>
          <li class=" selected first-page"><a href="index.php">صفحه نخست</a></li>
          <li><a href="reports.php">خبرها</a></li>
          <li><a href="members.php">اعضا</a></li>
          <li><a href ='gallery.php?'>عکس</a></li>
          <li><a href ='video.php'>ویدیو</a></li>
          <li><a href="about.php">در باره ما</a></li>
          <li style="width:68px"><a href="contact.php">ارتباط با ما</a></li>
        </ul>
    </nav><!--End Navigation Bar-->
</div><!--End head container-->
</header><!--End full width header-->

<!--/////////////////////////////////-BODY-///////////////////////////////////-->
<div id="container" class="container_12"><!--Start main container-->
  <section id="main">
    <div class="grid_3" id="side-bar"><!--Sidebar-->
      <?php include 'include/side-bar.php';	?>
    </div> <!--End Side Bar-->
    
    
    
    <div id="featured_slide" class="grid_9"><!--Start Featured Slider-->
      <ul id="featurednews"> 
	  <?php  
          include 'dbcon.php';
          error_reporting(0);
          $sql = "SELECT * FROM fslide ORDER BY id DESC LIMIT 0,10"; 
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?>
        <?php $album = $row['album'] ?>
        <li><img src="images/gallery/<?php echo $row['picture'];?>" onerror="this.style.display='none'"/>
          <div class="panel-overlay">
            <h2><?php echo $row['imgdetails']; ?></h2>
          </div>
        
        <?php } ?>
        </li>
      </ul>
    </div><!--End Featured Slider-->
      
      
      
    <div class="menumini"><!--Start Archives-->
      <h3><a href="archive.php">آرشیف</a></h3>
      <ul>
       <?php  
	   // Using Persian Calender here
        $timezone = 0;//برای 3:30 عدد 12600 و برای 4:30 عدد 16200 را تنظیم کنید
		$now = date("y-m-d", time()+$timezone);
		$time = date("H:i:s", time()+$timezone);
		list($year, $month, $day) = explode('-', $now);
		list($hour, $minute, $second) = explode(':', $time);
		$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
		include 'admin/jdf.php';
		// Using Persian Calender here
        include 'dbcon.php';
		$year = jdate("Y",$timestamp);
        error_reporting(0);
        $sql = "SELECT * FROM farticles WHERE category !='Others' AND year='$year' AND status='show' GROUP BY month ORDER BY id DESC"; 
	/*  $sql = "SELECT * FROM fslide ORDER BY id DESC";   */
        $rs_result = mysql_query ($sql, $con); 
        while ($row = mysql_fetch_assoc($rs_result)) { 
	    ?>
		<?php $month = $row['month'] ?>
        <?php $year = $row['year'] ?>
        <?php $id = $row['id'] ?>
        <li><?php echo"<a href ='archive.php?month=$month && year=$year' target='_blank'>";?><?php echo $row['month'];?><?php echo '</a>';?></li>
        <?php }; ?>
      </ul>
      <h3><!--آرشیف نمایش مطالب بر اساس سال--></h3>
      <ul>
      <?php
		$year = jdate("Y",$timestamp);  
		include 'dbcon.php';
		error_reporting(0);
		$sql = "SELECT * FROM farticles WHERE category !='Others' AND year!='$year' AND status='show' GROUP BY year ORDER BY id DESC";
		$rs_result = mysql_query ($sql, $con); 
		while ($row = mysql_fetch_assoc($rs_result)) { 
		?>
        <?php $year = $row['year'] ?>
        <?php $id = $row['id'] ?>
        <li><?php echo"<a href ='annuals.php?year=$year' target='_blank'>";?><?php echo $row['year'];?><?php echo '</a>';?></li>
        <?php }; ?>
      </ul>
      <h3 id="admin" class="non"><a href="admin/admin.php" target="_blank">مدیریت</a></h3>
    </div><!--End Archives-->
    
    <div class="seperator"></div><!--Seperator-->
    
    
    
    <!--Start Sub-featured-->
    <?php  
		include 'dbcon.php';
		error_reporting(0);
		$sql = "SELECT * FROM farticles WHERE category='Events' AND status='show' OR subcategory='Events' AND status='show' ORDER BY id DESC LIMIT 0,3";
		$rs_result = mysql_query ($sql, $con); 
		while ($row = mysql_fetch_assoc($rs_result)) { 
		?>
		<?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
    <div class="grid_3 sub-featured">
      <img src="kcfinder/files/images/<?php echo $row['thumb'];?>" width="220" height="124" alt=""/>
      <div id="overlay">
      <p><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?>
	  <?php echo $row['title'];?>...
	  <?php echo '</a>';?></p>
      </div>
    </div>
    <?php }; ?>
    
    <!--End Sub-featured-->   
    <div class="grid_3" id="articles"><!--Fateha Ha-->
      <h4>فاتحه ها</h4>
      <?php
          include 'dbcon.php';
          error_reporting(0);
           $sql = "SELECT * FROM farticles WHERE category='fateha' AND status='show' OR subcategory='fateha' AND status='show' ORDER BY id DESC LIMIT 0,3";
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?>
        <?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
      <dl>
        <dt class="first"><img src="kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>" width="200" height="112" alt=""/></dt>
        <dd>
          <h6><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?></h6>
          <p>
		  <?php
              $s = $row['headline'];
              $max_length = 250;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
          echo $s; ?>
		  <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'><span>ادامه مطلب &raquo;</span></a>";?>
          </p>
        </dd>
      </dl>
      <?php }; ?>
    </div><!--End Fateha Ha-->
    
    <div class="grid_3" id="recent-news"><!--Ceremonies-->
      <h4>مراسم</h4>
      <?php
          include 'dbcon.php';
          error_reporting(0);
          $sql = "SELECT * FROM farticles WHERE category='ceremonies' AND status='show' OR subcategory='ceremonies' AND status='show' ORDER BY id DESC LIMIT 0,1";
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?>
        <?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
      <dl>
        <dt class="first"><img src="kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>" width="100" height="100" alt=""/></dt>
        <dd>
          <h6><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?></h6>
          <p>
           <?php
              $s = $row['headline'];
              $max_length = 300;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
          echo $s; ?>
		  <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'><span>ادامه مطلب &raquo;</span></a>";?>
          </p>
          <p id="metadata">
          
          <span class="meta-data"><?php echo $row['fdate'];?> | <?php echo $row['author'];?></span>
          </p>
        </dd>
      </dl>
      <?php }; ?>
    </div><!--End Ceremonies-->
    
     <div class="grid_3" id="recent-news"><!--Meetings-->
      <h4>جلسات</h4>
      <?php
          include 'dbcon.php';
          error_reporting(0);
          $sql = "SELECT * FROM farticles WHERE category='meetings' AND status='show' OR subcategory='meetings' AND status='show' ORDER BY id DESC LIMIT 0,3";
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?>
        <?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
      <dl>
        <dt class="first"><img src="kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>" width="100" height="100" alt=""/></dt>
        <dd>
          <h6><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?></h6>
          <p>
           <?php
              $s = $row['headline'];
              $max_length = 300;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
          echo $s; ?>
		  <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'><span>ادامه مطلب &raquo;</span></a>";?>
          </p>
          <p id="metadata">
          
          <span class="meta-data"><?php echo $row['fdate'];?> | <?php echo $row['author'];?></span>
          </p>
        </dd>
      </dl>
      <?php }; ?>
    </div><!--End Meetings-->
    
    
   
    
    <article class="grid_9" id="sub-articles"><!--Start sub articles-->
    <?php
		include 'dbcon.php';
		error_reporting(0);
		$sql = "SELECT * FROM farticles WHERE category='A-news' AND status='show' OR subcategory='A-news' AND status='show' ORDER BY id DESC LIMIT 0,1";
		$rs_result = mysql_query ($sql, $con); 
		while ($row = mysql_fetch_assoc($rs_result)) { 
		?>
	    <?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
      <div class="sub-articles">
        <h5>افغانستان</h5>
        <span class="meta-data"><?php echo $row['fdate'];?></span>
        <img src="kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>" width="160" alt=""/>
        <h6><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?></h6>
        <p>
		<?php
              $s = $row['headline'];
              $max_length = 500;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
          echo $s; ?>
        <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'><span>ادامه مطلب &raquo;</span></a>";?>
        </p>
      </div>
      <?php }; ?>
      
      <?php
		include 'dbcon.php';
		error_reporting(0);
		$sql = "SELECT * FROM farticles WHERE category='W-news' AND status='show' OR subcategory='W-news' AND status='show' ORDER BY id DESC LIMIT 0,1";
		$rs_result = mysql_query ($sql, $con); 
		while ($row = mysql_fetch_assoc($rs_result)) { 
		?>
	    <?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
      <div class="sub-articles">
        <h5>جهان</h5>
        <span class="meta-data"><?php echo $row['fdate'];?></span>
        <img src="kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>" width="160" alt=""/>
        <h6><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?></h6>
        <p>
		<?php
              $s = $row['headline'];
              $max_length = 500;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
          echo $s; ?>
          <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'><span>ادامه مطلب &raquo;</span></a>";?>
        </p>
      </div>
      <?php }; ?>
    </article><!--End sub articles-->
    
    <!-- ////////////////------Articles Up on Show Hide Content----------///////////////-->
   
    <article class="grid_9 non" id="sub-articles"><!--Start sub articles-2-->
      <div class="sub-articles">
        <h5>در چنین رو	زی</h5>
        <div class="sub-articles-content right">
        <h5 class="right">مهمترین رویدادهای تاریخ جهان در این روز:</h5>
        <h6><span> امروز <?php echo $jalali_date = jdate("l d p Y",$timestamp);?> برابر  با  </span><span id="eng-date"><?php echo $datetime=date("M d, Y"); //date time ?></span> </h6>
          <script language="javascript" type="text/javascript">
		  function showHide(shID) {
			 if (document.getElementById(shID)) {
				if (document.getElementById(shID+'-show').style.display != 'none') {
				   document.getElementById(shID+'-show').style.display = 'none';
				   document.getElementById(shID).style.display = 'block';
				}
				else {
				   document.getElementById(shID+'-show').style.display = 'inline';
				   document.getElementById(shID).style.display = 'none';
				}
			 }
		  }
		  </script>
		 <?php
          include 'dbcon.php';
          error_reporting(0);
          $sql = "SELECT * FROM farticles WHERE subcategory='wi-this-day' AND date='$datetime' AND status='show' ORDER BY id DESC LIMIT 0,1";
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?>
         <ul>
           <li>
           <h6><?php echo $row['title'];?></h6>
           <p><?php
              $s = $row['headline'];
              $max_length = 160;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
			  echo $s; ?> 
            <a href="#" id="example-show" class="showLink" onclick="showHide('example');return false;">نمایش بیشتر</a></p>
            <div id="example" class="more">
              <p><?php echo '&raquo;' . $row['content'];?></p>
              <p><a href="#" id="example-hide" class="hideLink" onclick="showHide('example');return false;">نمایش کمتر</a></p>
            </div>
          </li>
        </ul>
       <?php }; ?>
	   <?php
          include 'dbcon.php';
          error_reporting(0);
          $sql = "SELECT * FROM farticles WHERE subcategory='wi-this-day' AND date='$datetime' AND status='show' ORDER BY id DESC LIMIT 1,1";
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?>
         <ul>
           <li>
           <h6><?php echo $row['title'];?></h6>
           <p><?php
              $s = $row['headline'];
              $max_length = 160;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
			  echo $s; ?> 
            <a href="#" id="example-2-show" class="showLink" onclick="showHide('example-2');return false;">نمایش بیشتر</a></p>
            <div id="example-2" class="more">
              <p><?php echo '&raquo;' . $row['content'];?></p>
              <p><a href="#" id="example-2-hide" class="hideLink" onclick="showHide('example-2');return false;">نمایش کمتر</a></p>
            </div>
          </li>
        </ul>
       <?php }; ?>
	   <?php
          include 'dbcon.php';
          error_reporting(0);
          $sql = "SELECT * FROM farticles WHERE subcategory='wi-this-day' AND date='$datetime' AND status='show' ORDER BY id DESC LIMIT 2,1";
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?>
         <ul>
           <li>
           <h6><?php echo $row['title'];?></h6>
           <p><?php
              $s = $row['headline'];
              $max_length = 160;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
			  echo $s; ?> 
            <a href="#" id="example-3-show" class="showLink" onclick="showHide('example-3');return false;">نمایش بیشتر</a></p>
            <div id="example-3" class="more">
              <p><?php echo '&raquo;' . $row['content'];?></p>
              <p><a href="#" id="example-3-hide" class="hideLink" onclick="showHide('example-3');return false;">نمایش کمتر</a></p>
            </div>
          </li>
        </ul>
       <?php }; ?>
       <?php
          include 'dbcon.php';
          error_reporting(0);
          $sql = "SELECT * FROM farticles WHERE subcategory='wi-this-day' AND date='$datetime' AND status='show' ORDER BY id DESC LIMIT 3,1";
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?>
         <ul>
           <li>
           <h6><?php echo $row['title'];?></h6>
           <p><?php
              $s = $row['headline'];
              $max_length = 160;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
			  echo $s; ?> 
            <a href="#" id="example-4-show" class="showLink" onclick="showHide('example-4');return false;">نمایش بیشتر</a></p>
            <div id="example-4" class="more">
              <p><?php echo '&raquo;' . $row['content'];?></p>
              <p><a href="#" id="example-4-hide" class="hideLink" onclick="showHide('example-4');return false;">نمایش کمتر</a></p>
            </div>
          </li>
        </ul>
       <?php }; ?>
       <?php
          include 'dbcon.php';
          error_reporting(0);
          $sql = "SELECT * FROM farticles WHERE subcategory='wi-this-day' AND date='$datetime' AND status='show' ORDER BY id DESC LIMIT 4,1";
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?>
         <ul>
           <li>
           <h6><?php echo $row['title'];?></h6>
           <p><?php
              $s = $row['headline'];
              $max_length = 160;
              if (strlen($s) > $max_length){
              $offset = ($max_length - 3) - strlen($s);
              $s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
			  echo $s; ?> 
            <a href="#" id="example-4-show" class="showLink" onclick="showHide('example-4');return false;">نمایش بیشتر</a></p>
            <div id="example-4" class="more">
              <p><?php echo '&raquo;' . $row['content'];?></p>
              <p><a href="#" id="example-4-hide" class="hideLink" onclick="showHide('example-4');return false">نمایش کمتر</a></p>
            </div>
          </li>
        </ul>
       <?php }; ?>
       </div>
      </div>
      
      <!-- ////////////////------End Articles Up on Show Hide Content----------///////////////-->
      
     
      <?php
		include 'dbcon.php';
		error_reporting(0);
		$sql = "SELECT * FROM farticles WHERE subcategory='Historic' AND status='show' ORDER BY id DESC LIMIT 0,1";
		$rs_result = mysql_query ($sql, $con); 
		while ($row = mysql_fetch_assoc($rs_result)) { 
		?>
	    <?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
      <div class="sub-articles">
        <h5>تاریخ نگار</h5>
        <span class="meta-data"><?php echo $row['fdate'];?></span>
        <img src="kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>" width="100" height="100" alt=""/>
        <h6><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?></h6>
        <p>
        <?php
			$s = $row['headline'];
			$max_length = 1000;
			if (strlen($s) > $max_length){
			$offset = ($max_length - 3) - strlen($s);
			$s = substr($s, 0, strrpos($s, ' ', $offset)) . '...';}
          echo $s; ?>
          <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'><span>ادامه مطلب &raquo;</span></a>";?>
        </p>
      </div>
      <?php }; ?>
    </article><!--End sub articles-2-->
  </section><!--End main Section-->
</div><!--End main container-->
<!--/////////////////////////////////-FOOTER-///////////////////////////////////-->
<footer id="footer"><!--Start footer-->
  <?php include 'include/footer.php'; ?>
</footer><!--End footer-->
</body>
</html>
