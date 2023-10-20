<?php

//pendefinisian class wordCount
class wordCount{

    //pendefinisian method countWords dgn parameter sentence
    public function countWords($sentence)
    {
        //digunakan explode untuk memecah string dalam $sentence menjadi array berdasarkan spasi
        //digunakan fungsi count : menghitung jumlah elemen dalam array hasil explode
        return count(explode(" ", $sentence)); 
    }
}?>
