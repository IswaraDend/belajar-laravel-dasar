<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class InputControllerTest extends TestCase
{
    public function testInput() {
        $this->get('/input/hello?name=Iswara')
            ->assertSeeText('Hello Iswara');

        $this->post('/input/hello', [
            'name' => 'Iswara'
        ])->assertSeeText('Hello Iswara');
    }

    public function testInputNested() {
        $this->post('/Input/hello/first', [
            "name" => [
                "first" => "Iswara",
                "last" => "Dendy"
            ]
        ])->assertSeeText("Hello Iswara");
    }

    public function testInputAll() {
        $this->post('/Input/hello/input', [
            "name" => [
                "first" => "Iswara",
                "last" => "Dendy"
            ]
        ])->assertSeeText("name")->assertSeeText("first")
            ->assertSeeText("last")->assertSeeText("Iswara")
            ->assertSeeText("Apaansi kok Gaerror");
    }
}
