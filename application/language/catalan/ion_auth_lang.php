<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
* Name:  Ion Auth Lang - Catalan
* 
* Author: Wilfrido García Espinosa
* 		  contacto@wilfridogarcia.com
*         @wilfridogarcia
*
* Translation: Oriol Navascuez
* 
* Location: http://github.com/benedmunds/ion_auth/
*          
* Created:  05.04.2010 
* 
* Description:  Catalan language file for Ion Auth messages and errors
* 
*/

// Account Creation
$lang['account_creation_successful']			= 'Compte creat amb èxit';
$lang['account_creation_unsuccessful']			= 'No ha estat possible crear al compte';
$lang['account_creation_duplicate_email']		= 'Email en ús o invàlid';
$lang['account_creation_duplicate_username']	= 'Nom d&#39;usuari en ús o invàlid';


// Password
$lang['password_change_successful']				= 'Contrasenya canviada amb èxit';
$lang['password_change_unsuccessful']			= 'No ha estat possible canviar la contrasenya';
$lang['forgot_password_successful']				= 'Nova contrasenya enviada per email correctament';
$lang['forgot_password_unsuccessful']			= 'No ha estat possible crear una nova contrasenya';

// Activation
$lang['activate_successful']					= 'Compte activat';
$lang['activate_unsuccessful']					= 'No ha estat possible activar el compte';
$lang['deactivate_successful']					= 'Compte desactivat';
$lang['deactivate_unsuccessful']				= 'No ha estat possible desactivar el compte';
$lang['activation_email_successful']			= 'Email d&#39;activació enviat';
$lang['activation_email_unsuccessful']			= 'No ha estat possible enviar l&#39;email d&#39;activació';

// Login / Logout
$lang['login_successful']						= 'Sessió iniciada amb èxit';
$lang['login_unsuccessful']						= 'No ha estat possible iniciar sessió';
$lang['login_unsuccessful_not_active'] 		    = 'El compte no està activat';
$lang['logout_successful']						= 'Sessió finalitzada amb èxit';
$lang['login_timeout']                          = 'Compte temporalment bloquejat. Proveu més tard';

// Account Changes
$lang['update_successful']						= 'Informació del compte actualitzat amb èxit';
$lang['update_unsuccessful']					= 'No s&#39;ha pogut actualitzar la informació del compte';
$lang['delete_successful']						= 'Usuari eliminat';
$lang['delete_unsuccessful']					= 'No s&#39;ha pogut Eliminar l&#39;usuari';

// Email Subjects - TODO Please Translate
$lang['email_forgotten_password_subject']    = 'Verificació de contrasenya oblidada';
$lang['email_new_password_subject']          = 'Nova contrasenya';
$lang['email_activation_subject']            = 'Activació del compte';

$lang['maintenance_mode_login_error_message']="Login incorrecte!";
$lang['login_unsuccessful_not_allowed_role'] = "El login és correcte però l'usuari no té un rol adequat per accedir a l'aplicació";
