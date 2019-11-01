<?php
/**
 * FizzBuzzer class, a class capable of doing FizzBuzz.
 * php version 7
 * 
 * @category Class
 * @package  App
 * @author   Fernando Neubaum <fernando@neubaum.com.ar>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/ifts16/ejemplo
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Clase FizBuzzer, una clase solo para hacer FizzBuzz.
 * 
 * @category Class
 * @package  App
 * @author   Fernando Neubaum <fernando@neubaum.com.ar>
 * @license  https://opensource.org/licenses/MIT MIT License
 * @link     https://github.com/ifts16/ejemplo
 */
class FizzBuzzer extends Model
{
    /**
     * El metodo fizzbuzz recibe un numero entre 0 y 100 y devuelve un string.
     * Si el numero es divisible por 3 y 5, devuelve FizzBuzz.
     * Si es divisible solo por 3, devuelve Fizz.
     * Si es divisible solo por 5, devuelve Buzz.
     * Si no es ninguno de los anteriores, devuelve un string del numero.
     * Si esta fuera del rango, devuelve un error.
     * 
     * @param integer $num El numero a convertir a string.
     * 
     * @return string
     */
    public function fizzbuzz(int $num): string 
    {
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
            throw new \OutOfRangeException(
                "El número debe ser mayor que 0 y menor o igual que 100"
            );
        }
    }
}
