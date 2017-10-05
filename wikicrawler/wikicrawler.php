<?php
/**
 * Created by PhpStorm.
 * User: justin.walker
 * Date: 10/5/2017
 * Time: 11:16 AM
 */

class WikiCrawler {

    private $url = 'https://en.wikipedia.org/wiki/List_of_countries_and_dependencies_by_population';

    private $data;

    private $file;

    public function _construct() {
        echo 'yup0;';
        $this->fetch_data();
    }

    public function fetch_data() {

        $html = file_get_contents($this->url);

        $this->data = new DOMDocument();
        $this->data->loadHTML($html);

        var_dump( $this->data );

        die();
    }

    private function parse_data() {

    }
}

new WikiCrawler();