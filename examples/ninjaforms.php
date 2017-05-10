<?php
/**
 * Ninjaforms Example
 * @link http://developer.ninjaforms.com/codex/submission-processing-hooks/
 */

// add filter
add_filter( 'ninja_forms_submit_data', 'my_ninja_forms_submit_data' );

/**
 * Define filter
 */
function my_ninja_forms_submit_data( $form_data ) {
    $leadbi_form = array();
    $capture_fields = array('email', 'first_name', 'last_name');

    // create leadbi form
    $formApi = new LeadBIFormAPI();
    $form_id= '3638a022-2823-4541-b31c-1856f6a72933';

    // Field settigns, including the field key and value.
    foreach( $form_data[ 'fields' ] as $field ) { 
    
        // Check the field key to see if this is the field that I need to update.
        if( in_array($field['key'], $capture_fields)){
            $leadbi_form[$field['key']] = $field['value'];
        }
    }

    // if not empty send data to leadbi
    if(!empty($leadbi_form)){
        $formApi->sendForm($form_id, $leadbi_form);
    }

    return $form_data;
}