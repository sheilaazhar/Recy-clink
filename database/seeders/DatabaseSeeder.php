<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Produk;
use App\Models\Kecamatan;

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
            'kecamatan_id'=>1,
            'address'=>'Bandung',
            'password'=>bcrypt('password')
        ]);

        User::create([
           'name'=>'Sheila Azhar',
           'username'=>'sheilaazhar',
           'email'=>'sheila.azhar98@gmail.com',
           'usertype'=>0,
           'phone'=>'081234567890',
           'kecamatan_id'=>9,
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
            'bahan'=>'Plastik',
            'harga'=>85000,
            'stok'=>10
         ]);

        Produk::create([
            'nama_produk'=>'Gaun Fashion Paper',
            'bahan'=>'kertas',
            'harga'=>145000,
            'stok'=>5
         ]);

         Kecamatan::create([
            'nama_kecamatan'=>'Bandung Kulon'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Babakan Ciparay'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Bojongloa Kaler'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Bojongloa Kidul'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Astanaanyar'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Regol'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Lengkong'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Bandung Kidul'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Buahbatu'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Rancasari'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Gedebage'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Cibiru'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Panyileukan'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Ujung Berung'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Cinambo'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Arcamanik'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Antapani'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Mandalajati'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Kiaracondong'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Batununggal'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Sumur Bandung'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Andir'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Cicendo'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Bandung Wetan'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Cibeunying Kidul'
         ]);
        Kecamatan::create([
            'nama_kecamatan'=>'Cibeunying Kaler'
         ]);
    }
}
