<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ConfigurationTest extends TestCase
{
    public function testConfig() {
        $firstName = config('contoh.author.first');
        $lastName = config('contoh.author.last');
        $email = config('contoh.email');
        $web = config('contoh.web');

        self::assertEquals('Iswara', $firstName);
        self::assertEquals('Dendy', $lastName);
        self::assertEquals('Iswaradend@gmail.com', $email);
        self::assertEquals('https://www.udemy.com/course/laravel-pemula-sampai-mahir/learn/lecture/31890286#overview', $web);
    }
}
