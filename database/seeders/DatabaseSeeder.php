<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Produk;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        
        User::create([
            'name'=>'admin',
            'username'=>'admin',
            'email'=>'admin@gmail.com',
            'usertype'=>1,
            'phone'=>'081987654321',
            'address'=>'Bandung',
            'password'=>bcrypt('password')
        ]);

        User::create([
           'name'=>'Sheila Azhar',
           'username'=>'sheilaazhar',
           'email'=>'sheila.azhar98@gmail.com',
           'usertype'=>0,
           'phone'=>'081234567890',
           'address'=>'Kuningan',
           'password'=>bcrypt('password')
        ]);

        //User::factory(3)->create();

        Post::factory(20)->create();

        // Post::create([
        //     'title'=>'Judul Pertama',
        //     'slug'=>'judul-pertama',
        //     'excerpt'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta reprehenderit amet aliquid asperiores voluptatibus velit illum corrupti corporis labore iste.',
        //     'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus dolorem necessitatibus dolorum debitis placeat, explicabo officia cumque ea dolor possimus quibusdam eveniet doloribus nobis beatae suscipit quod quia ipsa aspernatur harum eius ad sit odit. Libero similique reiciendis voluptatibus, placeat at vero enim pariatur maxime vitae nam maiores velit optio cum aut consequatur aliquid impedit! Modi harum repudiandae tenetur, ipsa atque quas aliquam optio nam beatae? Natus libero totam unde voluptas, tempora dolorum sapiente explicabo officiis soluta blanditiis sunt pariatur perferendis molestias nemo, voluptatum praesentium beatae optio rerum laborum! Maxime dolores error sint nostrum deleniti consequuntur alias tempora provident ut!',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Kedua',
        //     'slug'=>'judul-kedua',
        //     'excerpt'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta reprehenderit amet aliquid asperiores voluptatibus velit illum corrupti corporis labore iste.',
        //     'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus dolorem necessitatibus dolorum debitis placeat, explicabo officia cumque ea dolor possimus quibusdam eveniet doloribus nobis beatae suscipit quod quia ipsa aspernatur harum eius ad sit odit. Libero similique reiciendis voluptatibus, placeat at vero enim pariatur maxime vitae nam maiores velit optio cum aut consequatur aliquid impedit! Modi harum repudiandae tenetur, ipsa atque quas aliquam optio nam beatae? Natus libero totam unde voluptas, tempora dolorum sapiente explicabo officiis soluta blanditiis sunt pariatur perferendis molestias nemo, voluptatum praesentium beatae optio rerum laborum! Maxime dolores error sint nostrum deleniti consequuntur alias tempora provident ut!',
        //     'category_id'=>1,
        //     'user_id'=>1
        // ]);

        // Post::create([
        //     'title'=>'Judul Ketiga',
        //     'slug'=>'judul-ketiga',
        //     'excerpt'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Soluta reprehenderit amet aliquid asperiores voluptatibus velit illum corrupti corporis labore iste.',
        //     'body'=>'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus dolorem necessitatibus dolorum debitis placeat, explicabo officia cumque ea dolor possimus quibusdam eveniet doloribus nobis beatae suscipit quod quia ipsa aspernatur harum eius ad sit odit. Libero similique reiciendis voluptatibus, placeat at vero enim pariatur maxime vitae nam maiores velit optio cum aut consequatur aliquid impedit! Modi harum repudiandae tenetur, ipsa atque quas aliquam optio nam beatae? Natus libero totam unde voluptas, tempora dolorum sapiente explicabo officiis soluta blanditiis sunt pariatur perferendis molestias nemo, voluptatum praesentium beatae optio rerum laborum! Maxime dolores error sint nostrum deleniti consequuntur alias tempora provident ut!',
        //     'category_id'=>2,
        //     'user_id'=>2
        // ]);

        Produk::create([
            'nama_produk'=>'Fancy Bag Plastic',
            'harga'=>85000,
            'stok'=>10
         ]);

        Produk::create([
            'nama_produk'=>'Gaun Fashion Paper',
            'harga'=>145000,
            'stok'=>5
         ]);
    }
}
