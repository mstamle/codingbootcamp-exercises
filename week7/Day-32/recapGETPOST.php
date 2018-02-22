<?php
// here action part BEGINS

session_start();

if (count($_POST)>0)
{
    $must_in = filter_input(INPUT_POST, 'must_int',FILTER_VALIDATE_INT);
    if (false !== $must_in) // should not use if($must_in) because it will
                            // exclude the 0, which is an Integer
    {
        $_SESSION['must_int'] = $must_in;
        $_SESSION['form_data_recieved_at'] = date('Y-m-d H:i:s');
        header('Location: ?');
        exit;

    }
}
// here action part ENDS
?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>GET, POST Explained</title>
</head>
<body>
<a href="?display=form">Display form</a><br/>
<a href="?">Display none</a><br/><br/>
<!-- place our content here-->
<?php if (isset($_GET['display']) && $_GET['display'] == 'form'): ?>
<form method="post" action="?display=form">
  <input type="submit" value="Submit my form">
     <!-- This must be integer --> <input type="text" name="must_int" value="
     <?php echo isset($_POST['must_int']) ? '': $_POST['must_int']; ?>
     "><br>
    <!-- Display form after successful submition: -->
<label>
  <input type="radio" name="display" value="yes">yes
</label>
<label>
  <input type="radio" name="display" value="no">no
</label><br>
</form>
<?php endif; ?>

</body>
</html>