<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "name" => "Adam Maulana",
        "email" => "adamcinta24@gmail.com",
        "image" => "adam.jpg",

    ]);
});

Route::get('/blog', function () {
    $blog_posts = [

        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adam Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit mollitia laudantium pariatur quasi consectetur repudiandae vitae, est, fuga reprehenderit quae error inventore? Accusantium laborum aliquam porro perferendis aliquid, sint recusandae beatae id iusto dolorum officiis earum alias asperiores non eos quidem accusamus repellat voluptatem vitae excepturi atque iste numquam voluptas. Quam id suscipit amet cum harum nesciunt illum ipsum voluptatibus, porro doloribus aperiam possimus nemo recusandae, asperiores enim consectetur provident facere optio, temporibus officia nihil. Ipsam quas dolore debitis fugit.",

        ],
        [

            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Daffa Firdaus",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi quidem officia perspiciatis cumque itaque quaerat ad velit qui quod sint tempore, numquam consequatur odio quae iste ratione, sequi dolor natus, iusto eveniet rem illo inventore! Quas earum nam et fugit. Vitae asperiores, iure et quibusdam nemo odio voluptatum debitis quidem qui laboriosam harum illo sequi ipsum nulla temporibus rem facere error incidunt hic a reiciendis commodi magni ex? Error voluptate explicabo, praesentium magnam mollitia id exercitationem omnis aut quidem aliquam, repudiandae nostrum reprehenderit non excepturi deleniti facilis ex iste tempore aperiam accusantium consequuntur impedit esse? Quaerat quibusdam deleniti quae harum.",
        ],

    ];
    return view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts,
    ]);
});

// halaman single post
Route::get('posts/{slug}', function ($slug) {
    $blog_posts = [

        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Adam Maulana",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Impedit mollitia laudantium pariatur quasi consectetur repudiandae vitae, est, fuga reprehenderit quae error inventore? Accusantium laborum aliquam porro perferendis aliquid, sint recusandae beatae id iusto dolorum officiis earum alias asperiores non eos quidem accusamus repellat voluptatem vitae excepturi atque iste numquam voluptas. Quam id suscipit amet cum harum nesciunt illum ipsum voluptatibus, porro doloribus aperiam possimus nemo recusandae, asperiores enim consectetur provident facere optio, temporibus officia nihil. Ipsam quas dolore debitis fugit.",

        ],
        [

            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Daffa Firdaus",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Excepturi quidem officia perspiciatis cumque itaque quaerat ad velit qui quod sint tempore, numquam consequatur odio quae iste ratione, sequi dolor natus, iusto eveniet rem illo inventore! Quas earum nam et fugit. Vitae asperiores, iure et quibusdam nemo odio voluptatum debitis quidem qui laboriosam harum illo sequi ipsum nulla temporibus rem facere error incidunt hic a reiciendis commodi magni ex? Error voluptate explicabo, praesentium magnam mollitia id exercitationem omnis aut quidem aliquam, repudiandae nostrum reprehenderit non excepturi deleniti facilis ex iste tempore aperiam accusantium consequuntur impedit esse? Quaerat quibusdam deleniti quae harum.",
        ],

    ];

    $new_post = [];
    foreach ($blog_posts as $post) {
        if ($post["slug"] === $slug) {
            $new_post = $post;

        }

    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post,

    ]);

});
