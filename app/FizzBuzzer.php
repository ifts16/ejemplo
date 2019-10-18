<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FizzBuzzer extends Model
{
    public function fizzbuzz(int $num): string {
        if ($num > 0 && $num <= 100) {
            if ($num % 3 == 0 && $num % 5 == 0) {
                return "FizzBuzz";
            } else if ($num % 3 == 0) {
                return "Fizz";
            } else if ($num % 5 == 0) {
                return "Buzz";
            } else {
                return strval($num);
            }
        } else {
            throw new \OutOfRangeException("El número debe ser mayor que 0 y menor o igual que 100");
        }
    }
}
