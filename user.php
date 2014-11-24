<?php

/**
 * Class User
 * Cette classe nous permet d'effectuer des requêtes sur notre base de données
 * https://ellislab.com/codeigniter/user-guide/general/models.html
 */

Class User extends CI_Model
{
	function login($users_name, $users_password)
	{
		$sql = "SELECT * FROM USERS WHERE user_name = ? AND user_password = ? "; 

                $query=$this->db->query($sql, array($users_name,$users_password)); 

		if($query -> num_rows() == 1)
		{
			return $query->result();
		}
		else
		{
			return false;
		}

	}
}
?>
