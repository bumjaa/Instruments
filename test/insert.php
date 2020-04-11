<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body>
      <tr>
        <td>현재위치</td>
      </tr>
  </body>
  <?php
  $servername = "localhost";
  $username = "root";
  $password = "akffhao2";
  $dbname = "dtncEMC";

  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE instruments SET curLoc='미래동' WHERE c_No='EMC-001'";

  if ($conn->query($sql) === TRUE) {
      echo "Record updated successfully";
  } else {
      echo "Error updating record: " . $conn->error;
  }

  $conn->close();
  ?>

</html>
