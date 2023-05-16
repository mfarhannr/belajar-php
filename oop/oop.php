<?php

class OOP
{
    public function publicMethod(){
        echo "Ini adalah OOP metode public";
    }

    protected function protectedMethod(){
        echo "Ini adalah OOP metode protected";
    }

    private function privateMethod(){
        echo "Ini adalah OOP metode private";
    }

    public function accessMethodOOP()
    {
        $this->publicMethod();
        echo "<br>";
        $this->protectedMethod();
        echo "<br>";
        $this->privateMethod();
        
    }
}
    $oop = new OOP();
    $oop->publicMethod();
    echo "<br>";
    $oop->accessMethodOOP();

?>