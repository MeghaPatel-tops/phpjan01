<?php
function incre(){
    $i=0;
    static $s=0;
    $i++;
    $s++;
    echo "<br>i=".$i."s=".$s;
}

for($j=1;$j<=3;$j++){
    incre();
}

?>