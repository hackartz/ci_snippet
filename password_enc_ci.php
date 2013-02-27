<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @package     Ol_pass
 * @author      Tan Andre Kurniawan
 * @version     0.1
 * @copyright   2013 Overheatlab.com
 *
 * custom libraries for make secure password
 * use algorithm sha256 with strong salting
 */

class Ol_pass {

	// make password with salt (32 length)
	// return encrypted string
	public function hash_this($password) {
		$salt = bin2hex(mcrypt_create_iv(32, MCRYPT_DEV_URANDOM));
		// join salt with password then encrypt with
		// sha256 algorithm
		$hash = hash('sha256',$salt . $password);
		return $salt . $hash;
	}

}
