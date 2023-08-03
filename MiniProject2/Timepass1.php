<!DOCTYPE html>
<html lang="en">
<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Faculty Login | Q&A Repository</title>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="Rcss1.css" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="Documentations/SPPU_PNG.webp">
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <?php  
                include 'Database.php';
                if(!$conn)
                {
                    die ("Error error".mysql_error());                
                }   
                $Query="Select Q_Id,Question from questions;";
                //$result = $conn->query($query);

// Prepare the array to store the data
                $options = array();
                $result=mysqli_query($conn,$Query);
                if ($result->num_rows > 0) {
                    // Loop through the result set and fetch data
                    while ($row = $result->fetch_assoc()) {
                        $options[] = $row;
                    }
                }?>
                <label>Select Question</label>
                <?php 
                    if (!isset($_POST['Question'])) {
                         ?>
                       <select id='Question'onchange="getValue(this)">
                        <option selected disabled value="">Select an option</option>
                         <?php
                        foreach ($options as $option) {
                                echo '<option value="' . $option['Q_Id'] . '">' . $option['Question'] . '</option>';
                            }
                        }
                ?>
                    <script>
                    function getValue(obj){
                    alert(obj.value);
                    }
                    </script>
                </select>
</body>
</html>
