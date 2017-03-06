<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Pre-Registration Form - ESP Conference 2016</title>

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
                    $famname = $_POST['famname'];
                    $fname = $_POST['fname'];
                    $email = $_POST['email'];
                    $dept = $_POST['dept'];
                    $uniinst = $_POST['uniinst'];
                    $ptitle = $_POST['ptitle'];
                    $mailaddress = $_POST['mailaddress'];
                    $phone = $_POST['phone'];
                    $fax = $_POST['fax'];
                    $pnum = $_POST['pnum'];
                    $feetype = $_POST['feetype'];

                    $outputfile = "prereg/" . $famname . $current_date . ".txt";

                    $myfile = fopen($outputfile, "a") or die("<h2>An error has occurred</h2><p>Your submission failed to be sent. Please try again or contact <a href='mailto:esp2016inquiries@bunka.uec.ac.jp.'>esp2016inquiries@bunka.uec.ac.jp.</a> for assistance.");

                    $text = "Name: " . $fname . " " . $famname . PHP_EOL . "Email: " . $email . PHP_EOL . "Department: " . $dept . PHP_EOL . "University/Institute: " . $uniinst . PHP_EOL . "Professional Title: " . $ptitle . PHP_EOL . "Mailing Address: " . PHP_EOL . $mailaddress . PHP_EOL . "Phone: " . $phone . PHP_EOL . "Fax: " . $fax . PHP_EOL . "Presentation Number: " . $pnum . PHP_EOL . "Fee Type: " . $feetype;

                    fwrite($myfile, $text);
                    fclose($myfile);

                    echo "<h1>Pre-Registration Submitted.</h1><p>Dear Participant(s),</p><p>Thank you very much for your pre-registration. This is to confirm that your pre-registration has been submitted. Please remember to pay the early registration fee instead of the late registration fee when you arrive at the conference. We look forward to seeing you at the conference.</p><p>If you required a Letter of Invitation, <a href='visas.html'>click here to proceed to the LOI page</a>.</p><p><a href='index.html'>Click here to return to the homepage</a></p>"

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