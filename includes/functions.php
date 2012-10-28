<?php
include ('includes/connect.php');

function getPosts(){
    $query = mysql_query("SELECT * FROM posts") or die (mysql_error());
    while ($post = mysql_fetch_assoc($query)){
        echo "<h2>" . $post['TITLE'] ." by ". $post['Author'] . "</h2>";
        echo $post['Content'];
    }
}

?>
