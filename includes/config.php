<?php 
    $dbhost = 'cis282store.crtglnnryrmm.us-east-1.rds.amazonaws.com';
    $dbuser = 'baileystore';
    $dbpass = 'storedb2019';
    $dbname = 'cis282store';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
    if (! $conn)
    {
        die('Could not connect to instance: ' . mysqli_error($conn));
    }
    ?>