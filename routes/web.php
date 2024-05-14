<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', ['title' => 'Home Page']);
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Satya Uttami', 'title' => 'About']);
});

Route::get('/posts', function () {
    return view('posts', ['title' => 'Blog', 'posts' => [
        [
            'id' => '1',
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Satya Uttami',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quidem excepturi. Neque, fuga illum hic repellat aliquid corporis aspernatur nemo non culpa minima at, rerum dolore inventore vero harum labore!'
        ],
        [
            'id' => '2',
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Satya Uttami',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora quae quod. Corporis ex maxime vero, inventore voluptatem eos delectus facilis atque quod, perferendis neque? Officia aliquid placeat aspernatur inventore?'
        ],
    ]]);
});

Route::get('/posts/{slug}', function ($slug) {
    $posts = [
        [
            'id' => 1,
            'slug' => 'judul-artikel-1',
            'title' => 'Judul Artikel 1',
            'author' => 'Satya Uttami',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio, quidem excepturi. Neque, fuga illum hic repellat aliquid corporis aspernatur nemo non culpa minima at, rerum dolore inventore vero harum labore!'
        ],
        [
            'id' => 2,
            'slug' => 'judul-artikel-2',
            'title' => 'Judul Artikel 2',
            'author' => 'Satya Uttami',
            'body' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora quae quod. Corporis ex maxime vero, inventore voluptatem eos delectus facilis atque quod, perferendis neque? Officia aliquid placeat aspernatur inventore?'
        ],
    ];

    $post = Arr::first($posts, function ($post)  use ($slug) {
        return $post['slug'] == $slug;
    });

    return view('post', ['title' => 'Blog - Single Post', 'post' => $post]);
});

Route::get('/contact', function () {
    return view('contact', ['title' => 'Contact']);
});
