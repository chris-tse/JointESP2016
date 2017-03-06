<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Letter of Invitation - ESP Conference 2016</title>

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
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $passportnumber = $_POST['passportnumber'];
                    $birthdate = $_POST['birthdate'];
                    $gender = $_POST['gender'];
                    $dateissue = $_POST['dateissue'];
                    $dateexpiration = $_POST['dateexpiration'];
                    $nationality = $_POST['nationality'];
                    $address = $_POST['address'];
                    $postalcode = $_POST['postalcode'];
                    $contact = $_POST['contact'];
                    $university = $_POST['university'];
                    $professional = $_POST['professional'];
                    $datearrival = $_POST['datearrival'];
                    $datedeparture = $_POST['datedeparture'];
                    $hotel = $_POST['hotel'];
                    $checkpreregister = $_POST['preregister'];
                    $formtype = $_POST['formtype'];
                    $confid = $_POST['confid'];
                    $emailorpaper = '';
                    $preregistered = 'No';

                    $arr = explode(" ", trim($name));

                    if($_POST['1000check'][0] == 'email') {
                    	$emailorpaper = 'Email';
                    }

                    if($_POST['1000check'][0] == 'paper') {
                    	$emailorpaper = 'Paper';
                    }

                    if(count($_POST['1000check']) == 2) {
                    	$emailorpaper = 'Both';
                    }

                    if($_POST['preregister'] == 'agree') {
                    	$preregistered = "Yes";
                    }

                    $outputfile = "loi/" . $arr[0] . $current_date . ".txt";

                    $myfile = fopen($outputfile, "a") or die("<h2>An error has occurred</h2><p>Your submission failed to be sent. Please try again or contact <a href='mailto:esp2016inquiries@bunka.uec.ac.jp.'>esp2016inquiries@bunka.uec.ac.jp.</a> for assistance.");

                    $text = "Name: " . $name . PHP_EOL . "Email: " . $email . PHP_EOL . "Passport number: " . $passportnumber . PHP_EOL . "Birth Date: " . $birthdate . PHP_EOL . "Gender: " . $gender . PHP_EOL . "Date of Issue: " . $dateissue . PHP_EOL . "Date of Expiration: " . $dateexpiration . PHP_EOL . "Nationality: " . $nationality . PHP_EOL . "Address: " . $address . PHP_EOL . "Postal Code: " . $postalcode . PHP_EOL . "Contact Info: " . $contact . PHP_EOL . "Univeristy & Department: " . $university . PHP_EOL . "Professional Title: " . $professional . PHP_EOL . "Date of Arrival (yyyy/mm/dd): " . $datearrival . PHP_EOL . "Date of Departure (yyyy/mm/dd): " . $datedeparture . PHP_EOL . "Hotel: " . $hotel . PHP_EOL . "Form Type: " . $formtype . PHP_EOL . "Email or Paper LOI: " . $emailorpaper . PHP_EOL . "Is pre-registered? " . $preregistered . PHP_EOL . "Conference ID#: " . $confid;

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

