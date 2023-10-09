<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="techDashboardStyle.css">
    <meta charset="UTF-8">
    <title>WearView Academy IT Technician Dashboard</title>
  </head>
  <body>
    <header>
		
      <h1>WearView Academy IT Technician Dashboard</h1>
    </header>
	  
	  
    <?php
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

        $result = $con->query("SELECT * FROM Issues;");
        echo "<table border='1'>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Department</th>
            <th>IssueType</th>
            <th>TheIssue</th>
            <th>Status</th>
        </tr>";

        while($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $row['ID'] . "</td>";
            echo "<td>" . $row['Name'] . "</td>";
            echo "<td>" . $row['Email'] . "</td>";
            echo "<td>" . $row['Department'] . "</td>";
            echo "<td>" . $row['IssueType'] . "</td>";
            echo "<td>" . $row['TheIssue'] . "</td>";
            echo "<td>";
			echo "<form action='completed.php' method='POST'>";
			echo "<input type='hidden' id='ID' name='ID' value='" . $row['ID'] . "'/>";
            echo "<select name='Status' onchange='this.form.submit()'>";    
            echo "<option value='Incomplete'" . ($row['Status'] == 'Incomplete' ? ' selected' : '') . ">Incomplete</option>";
            echo "<option value='Complete'" . ($row['Status'] == 'Complete' ? ' selected' : '') . ">Complete</option>";
            echo "</select>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }

        echo "</table>";
?>
<footer>
     <p>© WearView Academy 2023</p>
   </footer>
</body>
</html>
