<?php 
    require __DIR__ . "/serverPoll.php";
    
    $info = $Query->GetInfo();
        
    if ($info !== false){

        echo "Online (" . $info['Players'] . "/" . $info['MaxPlayers'] . "):\n";
        exit(0);

    }
    else{
        echo "Offline";
        exit(1);
    }
?>
