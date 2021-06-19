<?php
    session_start();
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

    function getDistanceFromLatLonInKm($lat1,$lon1,$lat2,$lon2) {
        $R = 6371; // Radius of the earth in km
        $dLat = deg2rad($lat2-$lat1);  // deg2rad below
        $dLon = deg2rad($lon2-$lon1); 
        $a = 
            sin($dLat/2) * sin($dLat/2) +
            cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * 
            sin($dLon/2) * sin($dLon/2); 
            
        $c = 2 * atan2(sqrt($a), sqrt(1-$a)); 
        $d = $R * $c; // Distance in km
        return $d;
    }
    
    $sql = "SELECT * FROM establecimientos ORDER BY votos DESC";
    
    $result = $conn->query($sql);
    $count = 0;
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            if($count<=8)
            {
                if(getDistanceFromLatLonInKm($_SESSION["user_lat"], $_SESSION["user_lng"], $row['coor_lt'], $row["coor_lng"])<=1)
                {
                    array_push($data, $row);
                    $count++;
                }
            }
        }
        echo json_encode(array("status"=>200, "data"=>$data));
    } else {
      echo json_encode(array("status"=>200, "data"=>array()));
    }
    $conn->close();
?>