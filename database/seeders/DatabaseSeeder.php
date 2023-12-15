<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Contingut;
use App\Models\Criteri;
use App\Models\Modul;
use App\Models\Ra;
use App\Models\Uf;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        User::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);
        /*Create un modul*/
        $modul = Modul::create([
            'name' => 'M7',
            'hours' => 100,
            'description' => 'Modul 7',
        ]);
        Uf::create([
            'name' => 'UF1',
            'hours' => 25,
            'modul_id' => $modul->id,
        ]);
        Uf::create([
            'name' => 'UF2',
            'hours' => 25,
            'modul_id' => Modul::where('name', 'M7')->first()->id,
        ]);
        Uf::create([
            'name' => 'UF3',
            'hours' => 25,
            'modul_id' => Modul::where('name', 'M7')->first()->id,
        ]);
        Uf::create([
            'name' => 'UF4',
            'hours' => 25,
            'modul_id' => Modul::where('name', 'M7')->first()->id,
        ]);
        
        //RA
        foreach (Uf::all() as $uf) {
            $ras = rand(1,2);
            for ($i=0; $i < $ras; $i++) { 
                Ra::create([
                    'name' => 'Ra '.$i,
                    'uf_id' => $uf->id,
                ]);
            }
        }
        foreach (Ra::all() as $ra) {
            for ($i=0; $i < 10; $i++) { 
                Criteri::create([
                    'criteri' => 'Criteri '.$i,
                    'ra_id' => $ra->id,
                ]);
                Contingut::create([
                    'contingut' => 'Contingut '.$i,
                    'ra_id' => $ra->id,
                ]);
            }
        }
        
    }
}
