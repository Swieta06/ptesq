<?php

use App\User;
use App\Product;
use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        User::create([
            'name'=>'swieta',
            'email'=>'swieta@gmail.com',
            'password'=>bcrypt('password')
        ]);
        Product::create([
            'name'=>'milk',
            'category_id'=>1,
            'price'=>'12000',
            'image'=>'1.jpg',
            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus illo vitae placeat excepturi sequi voluptas odio dignissimos, molestiae fuga
            rem inventore cum, mollitia delectus? Ipsa ipsum autem commodi blanditiis minus.'
        ]);
        Product::create([
            'name'=>'wishkas',
            'category_id'=>1,
            'image'=>'1.jpg',
            'price'=>'12000',
            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus illo vitae placeat excepturi sequi voluptas odio dignissimos, molestiae fuga
            rem inventore cum, mollitia delectus? Ipsa ipsum autem commodi blanditiis minus.'
        ]);
        Product::create([
            'name'=>'Bag',
            'price'=>'12000',
            'category_id'=>2,
            'image'=>'1.jpg',
            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus illo vitae placeat excepturi sequi voluptas odio dignissimos, molestiae fuga
            rem inventore cum, mollitia delectus? Ipsa ipsum autem commodi blanditiis minus, distinctio rem.'
        ]);
        Product::create([
            'name'=>'storage',
            'price'=>'12000',
            'category_id'=>1,
            'image'=>'1.jpg',
            'description'=>'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ducimus illo vitae placeat excepturi sequi voluptas odio dignissimos, molestiae fuga
            rem inventore cum, mollitia delectus? Ipsa ipsum autem commodi blanditiis minus.'
        ]);
        Category::create([
            'name'=>'food'
        ]);
        Category::create([
            'name'=>'Tools'
        ]);
    }
}
