<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <meta name="discription" content="Survey For Dev | Simplest survey application">
    <link rel="icon" href="./images/icon.ico">
    <link rel="stylesheet" href="style/sliderstyle.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;400;500;600&display=swap" rel="stylesheet">
    <title>Developer.WTF | Survey</title>
</head>
<body>
    <header>
        <div>
            <img class="logo-img" src="images/logo.png" alt="developers.wtf-logo" height="50px">
        </div>
        <div>
            <h1>Developers.WTF | Survey</h1>
        </div>
    </header>
    <section class="form-section">
        <form class = "form" method="post" action="submit.php">
            <div class="card">
                <div class = "name-section" >
                    <label for="name" class="name-label">Name</label>
                    <input name="usr-name" type="text" placeholder="Athul Baby" class="name">
                </div>
                <div class = "email-section" >
                    <label for="email" class="email-label">Email</label>
                    <input name="usr-email" type="email" placeholder="athulofficial01@gmail.com" class="email">
                </div>
            </div>
            <table class="styled-table">
                <thead>
                    <tr>
                        <th>Question</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    include('includes/dbconnect.php');

                    $get_questions = "SELECT * FROM languages";
                    $run_query = mysqli_query($conn, $get_questions);
                    while($row_query = mysqli_fetch_array($run_query)){
                        $sl_no = $row_query['slno'];
                        $language = $row_query['name'];
                        echo "
                        <tr>
                            <td>
                                <h4>$language</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Your interest in $language</p>
                                <br>
                                <input type='range' name='".strtolower($language)."-iscore' min='0' max='10' value='0' class='slider' id='myRange'>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <p>Your knowledge in $language</p>
                                <br>
                                <input type='range' name='".strtolower($language)."-kscore' min='0' max='10' value='0' class='slider' id='myRange'>
                            </td>
                        </tr>
                        ";
                    }

                    ?>
                    
                    <tr>
                        <td>
                            <input type="submit" value="Submit">
                        </td>
                    </tr>
                </tbody>
            </table>
        </form>
    </section>
</body>
</html>
