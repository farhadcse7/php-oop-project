<?php


namespace App\classes;


class Slider
{
    public $data = [];

    public function __construct()
    {
        $this->data = [
            0 => [
                'id' => 1,
                'title' => 'This is slider one title',
                'short_description' => 'This slider short description one',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
                'image' => "assets/img/slider/slider (1).jpg"
            ],
            1 => [
                'id' => 2,
                'title' => 'This is slider two title',
                'short_description' => 'This slider short description two',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
                'image' => "assets/img/slider/slider (2).jpg"
            ],
            2 => [
                'id' => 3,
                'title' => 'This is slider three title',
                'short_description' => 'This slider short description three',
                'long_description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
                'image' => "assets/img/slider/slider (3).jpg"
            ]
        ];
    }

    public function getAllSliderData()
    {
        return $this->data;
    }

    public function getSliderById($id)
    {
        foreach ($this->data as $datum) {
            if ($datum['id'] == $id) {
                return $datum;
            }
        }
    }

}