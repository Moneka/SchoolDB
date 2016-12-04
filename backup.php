<!-- Selected table backup and restore -->

<?php
   $dbhost = 'mysql1.cs.clemson.edu';
   $dbuser = 'Moneka';
   $dbpass = 'moneka123';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $table_name = "person";
   $backup_file  = "/tmp/employee.sql";
   $sql = "SELECT * INTO OUTFILE '$backup_file' FROM $table_name";
   
   mysql_select_db('test_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not take data backup: ' . mysql_error());
   }

    $sqlr = "LOAD DATA INFILE '$backup_file' INTO TABLE $table_name";
   
    mysql_select_db('test_db');
    $retvalr = mysql_query( $sqlr, $conn );
   
    if(! $retvalr ) {
      die('Could not load data : ' . mysql_error());
   }
   echo "Loaded  data successfully\n";
   
   
   echo "Backedup  data successfully\n";
   
   mysql_close($conn);
?>

<!-- Complete Database Backup -->

   <?php
   $dbhost = 'mysql1.cs.clemson.edu';
   $dbuser = 'Moneka';
   $dbpass = 'moneka123';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }

   $backup_file = $dbname . date("Y-m-d-H-i-s") . '.gz';
   $command = "mysqldump --opt -h $dbhost -u $dbuser -p $dbpass ". "test_db | gzip > $backup_file";
   
   system($command);
?>

<!--
