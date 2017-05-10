<?php

/**
 * Get request utm fields
 */
class LeadBIUTMInfo {
    
    /**
     * Return utm fields as an array
     */
    public function toArray() {

        $utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : null;
        $utm_medium = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : null;
        $utm_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : null;
        $utm_term = isset($_GET['utm_term']) ? $_GET['utm_term'] : null;
        $utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : null;

        return array(
            'utm_source' => $utm_source,
            'utm_medium' => $utm_medium,
            'utm_campaign' => $utm_campaign,
            'utm_term' => $utm_term,
            'utm_content' => $utm_content
        );
    }
}