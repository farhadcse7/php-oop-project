<?php


namespace App\classes;


class Article
{
    public $article = [];

    public function __construct()
    {
        $this->article = [
            0 => [
                'id' => 1,
                'title' => 'This is title content 1',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae id, quos? A alias aut, consequatur debitis harum iure maxime mollitia nemo quaerat soluta temporibus veniam.',
            ],
            1 => [
                'id' => 2,
                'title' => 'This is title content 2',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae id, quos? A alias aut, consequatur debitis harum iure maxime mollitia nemo quaerat soluta temporibus veniam.',
            ],
            2 => [
                'id' => 3,
                'title' => 'This is title content 3',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae id, quos? A alias aut, consequatur debitis harum iure maxime mollitia nemo quaerat soluta temporibus veniam.',
            ]
        ];
    }

    public function getAllArticleData()
    {
        return $this->article;
    }

    public function getArticleById($id)
    {
        foreach ($this->article as $datum) {
            if ($datum['id'] == $id) {
                return $datum;
            }
        }
    }

}