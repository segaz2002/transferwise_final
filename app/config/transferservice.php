<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Name:  Lotto Service
 *
 * Version: 2.5.2
 *
 * Author: Kolawole Gabriel
 *         kolawole.gabriel@outlook.com
 *
 *
 *
 * Requirements: PHP5 or above
 *
 */

/*
| -------------------------------------------------------------------------
| Error Codes
| -------------------------------------------------------------------------
*/


$config['errorCode']['gameOffline']                 = 'GW003';
$config['errorCode']['badHashKeyComputation']       = 'GW403';
$config['errorCode']['invalidNumberPick']           = 'GW110';
$config['errorCode']['repeatedNumberPick']          = 'GW120';
$config['errorCode']['insufficientBalance']         = 'GW204';
$config['errorCode']['invalidOperation']            = 'GW205';
$config['errorCode']['badRequest']                  = 'GW207';
$config['errorCode']['duplicateReference']          = 'GW301';
$config['errorCode']['invalidReference']            = 'GW302';
$config['errorCode']['duplicateReverse']            = 'GW304';
$config['errorCode']['combinationOverflow']         = 'GW501';
$config['errorCode']['missingConbinationField']     = 'GW502';
$config['errorCode']['invalidGameType']             = 'GW503';
$config['errorCode']['combinationGameMismatch']     = 'GW504';
$config['errorCode']['incompleteReferenceData']     = 'GW505';
$config['errorCode']['terminalDeactivated']         = 'GW506';


/*
| -------------------------------------------------------------------------
| ErrorCode Description
| -------------------------------------------------------------------------
*/
$config['errorDescription']['gameOffline']              = "Games are currently offline, try-again later";
$config['errorDescription']['badHashKeyComputation']    = "Internal Authentication error";
$config['errorDescription']['invalidNumberPick']        = "Number selection should be between 1-49 (Daily and Weekly) or 1 -35 (Wazobia)";
$config['errorDescription']['repeatedNumberPick']       = "Number selection should not be repeated it reduces your chance of winnning";
$config['errorDescription']['insufficientBalance']      = "Insufficient Balance";
$config['errorDescription']['invalidOperation']         = "Invalid Operator";
$config['errorDescription']['badRequest']               = "Bad Request, please ensure all fields are posted";
$config['errorDescription']['duplicateReference']       = "Duplicate Ticket Reference.";
$config['errorDescription']['invalidReference']         = "Invalid Reference ensure spaces are not posted as part of the game reference field. Post reference like this e.g 234556-565675-46556";
$config['errorDescription']['duplicateReverse']         = "Transaction reversal duplicate.";
$config['errorDescription']['combinationOverflow']      = "Invalid number of combinations, combinations should be greater 1 and less than 4";
$config['errorDescription']['missingConbinationField']  = "Missing combination field, kindly ensure that all combination fields are posted";
$config['errorDescription']['invalidGameType']          = "Missing combination field, kindly ensure that all combination fields are posted";
$config['errorDescription']['combinationGameMismatch']  = "Individual combination lenght does not match game lenght, ensure individual combination lenght and game lenght are equal";
$config['errorDescription']['incompleteReferenceData']  = "The size of the reference data posted is less than the number of combinations,you posted only %d, references";
$config['errorDescription']['terminalDeactivated']      = "Terminal has been deactivated, contact support for more information";
