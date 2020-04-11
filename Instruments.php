<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>DT&C EMC</title>
    <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js">
    </script>
    <link rel="stylesheet" href="/css/default.css">
    <link rel="stylesheet" href="/css/index.css">
  </head>
  <body>
    <a href="#" class="skip">본문바로가기</a>
    <header>
      <h1><a href="index.php">DT&C</a></h1>
      <h2>mainMenu</h2>
        <nav class="lnb">
          <ul>
            <li><a href="#a"><span>Standards</span></a></li>
            <li><a href="Instruments.php"><span>Instruments</span></a></li>
            <li><a href="#a"><span>Raw Data Sheet</span></a></li>
            <li><a href="#a"><span>etc</span></a></li>
          </ul>
        </nav>
      <h2>loginMenu</h2>
      <nav class="spot">
        <ul>
          <li><a href="#a">Logout</a></li>
          <li><a target="_blank" rel="noopener noreferrer" href="http://dtnc.net/")>Homepage</a></li>
          <li><a target="_blank" rel="noopener noreferrer" href="http://gw.dtnc.net/">GroupWare</a></li>
          <li><a target="_blank" rel="noopener noreferrer" href="http://lims.dtnc.net">LIMS</a></li>
        </ul>
      </nav>
    </header>
    <section>
      <div class= "container">
        <div id="menu">
          <ul>
            <h3><a href="#">장비조회</a></h3>
          </ul>
        </div>
        <div id="tables" class="tbs">
          <article class="">
          <p></p>
            <table>
              <tr>
                <th>관리번호</th>
                <th>장비이름</th>
                <th>모델이름</th>
                <th>제조번호</th>
                <th>제작회사</th>
                <th>현재위치</th>
              </tr>
              <?php
              $conn = mysqli_connect("localhost", "root", "akffhao2", "dtncEMC");
              if ($conn-> connect_error) {
                die("Connection Failed:". $conn->connect_error);
              }

              $sql = "SELECT C_No, Ins_Name, Model_Name, Serial_No, Manufacturer, curLoc from Instruments";
              $result = $conn-> query($sql);

              if ($result-> num_rows > 0) {
                while ($row = $result-> fetch_assoc()) {
                  echo "<tr>
                          <td>". $row["C_No"] ."</td>
                          <td>". $row["Ins_Name"] ."</td>
                          <td>". $row["Model_Name"] ."</td>
                          <td>". $row["Serial_No"] ."</td>
                          <td>". $row["Manufacturer"] ."</td>
                          <td>". $row["curLoc"] ."</td>
                        </tr>";
                }
                echo "</table>";
              }
              else {
                echo "0 result";
              }

              $conn-> close();
              ?>
           </table>
          </article>
        </div>
      </div>
    </select>
    <footer>
      <!--footer-->
    </footer>
  </body>
</html>
