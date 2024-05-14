<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
  public static function all()
  {
    return [
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
    ];
  }

  public static function find($slug): array
  {
    // return Arr::first(static::all(), function ($post)  use ($slug) {
    //   return $post['slug'] == $slug;
    // });

    $post = Arr::first(static::all(), fn ($post) => $post['slug'] == $slug);

    if (!$post) {
      abort(404);
    }
    return $post;
  }
}
