<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\FizzBuzzer;

class FizzBuzzerTest extends TestCase
{
    protected $fz;

    protected function setUp(): void{
        $this->fz = new FizzBuzzer();
    }

    public function testEsFizzBuzzer() {
        $this->assertInstanceOf(FizzBuzzer::class, $this->fz);
    }

    public function testDevuelveNumeroComoString() {
        $resultado = $this->fz->fizzbuzz(1);
        $this->assertEquals($resultado, "1");
    }

    public function testDevuelveStringFizz() {
        $resultado = $this->fz->fizzbuzz(3);
        $this->assertEquals($resultado, "Fizz");
    }

    public function testDevuelveStringBuzz() {
        $resultado = $this->fz->fizzbuzz(5);
        $this->assertEquals($resultado, "Buzz");
    }

    public function testDevuelveStringFizzBuzz() {
        $resultado = $this->fz->fizzbuzz(15);
        $this->assertEquals($resultado, "FizzBuzz");
    }

    public function testExcepcionMenorOIgualQue0() {
        $this->expectException(\OutOfRangeException::class);
        $resultado = $this->fz->fizzbuzz(0);
    }

    public function testExcepcionMayorQue100() {
        $this->expectException(\OutOfRangeException::class);
        $resultado = $this->fz->fizzbuzz(101);
    }

    public function testExcepcionMensaje() {
        $this->expectExceptionMessage("El número debe ser mayor que 0 y menor o igual que 100");
        $resultado = $this->fz->fizzbuzz(-1);
    }

    /**
     * @dataProvider proveedorDeNumeros
     */
    public function testMultiple(string $esperado, int $numero) {
        $this->assertSame($esperado, $this->fz->fizzbuzz($numero));
    }

    public function proveedorDeNumeros() {
        return [
            ["FizzBuzz", 30],
            ["Buzz", 25],
            ["Fizz", 66],
            ["77", 77]
        ];
    }
}
