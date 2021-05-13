<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="discription" content="Survey For Dev | Survey results">
    <link rel="icon" href="./images/icon.ico">
    <link rel="stylesheet" href="style/result-style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600&display=swap" rel="stylesheet">
    <title>Developer.WTF | Results</title>
</head>
<body>
    <header>
        <div>
            <img class="logo-img" src="images/logo.png" alt="developers.wtf-logo" height="50px">
        </div>
        <div>
            <h1>Developers.WTF | Results</h1>
        </div>
    </header>
    <section class="result-section">
        <table>
            <tr>
                <th>
                    Languages:
                </th>
                <th>
                    Score:
                </th>
            </tr>

        <?php
            include('includes/dbconnect.php');

            $select_results = "SELECT * FROM languages WHERE 1";
            $run_results = mysqli_query($conn, $select_results);

            while($row_results = mysqli_fetch_array($run_results)){
                $language = $row_results['name'];
                $interest = $row_results['interest'];
                $knowledge = $row_results['knowledge'];
                $count = $row_results['count'];

                if($interest != 0){
                    $iscore = $interest / $count;
                }
                if($knowledge != 0){
                    $kscore = $knowledge / $count;
                }

                echo "
                <tr>
                    <td>
                        <label>$language: </label>
                    </td>
                    <td>
                        <meter id='score-meter' value='$iscore' min='0' max='10'>$iscore</meter><br>
                        <meter id='score-meter' value='$kscore' min='0' max='10'>$kscore</meter><br>
                    </td>
                </tr>
                ";
            }
        ?>
        
        </table>

        <!-- <progress value="20" max="100">20%</progress> -->
    </section>
</body>
</html>
