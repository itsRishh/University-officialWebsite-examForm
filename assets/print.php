<?php

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SDSF Examination Form</title>

    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.rtl.min.css" integrity="sha384-T5m5WERuXcjgzF8DAb7tRkByEZQGcpraRTinjpywg37AO96WoYN9+hrhDVoM6CaT" crossorigin="anonymous">

    <style>
        @page { size: auto; margin: 10mm; margin-right: -70px; margin-left: -70px;}
        @media print {

            * {
                margin: 0;
                padding: 0;
            }

            /* header */
            header {
                padding: 2.5vh 6vw 0;
                margin: 0 5vw !important;
                color: #252525;
                /* border-radius: 0 0 0.8rem 0.8rem; */
                box-shadow: none;
            }

            .main-img {
                width: 18%;
                border-radius: 100%;
            }
            
            .main-img img {
                width: 100%;
            }

            .main-name{
                padding: 2vh 1vw;
            }
            
            .main-name h1 {
                font-size: 1.7em !important;
            }
            
            .f-p {
                font-size: 1.5em;
            }
            
            /* header */

            .dec{
                margin: 10vh 8vw;
                text-align: center;
                font-size: 1.2em;
                word-spacing: 2px;
            }
            .eh-main {
                text-align: center;
                margin: 5vh 0;
            }
            .eh{
                text-align: center;
                margin-top: 0vh;
                display: inline-block;
            }
            .eh h1{
                border: 2px solid #072359;
                border-radius: 0.6rem;
                padding: 1vh;
                font-size: 1em;
            }
            .eh p{
                font-size: 1em;
                font-weight: 500;
            }
            .details{
                margin: 0 7vw;
                font-size: 1.3em;
                display: flex;
                justify-content: space-between;
                align-items: center;
            }

            .details span {
                font-size: 1.8em;
                margin-left: 5vw;
            }

            .img-col {
                width: 20%;
            }
            .stud-cont{
                padding: 0 5vw;
            }
            .det-col{
                display: flex;
                align-items: center;
            }
            .label-col{
                font-weight: 500;
            }
            .entry-col{
                margin-left: 4.5vw;
                font-size: 1.2em;
                font-weight: 500;
            }
            .sign{
                display: flex;
                align-items: center;
                justify-content: end;
                margin-right: 8vw;
            }
            .signin {
                font-size: 1em;
            }

            .signin hr {
                border: none;
                border-bottom: 0.01em solid #343434;
                transform: scale(300%);
                opacity: 100%;
            }

            .sub {
                display: none;
            }
            /* print */
        }
    </style>
</head>
<body style="font-family: 'Outfit', sans-serif;"> 
    <header>
        <div class="main-img">
            <img style="border-radius: 100%;" src="images/sdsfjpeg2.jpeg" alt="institution-logo">
        </div>
        <div class="main-name">
            <h1>DEVI AHILYA VISHWAVIDHYALAYA</h1>
            <p class="f-p">School of Data Science and Forecasting</p>
            <p class="s-p">Indore (M.P.)</p>
        </div>
        <div class="main-img">
            <img src="images/davv.png" alt="institution-logo">
        </div>
    </header>

    <section class="stud-info">
        <div class="stud-cont">
            <div class="eh-main">
                <div class="eh">
                   <H1 style="color: #072359;">EXAMINATION HALL TICKET</H1> 
                   <P>2023-24</P>
                </div>
            </div>
            <div class="details">
                <div class="det-col">
                    <div class="label-col">
                        <p>Name: </p>
                        <p>Roll no: </p>
                        <p>Enrollment no: </p>
                    </div>
                    <div class="entry-col">
                        <p><?php echo $_SESSION['name'] ?></p>
                        <p><?php echo $_SESSION['rollno'] ?></p>
                        <p><?php echo $_SESSION['eno'] ?></p>  
                    </div>
                </div>
                <div class="img-col">
                    <img width="100%" src="images/dummy.png" alt="img">
                </div>
            </div>
            <div class="dec">
                <p>This is hereby to declare that Mr./Mrs. <span style="font-weight: 500; font-size: 1.1em;"><?php echo $_SESSION['name'] ?></span> is eligible to give the examination.</p>
            </div>
            <div class="sign">
                <div class="signin">
                    <hr>
                    <p>HEAD</p>
                </div>
            </div>
        </div>
    </section>
    <div style="margin: 3vh 0;" class="sub">
        <input type="submit" value="PRINT" onclick="window.print();return false;">
    </div>
</body>
</html>