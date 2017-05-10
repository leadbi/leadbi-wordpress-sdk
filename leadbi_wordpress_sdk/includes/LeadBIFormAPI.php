<?php

/**
 * LeadBI form API
 */
class LeadBIFormAPI {

    /**
     * Allows sending leadbi form data from the server side.
     * @since 1.0
     */
    public function sendForm($formId, array $form, $page_info = null){

        $identity = new LeadBIIdentity();
        $utm = new LeadBIUTMInfo();

        if(!$page_info){
            $page_info = new LeadBIPageInfo();
        }

        if(!$identity->hasIdentity()){
            return false;
        }

        if(!isset($form['email'])){
            return false;
        }

        $user_info = array(
            'user_id' => $identity->getUserId(),
            'session_id' => $identity->getSessionId()
        );

        $request = LEADBI_TRACKING_ENDPOINT . '/f/' . $formId . '.gif?e=new_form&_client=wp-sdk';
        $request .= '&' . http_build_query($form);
        $request .= '&' . http_build_query($user_info);
        $request .= '&' . http_build_query($utm->toArray());
        $request .= '&' . http_build_query($page_info->toArray());

        // silent errors
        return @file_get_contents($request);
    }
}