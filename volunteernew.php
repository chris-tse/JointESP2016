<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Call For Volunteers - ESP Conference 2016</title>

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
                    $affil = $_POST['affil'];
                    $title = $_POST['title'];
                    $othertitle = $_POST['othertitle'];
                    $position = $_POST['position'];

                    if ($title == "Other") {
                    	$title = $othertitle;
                    }

                    $arr = explode(" ", trim($name));

                    $outputfile = "volunteer/" . $arr[0] . $current_date . ".csv";

                    $fp = fopen($outputfile, 'w');

                    $myfile = fopen($outputfile, "a") or die("<h2>An error has occurred</h2><p>Your submission failed to be sent. Please try again or contact <a href='mailto:esp2016inquiries@bunka.uec.ac.jp.'>esp2016inquiries@bunka.uec.ac.jp.</a> for assistance.");

                    $list = array($name, $email, $affil, $title, $position);
                    fputcsv($fp, $list);
                    // foreach ($list as $fields) {
                    //     fputcsv($fp, $fields);
                    // }
                    fclose($fp);

                    echo "<h1>Thank you for your submission</h1><p>Your submission has been successfully sent. Please allow us 3-5 business days to send a reply. Thank you.</p>"

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