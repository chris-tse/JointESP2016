<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Excursion Reservation Form - ESP Conference 2016</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/general.css">
        <link href='https://fonts.googleapis.com/css?family=Oswald|Pontano+Sans' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
        <div class="container" id="header"></div>

        <main class="container">
            <div class="row">
                <article class="col-sm-12">
                    <?php

                    date_default_timezone_set('Japan');
                    $current_date = date('YmdHis');
                    $fullname = $_POST['fullname'];
                    $email = $_POST['email'];
                    $uniinst = $_POST['uniinst'];
                    $presnum = $_POST['presnum'];
                    $wechat = $_POST['wechat'];
                    $cell = $_POST['cell'];
                    $othernames = $_POST['othernames'];
                    $aug18 = $_POST['aug18'];
                    $aug20 = $_POST['aug20'];
                    $aug21 = $_POST['aug21'];
                    $aug22 = $_POST['aug22'];

                    $name = explode(" ", trim($fullname));

                    

                    $outputfile = "excursion/" . $name[0] . $current_date . ".txt";

                    $myfile = fopen($outputfile, "a") or die("<h2>An error has occurred</h2><p>Your submission failed to be sent. Please try again or contact <a href='mailto:esp2016inquiries@bunka.uec.ac.jp.'>esp2016inquiries@bunka.uec.ac.jp.</a> for assistance.");

                    $text = "Name: " . $fullname . PHP_EOL . "Email: " . $email . PHP_EOL . "University/Insitution: " . $uniinst . PHP_EOL . "Presentation Number: " . $presnum . PHP_EOL . "WeChat: " . $wechat . PHP_EOL . "Phone Number: " . $cell . PHP_EOL . "Other Participants: " . $othernames . PHP_EOL . "August 18: " . $aug18 . PHP_EOL . "August 20: " . $aug20 . PHP_EOL . "August 21: " . $aug21 . PHP_EOL . "August 22: " . $aug22;

                    fwrite($myfile, $text);
                    fclose($myfile);

                    echo "<h2>Thank you for your submission.</h2><p>Your submission has been successfully sent. Please give us 3-5 business days to reply, or contact us at <a href='mailto:esp2016inquiries@bunka.uec.ac.jp.'>esp2016inquiries@bunka.uec.ac.jp.</a> for other inquiries regarding the conference.</p>"

                    ?>
                </article>
            </div>
        </main>
        <footer class="container text-center"></footer>
		<script>
            $("footer").load("footer.html");
            $(".container#header").load("nav.html");
		</script>
	</body>
</html>

