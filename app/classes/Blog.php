<?php


namespace App\classes;


class Blog
{
    public $blogs = [];

    public function __construct()
    {
        $this->blogs = [
            0 => [
                'id' => 1,
                'title' => 'This is blog title one',
                'description' => 'This is blog title one description. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
                'image' => 'assets/img/blog/blog (1).jpg',
            ],
            1 => [
                'id' => 2,
                'title' => 'This is blog title two',
                'description' => 'This is blog title two description. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
                'image' => 'assets/img/blog/blog (2).jpg',
            ],
            2 => [
                'id' => 3,
                'title' => 'This is blog title three',
                'description' => 'This is blog title three description. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
                'image' => 'assets/img/blog/blog (3).jpg',
            ]
        ];
    }

    public function getAllBlogData()
    {
        return $this->blogs;
    }

    public function getBlogById($id)
    {
        foreach ($this->blogs as $datum) {
            if ($datum['id'] == $id) {
                return $datum;
            }
        }
    }

}