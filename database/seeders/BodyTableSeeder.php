<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Body;

class BodyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ITEMS = [
        'Crossover',
        'Fastback',
        'Hardtop',
        'Hatchback',
        'Kabrió',
        'Kombi',
        'Kupé',
        'Liftback',
        'Limuzin',
        'Minivan',
        'Pickup',
        'Roadster',
        'Szedán',
        'Targa',
    ];
    $bar = $this->command->getOutput()->createProgressBar(count($ITEMS));
        $bar->setFormat("[%bar%]");
        $bar->setBarCharacter('*');
    foreach ($ITEMS as $item) {
        $entity = new Body();
        $entity->name = $item;
         $entity->save();
        $bar->advance();
    }
    $bar->finish();

    }
}
