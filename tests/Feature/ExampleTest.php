<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    // public function testBasicTest()
    // {
    //     $response = $this->get('/hello');
    //     $this->assertSame('Hello Controller!!', $response->content());
    // }

    // public function test()
    // {
    //     $response = $this->get('/test');
    //     $this->assertSame('hi~test', $response->content());
    // }

    // public function test1()
    // {
    //     $response = $this->get("/fizzbuzz/123");
    //     dd($response->content());
    // }

    /**
     * @dataProvider data
     */
    // public function testFizzBuzz($input, $expect)
    // {
    //     $input = $this->get("/fizzbuzz/$input");
    //     $this->assertSame($expect, $input->content());
    // }

    // public function data()
    // {
    //     return [
    //         ['1', '1'],
    //         ['2', '2'],
    //         ['3', 'fizz'],
    //         ['4', '4'],
    //         ['5', 'buzz'],
    //         ['6', 'fizz'],
    //         ['7', '7'],
    //         ['8', '8'],
    //         ['9', 'fizz'],
    //         ['10', 'buzz'],
    //         ['15','fizzbuzz']
    //     ];
    // }

    /**
     * @dataProvider data
     */
    // public function testQ1($input, $expect)
    // {
    //     $input = $this->get("/Q1/$input");
    //     $this->assertSame($expect, $input->content());
    // }

    // public function data()
    // {
    //     return [
    //         [1, '1'],
    //         [10, '10'],
    //         [100, '100'],
    //         [1000, '1,000'],
    //         [10000, '10,000'],
    //         [100000, '100,000'],
    //         [1000000, '1,000,000'],
    //         [35235232, '35,235,232']
    //     ];
    // }

    /**
     * @dataProvider data
     */
    // public function testQ2($input, $expect)
    // {
    //     $input = $this->get("/Q2/$input");
    //     $this->assertSame($expect, (int)($input->content()));
    // }

    // public function data()
    // {
    //     return [
    //         [0, 0],
    //         [1, 1],
    //         [15, 6],
    //         [159, 6],
    //         [245, 2],
    //     ];
    // }

    /**
     * @dataProvider data
     */
    public function testQ3($date1, $date2, $expect)
    {
        $input = $this->get("/Q3/$date1/$date2");
        $this->assertSame($expect, $input->content());
    }

    public function data()
    {
        return [
            ['2021-7-19', '2021-7-25', 5],
            ['2021-7-19', '2021-7-21', 3],
            ['2021-7-18', '2021-7-19', 1]
        ];
    }
}
