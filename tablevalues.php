<?php
// Connecting, selecting database
$dbconn = pg_connect("host=10.72.6.137 dbname=postgres user=u42ce9757428446adbaa896bd9467cc30 password=fc0afb58d488477fa978ad84558fc133")
    or die('Could not connect: ' . pg_last_error());

// Performing SQL query
$query = "SELECT to_char(time, 'DD/MM/YYYY') as DATE, to_char(time,'hh24:mi:ss') as TIME, sensor_value FROM public.finaltable ORDER BY auto DESC LIMIT 5";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());

// Printing results in HTML
$my_array=[];
while ($row = pg_fetch_row($result)) {
array_push($my_array,$row[0],$row[1],$row[2]);  
}

echo"$my_array[0],$my_array[1],$my_array[2],$my_array[3],$my_array[4],$my_array[5],$my_array[6],$my_array[7],$my_array[8],$my_array[9],$my_array[10],$my_array[11],
$my_array[12],$my_array[13],$my_array[14]";

// Free resultset
pg_free_result($result);

// Closing connection
pg_close($dbconn);

?>
