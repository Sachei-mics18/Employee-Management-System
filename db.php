<?php
    // para ito sa pag connect ng database at ng code

    // deafult na yang localhost, root, at password
    $servername = "localhost";
    $username = "root";  
    $password = "";      
    $dbname = "employee_management"; //ito name ng database kaya yan nakalagay

    // ito yung connection ng database sa code 
    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
?>
