<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "Jonfoble";
    $password = "Realise1171_";
    $dbname = "WVA_DB";
    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }
    $id = $_POST["ID"];
    $status = $_POST["Status"];
    $stmt = $con->prepare("UPDATE Issues SET Status = ? WHERE ID = ?");
    $stmt->bind_param('si', $status, $id);
    // Execute statement
    if ($stmt->execute() === TRUE) {
       
    } else {
        echo "Error: " . $stmt->error;
    }
    // Close connection
    $stmt->close();
    $con->close();    

    // Redirect back to dashboard
    header("Location: technicianDashboard.php");
    exit();
} else {
    echo "Error: invalid form submissio1n";
}
?>