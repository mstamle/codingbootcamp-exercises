<?php date_default_timezone_set ('Europe/Berlin');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A HTML5 document</title>
</head>
<body>


<pre>inside $_GET is <?php var_dump($_GET) ?></pre>
<pre>inside $_POST is <?php var_dump($_POST) ?></pre>
<pre>date_default_timezone_get is <?php echo(date_default_timezone_get()) ?></pre>


<?php
	$howdoyoufeelaboutforms = isset($_POST['howdoyoufeelaboutforms']) ? $_POST['howdoyoufeelaboutforms'] : '';
	$reason = isset($_POST['reason']) ? $_POST['reason'] : '';
	$gohome = isset($_POST['gohome']) ? true : false;

?>

<form method="post">


	<input type="hidden" name="datetime" value="<?php echo date('Y-m-d H:i:s')?>">


	<label>How do you feel about forms
		<input type="text" name="howdoyoufeelaboutforms" value="<?php echo htmlspecialchars($howdoyoufeelaboutforms)?>" />
	</label>
	<br />

	<label>Do you want to go home?
		<input type="checkbox" name="gohome" <?php
		if ($gohome)
			echo 'checked="checked"';
		?> />
	</label>
	<br />

	<label>Please, tell me why.
		<textarea type="checkbox" name="reason"><?php echo htmlspecialchars($reason)?></textarea>
	</label>
	<br />

	<label>What are you up to?<br />
	<input type="radio" name="whatareyouupto" value="beer">beer<br />
	<input type="radio" name="whatareyouupto" value="dance">dance<br />
	<input type="radio" name="whatareyouupto" value="food">food<br />
	<input type="radio" name="whatareyouupto" value="morecode">more code<br />
	</label>
	<br /><br />

	<select name="foo">
		<option value="a">Option A</option>
		<option value="b" selected>Option B</option>
		<option value="c">Option C</option>
	</select>
	<br /><br />

	<input type="submit" />
</form>




</body>
</html>