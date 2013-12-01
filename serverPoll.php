<?php 
    require_once "/home/evan1026/git/PHP-Minecraft-Query/MinecraftQuery.class.php";
    
    $Query = new MinecraftQuery();

    try {
        $Query->Connect("ginto8.dyndns.org", 25565);
    }
    catch (MinecraftQueryException $e){
        //echo $e->getMessage();
    }
?>
