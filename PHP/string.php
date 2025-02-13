<?php
echo "php"."laravle";

$str="hello wolrd";

echo "<br>";
echo addcslashes($str,'w');

$array =["apple","kiwi","graps"];
echo "<br>";
echo join($array);

$str2= " megha patel";

echo "<br>";
echo ltrim($str2);

$pass= "megha123";
echo "<br>";
echo md5($pass);

?>
<?php
echo "<br>";
$s1 = "hello wolrd";
$s2 = "hello hello wolrd";

echo similar_text($s1,$s2);
$name ="Megha";
echo "<br>";
echo str_replace('A','h',$name);

echo "<br>";
echo str_pad($name,10,"-");

echo "<br>";
echo str_repeat($name,2);

echo "<br>";
echo str_replace("hello","text",$s1);

$randome="ABCDEFGHA";
echo "<br>";
echo str_shuffle($randome);

echo "<br>";
print_r(str_split($s2,2));

$n1="helloa";
$n2="helloM";
echo "<br>";
echo strcmp($n1,$n2);
echo "<br>";
$first="hello";
$sec="hello wolrd";
echo stristr("hello",$first);
?>