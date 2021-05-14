<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="developers.wtf, survey, feedback, mbc, mbccet">
    <meta name="description" content="Survey For Dev | Simplest survey application">
    <link rel="stylesheet" href="style/forms_1.0.css">
    <link rel="icon" href="./images/logo.png">
    <title>Developer.WTF | Survey</title>
</head>
<body>
    <header>
      <h1>Community Survey</h1>
      <h2>Thanks for taking the time to provide feedback</h2>
      <img src="./images/logo.png" alt="Survey logo"/>
    </header>

    <div class="Survey">
        <form method="post" action="submit.php">
            <div class="container">
                <div class="form-item">
                    <p>Name <span class='req'>*</span></p>
                    <input name="usr-name" type="text" placeholder="Your Name" autocomplete="off" required>
                </div>
                <div class="form-item">
                    <p>Email <span class='req'>*</span></p>
                    <input name="usr-email" type="email" placeholder="Your Email Address" required>
                </div>
            </div>
            <?php include('includes/dbconnect.php');
                $get_questions = "SELECT * FROM languages";
                $run_query = mysqli_query($conn, $get_questions);
                $count=0;
                while($row_query = mysqli_fetch_array($run_query)){
                    $sl_no = $row_query['slno'];
                    $language = $row_query['name'];
                    $count++;
                    echo "<h3>$count. $language</h3>
                          <div class='container'>
                            <div class='form-item'>
                                <p>Your Interest in $language :</p>
                                <input type='range' name='".strtolower($language)."-iscore' min='0' max='10' value='0' class='slider'>
                            </div>

                            <div class='form-item'>
                                <p>Knowledge in $language :</p>
                                <input type='range' name='".strtolower($language)."-kscore' min='0' max='10' value='0' class='slider'>
                            </div>
                          </div>";
                }
            ?>
            <div class='container'>
                <div class='form-item'>
                    <input type="submit" id="submit" value="Submit">
                </div>
            </div>

        </form>
    </div>
</body>
</html>
