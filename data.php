<?php
    //Mysql connection data
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "adveisordb";

	
    //get data with HTTP POST method
    $connection = test_input($_POST['connection']);

    //test user input for security purposes 
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    if($connection == "set"){
        $game_data = test_input($_POST['game_data']);
        $game_id = test_input($_POST['game_id']);
        
        // Create connection with DB
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }
        //Insert data into DB
        $sql = "INSERT INTO current_game (game_data, game_id)
        VALUES ('$game_data',$game_id)";

        //Check if the registration is successful
        if ($conn->query($sql) === TRUE) {
            echo "ok";
        } else {
            echo "OOPS :C Es ist ein unerwarteter Fehler aufgetreten: " . $sql . "<br>" . $conn->error;
        }
        //close connection with DB
        $conn->close();
    }elseif ($connection == "get") {
       //create connection with target Database
       $conn = new mysqli($servername, $username, $password, $dbname);
       // Check connection
       if ($conn->connect_error) {
         die("Connection failed: " . $conn->connect_error);
       }
       $sql =  "SELECT * FROM `current_game` WHERE id=(SELECT MAX(id) FROM `current_game`)";
       $result = $conn->query($sql);
       if ($result->num_rows > 0) {
         // output each row data  
         while($row = $result->fetch_assoc()) {
                       $game_data = $row["game_data"];
                       $game_id = $row["game_data"];
                       $reg_date =  $row["reg_date"];
         echo  $row["game_data"] . "!" . $row["game_id"]. "!" . $row["reg_date"] ;
         }
       } else {
         echo "0 results";
       }
       $conn->close();
    }
?>