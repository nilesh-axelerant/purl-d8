<?php

/**
 * @file
 * Documentation for Purl module APIs.
 */

/**
 * @addtogroup hooks
 * @{
 */

/**
 * Alter matched modifiers.
 *
 * @param array &$matched
 *   An array of matched modifiers after ran contains() function.
 */
function hook_purl_matched_modifiers_alter(array &$matched) {
  foreach ($matched as $modifier) {
    // Do some logic.
  }
}

/**
 * @} End of "addtogroup hooks".
 */
