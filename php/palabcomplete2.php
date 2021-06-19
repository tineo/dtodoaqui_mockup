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

    if(isset($_GET['search_text']) && is_string($_GET['search_text']) && strlen($_GET['search_text']))
    {
        $stmt = $conn->prepare("SELECT palabras FROM palabras WHERE palabras LIKE ? ORDER BY cont DESC");
        $param = '%' . $_GET['search_text'] . '%';
        $stmt->bind_param('s', $param);

        $stmt->execute();
        
        $result1 = $stmt->get_result();
        if (mysqli_num_rows($result1) > 0) {
            while($row = $result1->fetch_array(MYSQLI_ASSOC))
            {
                array_push($data, $row['palabras']);
            }
            echo json_encode(array("status"=>200, "data"=>$data));
        } 
        else {
            echo json_encode(array("status"=>200, "data"=>$data));
        }
        $stmt->close();
        $conn->close();
    }else echo json_encode(array("status"=>400, "message"=>"Bad Request"));
?>