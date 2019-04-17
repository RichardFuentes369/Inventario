<?php

use Illuminate\Database\Seeder;
use inventarios\products;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product1 = products::create([
        	'id' => 1,
			'name' => 'Jabon en polvo, olor a frutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '1',
			'provider_id' => '1',
    	]);
        $product1->save();

        $product2 = products::create([
        	'id' => 2,
			'name' => 'Jabon en polvo, olor a lavanda',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '1',
			'provider_id' => '2',
    	]);
        $product2->save();

        $product3 = products::create([
        	'id' => 3,
			'name' => 'Jabon en polvo, olor a tierra',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '1',
			'provider_id' => '3',
    	]);
        $product3->save();

        $product4 = products::create([
        	'id' => 4,
			'name' => 'Crema triple acción Colgate',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '4',
			'provider_id' => '4',
    	]);
        $product4->save();

        $product5 = products::create([
        	'id' => 5,
			'name' => 'Crema con cristales refrescantes Colgate',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '4',
			'provider_id' => '4',
    	]);
        $product5->save();

        $product6 = products::create([
        	'id' => 6,
			'name' => 'Shampoo Ego para hombres',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '5',
			'provider_id' => '5',
    	]);
        $product6->save();

        $product7 = products::create([
        	'id' => 7,
			'name' => 'Shampoo Ego para niños y niñas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '5',
			'provider_id' => '6',
    	]);
        $product7->save();

        $product8 = products::create([
        	'id' => 8,
			'name' => 'Shampoo Savital rubios aclarates',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '5',
			'provider_id' => '8',
    	]);
        $product8->save();

        $product9 = products::create([
        	'id' => 9,
			'name' => 'Jabon en polvo, olor a frutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '1',
			'provider_id' => '9',
    	]);
        $product9->save();

        $product11 = products::create([
        	'id' => 11,
			'name' => 'Jabon en polvo, olor a frutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '1',
			'provider_id' => '10',
    	]);
        $product11->save();

        $product12 = products::create([
        	'id' => 12,
			'name' => 'Jabon en polvo, olor a frutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '1',
			'provider_id' => '10',
    	]);
        $product12->save();

        $product13 = products::create([
        	'id' => 13,
			'name' => 'Jabon en polvo, olor a frutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '1',
			'provider_id' => '11',
    	]);
        $product13->save();

        $product14 = products::create([
        	'id' => 14,
			'name' => 'Jabon en polvo, olor a frutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '1',
			'provider_id' => '11',
    	]);
        $product14->save();

        $product15 = products::create([
        	'id' => 15,
			'name' => 'Aguila en lata',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '6',
			'provider_id' => '12',
    	]);
        $product15->save();

        $product16 = products::create([
        	'id' => 16,
			'name' => 'Aguila Light en lata',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '6',
			'provider_id' => '12',
    	]);
        $product16->save();

        $product17 = products::create([
        	'id' => 17,
			'name' => 'Aguila sin alcohol en lata',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '6',
			'provider_id' => '12',
    	]);
        $product17->save();

        $product18 = products::create([
        	'id' => 18,
			'name' => 'Pepsi',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '7',
			'provider_id' => '13',
    	]);
        $product18->save();

        $product19 = products::create([
        	'id' => 19,
			'name' => 'Galletas Festival sabor a limon',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '8',
			'provider_id' => '10',
    	]);
        $product19->save();

        $product20 = products::create([
        	'id' => 20,
			'name' => 'Galletas Festival sabor a chocolate',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '8',
			'provider_id' => '10',
    	]);
        $product20->save();

        $product21 = products::create([
        	'id' => 21,
			'name' => 'Galletas Festival sabor a vainilla',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'category_id' => '8',
			'provider_id' => '10',
    	]);
        $product21->save();
    }
}


