<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nasifa Ahda",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Cupiditate sed perferendis minima accusantium nisi repellat quibusdam explicabo dicta similique, accusamus maxime modi nemo ullam at adipisci tempora quisquam esse doloremque tenetur aperiam. Alias dolorum nulla veniam nobis fugiat nesciunt vel minima nisi repellendus, ducimus, minus odit tenetur quae deleniti quidem labore, molestiae unde laudantium. Cumque doloremque natus sed quibusdam ipsum? Iure, pariatur? Itaque voluptatum illo iure ipsa perferendis, quisquam sed fugiat nulla eligendi error eos ullam saepe labore. Sapiente, cumque?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Rafi Sanjaya",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequuntur molestiae asperiores ad officiis ab vitae illo, accusantium explicabo qui. Eum, deserunt? Accusantium earum dignissimos ducimus, dolore commodi accusamus suscipit! Saepe, veniam non molestias laborum repellat harum porro. Maiores incidunt omnis iusto veniam odit pariatur cum eos. Quis excepturi voluptate qui. Sit deleniti nostrum ut, sapiente dolorem enim minima adipisci rem? Sapiente enim aperiam nemo rem, aut explicabo a tempora quaerat, porro hic eius minima optio rerum totam eveniet recusandae assumenda. Similique perferendis accusamus doloribus eligendi exercitationem dignissimos sapiente nisi harum, omnis voluptatibus impedit officiis saepe, unde, amet pariatur? Explicabo, minus."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
         $posts = static::all();
         return $posts->firstWhere('slug', $slug);
    }
}