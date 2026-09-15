<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "<h2>Database Connection Test</h2>";

echo "<p>DB_HOST: localhost</p>";
echo "<p>DB_NAME: doabvillas</p>";
echo "<p>DB_USER: root</p>";

$con = mysqli_connect('localhost', 'root', '', 'doabvillas');

if ($con) {
    echo "<p style='color:green'><b>Connection: SUCCESS</b></p>";
    
    $result = mysqli_query($con, "SHOW TABLES");
    $count = mysqli_num_rows($result);
    echo "<p>Tables found: $count</p>";
    
    // Check admin table
    $admin = mysqli_query($con, "SELECT * FROM admin");
    $adminCount = mysqli_num_rows($admin);
    echo "<p>Admin users: $adminCount</p>";
    
    // Check settings table
    $settings = mysqli_query($con, "SELECT * FROM settings");
    $settingsCount = mysqli_num_rows($settings);
    echo "<p>Settings rows: $settingsCount</p>";
    
} else {
    echo "<p style='color:red'><b>Connection: FAILED</b></p>";
    echo "<p style='color:red'>Error: " . mysqli_connect_error() . "</p>";
    echo "<p style='color:red'>Error No: " . mysqli_connect_errno() . "</p>";
}

mysqli_close($con);
?>