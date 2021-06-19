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

    if(isset($_POST['country']))
    {
        if(isset($_POST['city']))
        {
            $sql = "SELECT iddistrito, distrito, geoloca FROM distritos WHERE idpais='{$_POST["country"]}' AND idciudad='{$_POST["city"]}'";
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
            $sql = "SELECT idciudad, ciudad FROM ciudades WHERE idpais='".$_POST['country']."'";
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
    }else{
        $sql = "SELECT idpais, pais FROM paises";
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
?>