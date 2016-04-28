
<?php
echo"HelloWorldsssAKSKT";
$val = $_GET["data"];
// Connecting, selecting database
$dbconn = pg_connect("host=10.72.6.137
dbname=postgres user=u42ce9757428446adbaa896bd9467cc30 password=fc0afb58d488477fa978ad84558fc133")
    or die('Could not connect: ' . pg_last_error());
// Performing SQL query
$query = "insert into finaltable values ('$val',now())";
$result = pg_query($query) or die('Query failed: ' . pg_last_error());
// Printing results in HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";
// Free resultset
pg_free_result($result);
// Closing connection
pg_close($dbconn);
?>
