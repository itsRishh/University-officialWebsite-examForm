<?php

$showErr = false;
$result = false;
$feeErr = false;
// $result = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    include 'partials/_dbconnect.php';
    include 'partials/_rpdbconnect.php';
        $name = $_POST["name"];
        $fname = $_POST["fname"];
        $padd = $_POST["padd"];
        $pno = $_POST["pno"];
        $ladd = $_POST["ladd"];
        $lno = $_POST["lno"];
        $prog = $_POST["prog"];
        $sem = $_POST["sem"];
        $rollno = $_POST["rollno"];
        $year = $_POST["yr"];
        $semf = $_POST["semf"];
        $eno = $_POST["eno"];
        $month = $_POST["month"];
        $rdt = $_POST["rdt"];
        $s1 = $_POST["s-1"]; /* exam subjects */
        $s2 = $_POST["s-2"];
        $s3 = $_POST["s-3"];
        $s4 = $_POST["s-4"];
        $s5 = $_POST["s-5"];
        $s6 = $_POST["s-6"];
        $s7 = $_POST["s-7"];
        $s8 = $_POST["s-8"];
        $d1 = $_POST["d-1"]; /* exam dates */
        $d2 = $_POST["d-2"];
        $d3 = $_POST["d-3"];
        $d4 = $_POST["d-4"];
        $d5 = $_POST["d-5"];
        $d6 = $_POST["d-6"];
        $d7 = $_POST["d-7"];
        $d8 = $_POST["d-8"];


        $sql = "INSERT INTO `stud_info12` (`Name`, `Father's name`, `Parmanent address`, `Phone No`, `Local address`, `L Phone No`, `Programme`, `Semester`, `Roll No`, `Enrollment No`, `Year`, `Month`, `Repeat/Semester Fees`, `Receipt No/Date`, `Subject 1`, `Date 1`, `Subject 2`, `Date 2`, `Subject 3`, `Date 3`, `Subject 4`, `Date 4`, `Subject 5`, `Date 5`, `Subject 6`, `Date 6`, `Subject 7`, `Date 7`, `Subject 8`, `Date 8`) VALUES ('$name', '$fname', '$padd', '$pno', '$ladd', '$lno', '$prog', '$sem', '$rollno', '$eno', '$year', '$month', '$semf', '$rdt', '$s1', '$d1', '$s2', '$d2', '$s3', '$d3', '$s4', '$d4', '$s5', '$d5', '$s6', '$d6', '$s7', '$d7', '$s8', '$d8');";
        
        
        // --- validation of multiple entries --- [check!]
        
        $csql = "SELECT * FROM `stud_info12` WHERE `Name` = '$name' AND `Roll No` = '$rollno';";
        $csql_res = mysqli_query($conn, $csql);
        $count = mysqli_num_rows($csql_res); // 0
        
        // --- validation of multiple entries ---


        
        // --- validation of fees ---

        $fsql = "SELECT * FROM `fee_details` WHERE `Name` = '$name' AND `Roll No` = '$rollno' AND `Receipt No` = '$rdt';";
        $fsql_res = mysqli_query($rconn, $fsql);
        $fcount = mysqli_num_rows($fsql_res); // 1

        // --- validation of fees ---

        // if all conditions satisfies ... then 
        if ($count == 0 && $fcount == 1) {
            $result = mysqli_query($conn, $sql);
        }
        elseif ($count != 0) {
            $showErr = true;
        }
        elseif ($fcount != 1) {
            $feeErr = true;
        }

        if ($result) {
            session_start();
            $_SESSION['name'] = $name;
            $_SESSION['rollno'] = $rollno;
            $_SESSION['eno'] = $eno;
            header("location: print.php");
        }
    }
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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <?php 
        // entry exists!
        if ($showErr) {
            echo '<div class="alert1">
                <div style="margin-bottom: 0; box-shadow: #f1aeb5 0px 0px 5px 0px;
                border-radius: 0.3rem;" class="alert alert-warning alert-danger fade show" role="alert">
                    <strong>Fatal error!</strong> Below entry already exists!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>';
        }
    ?>
    <?php 
        // entry exists!
        if ($feeErr) {
            echo '<div class="alert1">
                <div style="margin-bottom: 0; box-shadow: #f1aeb5 0px 0px 5px 0px;
                border-radius: 0.3rem;" class="alert alert-warning alert-danger fade show" role="alert">
                    <strong>FEES error!</strong> Student has not paid the fees!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>';
        }
    ?>
    <header class="header-h">
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
            <form action="/examForm/form.php" method="post">
                <div class="personal-details">
                    <div class="pd-head">
                        <p>Personal Details</p>
                    </div>
                    <div class="pd-details">
                        <div class="u-name al">
                            <div class="f-cont">
                                <label for="name">Name <span style="color:red;">*</span></label>
                                <input name="name" style="width: 29vw;" type="text" placeholder="Student full name" required>
                            </div>

                            <div class="f-cont">
                                <label for="fname">Father's name <span style="color:red;">*</span></label>
                                <input name="fname" style="width: 29vw;" type="text" placeholder="Father's full name" required>
                            </div>
                        </div>

                        <div class="u-p-ad al">
                            <div class="f-cont">
                                <label for="p-add">Permanent address</label>
                                <input name="padd" style="width: 41vw;" type="text" placeholder="If you are an outsider then enter your native address">
                            </div>
                            <i style="margin: 58px 5px 0 5px;" class="fa-solid fa-right-long fa-xs"></i>
                            <div class="f-cont">
                                <label for="p-mob">Phone No</label>
                                <input name="pno" type="number" placeholder="999-999-9999">
                            </div>
                        </div>

                        <div class="u-l-ad al">
                            <div class="f-cont">
                                <label for="l-add">Local address</label>
                                <input name="ladd" style="width: 41vw;" type="text" placeholder="Enter you current residential address"> 
                            </div>
                            <i style="margin: 58px 5px 0 5px;" class="fa-solid fa-right-long fa-xs"></i>
                            <div class="f-cont">
                                <label for="l-mob">Phone No</label>
                                <input name="lno" type="number" placeholder="999-999-9999">
                            </div>
                        </div>
                    </div>
                </div>
    
                <div id="academic-details" class="personal-details">
                    <div class="ac-details">
                        <div class="col-1">
                            <div style="margin-bottom: 5vh;"  class="f-cont">
                                <label for="name">Programme<span style="color:red;">*</span></label>
                                <select style="width: 40vw;" name="prog" id="programmes" required>
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
                                        <label for="fname">Roll No <span style="color:red;">*</span></label>
                                        <input name="rollno" type="text" placeholder="DS6A2132" required>
                                    </div>
                                    
                                    <div style="margin: 5vh 0;" class="f-cont">
                                        <label for="p-mob">Academic Year</label>
                                        <input name="yr" type="text" placeholder="ex: 2nd year">
                                    </div>
    
                                    <div class="f-cont">
                                        <label for="l-mob">Repeat/Semester Fees <span style="color:red;">*</span></label>
                                        <input name="semf" type="number" placeholder="Rs 35,000" required>
                                    </div>
                                </div>

                                <div class="dc">
                                    <div class="f-cont">
                                        <label for="p-add">Enrollment No <span style="color:red;">*</span></label>
                                        <input name="eno" type="text" placeholder="DE2102056" required>
                                    </div>
                
                                    <div style="margin: 5vh 0;" class="f-cont">
                                        <label for="l-add">Month</label>
                                        <input name="month" type="month" placeholder="Examination month"> 
                                    </div>
        
                                    <div class="f-cont">
                                        <label for="l-mob">Receipt No <span style="color:red;">*</span></label>
                                        <input name="rdt" type="text" placeholder="" required> 
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="width: 20vw;" class="col-2s">
                            <div class="col-2-in">
                                <div class="f-cont">
                                    <label for="name">Semester <span style="color:red;">*</span></label>
                                    <input name="sem" type="text" placeholder="ex: 1st Semester" required>
                                </div>
        
                                <div style="margin: 5vh 0;" class="f-cont">
                                    <label for="fname">Student Photograph</label>
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
                            <div style="margin-bottom: 3vh;" class="s-1">
                                <div class="f-cont">
                                    <label for="">Subject Code <span style="color:red;">*</span></label>
                                    <input style="width: 12vw;" type="text" placeholder="DS6A202">
                                </div>

                                <div class="f-cont">
                                    <label for="">Subjects <span style="color:red;">*</span></label>
                                    <input name="s-1" style="width: 28vw;" type="text" placeholder="Mathematics">
                                </div>
                            
                                <div class="f-cont">
                                    <label for="">Date of exam <span style="color:red;">*</span></label>
                                    <input name="d-1" style="width: 19vw;" type="date">
                                </div>
                            </div>
                            <div style="margin-bottom: 3vh;" class="s-1">
                                <input style="width: 12vw;" type="text" placeholder="DS6A202">
                                <input name="s-2" style="width: 28vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input name="d-2" style="width: 19vw;" type="date">
                            </div>
                            <div style="margin-bottom: 3vh;" class="s-1">
                                <input style="width: 12vw;" type="text" placeholder="DS6A202">
                                <input name="s-3" style="width: 28vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input name="d-3" style="width: 19vw;" type="date">
                            </div>
                            <div style="margin-bottom: 3vh;" class="s-1">
                                <input style="width: 12vw;" type="text" placeholder="DS6A202">
                                <input name="s-4" style="width: 28vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input name="d-4" style="width: 19vw;" type="date">
                            </div>
                            <div style="margin-bottom: 3vh;" class="s-1">
                                <input style="width: 12vw;" type="text" placeholder="DS6A202">
                                <input name="s-5" style="width: 28vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input name="d-5" style="width: 19vw;" type="date">
                            </div>
                            <div style="margin-bottom: 3vh;" class="s-1">
                                <input style="width: 12vw;" type="text" placeholder="DS6A202">
                                <input name="s-6" style="width: 28vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input name="d-6" style="width: 19vw;" type="date">
                            </div>
                            <div style="margin-bottom: 3vh;" class="s-1">
                                <input style="width: 12vw;" type="text" placeholder="DS6A202">
                                <input name="s-7" style="width: 28vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input name="d-7" style="width: 19vw;" type="date">
                            </div>
                            <div style="margin-bottom: 3vh;" class="s-1">
                                <input style="width: 12vw;" type="text" placeholder="DS6A202">
                                <input name="s-8" style="width: 28vw;" type="text" placeholder="Mathematics (DS6A202)">
                                <input name="d-8" style="width: 19vw;" type="date">
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="sub">
                    <input type="submit" value="SUBMIT">
                </div>
            </form>
        </section>
    </div>
    
    <footer>
        <p>Made by RISHABH JAISWAL</p>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>