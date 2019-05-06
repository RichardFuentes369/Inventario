<?php

use Illuminate\Database\Seeder;
use inventarios\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $category1 = Category::create([
    	    'id'	=> 1,
        	'category_name'	=> 'JabonesEnPolvo',
            'description' => 'Jabones en polvo',
            'companies_id' => '1',
    	]);
        $category1->save();

        $category2 = Category::create([
    	    'id'	=> 2,
        	'category_name'	=> 'JabonesEnBarra',
            'description' => 'Jabones en barra (personal y domestico)',
            'companies_id' => '1',
    	]);
        $category2->save();

        $category3 = Category::create([
    	    'id'	=> 3,
        	'category_name'	=> 'JabonesLiquidos',
            'description' => 'Jabones para uso diario',
            'companies_id' => '1',
    	]);
        $category3->save();

        $category4 = Category::create([
    	    'id'	=> 4,
        	'category_name'	=> 'CremaDeDientes',
            'description' => 'Cremas de dientes de todo tipo',
            'companies_id' => '1',
    	]);
        $category4->save();

        $category5 = Category::create([
    	    'id'	=> 5,
        	'category_name'	=> 'Shampoo',
            'description' => 'Shampoo para hombre y mujer',
            'companies_id' => '1',
    	]);
        $category5->save();

        $category6 = Category::create([
            'id'    => 6,
            'category_name' => 'BebidasAlcoholicas',
            'description' => 'Cervezas, Refajos',
            'companies_id' => '1',
        ]);
        $category6->save();

        $category7 = Category::create([
            'id'    => 7,
            'category_name' => 'BebidasRefrescantes',
            'description' => 'Gaseosas, Aguas, Energizantes',
            'companies_id' => '1',
        ]);
        $category7->save();

        $category8 = Category::create([
            'id'    => 8,
            'category_name' => 'Galletas&Pasabocas',
            'description' => 'Todo tipo de galletas',
            'companies_id' => '1',
        ]);
        $category8->save();
    }
}

