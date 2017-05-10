<?php

/**
 * Get request page details
 */
class LeadBIPageInfo {
    
    private $title = null;
    private $timezone = null;
    private $dwidth = null;
    private $dheight = null;

    /**
     * LeadBI page info constructor
     */
    public function __construct($page_info = null) {
        if($page_info){
            $this->title = isset($page_info['title']) ? $page_info['title'] : null;
            $this->timezone = isset($page_info['timezone']) ? $page_info['timezone'] : null;
            $this->dwidth = isset($page_info['dwidth']) ? $page_info['dwidth'] : null;
            $this->dheight = isset($page_info['dheight']) ? $page_info['dheight'] : null;
        }
    }

    /**
     * Return page details as an array
     */
    public function toArray() {

        $domain = isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : null;
        $path = isset($_SERVER['PATH_INFO']) ? $_SERVER['PATH_INFO'] : null;
        $query = isset($_SERVER['QUERY_STRING']) ? $_SERVER['QUERY_STRING'] : null;

        // return array
        return array(
            'title' => $this->title,
            'domain' => $domain,
            'path' => $path,
            'query' => $query,
            'hash' => null,
            'timezone' => $this->timezone,
            'dwidth' => $this->dwidth,
            'dheight' => $this->dheight
        );
    }
}