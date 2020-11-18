<?php
class Autoloader {

	static function register() {
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}

	static function autoload($class) {
		if ($class == 'Manager' || $class == 'PostManager' || $class == 'CommentManager') {
			require 'model/' . $class . '.php';
		}
		else {
			require 'controller/' . $class . '.php';
		}
		
	}
}