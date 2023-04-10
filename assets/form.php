<?php

    include "_dbconnect.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>

    <!-- CSS -->
    <link rel="stylesheet" href="styles.css">

    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500&display=swap" rel="stylesheet">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
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

    <section class="heading">
        <div class="head-cont">
            <h1>EXAMINATION FORM:</h1>
            <p>1. This form is to be submitted by the students of School of Data Science and Forecasting in order to participate in the examination. <br>2. Students have to print the Examination Hall Ticket after the submission of the form. Without hall ticket no one will be allowed in the examination hall. <br>3. Fill up all the entries carefully, as this information will be used to identify students during the examination. <br>4. Make sure to upload a photograpgh of maximum size of 100X100.
            </p>
        </div>
    </section>

    <div class="root">
        <section class="main-form">
            <form action="form.php" method="post">
                <div class="personal-details">
                    <div class="pd-head">
                        <p>Personal Details</p>
                    </div>
                    <div class="pd-details">
                        <div class="u-name al">
                            <div class="f-cont">
                                <label for="name">Name</label>
                                <input style="width: 29vw;" type="text" placeholder="Student full name">
                            </div>

                            <div class="f-cont">
                                <label for="fname">Father's name</label>
                                <input style="width: 29vw;" type="text" placeholder="Father's full name">
                            </div>
                        </div>

                        <div class="u-p-ad al">
                            <div class="f-cont">
                                <label for="p-add">Permanent address</label>
                                <input style="width: 41vw;" type="text" placeholder="If you are an outsider then enter your native address">
                            </div>
                            <i style="margin: 58px 5px 0 5px;" class="fa-solid fa-right-long fa-xs"></i>
                            <div class="f-cont">
                                <label for="p-mob">Phone No</label>
                                <input type="number" placeholder="999-999-9999">
                            </div>
                        </div>

                        <div class="u-l-ad al">
                            <div class="f-cont">
                                <label for="l-add">Local address</label>
                                <input style="width: 41vw;" type="text" placeholder="Enter you current residential address"> 
                            </div>
                            <i style="margin: 58px 5px 0 5px;" class="fa-solid fa-right-long fa-xs"></i>
                            <div class="f-cont">
                                <label for="l-mob">Phone No</label>
                                <input type="number" placeholder="999-999-9999">
                            </div>
                        </div>
                    </div>
                </div>
    
                <div id="academic-details" class="personal-details">
                    <div class="ac-details">
                        <div class="col-1">
                            <div style="margin-bottom: 5vh;"  class="f-cont">
                                <label for="name">Programme</label>
                                <select name="programmes" id="programmes">
                                    <option value="" selected disabled>Select your programme</option>
                                    <option value="mtech">M.Tech (dual degree) Artificial Intelligence and Data Science</option>
                                    <option value="mca">M.Tech 2 years</option>
                                    <option value="mba">M.B.A Business Analytics</option>
                                    <option value="bda">M.Tech Big Data Analytics</option>
                                </select>
                            </div>

                            <div class="col-1-in-2">
                                <div class="dc">
                                    <div class="f-cont">
                                        <label for="fname">Roll No</label>
                                        <input type="text" placeholder="DS6A2132">
                                    </div>
                                    
                                    <div style="margin: 5vh 0;" class="f-cont">
                                        <label for="p-mob">Year</label>
                                        <input type="text" placeholder="ex: 2nd year">
                                    </div>
    
                                    <div class="f-cont">
                                        <label for="l-mob">Repeat/Semester Fees</label>
                                        <input type="number" placeholder="Rs 35,000">
                                    </div>
                                </div>

                                <div class="dc">
                                    <div class="f-cont">
                                        <label for="p-add">Enrollment No</label>
                                        <input type="text" placeholder="DE2102056">
                                    </div>
                
                                    <div style="margin: 5vh 0;" class="f-cont">
                                        <label for="l-add">Month</label>
                                        <input type="text" placeholder="Examination month"> 
                                    </div>
        
                                    <div class="f-cont">
                                        <label for="l-mob">Receipt No/Date</label>
                                        <input type="date" placeholder="20-05-2023">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width: 20vw;" class="col-2">
                            <div class="col-2-in">
                                <div class="f-cont">
                                    <label for="name">Semester</label>
                                    <input type="text" placeholder="1st Semester">
                                </div>
        
                                <div style="margin: 5vh 0;" class="f-cont">
                                    <label for="fname">Student Photograpgh</label>
                                    <input type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ac-head">
                        <p>Academic Details</p>
                    </div>
                </div>
    
                <div id="subjects" class="personal-details">
                    <div class="pd-head">
                        <p>Subjects</p>
                    </div>
                    <div class="pd-details">
                        <div class="s-cont">
                            <div class="s-1">
                                <div class="f-cont">
                                    <label for="">Subjects</label>
                                    <input style="width: 38vw;" type="text" placeholder="Mathematics (DS6A202)">
                                </div>
                            
                                <div class="f-cont">
                                    <label for="">Date of exam</label>
                                    <input style="width: 19vw;" type="date">
                                </div>
                            </div>
                            <div class="s-1">
                                <input style="width: 38vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input style="width: 19vw;" type="date">
                            </div>
                            <div class="s-1">
                                <input style="width: 38vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input style="width: 19vw;" type="date">
                            </div>
                            <div class="s-1">
                                <input style="width: 38vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input style="width: 19vw;" type="date">
                            </div>
                            <div class="s-1">
                                <input style="width: 38vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input style="width: 19vw;" type="date">
                            </div>
                            <div class="s-1">
                                <input style="width: 38vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input style="width: 19vw;" type="date">
                            </div>
                            <div class="s-1">
                                <input style="width: 38vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input style="width: 19vw;" type="date">
                            </div>
                            <div class="s-1">
                                <input style="width: 38vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input style="width: 19vw;" type="date">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="sub">
                    <input type="submit" value="SUBMIT">
                    <input type="submit" value="PRINT HALL TICKET">
                </div>
            </form>
        </section>
    </div>
    <footer>
        <p>Made by RISHABH JAISWAL</p>
    </footer>
</body>
</html>