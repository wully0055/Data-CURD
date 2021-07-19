<?php

$deletefile = $_POST["deletefile"];
$pwd = $_POST["pwd"];

if ($pwd == 'password'){

    echo "已經刪除 $deletefile";
    unlink("$deletefile");

}else{

    echo "幹什麼幹什麼 !";

}

?>

<html>

    <a href="show.php">
       <br><br><button>返回檔案列表</button>
    </a>
    
</html>