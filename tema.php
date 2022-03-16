<?php
system ('clear');
echo "\033[32;1m  \n";
system ('figlet ToolsID');
echo "\033[36;1m========================\n";
echo "\033[37;1m[+] Author  : Mr.crazy Spm\n";
echo "[+] Team    : Crazy Teknologi\n";
echo "[+] GitHub : \n";
echo "\033[36;1m========================\n";
echo "\033[32;1m   Tools Mr.Crazy\n";
echo "\033[36;1m========================\n";
echo "\033[37;1m[1]. Mr.Crazy\n";
echo "[2]. Subreak\n";
echo "[3]. Keluar\n";
echo "\033[36;1m========================\n";
echo "\033[37;1m  \n";
echo "Pilih => ";
$pilih = trim(fgets(STDIN));
if($pilih == 1){
         system("figlet Mr.Crazy");
}
elseif($pilih == 2){
        system("figlet Subreak");
}
elseif($pilih == 3){
        system("exit");
}

?>