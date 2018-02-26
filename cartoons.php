<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fa_AF">
<!--<![endif]-->
<?php
include 'dbcon.php';
error_reporting(0);
$select = mysql_query("SELECT * FROM farticles WHERE subcategory='Cartoons' LIMIT 0,1"); ?>
<?php $i = 0;  while($row = mysql_fetch_array($select)) { ?>
<?php $title = $row['title'] ?>
<head>
<title><?php echo $row['title'];?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="content-language" content="fa_AF">
<meta name="developer" content="http://www.codenavis.com/">
<meta http-equiv="pics-label" content="http://www.nahoorvoice.com/kcfinder/files/images/<?php echo $row['thumb'];?>">
<meta name="publisher" content="http://www.nahoorvoice.com/">
<meta name="keywords" content="ناهور وایس، اخبار ناهور، ولسوالی ناهور، ولایت غزنی، ولسوالی ناهور افغانستان، ولسوالی ناور، ناور، اخبار ولسوالی ناهور، اخبار ولسوالی ناور، اخبار تازه، اخبار تازه افغانستان، اخبار داغ افغانستان و منطقه، مقالات اقتصادی، مقالات و اخبار فرهنگی، اخبار علمی، اخبار پژوهشی، اخبار ناور، nahoorvoice, صدای ناهور، nahoor voice, nohoorvoice afghanistan, nahoor voice ghazni">
<meta name="news_keywords" content="nahoor voice, ناهور وایس ، اخبار اجتماعی، اقتصادی، سیاسی، اخبار افغانستان و جهان">
<meta name="title" content="<?php echo $row['title']; ?>">
<meta name="description" content='<?php echo $row['content']; ?>'>
<meta name="author" content="<?php echo $row['author']; ?>">
<!--OGM-->
<meta property="og:title" content="<?php echo $row['title']; ?>" />
<meta property="og:site_name" content="ناهور وایس"/>
<meta property="og:url" content="http://www.nahoorvoice.com/" />
<meta property="og:description" content='<?php echo $row['content']; ?>'/>
<meta property="og:type" content="Website" />
<meta property="og:locale" content="fa_AF" />  
<meta property="article:author" content="<?php echo $row['author']; ?>" />
<meta property="article:publisher" content="https://www.facebook.com/nahoorvoice/"/>
<meta property="og:image" content="http://www.nahoorvoice.com/kcfinder/files/images/<?php echo $row['thumb'];?>">
<?php }; ?>
<!--[if lt IE 9]>
<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<link rel="stylesheet" href="css/reset.css">
<link rel="stylesheet" href="css/960.css">
<link rel="stylesheet" href="css/style.css"> 
<link rel="stylesheet" href="css/gallery.css"> 
<link href="css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen"/><!--Slimbox gallery Styles-->
<link rel="stylesheet" href="pagination/css/pagination.css" type="text/css"><!--Paginatiion Styles-->

<!--<link href="css/main.css" rel="stylesheet" type="text/css">-->
<!--link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"-->
<link rel="icon" type="image/png" href="favicon.ico"/>
<script src="js/respond.min.js"></script>
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="js/galleryview.js"></script>
<script type="text/javascript" src="js/jquery.min.js"></script> <!--For cartoons gallery-->
<script type="text/JavaScript" src="js/slimbox2.js"></script> <!--For cartoons gallery-->

</head>

<body>

<header id="header-place"><!--Start full width header-->
<div class="container_12 header"> <!--Start Head Container-->
    <!--Header-->
    <?php include 'include/header.php'; ?>
    <!--Header-->
    <nav id="nav-bar"><!--Navigation Bar-->
		<?php  
		  include 'dbcon.php';
		  error_reporting(0);
		  $sql = "SELECT * FROM fslide ORDER BY id DESC LIMIT 0,1";
		  $rs_result = mysql_query ($sql, $con); 
		  while ($row = mysql_fetch_assoc($rs_result)) { 
		  ?>
		<?php $album = $row['album'] ?>
        <ul>
          <li class="first-page"><a href="index">صفحه نخست</a></li>
          <li><a href="reports">خبرها</a></li>
          <li><a href="politics">سیاسی</a></li>
          <li><a href="society">اجتماعی</a></li>
          <li><a href="economic">اقتصادی</a></li>
          <li><?php echo"<a href ='gallery?album=$album'>";?>عکس<?php echo '</a>';?></li>
          <li><a href="about">در باره ما</a></li>
          <li><a href="contact">ارتباط با ما</a></li>
          <?php include 'include/search.php';?>
        </ul>
    </nav><!--End Navigation Bar-->
    <?php }; ?>
</div><!--End head container-->
</header><!--End full width header-->


<!--/////////////////////////////////-BODY-///////////////////////////////////-->
<div id="container" class="container_12"><!--Start main container-->
  <section id="main">
  
    <!--Advertisment here-->
    <div class="grid_6 non" id="advertize"></div>
    <div class="grid_6 non" id="advertize"></div>
    <!--Advertisment here-->
    
    <div class="content">
    <?php 
			include 'dbcon.php';
			error_reporting(0);
			$sql = "SELECT * FROM farticles WHERE category='Others' AND subcategory='Cartoons' AND status='show' ";
			$rs_result = mysql_query ($sql, $con); 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
        <?php $id = $row['id'] ?>
      <h1><?php echo $row['title']; ?></h1>
      <h2><?php echo $row['content']; ?></h2>
      <?php }; ?>
      <br><hr class="side_break">
    </div>
    <!--Start Sub-galleries-cartoons-->
    <div class="grid_12" id="content">
      <div class="cartoon-gallery" id="cartoon-gallery">
        <ul>  
			<?php
                include 'dbcon.php';
                error_reporting(0);
                if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; }; 
                $start_from = ($page-1) * 40; 
				$sql = "SELECT * FROM fimages ORDER BY id DESC LIMIT $start_from, 40";
				$rs_result = mysql_query ($sql, $con); 
				while ($row = mysql_fetch_assoc($rs_result)) { 
            ?>  
          <li>
            <a href="images/cartoons/<?php echo $row['picture'];?>" 
              rel="lightbox[gallery]" 
              title="<?php echo $row['name'];?>"
              rev="<b><?php echo $row['name'];?></b> | 
              توسط: <i><?php echo $row['artist'];?></i> |
              به روز شده: <i><?php echo $row['date'];?></i>">  
              <img src="images/cartoons/thumbs/<?php echo $row['picture'];?>" onerror="this.style.display='none'" width="100" height="67" alt="<?php echo $row['name'];?>"/></a>
          </li> 
			  <?php }; ?> 
        </ul>	
       </div>
      <div id="gal-seperator"></div>
      <div class="pagination" align="center">
        <!--Page Numbeers-->
	   <?php include 'pagination/cartoons-page.php';?>
       <!--Page Numbeers--> 
      </div>
    </div><!--Start Sub-galleries-cartoons-->
  </section><!--End main Section-->
</div><!--End main container-->
<!--/////////////////////////////////-FOOTER-///////////////////////////////////-->
<footer id="footer"><!--Start footer-->
  <?php include 'include/footer.php'; ?>
</footer><!--End footer-->
</body>
</html>