<?php
//import TestCase untuk membuat unit test
use PHPUnit\Framework\TestCase;

//menyertakan file wordCount.php ke simpleTest.php untuk dites
require_once ("wordCount.php"); 

//pendifinisian class simpleTest yang termasuk turunan dari TestCase
class simpleTest extends TestCase{ 

    //pendefinisian method testCountWords
    public function testCountWords(){
        
        //instance Wc dari class wordCount untuk memanggil method countWords
        $Wc = new wordCount();

        //TestSentence berisi string sebagai argumen dalam fungsi countWords()
        $TestSentence = "Hai, nama saya nidha dusturiya";

        //pemanggilan fungsi countWords pada objek Wc dengan argumen TestSentence dan disimpan pada variabel WordCount
        $WordCount = $Wc->countWords($TestSentence);

        //assertEquals untuk membandingkan hasil yg diinginkan (4) dengan hasil yang dihasilkan dari pemanggilan countWords() melalui variabel WordCount
        $this->assertEquals(4, $WordCount);
        //jika hasil sesuai dengan yg diharapkan (4) maka tes dianggap berhasil
    }
}