<?php

require_once 'enable_crmapi.civix.php';

use CRM_EnableCrmapi_ExtensionUtil as E;

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function enable_crmapi_civicrm_config(&$config): void {
  _enable_crmapi_civix_civicrm_config($config);
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function enable_crmapi_civicrm_install(): void {
  _enable_crmapi_civix_civicrm_install();
}

function enable_crmapi_civicrm_uninstall() {
  _enable_crmapi_civix_civicrm_uninstall();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function enable_crmapi_civicrm_enable(): void {
  _enable_crmapi_civix_civicrm_enable();
}

function enable_crmapi_civicrm_disable() {
  _enable_crmapi_civix_civicrm_disable();
}

/**
 * Implementation of hook_civicrm_userContentPolicy().
 *
 * @param \CRM_Core_Smarty_UserContentPolicy $policy
 */
function enable_crmapi_civicrm_userContentPolicy(CRM_Core_Smarty_UserContentPolicy &$policy) {
  // Remove 'crmAPI' from disabled tags
  $policy->disabled_tags = array_diff($policy->disabled_tags, ['crmAPI']);
}