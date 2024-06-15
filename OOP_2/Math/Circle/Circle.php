<?php

namespace Math\Circle;
use Math\Constant;


require_once __DIR__ . '/../Constant.php';

class Circle {
    public function getAreaCircle($radius) {
        return Constant::PI * $radius * $radius;
    }

    public function getTimeStamp()
    {
         $dateTime = new \DateTime();
         return $dateTime->getTimestamp();
    }
}



