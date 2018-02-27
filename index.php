<?php include_once 'parts/header.php'; ?>
<!--/////////////////////////////////-BODY-///////////////////////////////////-->

<div id="container" class="container_12"><!--Start main container-->
    <section id="main">
        <?php include 'parts/sidebar.php';	?>

        <!-- Featured Slides -->
        <div id="featured_slide" class="grid_9">
            <ul id="featurednews"> 
            <?php  
            require_once($root. 'includes/dbcon.php' );
            $sql = "SELECT * FROM fslide ORDER BY id DESC LIMIT 0,10"; 
            $result = $db->query($sql);
            while ($row = $result->fetch()) { 
                $album = $row['album'] ?>
                <li><img src="images/gallery/<?php echo $row['picture'];?>" onerror="this.style.display='none'"/>
                    <div class="panel-overlay">
                        <h2><?php echo $row['imgdetails']; ?></h2>
                    </div><?php 
            } ?>
                </li>
            </ul>
        </div>






    </section>
</div>

<!--/////////////////////////////////-FOOTER-///////////////////////////////////-->
<?php include_once 'parts/footer.php'; ?>

