<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {


        DB::table('cocktails')->insert([
            'name' => 'Snowball',
            'image' => 'https://www.thecocktaildb.com/images/media/drink/7ibfs61504735416.jpg',
            'preparation' => 'Coloque un cubito de hielo en el vaso y agregue 1 1/2 oz de Advocaat. Llena el vaso con limonada y decora con una rodaja de limón. Servir de inmediato.'
        ]);

        DB::table('cocktails')->insert([
            'name' => 'Allegheny',
            'image' => 'https://www.thecocktaildb.com/images/media/drink/uwvyts1483387934.jpg',
            'preparation' => 'Agite todos los ingredientes (excepto el twist de limón) con hielo y cuele en un vaso de cóctel. Cubra con el twist de limón y sirva.'
        ]);

        DB::table('cocktails')->insert([
            'name' => 'Turkeyball',
            'image' => 'https://www.thecocktaildb.com/images/media/drink/rxurpr1441554292.jpg',
            'preparation' => 'Agitar con hielo y colar en un vaso de chupito.'
        ]);

        DB::table('cocktails')->insert([
            'name' => 'Apple Highball',
            'image' => 'https://www.thecocktaildb.com/images/media/drink/66mt9b1619695719.jpg',
            'preparation' => 'Agregue hielo a un vaso alto. Frote una rodaja de limón fresco alrededor del borde y colóquelo en el vaso. Agregue un chupito de brandy de manzana, un chupito de Courvoisier y complete con Ginger Ale.'
        ]);

        DB::table('cocktails')->insert([
            'name' => 'Allies Cocktail',
            'image' => 'https://www.thecocktaildb.com/images/media/drink/qvprvp1483388104.jpg',
            'preparation' => 'Mezclar todos los ingredientes con hielo, colar el contenido en un vaso de cóctel y servir.'
        ]);

        DB::table('cocktails')->insert([
            'name' => 'Halloween Punch',
            'image' => 'https://www.thecocktaildb.com/images/media/drink/7hcgyj1571687671.jpg',
            'preparation' => 'Vierta el jugo de cereza, la cáscara de naranja, la guindilla, las ramas de canela, el clavo y el jengibre en una cacerola grande. Cocine a fuego lento durante 5 minutos, luego apague el fuego. Déjelo enfriar y luego enfríelo durante al menos 4 horas o hasta 2 días; cuanto más lo deje, más intensos serán los sabores. Si se lo sirve a niños pequeños, retire el chile después de unas horas. Cuando estés listo para servir, vierte el jugo en una jarra. Sirva en botellas o vasos de vidrio y coloque una pajita en cada uno. Si vas a agregar vodka, hazlo en esta etapa. Cuelga un dulce de colmillos de cada vaso.'
        ]);

        DB::table('cocktails')->insert([
            'name' => 'Bermuda Highball',
            'image' => 'https://www.thecocktaildb.com/images/media/drink/qrvtww1441206528.jpg',
            'preparation' => 'Vierta brandy, ginebra y vermú seco en un vaso alto sobre cubitos de hielo. Llene con agua carbonatada y revuelva. Agrega la rodaja de limón y sirve. (Si se prefiere, se puede sustituir el ginger ale por agua carbonatada).'
        ]);

        DB::table('cocktails')->insert([
            'name' => 'English Highball',
            'image' => 'https://www.thecocktaildb.com/images/media/drink/dhvr7d1504519752.jpg',
            'preparation' => 'Vierta brandy, ginebra y vermú dulce en un vaso alto sobre cubitos de hielo. Llénelo con agua carbonatada. Agrega la rodaja de cáscara de limón, revuelve y sirve. (Si se prefiere, se puede sustituir el ginger ale por agua carbonatada).'
        ]);

        DB::table('cocktails')->insert([
            'name' => 'Harvey Wallbanger',
            'image' => 'https://www.thecocktaildb.com/images/media/drink/7os4gs1606854357.jpg',
            'preparation' => 'Revuelve el vodka y el jugo de naranja con hielo en el vaso y luego deja flotar el Galliano encima. Adorne y sirva.'
        ]);

        $this->call([
            CocktailSeeder::class,
        ]);
    }
}
