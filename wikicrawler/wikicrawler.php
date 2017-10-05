<?php
/**
 * Created by PhpStorm.
 * User: justin.walker
 * Date: 10/5/2017
 * Time: 11:16 AM
 */

class WikiCrawler {

    private $url;

    private $data;

    private $file;

    public function _construct() {

    }

    public function fetch_data() {

        $html = file_get_contents($this->url);

        $this->data = new DOMDocument();
        $this->data->loadHTML($html);

        var_dump( $this->data );

    }

    private function parse_data() {

    }
}