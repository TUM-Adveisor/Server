<!-- Using CSS Framwork form W3schools -->
<!-- ty, w3! -->
<!-- tinkered together by NoMoreNameToUse -->

<!-- HTML starter -->
<!DOCTYPE html>
<html>

<!-- title and settings -->
<title>Adveisor Gruppe 1</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- declare dependencies from google and w3.css -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">

<!-- CSS declaration -->
<style>
  body,
  html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
  }

  .bgimg {
    background-position: center center;
    background-size: 100vw auto;
    background-image: url("Banner.png");
    background-repeat: no-repeat;
    min-height: 77%;
  }

  .menu {
    display: none;
  }

  .block {
    display: block;
    width: 100%
  }

  .w3-col.s4 {
    width: 33.33333%
  }

  textarea {
    height: 150px;
  }

  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 100%;
  }

  @media only screen and (max-width: 600px) {
    .bgimg {
      background-position: center center;
      background-size: 100vw auto;
      background-image: url("Banner.png");
      min-height: 50%;
    }
  }
</style>

<!-- Nicolas campaign Website body -->

<body>


  <!-- Header -->
  <header class="bgimg w3-display-container " id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
      <span class="w3-tag">Powered by copy pasta spaghetti code and janky powerpoint art</span>
  </header>

  <!-- Global background color and text definition -->
  <div class="w3-large">

    <!-- introduction Container -->
    <div class="w3-container" id="intro">
      <div class="w3-content" style="max-width:700px">
        <p><span class="w3-tag">Database</span> Server Logik über MySQL Database und PHP</p>
        <div class="w3-content" style="max-width:700px">
        <div class="w3-panel w3-Indigo w3-card-4">
        <h2 class="w3-leftbar" style="padding:4px; ">MySQL Database Dump</h2>
        <?php
          //Essential data for DB Login (mysql)
          $servername = "";
          $username = "";
          $password = "";
          $dbname = "";

          //create connection with target Database
          $conn = new mysqli($servername, $username, $password, $dbname);
          // Check connection
          if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
          }
          $sql = "SELECT * FROM general_game";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            // output each row data  
            while($row = $result->fetch_assoc()) {
                          $id =  $row["id"];
                          $game_round =  $row["game_round"];
                          $game_type =  $row["game_type"];
                          $game_data = $row["game_data"];
                          $reg_date =  $row["reg_date"];
            echo "id: " . $row["id"]. " - Round: " . $row["game_round"]. ", " . $row["game_type"]. " - Data: [" . $row["game_data"]. ", @ " . $row["reg_date"]."] <br>";
            }
          } else {
            echo "0 results";
          }
          $conn->close();
          ?>
          </div>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <footer class="w3-center w3-light-grey w3-padding-24 w3-large center">
   <p>Code <a href="https://github.com/TUM-Adveisor" title="Github" target="_blank" class = "w3-hover-text-blue">Github</a> Repo</p>
  </footer>

</body>

</html>
