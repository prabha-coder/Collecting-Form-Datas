<?php
  $con=mysqli_connect("localhost","root","","venz");
  $f=$_POST['firstname'];
  $l=$_POST['lastname'];
  $g=$_POST['gender'];
  $c=$_POST['email'];
  $v=$_POST['password'];
  
      $a="INSERT INTO venz(fname,lname,gender,email,pass) VALUES('$f','$l','$g','$c','$v')";
  if (!mysqli_query($con,$a))
{
die('Error: ' . mysqli_error());
}
else
{
echo "<script>
alert('Details Added Successfully');
 </script>";
}
    mysqli_close($con)
?>