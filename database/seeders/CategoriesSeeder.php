<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategoriesSeeder extends Seeder
{
    public $categories = [
        'Elettronica',
        'Abbigliamento',
        'Casa e cucina',
        'Libri',
        'Giocattoli',
        'Sport',
        'Tempo libero',
        'Salute',
        'Bellezza',
        'Automobili',
        'Moto',
        'Gioielli e orologi',
        'Musica',
        'Film e TV',
        'Videogiochi',
    ];
    public function run(): void
    {
        foreach ($this->categories as $category) {
            Category::create(['name' => $category]);
        }
    }
}
