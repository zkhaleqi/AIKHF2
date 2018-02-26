 <section class="pagination">   
 
        <?php

        // database connection details
         include 'dbcon2.php';

        // if could not connect to database
        if (!($connection = @mysql_connect($MySQL_host, $MySQL_username, $MySQL_password)))

            // stop execution and display error message
            die('Error connecting to the database!<br>Make sure you have specified correct values for host, username and password.');

        // if database could not be selected
        if (!@mysql_select_db($MySQL_database, $connection))

            // stop execution and display error message
            die('Error selecting database!<br>Make sure you have specified an existing and accessible database.');

        // how many records should be displayed on a page?
        $records_per_page = 10;

        // include the pagination class
        require 'Pagination.php';

        // instantiate the pagination object
        $pagination = new Zebra_Pagination();

        // set position of the next/previous page links
        $pagination->navigation_position(isset($_GET['navigation_position']) && in_array($_GET['navigation_position'], array('left', 'right')) ? $_GET['navigation_position'] : 'outside');

        // the MySQL statement to fetch the rows
        // note how we build the LIMIT
        // also, note the "SQL_CALC_FOUND_ROWS"
        // this is to get the number of rows that would've been returned if there was no LIMIT
        // see http://dev.mysql.com/doc/refman/5.0/en/information-functions.html#function_found-rows
        $MySQL = " SELECT SQL_CALC_FOUND_ROWS id FROM farticles WHERE subcategory='Social' AND status='show'  ORDER BY id LIMIT " . (($pagination->get_page() - 1) * $records_per_page) . ", " . $records_per_page . " ";

        // if query could not be executed
        if (!($result = @mysql_query($MySQL)))

            // stop execution and display error message
            die(mysql_error());

        // fetch the total number of records in the table
        $rows = mysql_fetch_assoc(mysql_query("SELECT FOUND_ROWS() AS rows"));

        // pass the total number of records to the pagination class
        $pagination->records($rows['rows']);

        // records per page
        $pagination->records_per_page($records_per_page);

        ?>
       
        <?php
        // render the pagination links
        $pagination->render();
        ?>
        <script type="text/javascript" src="js/jsjquery-1.7.2.js"></script>
        <script type="text/javascript" src="js/pagination.js"></script>
</section>
