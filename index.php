<?php

$error =""; $successMessage = "";

    if ($_POST) {
        if (!$_POST["email"]) {
            $error .= "An Email is required.<br>";
        }
        if (!$_POST["subject"]) {
            $error .= "A subject is required.<br>";
        }
        if (!$_POST["content"]) {
            $error .= "Content is required.<br>";
        }
        if ($_POST["email"] && filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) === false) {
            $error .= "The email address is not valid";
        }
        if ($error != "") {
            $error = '<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your email</strong></p>' . $error . '</div>';
        } else {

            $emailTo = "spaced43@gmail.com";
            $subject = $_POST['subject'];
            $content = $_POST['content'];
            $headers = "From: ".$_POST['email']."\r\n";
            $headers .= "Reply-To: ".$_POST['email']."\r\n";
            $headers .= "Return-Path: ".$_POST['email']."\r\n";           
            $headers .= "Content-Type: text/html; charset=iso-8859-1 \r\n";
            $headers .= "MIME Version: 1.0 \r\n";             
            $headers .= "BCC: williambray.design@gmail.com";

            if (mail($emailTo, $subject, $content, $headers)) {
                $successMessage = '<div class="alert alert-success" role="alert">Your message was sent successfully, we\'ll get back to you ASAP!</div>';
            } else {
                $error = '<div class="alert alert-danger" role="alert">Your email could not be sent - please try again later</div>';
            }
        }
    }    

?>

<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <script src="js/bootstrap.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="css/animate.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstyle.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600" rel="stylesheet">
        <script src="https://use.fontawesome.com/fa879b533e.js"></script>
        <link rel="shortcut icon" href="images/tabicon.png">
        
        <title>William Bray - Front-End Developer</title>
    </head>
    <body>
        <div class="container-fluid no-gutters" id="fullpage">
            <div class="container-fluid no-gutters" id="banner">
                <div class="container" id="logoContainer">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="centerBlock">
                                <a href="/" class="btn d-flex align-self-center mr-3 pagination-centered"id="logobtn">
                                    <img src="images/logo.png" class="wow fadeIn" data-wow-delay="1s" alt="" id="logoicon">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row justify-content-center align-items-end" id="bannerRow">
                        <div class="col">
                            <h1 class="centerBlock wow fadeInDown" id="bannerTxt">Hi, I'm William and I'm a Front-End web developer.</h1>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="row justify-content-center align-items-end" id="btnResume">
                        <div class="col">
                            <div class="resume wow fadeIn" data-wow-delay="2s" >
                                <a href="images/WilliamBrayResume-min.pdf" target="_blank" id="resume" class="centerBlock wow pulse" data-wow-delay="2s" data-wow-duration="2s" data-wow-iteration="50"> my resume </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container" id="arrowRow">
                    <div class="row justify-content-center">
                        <div class="col-lg-12">
                            <div>
                                <a href="#" onclick="$('#aboutText').animatescroll(animatescroll({scrollSpeed:2000,easing:'easeInCubic'});" id="arrow" class="wow fadeIn" data-wow-delay="2.5s">
                                    <img src="images/arrow.png" class="centerBlock wow bounce" data-wow-duration="2s" data-wow-iteration="50" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row justify-content-center" id="aboutRow">
                    <div class="col">
                        <h2 class="centerBlock" id="aboutLink">About Me</h2>
                    </div>
                </div>
                <div class="row justify-content-center align-items-start">
                    <div class="col">
                        <img src="images/placeholder.png" class="centerBlock wow fadeIn">
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col">
                        <p id="aboutText">
                            Hi, my name is William Bray. I'm a self taught Front end Web Developer with a passion for the design and usabilty of a website.
                            I started out doing graphic design back in 2012 creating artwork for creators on youtube to use for their channels. Eventually
                            I began seeking ways to challenge my skills within design and began creating user interfaces for applications and websites.
                            After making these designs for a while I wanted to challenge myself even more by seeing if I could teach myself to create these
                            designs as real, working, prototype websites. Ever since creating my first web page I have wanted to learn more and more and push
                            my skills as much as I could to create even better websites and learn new frameworks and programing languages.
                        </p>
                    </div>
                </div>
            </div>
            <div class="container-fluid" id="projectsCont">
                    <div class="row justify-content-center" id="projectRow">
                        <div class="col">
                            <h2 class="centerBlock">Personal Projects</h2>
                        </div>
                    </div>
                <div class="container">
                    <div class="row" id="projectsRow">
                        <div class="col-sm-12 col-md-6 col-lg-6" id="projectsCol">
                            <h3 class="centerBlock" id="designsHeader">Designs & Concepts</h3>
                            <a href="https://www.behance.net/WilliamBray" target="_blank" id="iconLinks" class="centerBlock"><i class="fa fa-behance fa-4x"></i></a>
                            <p>
                                Here are some elegent designs and concepts I have made
                                after looking at many websites and wanting to see how my designs
                                could change the way users see and interact with those websites.
                            </p>
                            <a href="https://www.behance.net/WilliamBray" target="_blank" id="projectBtn" class="centerBlock"> see more </a>
                        </div>
                        <div class="col-sm-12 col-md-6 col-lg-6" id="projectsCol">
                            <h3 class="centerBlock" id="websitesHeader">Websites & Applications</h3>
                            <a href="#" id="iconLinks" target="_blank" style="pointer-events: none; cursor: default; color:gray;" class="centerBlock"><i class="fa fa-codepen fa-4x"></i></a>
                            <p>
                                These are a selection of websites and applications I have created
                                to test and expand my knowledge of different languages and tools
                                that I have taught myself. 
                            </p>
                            <a href="#" id="projectBtn" style="pointer-events: none; cursor: default; color:gray; border:2px solid gray;" target="_blank" class="centerBlock"> see more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container" id="contactCont">
                <div class="row justify-content-center" id="contactRow">
                    <div class="col">
                        <h2 class="centerBlock">Get in Contact</h2>
                    </div>
                </div>
                <div class="row justify-content-center" id="contactBaseRow">
                    <div class="col-12">
                        <p>
                            Now you have learnt a little bit about me and what I can
                            do why not get in contact with me and we can start planning your new website. 
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-8 col-lg-8" id="error"><? echo $error.$successMessage; ?></div>
                    <div class="container">                    
                        <form method="post">
                        <div class="row justify-content-center">
                            <div class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="email">Email Address</label>
                                <input type="email" class="form-control" method="post" id="email" name="email" placeholder="Enter Email">
                            </div>
                            <div class="form-group col-sm-12 col-md-4 col-lg-4">
                                <label for="subject">Subject</label>
                                <input type="text" class="form-control" id="subject" name="subject" method="post" placeholder="">
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="form-group col-sm-12 col-md-8 col-lg-8">
                                <label for="content">What would you like to say?</label>
                                <textarea class="form-control" id="content" name="content" rows="12"></textarea>
                            </div>
                        </div>
                        <div class="row justify-content-center">
                                <button type="submit" id="submit" class="btn btn-primary" onclick="return getData()">Send E-mail</button>
                            </div>
                        </div>
                        </form>
                    </div>
                    <div class="col-12">
                        <p class="hintText">
                            Can't send an email using this handy little form? <a href="mailto:spaced43@gmail.com">Click Here</a> instead!
                        </p>
                    </div>
                </div>  
            </div>
            <div class="container-fluid" id="footer">
                <div class="container" id="footerCont">
                    
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12">
                            <p id="footerText">Visit all my Social Media.</p>
                        </div>
                        <div class="col-sm-12 col-md-12 col-lg-12" id="footerBase">
                            <div class="centerBlock">
                                <a href="https://twitter.com/SPCDFX" id="footerLinks" target="_blank"><i class="fa fa-twitter fa-2x"></i></a>
                                <a href="https://instagram.com/spacedfx/" id="footerLinks" target="_blank"><i class="fa fa-instagram fa-2x"></i></a>
                                <a href="mailto:spaced43@gmail.com" id="footerLinks" target=""><i class="fa fa-envelope-o fa-2x"></i></a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col">
                            <p id="footerText" class="centerBlock">All rights reserved. Website by <a href="https://github.com/spcdfx" id="myLink"><b>William Bray.</b></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/animatescroll.min.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
          new WOW().init();
        </script>
        <script type="text/javascript">

            $("form").submit(function (e) {
            
                var error = "";
            
                    if ($("#email").val() == "") {
                        error += "The email field is required.<br>"
                    }
                    if ($("#subject").val() == "") {
                        error += "The subject field is required.<br>"
                    }
                    if ($("#content").val() == "") {
                        error += "The Message feild is required.";
                    }
                    if (error != "") {

                    $("#error").html('<div class="alert alert-danger" role="alert"><p><strong>There were error(s) in your form</strong></p>' + error + '</div>');
            
                    return false;
            
                    } else {
                        return true;
                    }
                        return false;
            });
        </script>
    </body>

</html>