<?php

include('includes/dbconnect.php');

$usr_name = $_POST['usr-name'];
$usr_email = $_POST['usr-email'];

$python_kscore = $_POST['python-kscore'];
$python_iscore = $_POST['python-iscore'];

$javascript_kscore = $_POST['javascript-kscore'];
$javascript_iscore = $_POST['javascript-iscore'];

$ccpp_kscore = $_POST['c/c++-kscore'];
$ccpp_iscore = $_POST['c/c++-iscore'];

$java_kscore = $_POST['java-kscore'];
$java_iscore = $_POST['java-iscore'];

$php_kscore = $_POST['php-kscore'];
$php_iscore = $_POST['php-iscore'];

$csharp_kscore = $_POST['c#-kscore'];
$csharp_iscore = $_POST['c#-iscore'];

$kotlin_kscore = $_POST['kotlin-kscore'];
$kotlin_iscore = $_POST['kotlin-iscore'];

$swift_kscore = $_POST['swift-kscore'];
$swift_iscore = $_POST['swift-iscore'];

$pearl_kscore = $_POST['pearl-kscore'];
$pearl_iscore = $_POST['pearl-iscore'];

$htmlcss_kscore = $_POST['html/css-kscore'];
$htmlcss_iscore = $_POST['html/css-iscore'];

$iscore_array = array($python_iscore, $javascript_iscore, $ccpp_iscore, $java_iscore, $php_iscore, $csharp_iscore, $kotlin_iscore, $swift_iscore, $pearl_iscore, $htmlcss_iscore);
$kscore_array = array($python_kscore, $javascript_kscore, $ccpp_kscore, $java_kscore, $php_kscore, $csharp_kscore, $kotlin_kscore, $swift_kscore, $pearl_kscore, $htmlcss_kscore);

$select_survey = "SELECT * FROM languages";
$run_survey = mysqli_query($conn, $select_survey);

$i = 0;

while($row_survey = mysqli_fetch_array($run_survey)){
    $iscore = $row_survey['interest'];
    $kscore = $row_survey['knowledge'];
    $count = $row_survey['count'];
    $name = $row_survey['name'];

    $new_kscore = $kscore + $kscore_array[$i];
    $new_iscore = $iscore + $iscore_array[$i];
    $new_count = $count+1;
    $update_qry = "UPDATE languages SET interest = $new_iscore , knowledge = $new_kscore, count = $new_count WHERE name = '$name'";
    $run_update_qry = mysqli_query($conn, $update_qry);


    $i++;
    
}

$usr_insert_qry = "INSERT INTO survey_entry (email, name, python, javascript, ccpp, java, php, csharp, kotlin,
swift, pearl, htmlcss, python_k, js_k, ccpp_k, java_k, php_k, cs_k, kot_k, swift_k, perl_k, htcss_k) 
VALUES ('$usr_email','$usr_name','$python_kscore','$javascript_kscore','$ccpp_kscore','$java_kscore','$php_kscore','$csharp_kscore','$kotlin_kscore',
'$swift_kscore','$pearl_kscore','$htmlcss_kscore','$python_iscore','$javascript_iscore',
'$ccpp_iscore','$java_iscore','$php_iscore','$csharp_iscore','$kotlin_iscore','$swift_iscore','$pearl_iscore','$htmlcss_iscore')";

###1054 - Unknown column 'wegdddwr@gmail.com' in 'field list'

##You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near ''email', 'name', 'python', 'javascript', 'ccpp', 'java', 'php', 'csharp', 'ko...' at line 1


if(mysqli_query($conn, $usr_insert_qry)){
   header("Location: success.php"); 
}
else{
    header("Location: error.php");
}
