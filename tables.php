<html lang="en">
<head>
    <title>List of Applicants</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body>

<h3>List of Applicants</h3>
<br>
<table class="table">
    <thead>
    <tr>
        <th>Name</th>
        <th>ID</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $host = "localhost";
    $username = "root";
    $password = "";
    $database = "project";

    $con = mysqli_connect($host, $username, $password, $database);

    if (!$con) {
        die("Failed to connect to database: " . mysqli_connect_error());
    }else {
        $query = "SELECT * FROM license;";
        $result = mysqli_query($con, $query);

        if (!$result) {
            die("Failed to fetch data from database: " . mysqli_error($con));
        }else {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                            <td>" . $row['Name'] . "</td>
                            <td>" . $row['Exam_id']."</td>
                        </tr>";
            }
        }
    }


    mysqli_close($con);
    ?>
    </tbody>
</table>
</body>
</html>
