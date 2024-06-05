<?php


namespace App\classes;


class News
{
    public $news = [];

    public function __construct()
    {
        $this->news = [
            0 => [
                'id' => 1,
                'image' => 'assets/img/news/news (1).jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae id, quos? A alias aut, consequatur debitis harum iure maxime mollitia nemo quaerat soluta temporibus veniam.',
            ],
            1 => [
                'id' => 2,
                'image' => 'assets/img/news/news (2).jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae id, quos? A alias aut, consequatur debitis harum iure maxime mollitia nemo quaerat soluta temporibus veniam.',
            ]
        ];
    }

    public function getAllNewsData()
    {
        return $this->news;
    }

    public function getNewsById($id)
    {
        foreach ($this->news as $datum) {
            if ($datum['id'] == $id) {
                return $datum;
            }
        }
    }


}