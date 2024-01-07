<?php
/* For licensing terms, see /dokeos_license.txt */

/**
* @package dokeos.main
*/

// Establecer el idioma predeterminado a español
setlocale(LC_ALL, 'es_ES.UTF-8');

// Language files that should be included
$language_file = array ('courses', 'index', 'widgets');

// Forzar el restablecimiento del 'curso actual'
$cidReset = true; 

// Archivo global de Dokeos
require_once './main/inc/global.inc.php';

// La sección (para las pestañas)
$this_section = SECTION_COURSES;

// Comprobar si tenemos un CSS con soporte para tabletas
$css_info = array();
$css_info = api_get_css_info();
$css_type = !is_null($css_info['type']) ? $css_info['type'] : '';

if (api_get_setting('portal_view') == 'widget'){
    require_once 'user_portal_widget.php';
} elseif ($css_type == 'tablet') { // User portal for the tablet
    require_once 'tablet_user_portal.php';    
} else {
    require_once 'user_portal_classic.php';    
}
?>
