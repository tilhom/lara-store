<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
/*1 */       Product::create([
	            'name' => 'FLORAL DRESS1',
	            'slug' => 'floral-dress1',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*2*/        Product::create([
	            'name' => 'FLORAL DRESS2',
	            'slug' => 'floral-dress2',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 19900,
	            'sale' => 1,
	            'new' => 0,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/* 3*/       Product::create([
	            'name' => 'FLORAL DRESS3',
	            'slug' => 'floral-dress3',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*4*/       Product::create([
	            'name' => 'FLORAL DRESS4',
	            'slug' => 'floral-dress4',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 0,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
 /*5*/       Product::create([
	            'name' => 'FLORAL DRESS5',
	            'slug' => 'floral-dress5',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 19900,
	            'sale' => 1,
	            'new' => 0,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*6*/        Product::create([
	            'name' => 'FLORAL DRESS6',
	            'slug' => 'floral-dress6',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
 /*7*/       Product::create([
	            'name' => 'FLORAL DRESS7',
	            'slug' => 'floral-dress7',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 0,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
 /*8*/       Product::create([
	            'name' => 'FLORAL DRESS8',
	            'slug' => 'floral-dress8',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*9*/        Product::create([
	            'name' => 'FLORAL DRESS9',
	            'slug' => 'floral-dress9',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*10*/        Product::create([
	            'name' => 'FLORAL DRESS10',
	            'slug' => 'floral-dress10',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*11*/        Product::create([
	            'name' => 'FLORAL DRESS11',
	            'slug' => 'floral-dress11',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
/*12*/        Product::create([
	            'name' => 'FLORAL DRESS12',
	            'slug' => 'floral-dress12',
	            'details' => 'Lorem ipsum dolor sit amet, consectetur.',
	            'price' => 30000,
	            'newprice' => 0,
	            'sale' => 0,
	            'new' => 1,
	            'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
	        ]);
    }
}
