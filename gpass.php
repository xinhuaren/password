<?php
if(strtolower(substr(PHP_OS, 0, 3)) == "win") {
$suci="cls";
} else {
$suci="clear";
}
system($suci);

$olive = "\e[92m";
$orange = "\e[91m";
$yellow = "\e[93m";
$navy = "\e[36m";

echo "\n$olive
  ____ _____ _   _ ____   _    ____ ____  
 / ___| ____| \ | |  _ \ / \  / ___/ ___| 
| |  _|  _| |  \| | |_) / _ \ \___ \___ \ 
| |_| | |___| |\  |  __/ ___ \ ___) |__) |
 \____|_____|_| \_|_| /_/   \_\____/____/  v 2.1";                                                                     
echo "\n$blue
Author : xinhuaren  \n";

$string=str_shuffle("abcdAbcdABCD");
        $array=["1","2","3","4","5","6","7","8","9","0"];
 	       $random=array_rand($array);
	       $rand=$array[$random];
        $a=$rand;
        $b=$rand;
	       $c=$rand;
        $d=$rand;
        $e=$a*$b*$c*$d;
        $f=$string.$e.$string;
        $out=md5(sha1($f));
echo $green.$out."\n";
$tulis=fopen("pass.txt", "w");
fwrite($ditulis,$out);
fclose($ditulis);
die($dark brown." Pass anda telah di generator  !".$dark gray." -> ".$emerald."Genpas.txt"."\n");
