<?php
$year=$_POST["inp"];
// echo $year;

$cel = (int)($year / 4);

if(($cel * 4) == $year&&($cel*4)!=$year ){
    echo "Не високосный год";
}
else{
    echo "Високосный год";
}

  

?>
