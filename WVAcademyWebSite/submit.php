<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <title>WearView Academy IT Technical Support</title>
  </head>
  <body>
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
        die("Connection failed: " . $conn->connect_error);
    }
    $name = $_POST["name"];
    $email = $_POST["email"];
    $department = $_POST["department"];
    $issueType = $_POST["dropdown"];
    $issue = $_POST["textarea"];
    $status = "Incomplete"; // set default status as "Incomplete"
    $stmt = $con->prepare("INSERT INTO Issues (Name, Email, Department, IssueType, TheIssue, Status) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssss', $name, $email, $department, $issueType, $issue, $status); 
    // Execute statement
    if ($stmt->execute() === TRUE) {
		
    } else {
        echo 'Error: ' . $stmt->error;
    }
    // Close connection
    $stmt->close();
    $con->close();    
} else {
    echo "Error: invalid form submission";
}
	header( "refresh:5; index.html");
?>
    <header>
      <h1>WearView Academy IT Technical Support</h1>
      <div id="container">
        
      </div>
    </header>
    <main>   
          <p class="confirmation">Your Request has been sent! You will be redirected to main page.</p>
    </main>
    <footer>
        <hr class="footer-hr">
        <div id="footer-div">
        <p class="footer-text">Created by Yusuf Emre Guzel</p>
        <p class="footer-text">&copy; WearView Academy 2023</p>
        </div>
      </footer>
  </body>
</html>
