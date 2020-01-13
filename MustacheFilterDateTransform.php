<?php

class MustacheFilterDateTransform {

    public function sql() {
        return function($date) {
            return $date instanceof DateTime ? $date->format('Y-m-d H:i:s') : '';
        };
    }

    public function iso8601() {
        return function($date) {
            return $date instanceof DateTime ? $date->format(DATE_ISO8601) : '';
        };
    }

    public function atom() {
        return function($date) {
            return $date instanceof DateTime ? $date->format(DATE_ATOM) : '';
        };
    }

    public function gtm() {
        return function($date) {
            if (!$date instanceof DateTime) {
                return '';
            }
            $gmt = new DateTimeZone('GMT');
            $date->setTimezone($gmt);
            return $date;
        };
    }

    public function day() {
        return function($date) {
            return $date instanceof DateTime ? $date->format('d') : '';
        };
    }

    public function month() {
        return function($date) {
            return $date instanceof DateTime ? $date->format('m') : '';
        };
    }

    public function year() {
        return function($date) {
            return $date instanceof DateTime ? $date->format('Y') : '';
        };
    }

}
