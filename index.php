<?php

$host="localhost";
$user="root";
$password="";
$db="library";

$data=mysqli_connect($host, $user,$password,$db);

if(isset($_POST['slct1']))
{
    $course=$_POST["slct2"];
    $semester=$_POST["slct3"];
    $category=$_POST["slct1"];
    date_default_timezone_set("Asia/Kuala_Lumpur");
    $date = date("Y-m-d H:i:s");
    $time = date("Y-m-d H:i:s");


    $sql="INSERT INTO user (course, semester, category, date, time) VALUES ('$course','$semester','$category','$date','$time')";

    $result=mysqli_query($data,$sql);
    //$result2=mysqli_query($data,$sql2);

    if($result){
        echo "You have successfully checked in to library!";
        header("location:index.php");
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
<script>
function populate(s1,s2,s3){
	var s1 = document.getElementById(s1);
	var s2 = document.getElementById(s2);
    var s3 = document.getElementById(s3);
	s2.innerHTML = "";
    s3.innerHTML = "";
	if(s1.value == "Staff"){
		var optionArray = ["NA|Not Applicable"];
        var optionsArray = ["NA|Not Applicable"];
	} else if(s1.value == "Student"){
		var optionArray = ["|Course","SKE|Sijil Teknologi Elektrik (SKE)","STM|Sijil Teknologi Maklumat (STM)","STS|Sijil Teknologi Maklumat (STM)","DTS|Diploma Teknologi Solar Fotovoltan (DTS)"];
        var optionsArray = ["|Semester","1|1", "2|2", "3|3", "4|4", "5|5", "6|6"];
	}
	for(var option in optionArray){
		var pair = optionArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s2.options.add(newOption);
	}
    for(var option in optionsArray){
		var pair = optionsArray[option].split("|");
		var newOption = document.createElement("option");
		newOption.value = pair[0];
		newOption.innerHTML = pair[1];
		s3.options.add(newOption);
	}

}
</script>
</head>
<body class="bg-primary">
<div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center column">
                            <div class="col-lg-5">
                                <div class="card shadow-lg border-0 rounded-lg mt-5">
                                    <div class="card-header"><h3 class="text-center font-weight-light my-4">Check In to The Library</h3></div><br>
                                    <div class="card-body">
                                    <form action="index.php" method="POST">
                                    <div class="row mb-4 justify-content-center">
                                                <div class="col-md-7">
                                                <label for="category" class="col-md-3">Category: </label>
                                                <select id="slct1" name="slct1" onchange="populate(this.id,'slct2', 'slct3')">
                                                    <option value="">Category</option>
                                                    <option value="Staff">Staff</option>
                                                    <option value="Student">Student</option>
                                                </select>
                                                </div>
                                    </div>
                                    <div class="row mb-4 justify-content-center">
                                                <div class="col-md-7">
                                                <label for="course" class="col-md-3">Course:     </label>
                                                <select id="slct2" name="slct2" class="col-md-7">
                                                    <option value="">Course</option>
                                                </select>
                                                </div>
                                    </div>
                                    <div class="row mb-4 justify-content-center">
                                                <div class="col-md-7">
                                                    <label for="semester" class="col-md-3">Semester: </label>
                                                <select id="slct3" name="slct3">
                                                    <option value="">Semester</option>
                                                </select>
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
</html>