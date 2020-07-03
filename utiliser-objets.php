<title> Date</title>
<?php
$date = new DateTime ( null, new DateTimeZone ('Europe/Paris'));
echo "<p>" . $date1 ->format ("Y-m-d h:i:sa") . "<p>";
?>
