<?php

use Illuminate\Database\Seeder;
use inventarios\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $product1 = Product::create([
        	'id' => 1,
			'name' => 'JabonEnPolvo,OlorAFrutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '1',
			'provider_id' => '1',
    	]);
        $product1->save();

        $product2 = Product::create([
        	'id' => 2,
			'name' => 'JabonEnPolvo,OlorALavanda',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '1',
			'provider_id' => '2',
    	]);
        $product2->save();

        $product3 = Product::create([
        	'id' => 3,
			'name' => 'JabonEnPolvo,OlorATierra',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '1',
			'provider_id' => '3',
    	]);
        $product3->save();

        $product4 = Product::create([
        	'id' => 4,
			'name' => 'CremaTripleAcciónColgate',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '4',
			'provider_id' => '4',
    	]);
        $product4->save();

        $product5 = Product::create([
        	'id' => 5,
			'name' => 'CremaConCristalesRefrescantesColgate',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '4',
			'provider_id' => '4',
    	]);
        $product5->save();

        $product6 = Product::create([
        	'id' => 6,
			'name' => 'ShampooEgoParaHombres',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '5',
			'provider_id' => '5',
    	]);
        $product6->save();

        $product7 = Product::create([
        	'id' => 7,
			'name' => 'ShampooEgoParaNiños&Niñas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '5',
			'provider_id' => '6',
    	]);
        $product7->save();

        $product8 = Product::create([
        	'id' => 8,
			'name' => 'ShampooSavitalRubiosAclarates',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '5',
			'provider_id' => '8',
    	]);
        $product8->save();

        $product9 = Product::create([
        	'id' => 9,
			'name' => 'JabonEnPolvo,OlorAFrutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '1',
			'provider_id' => '1',
    	]);
        $product9->save();

        $product11 = Product::create([
        	'id' => 11,
			'name' => 'JabonEnPolvo,OlorAFrutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '1',
			'provider_id' => '1',
    	]);
        $product11->save();

        $product12 = Product::create([
        	'id' => 12,
			'name' => 'JabonEnPolvo,OlorAFrutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '1',
			'provider_id' => '2',
    	]);
        $product12->save();

        $product13 = Product::create([
        	'id' => 13,
			'name' => 'JabonEnPolvo,OlorAFrutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '1',
			'provider_id' => '1',
    	]);
        $product13->save();

        $product14 = Product::create([
        	'id' => 14,
			'name' => 'JabonEnPolvo,OlorAFrutas',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '1',
			'provider_id' => '2',
    	]);
        $product14->save();

        $product15 = Product::create([
        	'id' => 15,
			'name' => 'AguilaEnLata',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '6',
			'provider_id' => '12',
    	]);
        $product15->save();

        $product16 = Product::create([
        	'id' => 16,
			'name' => 'AguilaLightEnLata',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '6',
			'provider_id' => '12',
    	]);
        $product16->save();

        $product17 = Product::create([
        	'id' => 17,
			'name' => 'AguilaSinAlcoholEnLata',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '6',
			'provider_id' => '12',
    	]);
        $product17->save();

        $product18 = Product::create([
        	'id' => 18,
			'name' => 'Pepsi',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '7',
			'provider_id' => '13',
    	]);
        $product18->save();

        $product19 = Product::create([
        	'id' => 19,
			'name' => 'GalletasFestivalSaborALimon',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '8',
			'provider_id' => '10',
    	]);
        $product19->save();

        $product20 = Product::create([
        	'id' => 20,
			'name' => 'GalletasFestivalSaborAChocolate',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '8',
			'provider_id' => '10',
    	]);
        $product20->save();

        $product21 = Product::create([
        	'id' => 21,
			'name' => 'GalletasFestivalSaborAVainilla',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '8',
			'provider_id' => '10',
    	]);
        $product21->save();

        $product22 = Product::create([
        	'id' => 22,
			'name' => 'JabonLiquidoDersa',
			'lote' => '000000001',
			'manufacturing_date' => '2019-02-16',
			'expiration_date' => '2022-02-16',
			'quantity' => 250,
			'price' => 1000.0,
			'category_id' => '3',
			'provider_id' => '1',
    	]);
        $product22->save();
    }
}
