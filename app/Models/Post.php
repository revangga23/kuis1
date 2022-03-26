<?php

namespace App\Models;




class Post 
{
    private static $blog_posts  = [
        [
            "title" => "Judul Pertama Nich",
            "slug" => "judul-pertama-nich",
            "author" => "peyok",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit facilis fugiat architecto quas ipsum 
            voluptates vitae velit vero expedita provident assumenda temporibus exercitationem cumque, perferendis 
            eligendi! Odit laboriosam eum, dolor inventore quia atque sed totam quidem ipsa ut ratione veritatis 
            voluptate, consequatur et tempore, odio nam autem. Cupiditate fugiat beatae ducimus quas, dolorem eum 
            aperiam atque recusandae accusamus repellendus ab." 
            ],
            [
                "title" => "Judul Kedua Nich",
                "slug" => "judul-kedua-nich",
                "author" => "haruka",
                "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Minima mollitia tempora minus animi impedit vero 
                cumque quas inventore veritatis, sed saepe eos at ab temporibus molestias rem, id quo, beatae cupiditate 
                repudiandae nisi similique culpa. Quos consequuntur provident incidunt iure quidem cumque maiores expedita 
                tempora, ea qui ab eius, cum soluta animi quis, odio dolore repellat! Dolores consequuntur earum iste 
                voluptatem harum qui, et unde reprehenderit nam labore culpa cumque atque quos sequi repellendus obcaecati 
                officia, incidunt sit odio pariatur." 
                ],
            ];

            public static function all()
            {
                return collect(self::$blog_posts);
            }

        public static function find($slug)
        {
            $posts = static::all();
            // $post = [];
            // foreach($posts as $p) {
            // if($p["slug"] === $slug) {
            //     $post = $p;
            //     }
            //   }

    return $posts->firstwhere('slug', $slug);
        }
}
