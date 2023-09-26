<?php

namespace App\Models;


class Post
{
    private static  $my_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-pertama",
            "author" => "Murtaki",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-kedua",
            "author" => "Taki",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam!"
        ],
        [
            "title" => "Judul Post Ketiga",
            "slug" => "judul-ketiga",
            "author" => "Shihab",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam! Lorem ipsum dolor sit amet consectetur adipisicing elit. Obcaecati, quaerat voluptatum! Eius deleniti numquam quasi eos et officia aliquid deserunt, recusandae dicta exercitationem autem cupiditate eligendi odit dolorum esse nam!"
        ]
    ];

    public static function all()
    {
        return collect(self::$my_posts);
    }

    // public static function find($slug){
    //     $posts = static::all();
    //     $post =[];
    //     foreach ($posts as $p){
    //         if ($p["slug"]=== $slug){
    //             $post= $p;
    //         }
    //     }
    //     return $post;
    // }

    public static function find($slug){
        $posts = static::all();

        return $posts->firstWhere('slug', $slug);
    }
}
