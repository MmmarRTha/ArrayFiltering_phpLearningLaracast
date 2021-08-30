<?php

class Post
{
    public $title;
    public $author;
    public $published;

    public function __construct($title, $author, $published)
    {
        $this->title = $title;
        $this->author = $author;
        $this->published = $published;

    }
}

$posts = [
  new Post('My First post', 'MN',true),
  new Post('My Second post', 'MN', true),
  new Post('My Third post', 'GO',true),
  new Post('My Fourth post', 'NN', false),
];

//array filter
$unpublishedPosts = array_filter($posts, function ($post){
   return ! $post->published;
});

$publishedPosts = array_filter($posts, function ($post){
   return $post->published;
});

//array map
$modified = array_map(function ($post){
    //$post->published = true;

    //colection of arrays
   //return (array) $post;

    //subset
    return ['title' => $post->title];
}, $posts);

/*foreach ($posts as $post){
    $post->published = true;
}*/

//array column
$authors = array_column($posts, 'author', 'title');

var_dump($authors);
