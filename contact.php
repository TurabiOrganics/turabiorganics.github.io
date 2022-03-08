<?php
        // servername => localhost
        // username => root
        // password => empty
        // database name => staff
        $conn = mysqli_connect("localhost", "root", "", "turabi");
        if(isset($_POST['submit']))
        {
        // Check connection
        if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());
        }
          
        // Taking all 5 values from the form data(input)
        $name =  $_REQUEST['contact-name'];
        $email = $_REQUEST['contact-email'];
        $phone =  $_REQUEST['contact-phone'];
        $message = $_REQUEST['contact-message'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO turabi ( name, email, phone, message )
VALUES ('$name','$email','$phone','$message')";
          
        if(mysqli_query($conn, $sql)){
            echo '<script>alert("Record Inserted Successfully")</script>';
        } else{
            echo "ERROR:";
        }
    }
          
        // Close connection
        mysqli_close($conn);
        ?>



<!DOCTYPE html>
<html lang="en-US" dir="ltr">

  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Turabi Organics</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="assets/img/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicons/favicon-16x16.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicons/favicon.ico">
    <link rel="manifest" href="assets/img/favicons/manifest.json">
    <meta name="msapplication-TileImage" content="assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="assets/css/theme.css" rel="stylesheet" />

  </head>
<body>

    <section class="contact-layout1" style="padding: 0;">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12">
                    <form class="contact-panel__form" method="POST" action="" >
                        <div class="row flex-center">
                            <div class="col-sm-8 col-md-8 col-lg-8">
                                <div class="form-group">
                                    <label for="contact-name">Name *</label>
                                        <input type="text" class="form-control" placeholder="Name" id="contact-name" name="contact-name" required="">
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8 col-lg-8">
                                <div class="form-group">
                                    <label for="contact-email">Email</label>
                                        <input type="email" class="form-control" placeholder="Email" id="contact-email" name="contact-email">
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8 col-lg-8">
                                <div class="form-group">
                                    <label for="contact-Phone">Phone *</label>
                                        <input type="text" class="form-control" placeholder="Phone" id="contact-Phone" name="contact-phone" required="">
                                </div>
                            </div>
                            <div class="col-sm-8 col-md-8 col-lg-80">
                                <div class="form-group mb-20">
                                    <label for="contact-message">Message</label>
                                        <textarea class="form-control" placeholder="Enter your message!" id="contact-message" name="contact-message"></textarea>
                                </div>
                                <div class="custom-control custom-checkbox d-flex align-items-center  mb-20" style="margin-top: 20px">
                                    <button class="btn btn-light text-success" type="submit" name = "submit">Submit</button>
                                </div>
                                    
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script src="vendors/@popperjs/popper.min.js"></script>
    <script src="vendors/bootstrap/bootstrap.min.js"></script>
    <script src="vendors/is/is.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="assets/js/theme.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Chivo:wght@300;400;700;900&amp;display=swap" rel="stylesheet">
</body>
</html>