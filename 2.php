<?php
$username = "asdaqsdw";
$email = "122aA131@gmail.com";



function validasi($username, $email){
    
    if(ctype_lower($username) && strlen($username) == 8){
        echo "Username Benar \n";
    }else{
        echo "Username Salah tidak boleh huruf besar, angka, dan simbol dan berjumlah 8\n";
    } 

    if(!preg_match('/^(?=.*\d)(?=\P{Ll}*\p{Ll})(?=\P{Lu}*\p{Lu})(?=\P{N}*\p{N})([0-9a-z\+_\-\w]{4,}+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix', $email)) 
    {
        echo "Email salah harus ada huruf besar, huruf kecil, angka, dan berjumlah minimal 4\n";
    }else{
        echo "email Benar\n";
    } 
}

validasi ($username, $email);

?>