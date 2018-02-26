<?php
$dsn = 'mysql:host=localhost;dbname=aikhf';
//$dsn = 'mysql:host=localhost;dbname=oophp;port=8889';
//$dsn = 'sqlite:C:/xampp/htdocs/oophp/sqlite/oophp.db';
//$dsn = 'sqlite:/Applications/MAMP/htdocs/oophp/sqlite/oophp.db';
$db = new PDO($dsn, 'root', '');