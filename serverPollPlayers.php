<?php 
    require __DIR__ . "/serverPoll.php";
    
    $info = $Query->GetInfo();
    
    if ($info !== false){        
        $players = $Query->GetPlayers();
        
        $playerMessage = "";
        foreach ($players as $player){
            $playerMessage .= $player . ", ";
        }

        echo substr($playerMessage, 0, -2);
    }
?>
