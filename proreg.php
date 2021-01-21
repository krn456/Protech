<?php
error_reporting($level=NULL);
        $a11=$_POST['name'];
        $b11=$_POST['addre'];
        $c11=$_POST['num'];
	$d11=$_POST['eid'];
	$e11=$_POST['subject'];
	$f11=$_POST['course'];
        $con = mysqli_connect("localhost","root","","proform");        
       mysqli_select_db($con,"proform");              
   $ins="insert into proform(name,address,mobNo,mailId,course,beginner) values('$a11','$b11','$c11','$d11','$e11','$f11')";

if(isset($_POST['regi']))
   {
    	 mysqli_query($con, $ins);
   }

?>
<html>
<head></head>
<body>
<center><h1> YOU REGISTRATION IS SUCCESS!</h1></center>
</body>
</html>