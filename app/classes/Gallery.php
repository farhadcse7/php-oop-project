<?php


namespace App\classes;


class Gallery
{
    public $data = [];

    public function __construct()
    {
        $this->data = [
            0 => [
                'id' => 1,
                'image' => 'assets/img/gallery/gallery (1).jpg',
                'heading' => 'This is heading content 1',
            ],
            1 => [
                'id' => 2,
                'image' => 'assets/img/gallery/gallery (2).jpg',
                'heading' => 'This is heading content 2',
            ]
        ];
    }

    public function getAllGalleryData()
    {
        return $this->data;
    }

}