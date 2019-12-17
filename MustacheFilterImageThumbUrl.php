<?php

class MustacheFilterImageThumbUrl {

    public function __isset($property) {
        return !is_null($this->$property);
    }

    public function __get($property) {
        $tmp = [];
        if (!preg_match('~^([0-9]+)([x|X])([0-9]+)$~', $property, $tmp)) {
            return null;
        }
        $width = $tmp[1];
        $crop = ($tmp[2] === 'X');
        $height = $tmp[3];

        return function($name) use ($width, $height, $crop) {
            // your image resize implementation there that return image thumbnail
            // $name - original image name
            // $width - width of thumbnail
            // $height - height of thumbnail
            // $crop - boolean need crop flag
            $img_thumbnail = your_resize_function($name, $width, $height, $crop);
            return $img_thumbnail;
        };
    }

}
