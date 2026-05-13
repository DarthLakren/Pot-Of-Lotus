<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Game; // Asegúrate de que tu modelo se llame Game

class GameSeeder extends Seeder
{
    public function run(): void
    {
        $juegos = [
            ['name' => 'Magic: The Gathering'],
            ['name' => 'Yu-Gi-Oh!'],
            ['name' => 'Mitos y Leyendas'],
        ];

        foreach ($juegos as $juego) {
            Game::updateOrCreate(['name' => $juego['name']], $juego);
        }
    }
}