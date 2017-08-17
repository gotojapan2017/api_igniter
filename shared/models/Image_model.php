<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once SHAREDPATH . "/core/APP_Image_model.php";


class Image_model extends APP_Image_model
{
    public $database_name = DB_IMAGE;
    public $table_name = 'image';
    public $image_types = [
        'thumbnail_tiny' => ['type' => 'thumbnail', 'size' => 50, 'quality' => 30],
        'thumbnail_small' => ['type' => 'thumbnail', 'size' => 100, 'quality' => 30],
        'thumbnail' => ['type' => 'thumbnail', 'size' => 200, 'quality' => 50],
        'thumbnail_large' => ['type' => 'resize', 'width' => 400, 'height' => 400, 'quality' => 60],
        '640_360' => ['type' => 'resize', 'width' => 640, 'height' => 360, 'quality' => 90]
    ];
}
