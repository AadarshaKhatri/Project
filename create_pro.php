
<style>
    *{
        margin: 0px;
        padding: 0px;
    }
    body{
        background: url("lice.jpg ")no-repeat;
        background-position: center;
        background-size: cover;

    }

    body section{
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        background: rgba(0, 0, 0, 0.5);
    }

    .box{
        position: relative;
        width: 50%;
        max-width: 500px;
        padding: 20px;

        background: rgba(0, 0, 0, 0.3);
        border: 2px solid rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(30px);
        border-radius: 20px;
        text-align: center;
    }

    .box p{
        margin: 10px;
        font-size: 2em;
        font-weight: 300;
        text-align: center;
        justify-content: space-evenly;
        color: #ffffff;
        padding-bottom: 40px;
        font-family: sans-serif;

    }
</style>
<?php
$host = "localhost";
$username ="root";
$password="";
$database="project";

$con =  mysqli_connect($host,$username,$password,$database);
if(!$con){
    echo "Failed";
}else {


    if (isset($_POST['submit'])) {
        $name = mysqli_real_escape_string($con, $_POST['Name']);
        $trainerName = mysqli_real_escape_string($con, $_POST['Trainer_Name']);
        $trainerLicenceNumber = mysqli_real_escape_string($con, $_POST['Contact_number']);
        $email = mysqli_real_escape_string($con, $_POST['3Email']);
        $BloodGroup = mysqli_real_escape_string($con, $_POST['Blood_Group']);
        $citizenshipIssuedDistrict = mysqli_real_escape_string($con, $_POST['Citizenship_issued_district']);
        $citizenshipNumber = mysqli_real_escape_string($con, $_POST['Citizenship_Number']);
        $passportIssuedCountry = mysqli_real_escape_string($con, $_POST['Passport_issued_country']);
        $passportNumber = mysqli_real_escape_string($con, $_POST['Passport_Number']);
        $identityMark = mysqli_real_escape_string($con, $_POST['Identity_Mark']);
        $prepExamID = rand(1, 9999);

        $query = "SELECT Exam_id FROM license WHERE Exam_id = '$prepExamID'";
        $result = mysqli_query($con, $query);
        while (mysqli_num_rows($result) > 0) {
            $prepExamID = rand(1, 9999);
            $query = "SELECT Exam_id FROM license WHERE Exam_id = '$prepExamID'";
            $result = mysqli_query($con, $query);
        }


            $query = "insert into license (Name, Trainer_Name, Trainer_licence_number, 3Email, Blood_Group, Citizenship_issued_district, Citizenship_Number, Passport_issued_country, Passport_Number, Identitiy_Mark, Exam_id) VALUES ('$name' , '$trainerName', '$trainerLicenceNumber', '$email',    '$BloodGroup', '$citizenshipIssuedDistrict', '$citizenshipNumber', '$passportIssuedCountry', '$passportNumber', '$identityMark','$prepExamID')";

            if ($con->query($query) == true) {
                echo "<html lang= en>
<head>
    <title> Submitted</title>
</head>

<body>
<section>
    <div class = box >
        
<p>Thanks for filling up the form. Your form has been registered. You will soon have to attend your written exam, till then keep practising . Also your examination  ID is $prepExamID!!!! </p>
</section>
</body>
</html>";

            } else {
                echo "Failed";
            }
        }
    }


