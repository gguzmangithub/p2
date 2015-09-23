<?php
error_reporting(-1); # Report all PHP errors
ini_set('display_errors', 1);
?>
	
<!DOCTYPE html>
<html>
<head>
	<title>Germ&#225;n's xkcd password</title>
	<?php require 'logic.php'; ?>
  <link rel="stylesheet" href="http://gguzman.me/p2/css/formatstyle.css" type="text/css" />
  <link href="http://gguzman.me/p2/css/formatstyle.css" rel="stylesheet" />
</head>	
<body>
	
	<h1>Germ&#225;n's xkcd password</h1>

<h3>Welcome to Germ&#225;n's xkcd password program!
This program was created as an inspiration of <a href="https://xkcd.com/936/">xkcd style password generator</a> </h3>
<!-- This form reviews the variables assiggned by logic.php, executes arrays
 functions and displays a message to the user-->	
<form  method='POST' action='index.php'>
<fieldset>
<p>Please enter the number of words you wish to use in your password (max 5):</p>
<input type="text" name="pwdnumwords" value="<?php if (isset($_POST['pwdnumwords'])) echo $_POST['pwdnumwords']; ?>">
<br>
<br>
<input type="checkbox" name="pwdwithnum" value="your value" <?php if(isset($_POST['pwdwithnum'])) echo "checked='checked'"; ?>><label>include number</label>
<br>
<br>
<input type="checkbox" name="pwdwithsc" value="your value" <?php if(isset($_POST['pwdwithsc'])) echo "checked='checked'"; ?>><label>include special character</label>
<br>
<br>
<?php if($result == 3) {?>
<?php echo "You entered a value greater than 5 or less than 1 or an unacceptable format"; ?>
<?php } elseif($result == 1) {?>
<?php echo $passwords[$test]; ?>  
<!-- Print the contestants array -->
<?php } else{$randpasswords = array_rand($passwords,$test); ?>  
<p> <?php foreach($randpasswords as $key => $value) {?> 
<?php echo $passwords[$value].'&nbsp;&nbsp;';}}?>
<?php echo $addnumtopwd.$addsptopwd; ?> </p>
 <br>
 <br>
<input type="submit" value="Get Password"/>
 </fieldset>
</form>
</body>
</html>