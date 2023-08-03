<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login | Q&A Repository</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="Rcss1.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="Documentations/SPPU_PNG.webp">
</head>

<body>
    <?php
        include 'Database.php';
        if (!$conn) {
            die("Error error" . mysql_error());
        }
    ?>
    <form method='post' action=''>
        <label >Course</label>
        <select id='course'name='course'>
            <option value='' disabled selected>Select Subject</option>
            <option value='MCA'>MCA</option>
            <option value='MBA'>MBA</option>
        </select>
        <input type=submit name='cour'value='Go'>
        <?php
            global $Course;
            if(isset($_POST['cour']))
            {
                $Course=$_POST['course'];
            }
             $sql="Select Subject_Id,Subject from subjects where Course='$Course'";
             $result=mysqli_query($conn,$sql);
             while ($row = $result->fetch_assoc()) {
                 $options[] = $row;
             }
             setcookie('C',$Course, time() + 86400);
        ?>
    </form>
    <form action='Teacher1.php'method='post'>
        <label> Subject :</label>
        <select id='subject' name='subject'>
            <option value='' disabled selected>Select Subject</option>
            <?php
                foreach ($options as $option) {
                    echo '<option value="' . $option['Subject_Id'] . '">' . $option['Subject'] . '</option>';
                }
                ?>
        </select>
        <select id='year' name='year'>
            <option value='' disabled selected>Select Year</option>
            <option value='2017'>2017</option>
            <option value='2018'>2018</option>
            <option value='2019'>2019</option>
            <option value='2020'>2020</option>
            <option value='2021'>2021</option>
            <option value='2022'>2022</option>
        </select>
        <input type='submit' value='View Unanswered Questions' name='unans'>
        <input type='submit' value='View Answered Questions' name='ans'>
    </form>
        
</body>

</html>
