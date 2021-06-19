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
    
    if(isset($_POST["query"]) && isset($_POST["location_lat"]) && isset($_POST["location_lng"]) && isset($_POST["category"]) && isset($_POST["radius"]))
    {
        if(preg_match('/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/', $_POST["location_lat"]) && preg_match('/^[-]?(([0-8]?[0-9])\.(\d+))|(90(\.0+)?)$/', $_POST["location_lng"]))
        {
            if(is_string($_POST["query"]) && is_array($_POST["category"]) && !empty($_POST["category"]) && is_numeric($_POST["radius"]) && is_numeric($_POST["location_lat"]) && is_numeric($_POST["location_lng"]))
            {
                $sql = '';
                if($_POST['query']!="everything") $sql = "SELECT * FROM establecimientos WHERE palabras_clave LIKE '%{$_POST['query']}%'";
                else $sql = "SELECT * FROM establecimientos";
                
                $stmt = $conn->prepare("SELECT * FROM palabras WHERE palabras = ?");
                $stmt->bind_param('s', $_POST['query']);

                $stmt->execute();
                $result1 = $stmt->get_result();
                if (mysqli_num_rows($result1) > 0) {
                    $row = $result1->fetch_array(MYSQLI_ASSOC);
                    $stmt = $conn->prepare("UPDATE palabras SET cont = ? WHERE id = ?");
                    $cont = $row['cont']+1;
                    $rowId = $row['id'];
                    $stmt->bind_param('ii', $cont, $rowId);
                    $stmt->execute();
                } 
                else {
                    $stmt = $conn->prepare("INSERT INTO palabras VALUES ('DEFAULT', ?, '1')");
                    $stmt->bind_param('s', $_POST['query']);
                    
                    $stmt->execute();
                }
                
                $result2 = $conn->query($sql);
                if ($result2->num_rows > 0) {
                    while($row = $result2->fetch_assoc()) {
                        if(getDistanceFromLatLonInKm($_POST["location_lat"], $_POST["location_lng"], $row['coor_lt'], $row["coor_lng"])<=$_POST["radius"])
                        {
                            array_push($data, $row);
                        }
                    }
                    echo json_encode(array("status"=>200, "data"=>$data));
                } else {
                  echo json_encode(array("status"=>200, "data"=>array()));
                }
                $stmt->close();
                $conn->close();
            }else echo json_encode(array("status"=>400, "message"=>"Bad Request"));
        }else echo json_encode(array("status"=>400, "message"=>"Bad Request"));
    }else echo json_encode(array("status"=>400, "message"=>"Bad Request"));
?>