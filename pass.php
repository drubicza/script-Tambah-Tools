<?php
$username = "CRACKED23";
$password = "CRACKEDGANS";

system('clear');
echo "\e[0;35mLOGIN DULU ANJING!➹\n";
echo "\e[0;31musername➹ : ";
$user = trim(fgets(STDIN));
echo "\e[0;31mpassword➹ : ";
$pass = trim(fgets(STDIN));

if (($user == $username) && ($pass == $password)) {
    echo "\e[0;34mLogin Ke Tools Sukses!➹\n";
    sleep(2);
    system('clear');
    echo "\e[0;31m--------------------\n";
    echo "\e[1;37mWelcome To My Tools➹\n";
    echo "\e[0;31m--------------------\n";
    sleep(1);
    echo "\e[0;36m[1]LacakIp➹
    \e[0;32m[2]\e[0;32mSadapKamera➹
    \e[1;33m[3]\e[1;33mWhatsJack➹
    \e[0;34m[4]\e[0;34mBloodsTools
    \e[0;35m[5]\e[0;35mMy-Tools⊱XͭPͪLͤᗝIƬ༻₁₀₀ᵏ➹
    \e[0;31m[00]\e[0;31mEXIT!➹\n";
    echo "\e[0;37mPilihNomor[➹]>";
    $menu = trim(fgets(STDIN));

    switch ($menu) {
    case 1:
        system('git clone https://github.com/iexei/scanip');
        break;
    case 2:
        system('git clone https://github.com/thelinuxchoice/saycheese');
        break;
    case 3:
        system('git clone https://github.com/R133F/WhatsJacks');
        break;
    case 4:
        system('git clone https://github.com/R133F/BloodsTools');
        break;
    case 5:
        system('git clone https://github.com/TheSploit/My-Tools');
        break;
    default:
        echo "\e[0;31mLogin Ke Tools Gagal!KONTOLLLL!➹\n";
        echo "\e[0;32mKalo Gak Tau Pw Sama Username chat gw di instagram :JanganChatAku➹\n";
        break;
    }
}
?>
