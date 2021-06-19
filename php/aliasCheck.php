<?php 
$alias_arr = array(
    'Kevin',
    'George',
    'Yoel',
    'Michael',
    'Alias1',
    'Alias2'
    );
    
    if(isset($_POST['alias']) && is_string($_POST['alias']))
    {
        $valid = true;
        foreach ($alias_arr as $alias)
        {
            if(strtolower($alias) == strtolower($_POST['alias']))
            {
                $valid = false;
                break;
            }
        }
        echo json_encode(array("status"=>200, "message"=>"OK", "valid"=>$valid));
    }else echo json_encode(array("status"=>400, "message"=>"Bad Request3"));
?>