<?php date_default_timezone_set ('Europe/Berlin') ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>A HTML5 document</title>
</head>
<body>

<pre>inside<input type="hidden" name="foo" value="<?php echo htmlspecialchars($foo); ?>"> $_GET is <?php var_dump($_GET) ?></pre>
<pre>inside $_POST is <?php var_dump($_POST) ?></pre>


<form method="post">

<input type="hidden" name="datetime" value="<?php echo date('Y-m-d H:i:s')?>">

	<input type="submit" />
</form>




</body>
</html>