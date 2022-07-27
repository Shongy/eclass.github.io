<?php session_start();

// if counter is not set, set to zero
if(!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
}

// if button is pressed, increment counter
if(isset($_POST['button'])) {
    ++$_SESSION['counter'];
}    

// reset counter
if(isset($_POST['reset'])) {
    $_SESSION['counter'] = 0;
}

?>

<form method="POST">
    <input type="hidden" name="counter" value="<?php echo $_SESSION['counter']; ?>" />
    <input type="submit" name="button" value="Counter" />
    <input type="submit" name="reset" value="Reset" />
    <br/><?php echo $_SESSION['counter']; ?>
</form>