<?php
/**
 * Will fetch results of a query to MySQL database containing page title, its file path and its keywords.
 * 
 * Query against the keywords and include the matching page in results.php.
 * 
 * Push the state of the new url so the address bar changes and replace the history so a back button takes the user 
 * back to the previous page they were on.
 */
 
echo "<h1><em>You searched for </em>" . $_POST['q'] . "</h1>";

?>