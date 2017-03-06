<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Abstract Submission - ESP Conference 2016</title>

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
                    $pres_type = $_POST['pres_type'];
                    $a1last = $_POST['auth1last'];
                    $a1first = $_POST['auth1first'];
                    $a1email = $_POST['auth1email'];
                    $a1affil = $_POST['auth1affil'];
                    $a1postad = $_POST['auth1postad'];
                    $a2last = $_POST['auth2last'];
                    $a2first = $_POST['auth2first'];
                    $a2email = $_POST['auth2email'];
                    $a2affil = $_POST['auth2affil'];
                    $a2postad = $_POST['auth2postad'];
                    $a3last = $_POST['auth3last'];
                    $a3first = $_POST['auth3first'];
                    $a3email = $_POST['auth3email'];
                    $a3affil = $_POST['auth3affil'];
                    $a3postad = $_POST['auth3postad'];
                    $a4last = $_POST['auth4last'];
                    $a4first = $_POST['auth4first'];
                    $a4email = $_POST['auth4email'];
                    $a4affil = $_POST['auth4affil'];
                    $a4postad = $_POST['auth4postad'];
                    $a5last = $_POST['auth5last'];
                    $a5first = $_POST['auth5first'];
                    $a5email = $_POST['auth5email'];
                    $a5affil = $_POST['auth5affil'];
                    $a5postad = $_POST['auth5postad'];
                    $pres_theme = $_POST['pres_theme'];
                    $pres_title = $_POST['pres_title'];
                    $abstract = $_POST['abstract'];


                    $target_dir = "submissions/";
                    $ptype = substr($pres_type, 0 ,1);

                    $w = 0;

                    $dir = new DirectoryIterator('submissions/');
                    foreach($dir as $file ){
                      $currentfile = $file->getFilename();
                      $currentsub = substr($currentfile, 0, 1);
                      if ($currentsub === $ptype) {
                        $w++;
                      }
                    }
                    $w++;

                    $outputfile = $target_dir . $ptype . "_" . $a1last . "_" . $w . ".cfp";

                    $myfile = fopen($outputfile, "a") or die("An error has occurred and your submission could not be created. Please return to the previous page and try again.");

                    $text = "Presentation Type: " . $pres_type . PHP_EOL . "First Author Name: " . $a1first . " " . $a1last . PHP_EOL . "First Author Email: " . $a1email . PHP_EOL . "First Author Affiliation: " . $a1affil . PHP_EOL . "First Author Affiliation Address:" . PHP_EOL . $a1postad . PHP_EOL . "Second Author Name: " . $a2first . " " . $a2last . PHP_EOL . "Second Author Email: " . $a2email . PHP_EOL . "Second Author Affiliation: " . $a2affil . PHP_EOL . "Second Author Affiliation Address:" . PHP_EOL . $a2postad . PHP_EOL . "Third Author Name: " . $a3first . " " . $a3last . PHP_EOL . "Third Author Email: " . $a3email . PHP_EOL . "Third Author Affiliation: " . $a3affil . PHP_EOL . "Third Author Affiliation Address:" . PHP_EOL . $a3postad . PHP_EOL . "Fourth Author Name: " . $a4first . " " . $a4last . PHP_EOL . "Fourth Author Email: " . $a4email . PHP_EOL . "Fourth Author Affiliation: " . $a4affil . PHP_EOL . "Fourth Author Affiliation Address:" . PHP_EOL . $a4postad . PHP_EOL . "Fifth Author Name: " . $a5first . " " . $a5last . PHP_EOL . "Fifth Author Email: " . $a5email . PHP_EOL . "Fifth Author Affiliation: " . $a5affil . PHP_EOL . "Fifth Author Affiliation Address:" . PHP_EOL . $a5postad . PHP_EOL . "Presentation Theme: " . $pres_theme . PHP_EOL . "Presentation Title: " . $pres_title . PHP_EOL . "Abstract: " . $abstract;

                    fwrite($myfile, $text);
                    fclose($myfile);
                    echo "<h1>Thank you for your submission</h1><p>Your submission has been successfully sent.</p>"
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

