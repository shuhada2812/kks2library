<?php

$host="localhost";
$user="root";
$password="";
$db="library";

$data=mysqli_connect($host, $user,$password,$db);

if(isset($_POST['course']))
{
    $course=$_POST["course"];
    $semester=$_POST["semester"];
    $category=$_POST["category"];
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $date = date("Y-m-d H:i:s");
    $time = date("Y-m-d H:i:s");


    $sql="INSERT INTO user (course, semester, category, date, time) VALUES ('$course','$semester','$category','$date','$time')";

    $result=mysqli_query($data,$sql);
    //$result2=mysqli_query($data,$sql2);

    if($result){
        echo "You have successfully checked in to library!";
        header("location:checkins.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>CheckIn</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    </head>
    <body class="bg-primary">
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Check In to The Library</h3></div><br>
                                    <div class="card-body">
                                    <form action="checkins.php" method="POST">
                                    <div class="row mb-4 justify-content-center">
                                                <div class="col-md-7">
                                                    <label for="category">Category: </label>
                                                    <select name="category">
                                                        <option>--CATEGORY--</option>
                                                        <option value="Staff">Staff</option>
                                                        <option value="Student">Student</option></select>
                                                        </div>
                                                </div>
                                            <div class="row mb-4 justify-content-center">
                                                <div class="col-md-7">
                                                    <label for="course" class="col-md-3">Course:     </label>
                                                    <select name="course" class="col-md-7">
                                                        <option>--COURSE--</option>
                                                        <option value="SKE">Sijil Teknologi Elektrik (SKE)</option>
                                                        <option value="STM">Sijil Teknologi Maklumat (STM)</option>
                                                        <option value="STS">Sijil Teknologi Senibina (STS)</option>
                                                        <option value="DTS">Diploma Teknologi Solar Fotovoltan (DTS)</option>
                                                        <option value="NA">Not Applicable</option></select>
                                                    </div>
                                                </div>
                                                <div class="row mb-4 justify-content-center">
                                                <div class="col-md-7">
                                                    <label for="semester">Semester: </label>
                                                    <select name="semester">
                                                        <option>--SEMESTER--</option>
                                                        <option value="1">1</option>
                                                        <option value="2">2</option>
                                                        <option value="3">3</option>
                                                        <option value="4">4</option>
                                                        <option value="5">5</option>
                                                        <option value="6">6</option>
                                                        <option value="NA">Not Applicable</option></select>
                                                    </div>
                                                </div>
                                            </div>
                                    <div class="card-footer text-center py-3">
                                        <div class="medium"><input type="submit" class="btn btn-primary btn-block" name="register" value="Check In"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>