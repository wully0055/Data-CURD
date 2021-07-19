<?php

$downloadfile = $_POST["downloadfile"];
$pwd = $_POST["pwd"];

if ($pwd == 'password'){


    if(file_exists($downloadfile)){
        header("Content-type:application/octet-stream");
        $filename = basename($downloadfile);
        header("Content-Disposition:attachment;filename = ".$filename);
        header("Accept-ranges:bytes");
        header("Accept-length:".filesize($downloadfile));
        readfile($downloadfile);
    }else{
        echo "<script>alert('檔案不存在')</script>";
    }
}else{

    echo "<script>alert('幹什麼幹什麼 !!')</script>";
}


?>

<html>

  <a href="show.php">
     <br><br><button>返回檔案列表</button>
  </a>

</html>