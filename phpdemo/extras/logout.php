<?php
session_start();

//destroy the session
session_destroy();
header('Location: /kagahastian/phpdemo/13_sessions.php');