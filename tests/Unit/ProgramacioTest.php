<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Programacion; // Import the missing class
use App\Models\User; // Import the missing class

class ProgramacioTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
    }
    /**
     * Validar els parametres d'una programacio
     */
    public function test_validar_parametres_programacio(): void{
        $programacio = Programacion::create([
            'any' => '2020-2021',
            'modul_id' => 1,
            'user_id' => User::find(1)->id,
        ]);
        $this->assertEquals('2020-2021', $programacio->any);
        $this->assertEquals(User::find(1)->id, $programacio->user_id);
        

    }



}