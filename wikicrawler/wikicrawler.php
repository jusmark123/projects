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

    public function __construct() {
        echo 'yup0;';
        $this->fetch_data();
    }

    public function fetch_data() {

        $html = file_get_contents($this->url);

        $this->data = new DOMDocument();
        $this->data->loadHTML($html);
        $tables = $this->data->getElementsByTagName('table');

        foreach( $tables as $key => $table) {

            echo $key;
            if( ! $table->hasChildren() ) continue;

            foreach( $table as $items ) {
                echo count($table->children);
                foreach ($items as $item) {
                    if ($item->hasAttributes()) {
                        var_dump( $item->attributes);
                    }
                }

            }

        }

        die();
    }

    private function parse_data() {

    }
}

new WikiCrawler();