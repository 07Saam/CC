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
       <script>
        function Get() {
            var selectedValue = document.getElementById("Semester").value;

            $.ajax({
                type: "POST",
                data: { semester: selectedValue },
                success: function(response) {
                    document.getElementById("output").innerHTML = response;
                },
                error: function(xhr, status, error) {
                    console.log("Error sending value to PHP: " + error);
                }
            });
        }
        function Pick() {
            var selectedValue = document.getElementById("Subject").value;

            $.ajax({
                type: "POST",
                data: { subject: selectedValue },
                success: function(response) {
                    document.getElementById("output").innerHTML = response;
                },
                error: function(xhr, status, error) {
                    console.log("Error sending value to PHP: " + error);
                }
            });
        }
        function QUE() {
            var selectedValue = document.getElementById("ques").value;

            $.ajax({
                type: "POST",
                data: { que: selectedValue },
                success: function(response) {
                    document.getElementById("output").innerHTML = response;
                },
                error: function(xhr, status, error) {
                    console.log("Error sending value to PHP: " + error);
                }
            });
        }
    </script>
    <style type="text/css">
    </style>
</head>

<body>
    <?php
    if (isset($_POST['semester'])==null) {
    ?>
        <label>Enter Sem:</label>
        <select onchange="Get()" id="Semester">
            <option value="">Choose option</option>
            <option value="Apple">Apple</option>
            <option value="Banana">Banana</option>
            <option value="Coconut">Coconut</option>
            <option value="Blueberry">Blueberry</option>
            <option value="Strawberry">Strawberry</option>
        </select>
    <?php
    }
    ?>

    <?php
    if (isset($_POST['semester'])and isset($_POST['subject'])==null) {
        ?>
        <label>Enter Subject:</label>
        <select onchange="Pick()" id="Subject">
            <option value="">Choose option</option>
            <option value="NT">NT</option>
            <option value="OOSE">OOSE</option>
            <option value="Java">Java</option>
            <option value="DBMS">DBMS</option>
            <option value="PHP">PHP</option>
        </select>
    <?php
    }
    ?>

<?php
    if (isset($_POST['semester']) and isset($_POST['subject']) and isset($_POST['que'])==null) {
        ?>
        <label>Enter Subject:</label>
        <select onchange="QUE()" id="ques">
            <option value="">Choose option</option>
            <option value="NT">1</option>
            <option value="OOSE">2</option>
            <option value="Java">3</option>
            <option value="DBMS">4</option>
            <option value="PHP">5</option>
        </select>
    <?php
    }
    ?>
    <div id="output"></div>
</body>
</html>
