<?php


include('includes/dbconnect.php');

if (!empty($_POST['fetchChartData'])){

    $chart_qry1 = "SELECT interest FROM `languages`";
    $chart_qry2 = "SELECT knowledge FROM `languages`";

    $run_chart_qry1 = mysqli_query($conn, $chart_qry1);
    $run_chart_qry2 = mysqli_query($conn, $chart_qry2);

    $intrest = ' ';  
    while($row = mysqli_fetch_array($run_chart_qry1))
    {
       $intrest.= $row[0].',';
    }
  


    $knowledge = ' ';  
    while($row = mysqli_fetch_array($run_chart_qry2))
    {
        $knowledge.= $row[0].',';
    }
  
    

    
if($_POST['fetchChartData']=="1")
{
    echo $intrest;
}
if($_POST['fetchChartData']=="2")
{
    echo $knowledge;
}



}
else{
    echo 'invalid request';
}
?>