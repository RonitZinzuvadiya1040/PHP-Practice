<?php

// H - 24-hour format of an hour (00 to 23)
// h - 12-hour format of an hour with leading zeros (01 to 12)
// i - Minutes with leading zeros (00 to 59)
// s - Seconds with leading zeros (00 to 59)
// a - Lowercase Ante meridiem and Post meridiem (am or pm)

date_default_timezone_set("Asia/Calcutta");
echo date("Y-m-d H:i:s"); // time in India
echo "<br>";
echo date("d-m-Y H:i:s"); // time in India
echo "<br>";
echo "Time is " . date("h:i:sa"); // Time is 10:10:03+05:30
echo "<br>";
?>