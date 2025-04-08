<?php
   $data = file_get_contents("resume.html");
   
    $textFile = fopen('resume.pdf',"w");

    fwrite($textFile,"hello");

    fclose($textFile);

    // $textFile= fopen("dummytext.txt","r");

    // echo fread($textFile,20);

    // fclose($textFile);


?>