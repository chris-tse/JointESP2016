<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Call for Conference Papers &amp; Journal Papers - ESP Conference 2016</title>

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
                        $target_path = "papersubmissions/";
                        $word_target_path = $target_path . $current_date . basename( $_FILES['word']['name']);
                        $pdf_target_path = $target_path . $current_date . basename( $_FILES['pdf']['name']);

                        if(move_uploaded_file($_FILES['word']['tmp_name'], $word_target_path) && move_uploaded_file($_FILES['pdf']['tmp_name'], $pdf_target_path)) {
                            echo "<h2>Thank you for your submission</h2>
                            <p>The files " .  basename( $_FILES['word']['name']) . " and " . basename( $_FILES['pdf']['name']) . " have been successfully uploaded.</p>";
                        } else{
                            echo "<h2>An error has ocurred</h2>
                            <p>There was an error uploading the files. Please try again or contact <a href='mailto:esp2016paper@bunka.uec.ac.jp'>esp2016paper@bunka.uec.ac.jp</a> for assistance.</p>";
                        }
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