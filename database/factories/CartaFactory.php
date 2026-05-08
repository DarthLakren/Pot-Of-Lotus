<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CartaFactory extends Factory
{
    public function definition(): array
    {
        $juegos = ['Magic: The Gathering', 'Yu-Gi-Oh!', 'Mitos y Leyendas', 'Pokémon', 'One Piece'];
        $rareza = ['Común', 'Poco común', 'Rara', 'Súper rara', 'Mítica', 'Legendaria'];
        
        return [
            'nombre' => $this->faker->words(3, true), // Nombre aleatorio
            'juego' => $this->faker->randomElement($juegos),
            'rareza' => $this->faker->randomElement($rareza),
            'descripcion' => $this->faker->paragraph(),
            'precio' => $this->faker->randomFloat(2, 1, 500), // entre 1 y 500
        ];
    }
}