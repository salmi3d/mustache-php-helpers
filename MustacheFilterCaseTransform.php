<?php

class MustacheFilterCaseTransform {

    public function lower() {
        return function($value) {
            return mb_strtolower($value);
        };
    }

    public function upper() {
        return function($value) {
            return mb_strtoupper($value);
        };
    }

    public function ucfirst() {
        return function($value) {
            return mb_strtoupper(mb_substr($value, 0, 1)) . mb_substr($value, 1);
        };
    }

}
