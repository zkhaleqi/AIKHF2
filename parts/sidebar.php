    <div class="grid_3" id="side-bar"><!--Sidebar-->
        <!--<div class="cartoon"><h4>کارتون روز</h4><div> -->
        <div class="">
        <?php
        try {
            $root = $_SERVER['DOCUMENT_ROOT']. '/aikhf2/AIKHF2/';
            require_once ($root. '/includes/dbcon.php');
            $sql = 'SELECT * FROM files WHERE status="show" ORDER BY id DESC LIMIT 0,1';
            $result = $db->query($sql);

            $sql2 = 'SELECT * FROM files WHERE status="show" ORDER BY id DESC LIMIT 2,1';
            $result2 = $db->query($sql2);

            $sql3 = "SELECT * FROM farticles 
                WHERE category !='Others' AND 
                subcategory!='wi-this-day' AND 
                subcategory!='Historic' AND 
                status='show' 
                ORDER BY id DESC LIMIT 0,1";
            $result3 = $db->query($sql3);

            $sql4 = "SELECT * FROM farticles WHERE status='show' ORDER BY hits DESC LIMIT 0,1";
            $result4 = $db->query($sql4);

            $sql5 = "SELECT * FROM farticles WHERE status='show' ORDER BY hits DESC LIMIT 0,1";
            $result5 = $db->query($sql5);

            $sql6 = "SELECT * FROM farticles WHERE status='show' ORDER BY hits DESC LIMIT 1,5";
            $result6 = $db->query($sql6);

            $sql7 = "SELECT * FROM flinks  ORDER BY id ASC LIMIT 0,5";
            $result7 = $db->query($sql7);

        } catch (Exception $e) {
            $error = $e->getMessage();
        } ?>
        <?php if (isset($error)) {
            echo "<p>$error</p>";
        }

        while ($row = $result->fetch()) {
            $id = $row['id'] ?>
            <li>
            دانلود pdf شماره امروز ناهور وایس
            <a href="download.php?filename=<?php echo $row['file'];?>">
            <img src="images/pdf.png" onerror="this.style.display='none'"/>
            </a>
            <p id="first-line"><a href="download.php?filename=<?php echo $row['file'];?>"><?php echo $row['name'];?></a>
            <br><span class="metadata"><?php echo $row['date'];?> (<?php echo $row['downloads'];?> دانلود)</span></p>
            </li><?php 
        } 
        
        
        while ($row2 = $result2->fetch()) {
            $id = $row['id'] ?>
            <li>
                دانلود pdf شماره پریروز روزنامه وحدت
                <a href="download.php?filename=<?php echo $row2['file'];?>">
                <img src="images/pdf.png" onerror="this.style.display='none'"/>
                </a>
                <p id="first-line"><a href="download.php?filename=<?php echo $row2['file'];?>"><?php echo $row['name'];?></a>
                <br><span class="metadata"><?php echo $row2['date'];?> (<?php echo $row2['downloads'];?> دانلود)</span></p>
            </li><?php 
        } ?>

       </ul>
        <p align="left"><a href="newspapers.php" target="_blank">آرشیف &raquo; </a></p>
      <hr class="side_break">
      </div>
      <ul>
        <h4>تازه ترین مطالب</h4> 
        <!--First Latest Posts--> 
	    <?php 
			while ($row3 = $result3->fetch()) {
                $subcategory = $row['subcategory'];   
                $category = $row['category'];
                $title = $row['title'];
                $id = $row['id'] ?>
                <img src="kcfinder/files/images/thumbs/<?php echo $row3['thumb'];?>"  onerror="this.style.display='none'"  width="80"/>
                <p id="first-line"><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row3['title'];?><?php echo '</a>';?>
                    <span class="metadata">(<?php echo $row3['hits']; ?> بازدید)</span>
                </p><?php 
            }; ?>
         <!--Other Latest Posts-->
	    <?php
			while ($row4 = $result4->fetch()) { 
                $subcategory = $row4['subcategory'];    
                $category = $row4['category'];
                $title = $row4['title'];
                $id = $row4['id'] ?>
                <li>
                    <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row4['title'];?><?php echo '</a>';?>
                    <span class="metadata">(<?php echo $row4['hits']; ?> بازدید)</span>
                </li><?php 
            }; ?>
      </ul>
      
      <div class="">
      <ul>
        <h4>پربیننده ترین مطالب</h4> 
        <!--First Latest Posts--> 
	    <?php 
			while ($row5 = $result5->fetch()) { 
                $subcategory = $row5['subcategory'];   
                $category = $row5['category'];
                $title = $row5['title'];
                $id = $row5['id'] ?>
                <img src="kcfinder/files/images/thumbs/<?php echo $row5['thumb'];?>"  onerror="this.style.display='none'"  width="80"/>
                <p id="first-line"><?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row5['title'];?><?php echo '</a>';?>
                    <span class="metadata">(<?php echo $row['hits']; ?> بازدید)</span>
                </p><?php 
            }; ?>
         <!--Other Latest Posts-->
	    <?php
            while ($row6 = $result6->fetch()) { 
			    $subcategory = $row6['subcategory'];  
                $category = $row6['category'];
                $title = $row6['title'];
                $id = $row6['id'] ?>
                <li>
                <?php echo"<a href ='post.php?id=$id & subcategory=$subcategory' target='_blank'>";?><?php echo $row6['title'];?><?php echo '</a>';?>
                <span class="metadata">(<?php echo $row6['hits']; ?> بازدید)</span>
                </li><?php 
            }; ?>
            </ul>
      </div>
      
      <hr class="side_break">
      
      <h4><a href="links.php" target="_blank">لینکهای مفید</a></h4>
	  <ul id="side-links">
        <?php
			while ($row7 = $result7->fetch()) { 
                $id = $row['id'] ?>
                <li><a href="<?php echo 'http://'. $row7['url'];?>" target="_blank" title="<?php echo $row7['title'];?>"><?php echo $row7['title'];?></a></a></li><?php 
            }; ?>
                <li><b><a href="links.php" target="_blank">لینکهای بیشتر &raquo; </a></b></li>
        </ul>
      
      <hr class="side_break">
      
     <!--Bottom Side gallery-->
    
    <div>
    </div>
    <!--<div class="fb-like-box" data-href="https://www.facebook.com/FacebookDevelopers" data-width="220" data-height="290" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false"></div>-->

    </div> <!--End Side Bar-->
    