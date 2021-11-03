<?php

namespace App\Models;

class Post
{
    private static $blog_posts =  [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Albert",
            "body" => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Cupiditate maxime eligendi, dolorem nihil minus neque eveniet aliquam quidem exercitationem ullam iusto perferendis repudiandae a quod praesentium molestiae aperiam autem sed, sunt explicabo suscipit ab! Aliquam totam, ducimus excepturi temporibus doloribus atque adipisci aliquid dolor tempore recusandae quaerat similique odit veritatis, fugiat quod neque, distinctio eius! Fugiat aut consequatur, rerum assumenda accusamus voluptate vel ex pariatur repellat eligendi. Libero facere id, temporibus, laborum harum explicabo repudiandae quaerat itaque minima dignissimos accusamus!"
        ],
        [
            "title" => "Judul Post Albert",
            "slug" => "judul-post-kedua",
            "author" => "Albert2",
            "body" => "dolorem nihil minus neque eveniet aliquam quidem exercitationem ullam iusto perferendis repudiandae a quod praesentium molestiae aperiam autem sed, sunt explicabo suscipit ab! Aliquam totam, ducimus excepturi temporibus doloribus atque adipisci aliquid dolor tempore recusandae quaerat similique odit veritatis, fugiat quod neque, distinctio eius! Fugiat aut consequatur, rerum assumenda accusamus voluptate vel ex pariatur repellat eligendi. Libero facere id, temporibus, laborum harum explicabo repudiandae quaerat itaque minima dignissimos accusamus!"
        ]
    ];

    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug',$slug);
    }
}
