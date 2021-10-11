<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Sheila Azhar",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia numquam adipisci veniam ipsam tenetur, eum dolor unde fugit amet nihil dicta labore cum consequuntur rerum eveniet sint, totam omnis consequatur, magnam in! Blanditiis voluptate officia distinctio, dicta error maiores, cumque adipisci impedit possimus nobis recusandae. Ratione adipisci, aperiam, tempora mollitia molestias iste libero qui facere corporis, veritatis asperiores consequuntur. Maiores expedita fugiat id, consequuntur ab atque perspiciatis soluta alias, sapiente architecto saepe quisquam quis neque, cupiditate corporis est praesentium vero!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Almufarida",
            "body" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate harum officiis, maxime aspernatur quibusdam fugit nisi aliquid. Explicabo omnis sed harum molestias numquam veritatis consectetur inventore asperiores praesentium? Nostrum temporibus nisi quas, aut dolore possimus vitae accusamus ipsam explicabo accusantium enim cumque, repellendus veritatis minima, amet asperiores omnis et! Delectus ipsa laboriosam, accusamus numquam quos officia incidunt earum et perferendis voluptatibus consectetur, quo deserunt cumque magnam molestiae totam provident officiis sint quas sunt. Eaque incidunt delectus, ad aperiam beatae perferendis aspernatur quasi doloremque obcaecati possimus harum sint enim rem molestiae, illo, molestias in deserunt dicta voluptate! Totam dicta laudantium rerum?"
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts -> firstWhere('slug', $slug);
    }
}
