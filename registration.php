<html>
<head>
    <title>5BM Autumn 2022</title>
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
<form method="post" action="">

<table>
       <tr>
           <td>Name</td>
           <td>
               <input type="text" name="studentName" id="studentName">
           </td>
       </tr> 
       <tr>
           <td>ID</td>
           <td>
               <input type="text" name="studentId" id="studentId">
           </td>
       </tr> 
       <tr>
           <td></td>
           <td>
               <input type="submit" name="submitButton" id="submitButton">
           </td>
       </tr> 
</table>    
</form>

<?php
//echo '<pre>';
//print_r($_POST);
$studentName=$_POST['studentName'];
$studentId=$_POST['studentId'];
$connection=mysqli_connect("localhost","root","","5bmaut21");
mysqli_query($connection,"INSERT INTO student(studentName,studentId)values('$studentName','$studentId')");



?>
</body>

</html>