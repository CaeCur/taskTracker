<?php

try {
    $db = new PDO("mysql:host=localhost;dbname=time_tracker_app;port=3306", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    echo "Connection error: $e";
    echo $e->getMessage();
    exit;
}
