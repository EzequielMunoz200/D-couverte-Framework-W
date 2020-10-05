<?php

namespace Model;


class OptionModel
{
    /**
     * @var Array
     */
    private $gallery = [
        'option Red' => 1,
        'option Blue' => 2,
        'option Vert' => 3,

    ];


    public function __construct()
    {
        
    }

    public function getGallery()
    {
        return $this->gallery;
    }
}
