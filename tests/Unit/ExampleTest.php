<?php

namespace Tests\Unit;

use App\Http\Services\FizzBuzzService;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->assertTrue(true);
    }

    /**
     * @dataProvider data
     * @test
     */
    public function fizzbuzzTest($input, $expect){

        $fizzbuzzService = new FizzBuzzService;
        $this->assertSame($expect, $fizzbuzzService->getFizzBuzz($input));
    }

    public function data()
    {
        return [
            ['1', '1'],
            ['2', '2'],
            ['3', 'fizz'],
            ['4', '4'],
            ['5', 'buzz'],
            ['6', 'fizz'],
            ['7', '7'],
            ['8', '8'],
            ['9', 'fizz'],
            ['10', 'buzz'],
            ['15','fizzbuzz']
        ];
    }
}
