<?php
    $servername = "localhost";
    $username = "dtaks_uniqroot18";
    $password = "dewd*+w?/5#";
    $dbname = "dtaks_dtadbase";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    
    $data = array();
    $conn -> set_charset("utf8");

    if(isset($_POST['query']) && isset($_POST['userId']) && is_numeric($_POST['userId']))
    {
        if($_POST['query'] == '')
        {
            $sql = "SELECT * FROM establecimientos WHERE idregistrante={$_POST['userId']}";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  array_push($data, $row);
              }
              echo json_encode(array("status"=>200, "data"=>$data));
            } else {
              echo json_encode(array("status"=>200, "data"=>array()));
            }
            $conn->close();
        }else{
            $sql = "SELECT * FROM establecimientos WHERE idregistrante={$_POST['userId']} AND nom_comercial LIKE '%{$_POST['query']}%'";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              while($row = $result->fetch_assoc()) {
                  array_push($data, $row);
              }
              echo json_encode(array("status"=>200, "data"=>$data));
            } else {
              echo json_encode(array("status"=>200, "data"=>array()));
            }
            $conn->close();
        }
    }else echo json_encode(array("status"=>400, "message"=>"Bad Request"));
?>