<?php

class Notification{
    const OOP = "OOP is so funny to learn, but so hard";
}

trait Learn
{
    public function learnOOP()
    {
        echo Notification::OOP;
    }
}

class LearnToday
{
    use Learn;
}

$learn = new LearnToday();
$learn->learnOOP();