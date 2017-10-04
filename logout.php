<?php

session_start();

session_destroy();

echo "You're Log out!";

echo "<a href='index.html'> Click Here to return </a>";

?>