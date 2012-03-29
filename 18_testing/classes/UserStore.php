<?php
/**
 * The file UserStore.php is a part of the PHP Patterns by Matt Zandstra package
 *
 * Author: Esaulov
 * Date: 29.03.12
 * Time: 11:38
 * Copyright: DSAF 2012
 */

/**
 * UserStore.
 * Stores and retrieves user information. The user data stored in arrays.
 */
class UserStore
{
	private $users = array();

	/**
	 * Adds a user to the private $user array. Checks if the user already exists and if the password length is acceptable.
	 *
	 * @param string $name A user name as a string
	 * @param string $mail A user email as a string
	 * @param string $pass A user password as a string
	 */
	public function addUser($name, $mail, $pass)
	{

	}

}
