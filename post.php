<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="fa_AF">
<!--<![endif]-->
<?php
include 'dbcon.php';
$id =$_REQUEST['id'];
error_reporting(0);
$select = mysql_query("SELECT * FROM farticles WHERE id = '$id' LIMIT 0,1"); ?>
<?php $i = 0;  while($row = mysql_fetch_array($select)) { ?>
<?php $title = $row['title'] ?>
<head>
<title><?php echo $row['title']; ?></title>
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
<meta name="description" content="<?php echo $row['headline']; ?>">
<meta name="author" content="<?php echo $row['author']; ?>">
<!--OGM-->
<meta property="og:title" content="<?php echo $row['title']; ?>" />
<meta property="og:site_name" content="ناهور وایس"/>
<meta property="og:url" content="http://www.nahoorvoice.com/" />
<meta property="og:description" content="<?php echo $row['headline']; ?>"/>
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
<link href="css/font-awesome.min.css" rel="stylesheet">

<!--<link href="css/main.css" rel="stylesheet" type="text/css">-->

<!--link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"-->
<link rel="icon" type="image/png" href="favicon.ico"/>
<script src="js/respond.min.js"></script>
<script type="text/javascript" src="scripts/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.timers.1.2.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.2.1.1.min.js"></script>
<script type="text/javascript" src="scripts/jquery.galleryview.setup.js"></script>

<!--Social Sharing-->
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "75b2fb52-ad6b-4c65-b7fd-be13e3c4934e", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<!--Social Sharing-->
<!--Voting System-->
<script type="text/javascript" src="js/jquery-1.9.0.min.js"></script>
<script type="text/javascript">
$(document).ready(function() {
	
	//####### on page load, retrive votes for each content
	$.each( $('.voting_wrapper'), function(){
		
		//retrive unique id from this voting_wrapper element
		var unique_id = $(this).attr("id");
		
		//prepare post content
		post_data = {'unique_id':unique_id, 'vote':'fetch'};
		
		//send our data to "vote_process.php" using jQuery $.post()
		$.post('vote_process.php', post_data,  function(response) {
		
				//retrive votes from server, replace each vote count text
				$('#'+unique_id+' .up_votes').text(response.vote_up); 
				$('#'+unique_id+' .down_votes').text(response.vote_down);
			},'json');
	});

	
	
	//####### on button click, get user vote and send it to vote_process.php using jQuery $.post().
	$(".voting_wrapper .voting_btn").click(function (e) {
	 	
		//get class name (down_button / up_button) of clicked element
		var clicked_button = $(this).children().attr('class');
		
		//get unique ID from voted parent element
		var unique_id 	= $(this).parent().attr("id"); 
		
		if(clicked_button==='down_button') //user disliked the content
		{
			//prepare post content
			post_data = {'unique_id':unique_id, 'vote':'down'};
			
			//send our data to "vote_process.php" using jQuery $.post()
			$.post('vote_process.php', post_data, function(data) {
				
				//replace vote down count text with new values
				$('#'+unique_id+' .down_votes').text(data);
				
				//thank user for the dislike
				alert("تشکر، رای شما شمرده می شود، حتا رای منفی");
				
			}).fail(function(err) { 
			
			//alert user about the HTTP server error
			alert(err.statusText); 
			});
		}
		else if(clicked_button==='up_button') //user liked the content
		{
			//prepare post content
			post_data = {'unique_id':unique_id, 'vote':'up'};
			
			//send our data to "vote_process.php" using jQuery $.post()
			$.post('vote_process.php', post_data, function(data) {
			
				//replace vote up count text with new values
				$('#'+unique_id+' .up_votes').text(data);
				
				//thank user for liking the content
				alert("تشکر از رای شما برای این مطلب");
			}).fail(function(err) { 
			
			//alert user about the HTTP server error
			alert(err.statusText); 
			});
		}
	});
	//end 
});
</script>

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
          <li class="first-page"><a href="index.php">صفحه نخست</a></li>
          <li><a href="reports.php">خبرها</a></li><!--
          Home, about, contact, news, images, 
          <li><a href="politics.php">سیاسی</a></li>
          <li><a href="society.php">اجتماعی</a></li>
          <li><a href="economic.php">اقتصادی</a></li>
          <li><a href="culture.php">فرهنگ/ هنر</a></li>
          <li><a href="villages.php">دهکده ها</a></li>-->
          <li><a href="villages.php">اعضا</a></li>
          <li><?php echo"<a href ='gallery.php?album=$album'>";?>عکس<?php echo '</a>';?></li>
          <li class="selected"><?php echo"<a href ='video.php?album=$album'>";?>ویدیو<?php echo '</a>';?></li>
          <li><a href="about.php">در باره ما</a></li>
          <li style="width:68px"><a href="contact.php">ارتباط با ما</a></li>
        </ul>
    </nav><!--End Navigation Bar-->
    <?php }; ?>
</div><!--End head container-->
</header><!--End full width header-->

<!--/////////////////////////////////-BODY-///////////////////////////////////-->
<div id="container" class="container_12"><!--Start main container-->
  <section id="main">
    <div class="grid_3" id="side-bar"><!--Sidebar-->
      <?php include 'include/side-bar2.php';	?>
    </div> <!--End Side Bar-->
    
    <div class="grid_9" id="content"><!--Content Details here-->
      <!--img src="images/add.jpg" width="700" height="100" alt="Addvertising"/-->
      
      <?php
          include 'dbcon.php';
		  $id =$_REQUEST['id'];
          error_reporting(0);
          mysql_query("UPDATE farticles SET hits = hits + 1 WHERE id = '$id'")
          or die(mysql_error()); 
          mysql_close();	 
         ?>
      <?php
          include 'dbcon.php';
		  $id =$_REQUEST['id'];
          error_reporting(0);
          $select = mysql_query("SELECT * FROM farticles WHERE id ='$id' LIMIT 0,1 "); ?>
		 <?php $i = 0;  while($row = mysql_fetch_array($select)) { ?>
         <?php $id = $row['id'] ?> 
         <?php $title = $row['title'] ?>
      <div class="content">
        <h1><?php echo $row['title']; ?></h1>
        <span class="metadata">به روز شده: <?php echo $row['fdate']; ?> - <i id="eng-date"><?php echo $row['date']; ?></i> | توسط  <?php echo $row['author']; ?></span>
        <div id="cont-details">
        <?php echo $row['content']; ?>
        <!-- voting markup -->
        <br>
        <div class="voting_wrapper" id="<?php echo $row['id']; ?>">
            <div class="voting_btn">
                <div class="up_button">&nbsp;</div><span class="up_votes">0</span>
            </div>
            <div class="voting_btn">
                <div class="down_button">&nbsp;</div><span class="down_votes">0</span>
            </div>
        </div>
        <!-- voting markup end -->
		<?php }; ?> 
        </div>
        
       <!-- COMENTING AND SOCIAL SECTION-->
        
        <div id="comment-form">
         <div id="disqus_thread"></div>
          <script type="text/javascript">
          /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
          var disqus_shortname = 'wahdatdaily'; // required: replace example with your forum shortname
  
          /* * * DON'T EDIT BELOW THIS LINE * * */
          (function() {
              var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
              dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
		<?php
          include 'dbcon.php';
		  $title =$_REQUEST['title']; error_reporting(0);
          $select = mysql_query("SELECT * FROM farticles WHERE title ='$title' LIMIT 0,1 "); ?>
		 <?php $i = 0;  while($row = mysql_fetch_array($select)) { ?> <?php $id = $row['id'] ?> <?php $title = $row['title'] ?>
		 var disqus_identifier = '<?php echo $row['title']; ?>';  <?php }; ?> 
			  
              (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
          })();
          </script>
		  <!--<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
		  <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>-->
        </div>
         
        
        
        <!--Social Plugin -->
        <div id="share_plugin">
           <h3>اشتراک گزاری مطلب به شبکه های اجتماعی</h3><br>
          <span class='st_sharethis_large' displayText='ShareThis'></span>
          <span class='st_facebook_large' displayText='Facebook'></span>
          <span class='st_twitter_large' displayText='Tweet'></span>
          <span class='st_linkedin_large' displayText='LinkedIn'></span>
          <span class='st_pinterest_large' displayText='Pinterest'></span>
          <span class='st_email_large' displayText='Email'></span>
        </div>
        <!--Social Plugin -->
      </div>
    </div><!--End Content Details-->
    
    <div class="grid_8" id="after-content">
    <hr class="side_break">
    <h2>مطالب بیشتری در این بخش</h2>
    <?php
          include 'dbcon.php';
		  $subcategory =$_REQUEST['subcategory'];
		  $category =$_REQUEST['category'];
		  $id =$_REQUEST['id'];
          error_reporting(0);
          $select = mysql_query("SELECT * FROM farticles WHERE subcategory='$subcategory' AND status='show' AND id!='$id'  ORDER BY id DESC LIMIT 0,10 "); ?>
		 <?php $i = 0;  while($row = mysql_fetch_array($select)) { ?>
         <?php $id = $row['id'] ?>
         <?php $title = $row['title'] ?>
         <?php $subcategory = $row['subcategory'] ?>    
         <?php $category = $row['category'] ?>
         <?php $title = $row['title'] ?>
      <ol>
        <li><?php echo"<a href ='post?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?> <span> (<?php echo $row['hits']; ?> بازدید)</span></li>
      </ol>
      <?php }; ?>
    </div>
  </section><!--End main Section-->
</div><!--End main container-->
<!--/////////////////////////////////-FOOTER-///////////////////////////////////-->
<footer id="footer"><!--Start footer-->
  <?php include 'include/footer.php'; ?>
</footer><!--End footer-->


    <script type="text/javascript">
    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
    var disqus_shortname = 'wahdatdaily'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function () {
        var s = document.createElement('script'); s.async = true;
        s.type = 'text/javascript';
        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
    }());
    </script>
    



</body>
</html>
