<?php


namespace App\classes;


class Feature
{
    public $data = [];

    public function __construct()
    {
        $this->data = [
            0 => [
                'id' => 1,
                'description' => '1 Feature Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
            ],
            1 => [
                'id' => 2,
                'description' => '2 Feature Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
            ],
            2 => [
                'id' => 3,
                'description' => '3 Feature Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
            ]
        ];
    }

    public function getAllFeatureData()
    {
        return $this->data;
    }

}