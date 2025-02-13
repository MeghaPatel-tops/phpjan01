<?php
include_once('Connection.php');
include_once('Connection.php');

echo "<h1>Main File</h1>";
header("Expires: Tue feb 2025 06:02:34 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
    <input type="submit" value="Submit" name="submit">
</form>
</body>
</html>
<?php
if(isset($_REQUEST['submit'])){
    //(headers_list());
//header("Location:array.php");

header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=downloaded.pdf");

// The PDF source is in original.pdf
readfile("Java Lectureflow.pdf");

}

?>