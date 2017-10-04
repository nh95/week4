<?php
$date =  date('Y-m-d', time());
echo "The value of \$date: ".$date."<br>";
$date = str_replace("-","/",$date);
echo "Format change". $date."<br>";

$tar = "2017/05/24";
echo "The value of \$tar: ".$tar."<br>";

$year = array("2012", "396", "300","2000", "1100", "1089");
echo "The value of \$year: ";
print_r($year);
print("<br>");


$result = strcmp($date,$tar);
if($result>0){
echo "The Future";
}else if ($result <0){
echo "The Past";
}else {
echo 'Oops';
}

print("<br>");
$findme = '/';
echo 'Position of Slash character  :'. strpos($date, $findme). "<br>";
echo 'Count '. str_word_count($date)."<br>";

echo 'Length ' .strlen($date)."<br>";
$string = 'Mark';
echo 'First char ASCII ' . ord($string[0]). "<br>";
echo 'last 2 char :' .substr($date,-2)."<br>";

print_r(explode('/',$date));
print ("<br>");



foreach ($year as $val){

if ((($val % 4) == 0 && ($val % 100) != 0) || (($val % 400) == 0)) {
	echo 'True ';
}
else {
echo 'False ';
}
}


?>
