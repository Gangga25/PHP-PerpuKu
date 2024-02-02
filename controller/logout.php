<?php

// Start the session
session_start();

// destory the session
session_destroy();

header("Location: ../login.php");