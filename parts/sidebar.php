    <div class="grid_3" id="side-bar"><!--Sidebar-->
        <!--<div class="cartoon"><h4>کارتون روز</h4><div> -->
        <?php /*
            include 'dbcon.php';
            error_reporting(0);
            $select = mysql_query("SELECT * FROM fimages WHERE status='show' ORDER BY id DESC LIMIT 0,1");
            
            $i = 0;
            while($row = mysql_fetch_array($select))
            {
            $i = $i + 1;
            $id = $row['id'] ?>
            <img src="images/cartoons/<?php echo $row['picture'];?>" onerror="this.style.display='none'" width="214"/>
            <p>توسط: <?php echo $row['artist']; ?><span><a href="cartoons.php" target="_blank">گالری &raquo;</a></span></p>
            <?php } */ ?>
            <!-- </div></div> <hr class="side_break"> -->
        <div class="">
      
        <?php
        try {

            //require_once(__ROOT__.'/includes/config.php');
            require_once '../includes/dbcon.php';
            $sql = 'SELECT * FROM files WHERE status="show" ORDER BY id DESC LIMIT 0,1';
        } catch (Exception $e) {
            $error = $e->getMessage();
        } ?>
        <h1>Error h1. ie: no records found.</h1>
        <?php if (isset($error)) {
            echo "<p>$error</p>";
        }

        while ($row = $result->fetch()) {
            $id = $row['id'] 
        ?>
        <li>
            دانلود pdf شماره امروز ناهور وایس
            <a href="download.php?filename=<?php echo $row['file'];?>">
            <img src="images/pdf.png" onerror="this.style.display='none'"/>
            </a>
            <p id="first-line"><a href="download.php?filename=<?php echo $row['file'];?>"><?php echo $row['name'];?></a>
            <br><span class="metadata"><?php echo $row['date'];?> (<?php echo $row['downloads'];?> دانلود)</span></p>
          </li>
        <li>
            <td><?php echo $row[0]; ?></td>
            <td><?php echo $row['meaning']; ?></td>
            <td><?php echo $row['gender']; ?></td>
        </li><?php
        }
    

	   include 'dbcon.php';
			error_reporting(0);
			$sql = "SELECT * FROM files WHERE status='show' ORDER BY id DESC LIMIT 2,1";
			$rs_result = mysql_query ($sql, $con); 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
            <?php $id = $row['id'] ?>
         <li>
            دانلود pdf شماره پریروز روزنامه وحدت
            <a href="download.php?filename=<?php echo $row['file'];?>">
            <img src="images/pdf.png" onerror="this.style.display='none'"/>
            </a>
            <p id="first-line"><a href="download.php?filename=<?php echo $row['file'];?>"><?php echo $row['name'];?></a>
            <br><span class="metadata"><?php echo $row['date'];?> (<?php echo $row['downloads'];?> دانلود)</span></p>
          </li>
		 <?php } ?>
       </ul>
        <p align="left"><a href="newspapers.php" target="_blank">آرشیف &raquo; </a></p>
      <hr class="side_break">
      </div>
      <ul>
        <h4>تازه ترین مطالب</h4> 
        <!--First Latest Posts--> 
	    <?php 
			include 'dbcon.php';
			error_reporting(0);
			$sql = "SELECT * FROM farticles WHERE category !='Others' AND subcategory!='wi-this-day' AND subcategory!='Historic' AND status='show' ORDER BY id DESC LIMIT 0,1";
			$rs_result = mysql_query ($sql, $con); 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
        <?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
        <img src="kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>"  onerror="this.style.display='none'"  width="80"/>
        <p id="first-line"><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?>
          <span class="metadata">(<?php echo $row['hits']; ?> بازدید)</span>
        </p>
        <?php }; ?>
         <!--Other Latest Posts-->
	    <?php
			include 'dbcon.php';
			error_reporting(0);
			$sql = "SELECT * FROM farticles WHERE  category !='Others' AND subcategory!='wi-this-day' AND subcategory!='Historic' AND status='show' ORDER BY id DESC LIMIT 1,5";
			$rs_result = mysql_query ($sql, $con); 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
        <?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
        <li>
		  <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?>
          <span class="metadata">(<?php echo $row['hits']; ?> بازدید)</span>
        </li>
        <?php }; ?>
      </ul>
      
      <div class="non">
      <ul>
        <h4>پربیننده ترین مطالب</h4> 
        <!--First Latest Posts--> 
	    <?php 
			include 'dbcon.php';
			error_reporting(0);
			$sql = "SELECT * FROM farticles WHERE status='show' ORDER BY hits DESC LIMIT 0,1";
			$rs_result = mysql_query ($sql, $con); 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
        <?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
        <img src="kcfinder/files/images/thumbs/<?php echo $row['thumb'];?>"  onerror="this.style.display='none'"  width="80"/>
        <p id="first-line"><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?>
          <span class="metadata">(<?php echo $row['hits']; ?> بازدید)</span>
        </p>
        <?php }; ?>
         <!--Other Latest Posts-->
	    <?php
			include 'dbcon.php';
			error_reporting(0);
			$sql = "SELECT * FROM farticles WHERE status='show' ORDER BY hits DESC LIMIT 1,5";
			$rs_result = mysql_query ($sql, $con); 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
        <?php $subcategory = $row['subcategory'] ?>    
        <?php $category = $row['category'] ?>
        <?php $title = $row['title'] ?>
        <?php $id = $row['id'] ?>
        <li>
		  <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row['title'];?><?php echo '</a>';?>
          <span class="metadata">(<?php echo $row['hits']; ?> بازدید)</span>
        </li>
        <?php }; ?>
      </ul>
      </div>
      
      <hr class="side_break">
      
      <h4><a href="links.php" target="_blank">لینکهای مفید</a></h4>
	  <ul id="side-links">
        <?php
			include 'dbcon.php';
			error_reporting(0);
			$sql = "SELECT * FROM flinks  ORDER BY id ASC LIMIT 0,5";
			$rs_result = mysql_query ($sql, $con); 
			while ($row = mysql_fetch_assoc($rs_result)) { 
			?> 
        <?php $id = $row['id'] ?>
        <li><a href="<?php echo 'http://'. $row['url'];?>" target="_blank" title="<?php echo $row['title'];?>"><?php echo $row['title'];?></a></a></li>
        <?php }; ?>
        <li><b><a href="links.php" target="_blank">لینکهای بیشتر &raquo; </a></b></li>
      </ul>
      
      <hr class="side_break">
      
     <!--Bottom Side gallery-->
    
    <div>
    </div>
    <!--<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="220" data-height="290" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>-->

    </div> <!--End Side Bar-->
    