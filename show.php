<?php
// 定義要開啟的目錄
$dir = "./";
     
// 用 opendir() 開啟目錄，開啟失敗終止程式
$handle = @opendir($dir) or die("Cannot open " . $dir);
     
echo "<b>Files in " . $dir . ":</b><br/>";
     
// 用 readdir 讀取檔案內容
while($file = readdir($handle)){
    // 將 "." 及 ".." 排除不顯示
    if($file != "." && $file != ".."){
    echo "$file<br/>";
}
}
     
// 關閉目錄
closedir($handle);

?>

<!DOCTYPE html>
<br><br>
<form method="post" enctype="multipart/form-data" action="delete.php">
    <label for="delete">想要刪除的檔案 : </label>
    <input type="text" name="deletefile" id="deletefile"><br>
    <label for="pd">密碼 : </label>
    <input type="text" name="pwd" id="pwd"><br><br>
    <input type="submit" value="送 出">
</form> 

<br><br><br><br>

<form method="post" enctype="multipart/form-data" action="download.php">
    <label for="download">想要下載的檔案 : </label>
    <input type="text" name="downloadfile" id="downloadfile"><br>
    <label for="pd">密碼 : </label>
    <input type="text" name="pwd" id="pwd"><br><br>
    <input type="submit" value="送 出">
</form>

<br><br>

<a href="update.html">
   <button>返回上傳</button>
</a>

</html>
