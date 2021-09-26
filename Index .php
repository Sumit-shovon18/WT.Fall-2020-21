<?php include "Logic/formvalid.php"; ?>

<!DOCTYPE html>
<html>
<body>
<h1>Registration Form</h1>
<form action="" method="post">
First name: <input type="text" name="fname" minlength="5"> <?php echo $validatename; ?>
<br>
Last name: <input type="text" name="lname" minlength="5"> <?php echo $validatename2; ?>
<br>

Age: <input type="number" name="age"> <?php echo $validateage; ?>
<br>

<p>Designation:</p>
<input type="radio" id="jp" name="designation" value="Junior Programmer">
<label for="jp">Junior</label><br>
<input type="radio" id="sp" name="designation" value="Senior Programmer">
<label for="sp">Senior</label><br>
<input type="radio" id="pl" name="designation" value="Project Lead">
<label for="pl">Lead</label>
<br>
<?php echo $validateradio; ?>
<br>


<p>Preferred Language:</p> 
<input type="checkbox" id="java" name="java" value="JAVA">
JAVA<br>
<input type="checkbox" id="php" name="php" value="PHP">
PHP<br>
<input type="checkbox" id="cpp" name="cpp" value="C++">
C++<br>
<br>
<?php echo $validatecheckbox; ?>

<?php echo $v1;?>

<?php echo $v2;?>

<?php echo $v3;?>
<br>


<br>
E-mail: <input type="text" name="email"> <?php echo $validateemail; ?>
<br>
<br>
Password: <input type="password" name="password" minlength="8"> <?php echo $validatepass; ?>
<br>

<br>



<input type="submit" value="Submit">
<input type="submit" value="Reset">
</form>
</body>
</html>
