<?php

if (isset($_POST['year'])) {
  $year = intval($_POST['year']);
  if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
    echo "$year is a leap year.";
  } else {
    echo "$year is not a leap year.";
  }
}
?>

<form method="post" style="padding-top: 20px;">
  <label>Enter a year:</label>
  <input type="number" name="year" required>
  <button type="submit">Check</button>
</form>