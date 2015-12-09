<?php

/**
 * File for the CiviCRM API v3 Nsynch Get function
 */

/**
 * Include utility functions
 */
require_once 'CRM/Core/BAO/CMSUser.php';

/**
 * Add an execute function for nsynch
 * http://booki.flossmanuals.net/civicrm-developer-guide/api/
 */
function civicrm_api3_nsynch_user($params) {
	// execute function
	try {
		// execute
 		CRM_Core_BAO_CMSUser::synchronize(FALSE);
		return civicrm_api3_create_success($values, $params);
	}
	catch (Exception $e) {
		// exception
		return civicrm_api3_create_error('Caught exception: ',  $e->getMessage(), '\n');
	}
}

