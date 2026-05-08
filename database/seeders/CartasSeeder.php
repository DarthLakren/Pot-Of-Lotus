<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Carta;

class CartasSeeder extends Seeder
{
    public function run(): void
    {
        // Primero, mostrar cuántas hay antes
        $antes = Carta::count();
        $this->command->info("📊 Cartas antes: " . $antes);
        
        $cartas = [
            // ==================== MAGIC (11 cartas) - Fondo AZUL ====================
            ['nombre' => 'Black Lotus', 'juego' => 'Magic', 'rareza' => 'Mítica', 'descripcion' => 'Añade 3 maná de cualquier color', 'precio' => 15000.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Ancestral Recall', 'juego' => 'Magic', 'rareza' => 'Mítica', 'descripcion' => 'Roba 3 cartas', 'precio' => 12000.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Time Walk', 'juego' => 'Magic', 'rareza' => 'Mítica', 'descripcion' => 'Toma un turno extra', 'precio' => 13000.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Mox Sapphire', 'juego' => 'Magic', 'rareza' => 'Mítica', 'descripcion' => 'Maná azul gratuito', 'precio' => 10000.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Tarmogoyf', 'juego' => 'Magic', 'rareza' => 'Rara', 'descripcion' => 'Criatura que crece con los cementerios', 'precio' => 80.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Lightning Bolt', 'juego' => 'Magic', 'rareza' => 'Común', 'descripcion' => 'Hace 3 puntos de daño', 'precio' => 2.50, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Counterspell', 'juego' => 'Magic', 'rareza' => 'Común', 'descripcion' => 'Contrarresta un hechizo', 'precio' => 3.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Dark Ritual', 'juego' => 'Magic', 'rareza' => 'Común', 'descripcion' => 'Añade BBB a tu reserva', 'precio' => 4.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Sol Ring', 'juego' => 'Magic', 'rareza' => 'Poco común', 'descripcion' => 'Añade CC a tu reserva', 'precio' => 5.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Swords to Plowshares', 'juego' => 'Magic', 'rareza' => 'Poco común', 'descripcion' => 'Exilia una criatura', 'precio' => 3.50, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Birds of Paradise', 'juego' => 'Magic', 'rareza' => 'Rara', 'descripcion' => 'Criatura que genera maná', 'precio' => 12.00, 'imagen' => 'cartas/magic-bg.jpg'],
            
            // ==================== YU-GI-OH! (10 cartas) - Fondo NARANJA ====================
            ['nombre' => 'Blue-Eyes White Dragon', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Ultra Rara', 'descripcion' => '3000 ATK / 2500 DEF', 'precio' => 25.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Dark Magician', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Ultra Rara', 'descripcion' => '2500 ATK / 2100 DEF', 'precio' => 20.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Exodia', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Secreta', 'descripcion' => 'Cabeza de Exodia', 'precio' => 100.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Pot of Greed', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Común', 'descripcion' => 'Roba 2 cartas', 'precio' => 5.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Mirror Force', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Súper Rara', 'descripcion' => 'Destruye monstruos atacantes', 'precio' => 15.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Monster Reborn', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Ultra Rara', 'descripcion' => 'Invoca del cementerio', 'precio' => 8.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Raigeki', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Ultra Rara', 'descripcion' => 'Destruye monstruos rival', 'precio' => 10.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Harpie Duster', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Ultra Rara', 'descripcion' => 'Destruye M/T rival', 'precio' => 7.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'MST', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Común', 'descripcion' => 'Destruye 1 M/T', 'precio' => 2.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Solemn Judgment', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Rara', 'descripcion' => 'Niega invocación', 'precio' => 6.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            
            // ==================== MITOS Y LEYENDAS (10 cartas) - Fondo MORADO ====================
            ['nombre' => 'Zeus', 'juego' => 'Mitos', 'rareza' => 'Legendaria', 'descripcion' => 'Rey de los dioses', 'precio' => 60.00, 'imagen' => 'cartas/mitos-bg.jpg'],
            ['nombre' => 'Poseidón', 'juego' => 'Mitos', 'rareza' => 'Legendaria', 'descripcion' => 'Dios del mar', 'precio' => 45.00, 'imagen' => 'cartas/mitos-bg.jpg'],
            ['nombre' => 'Hades', 'juego' => 'Mitos', 'rareza' => 'Legendaria', 'descripcion' => 'Dios del inframundo', 'precio' => 50.00, 'imagen' => 'cartas/mitos-bg.jpg'],
            ['nombre' => 'Afrodita', 'juego' => 'Mitos', 'rareza' => 'Épica', 'descripcion' => 'Diosa del amor', 'precio' => 35.00, 'imagen' => 'cartas/mitos-bg.jpg'],
            ['nombre' => 'Ares', 'juego' => 'Mitos', 'rareza' => 'Épica', 'descripcion' => 'Dios de la guerra', 'precio' => 40.00, 'imagen' => 'cartas/mitos-bg.jpg'],
            ['nombre' => 'Atenea', 'juego' => 'Mitos', 'rareza' => 'Épica', 'descripcion' => 'Diosa de la sabiduría', 'precio' => 38.00, 'imagen' => 'cartas/mitos-bg.jpg'],
            ['nombre' => 'Apolo', 'juego' => 'Mitos', 'rareza' => 'Épica', 'descripcion' => 'Dios del sol', 'precio' => 42.00, 'imagen' => 'cartas/mitos-bg.jpg'],
            ['nombre' => 'Hermes', 'juego' => 'Mitos', 'rareza' => 'Épica', 'descripcion' => 'Mensajero de los dioses', 'precio' => 35.00, 'imagen' => 'cartas/mitos-bg.jpg'],
            ['nombre' => 'Artemisa', 'juego' => 'Mitos', 'rareza' => 'Épica', 'descripcion' => 'Diosa de la caza', 'precio' => 40.00, 'imagen' => 'cartas/mitos-bg.jpg'],
            ['nombre' => 'Hefesto', 'juego' => 'Mitos', 'rareza' => 'Épica', 'descripcion' => 'Dios del fuego', 'precio' => 37.00, 'imagen' => 'cartas/mitos-bg.jpg'],

            // MAGIC - NUEVAS (10 cartas)
            ['nombre' => 'Llanowar Elves', 'juego' => 'Magic', 'rareza' => 'Común', 'descripcion' => 'Taps para añadir G a tu reserva de maná', 'precio' => 1.50, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Giant Growth', 'juego' => 'Magic', 'rareza' => 'Común', 'descripcion' => 'La criatura objetivo obtiene +3/+3 hasta el final del turno', 'precio' => 0.50, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Shock', 'juego' => 'Magic', 'rareza' => 'Común', 'descripcion' => 'Hace 2 puntos de daño a cualquier objetivo', 'precio' => 0.50, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Cancel', 'juego' => 'Magic', 'rareza' => 'Común', 'descripcion' => 'Contrarresta un hechizo objetivo', 'precio' => 0.75, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Divination', 'juego' => 'Magic', 'rareza' => 'Común', 'descripcion' => 'Roba dos cartas', 'precio' => 0.75, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Murder', 'juego' => 'Magic', 'rareza' => 'Común', 'descripcion' => 'Destruye una criatura objetivo', 'precio' => 1.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Pacifism', 'juego' => 'Magic', 'rareza' => 'Común', 'descripcion' => 'La criatura no puede atacar ni bloquear', 'precio' => 0.50, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Serra Angel', 'juego' => 'Magic', 'rareza' => 'Rara', 'descripcion' => 'Vuela, vigilancia', 'precio' => 2.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Shivan Dragon', 'juego' => 'Magic', 'rareza' => 'Rara', 'descripcion' => 'Vuela, puede recibir +1/+0 por cada R pagado', 'precio' => 3.00, 'imagen' => 'cartas/magic-bg.jpg'],
            ['nombre' => 'Wrath of God', 'juego' => 'Magic', 'rareza' => 'Rara', 'descripcion' => 'Destruye todas las criaturas, no se pueden regenerar', 'precio' => 8.00, 'imagen' => 'cartas/magic-bg.jpg'],


            // YU-GI-OH! - NUEVAS (9 cartas)
            ['nombre' => 'Summoned Skull', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Ultra Rara', 'descripcion' => '2500 ATK / 1200 DEF. Un demonio con rayo oscuro', 'precio' => 12.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Celtic Guardian', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Rara', 'descripcion' => '1400 ATK / 1200 DEF. Un elfo guerrero', 'precio' => 5.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Curse of Dragon', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Rara', 'descripcion' => '2000 ATK / 1500 DEF. Dragón maldito', 'precio' => 6.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Gaia The Fierce Knight', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Ultra Rara', 'descripcion' => '2300 ATK / 2100 DEF. Caballero con velocidad de rayo', 'precio' => 15.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Trap Hole', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Común', 'descripcion' => 'Destruye un monstruo Normal o de Volteo recién invocado', 'precio' => 3.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Magic Cylinder', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Súper Rara', 'descripcion' => 'Niega el ataque y causa daño igual al ATK', 'precio' => 8.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Call of The Haunted', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Súper Rara', 'descripcion' => 'Invoca un monstruo del cementerio en posición de ataque', 'precio' => 7.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Heavy Storm', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Súper Rara', 'descripcion' => 'Destruye todas las cartas Mágicas/Trampa en el campo', 'precio' => 9.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            ['nombre' => 'Premature Burial', 'juego' => 'Yu-Gi-Oh!', 'rareza' => 'Rara', 'descripcion' => 'Paga 800 LP para invocar un monstruo del cementerio', 'precio' => 5.00, 'imagen' => 'cartas/yugioh-bg.jpg'],
            

            
            
        ];

        // Limpiar tabla y agregar todos los datos
        Carta::truncate();
        
        foreach ($cartas as $carta) {
            Carta::create($carta);
        }

        $this->command->info('✅ Se agregaron ' . count($cartas) . ' cartas correctamente');
    }
}