<?php

require_once 'core2581.civix.php';
// phpcs:disable
use CRM_Core2581_ExtensionUtil as E;
// phpcs:enable


function core2581_fixSqlMode($event) {
  $sql = "SET SESSION sql_mode = 'NO_AUTO_CREATE_USER,NO_ENGINE_SUBSTITUTION'";
  CRM_Core_DAO::executeQuery($sql);
}

/**
 * Implements hook_civicrm_config().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_config/
 */
function core2581_civicrm_config(&$config) {
  _core2581_civix_civicrm_config($config);
  Civi::dispatcher()->addListener('civi.dao.preInsert', 'core2581_fixSqlMode');
}

/**
 * Implements hook_civicrm_install().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_install
 */
function core2581_civicrm_install() {
  _core2581_civix_civicrm_install();
}

/**
 * Implements hook_civicrm_enable().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_enable
 */
function core2581_civicrm_enable() {
  _core2581_civix_civicrm_enable();
}

// --- Functions below this ship commented out. Uncomment as required. ---

/**
 * Implements hook_civicrm_preProcess().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_preProcess
 */
//function core2581_civicrm_preProcess($formName, &$form) {
//
//}

/**
 * Implements hook_civicrm_navigationMenu().
 *
 * @link https://docs.civicrm.org/dev/en/latest/hooks/hook_civicrm_navigationMenu
 */
//function core2581_civicrm_navigationMenu(&$menu) {
//  _core2581_civix_insert_navigation_menu($menu, 'Mailings', array(
//    'label' => E::ts('New subliminal message'),
//    'name' => 'mailing_subliminal_message',
//    'url' => 'civicrm/mailing/subliminal',
//    'permission' => 'access CiviMail',
//    'operator' => 'OR',
//    'separator' => 0,
//  ));
//  _core2581_civix_navigationMenu($menu);
//}
