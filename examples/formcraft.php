<?php
/**
 * Formcraft server side integration
 * @link http://formcraft-wp.com/help/formcraft-hooks-filters/
 */

add_action('formcraft_before_save', 'formcraft_before_save', 10, 4);

/**
 * Define wordpress action
 */
function formcraft_before_save($content, $meta, $raw_content, $integrations) {
    // create new form api object 
    $formApi = new LeadBIFormAPI();
    $form_id= '3638a022-2823-4541-b31c-1856f1a72916';

    // send form data to leadbi
    $formApi->sendForm($form_id, array(
        'first_name' => $content['First Name'],
        'last_name' => $content['Last Name'],
        'email' => $content['Email'], // requred
        'phone' => $content['Phone'], // optional
    ));
}