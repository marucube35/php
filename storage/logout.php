<?php

// Clear the session variables
session_start();
session_destroy();
header("Location: sessions.php");
