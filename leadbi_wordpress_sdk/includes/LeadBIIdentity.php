<?php

/**
 * The identity class offers access to the leadbi user.
 */
class LeadBIIdentity {

    /**
     * Check if the leadbi cookies are present
     * @since 1.0
     */
    public function hasIdentity() {
        return isset($_COOKIE['leadbi_userid']) && isset($_COOKIE['leadbi_sessionid']);
    }

    /**
     * Fetch user id from cookie
     * @since 1.0
     */
    public function getUserId() {
        return isset($_COOKIE['leadbi_userid']) ? $_COOKIE['leadbi_userid'] : null;
    }

    /**
     * Fetch session id from cookie
     * @since 1.0
     */
    public function getSessionId() {
        return isset($_COOKIE['leadbi_sessionid']) ? $_COOKIE['leadbi_sessionid'] : null;
    }

}