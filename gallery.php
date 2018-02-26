<!doctype html>
<title>AIKHF | گالری عکس ها</title>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fa_AF">
<!--<![endif]-->
<head>
<title></title>
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-language" content="fa_AF">
<meta name="developer" content="http://www.codenavis.com/">
<meta http-equiv="pics-label" content="http://www.nahoorvoice.com/images/nahoor-voice.png">
<meta name="publisher" content="http://www.nohoorvoice.com/">
<meta name="keywords" content="ناهور وایس، اخبار ناهور، ولسوالی ناهور، ولایت غزنی، ولسوالی ناهور افغانستان، ولسوالی ناور، ناور، اخبار ولسوالی ناهور، اخبار ولسوالی ناور، اخبار تازه، اخبار تازه افغانستان، اخبار داغ افغانستان و منطقه، مقالات اقتصادی، مقالات و اخبار فرهنگی، اخبار علمی، اخبار پژوهشی، اخبار ناور، nahoorvoice, صدای ناهور، nahoor voice, nohoorvoice afghanistan, nahoor voice ghazni">
<meta name="news_keywords" content="nahoor voice, ناهور وایس ، اخبار اجتماعی، اقتصادی، سیاسی، اخبار افغانستان و جهان"
<meta name="title" content="<">
<meta name="description" content=''>
<meta name="author" content="">
<!--OGM-->
<meta property="og:title" content="" />
<meta property="og:site_name" content="ناهور وایس"/>
<meta property="og:url" content="http://www.nahoorvoice.com/" />
<meta property="og:description" content=''/>
<meta property="og:type" content="Website" />
<meta property="og:locale" content="fa_AF" />  
<meta property="article:author" content="" />
<meta property="article:publisher" content="https://www.facebook.com/nahoorvoice/"/>
<meta property="og:image" content="http://www.nahoorvoice.com/images/gallery/">

<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
 
<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/960.css">
<link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/gallery.css"> 
<link href="css/font-awesome.min.css" rel="stylesheet">

<!--<link href="css/main.css" rel="stylesheet" type="text/css">-->
<!--link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"-->
<link rel="icon" type="image/png" href="favicon.ico"/>
<script src="js/respond.min.js"></script>
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="js/galleryview.js"></script>
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
    	<?php
        require_once 'dbcon.php';
        $sql = 'SELECT * FROM fslide ORDER BY id DESC LIMIT 0,1';
        $result = $db->query($sql);
      
        while ($row = $result->fetch()) {
          $album = $row['album']
        ?>
        <ul>
          <li class=" first-page"><a href="index.php">صفحه نخست</a></li>
          <li><a href="reports.php">خبرها</a></li>
          <li><a href="members.php">اعضا</a></li>
          <li class="selected"><a href ='gallery.php'>عکس</li>
          <li><a href ='video.php'>ویدیو</a></li>
          <li><a href="about.php">در باره ما</a></li>
          <li style="width:68px"><a href="contact.php">ارتباط با ما</a></li>
        </ul>
        <?php } ?>
    </nav><!--End Navigation Bar-->
          <?php
		//}
		?>
</div><!--End head container-->
</header><!--End full width header-->


<!--/////////////////////////////////-BODY-///////////////////////////////////-->
<div id="container" class="container_12"><!--Start main container-->

  <!--Advertisment here-->
  <div class="grid_6 non" id="advertize"></div>
  <div class="grid_6 non" id="advertize"></div>
  <!--Advertisment here-->
    
  <section id="main">
    <div class="grid_12" id="gallery-header">
    <h1><?php echo $row['album']; ?> <br> <span class="metadata">به روز شده: <?php echo $row['fdate']; ?> - <i id="eng-date"><?php echo $row['date']; ?></i> | توسط  <?php echo $row['author']; ?></span></h1>
    <p><?php echo $row['details'];?></p>
    <div id="gallery_slide" class="grid_12" align="center"><!--Start Gallery Slider-->
      <ul id="featurednews">
      <?php
          include 'dbcon.php';
		  $album =$_REQUEST['album'];
          error_reporting(0);
          $select = mysql_query("SELECT * FROM fslide WHERE album='$album' ORDER BY id DESC");
         $i = 0;
         while($row = mysql_fetch_array($select))
         {
         $i = $i + 1; 
		 ?>
        <?php $album = $row['album'] ?>
        <li><img src="images/gallery/<?php echo $row['picture'];?>" onerror="this.style.display='none'"/>
          <div class="panel-overlay">
            <h2><?php echo $row['imgdetails']; ?></h2>
          </div>
        </li>
        <?php }; ?>
      </ul>
    </div>
    
    <div class="content">
    <?php 
			include 'dbcon.php';
			error_reporting(0);
			$sql = "SELECT * FROM farticles WHERE category='Others' AND subcategory='Gallery' AND status='show' ";
			$rs_result = mysql_query ($sql, $con); 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
        <?php $id = $row['id'] ?>
      <h1><?php echo $row['title']; ?></h1>
      <h2><?php echo $row['content']; ?></h2>
      <?php }; ?>
      <br><hr class="side_break">
    </div>
    
    <!--Start Sub-galleries-->
    <?php
          include 'dbcon.php';
          error_reporting(0);
          $sql = "SELECT * FROM fslide GROUP BY album HAVING id>=0 ORDER BY id DESC";
          $rs_result = mysql_query ($sql, $con); 
          while ($row = mysql_fetch_assoc($rs_result)) { 
          ?> 
       <?php $album = $row['album'] ?>
       
	<div class="grid_3 sub-gallery" title="<?php echo $row['fdate']; ?>">
       <?php echo"<a href ='gallery.php?album=$album'>";?><img src="images/gallery/thumbs/<?php echo $row['picture'];?>"  onerror="this.style.display='none'"  alt="<?php echo $row['album'];?>" title="<?php echo $row['album'];?>"  width="220" height="124"/><?php echo '</a>';?>
       <div id="overlay">
       <p><?php echo"<a href ='gallery.php?album=$album'>";?><?php echo $row['album'];?> <span>(<?php echo $row['hits'];?> بازدید)</span><?php echo '</a>';?></p>
      </div>
      </div>
     <?php }; ?>
    <!--End Sub-galleries-->
    
  </section><!--End main Section-->
</div><!--End main container-->
<!--/////////////////////////////////-FOOTER-///////////////////////////////////-->
<footer id="footer"><!--Start footer-->
  <?php include 'include/footer.php'; ?>
</footer><!--End footer-->
</body>
</html>