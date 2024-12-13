<?php
/**
 * Configuración e inicio de la sesión
 * @author Fran Paredes
 * @version 1.0
 */
ini_set('session.name', 'SessionRedSocial');
ini_set('session.cookie_lifetime', 60*5);
ini_set('session.cookie_httponly', 1);

session_start();