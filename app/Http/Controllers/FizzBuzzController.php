<?php

namespace App\Http\Controllers;

use App\Http\Services\FizzBuzzService;
use Illuminate\Http\Request;

class FizzBuzzController extends Controller
{

    protected $fizzbuzzService;

    public function __construct(FizzBuzzService $fizzbuzzService){

        $this->fizzbuzzService = $fizzbuzzService;

    }

    public function index($input)
    {
      return $this->fizzbuzzService->getFizzBuzz($input);

    }
}
