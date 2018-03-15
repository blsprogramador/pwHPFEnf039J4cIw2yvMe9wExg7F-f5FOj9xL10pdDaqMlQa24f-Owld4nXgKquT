<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
* 
*/
class User
{
	protected $CI;
	private $name;
	private $email;
	private $satl;
	private $pass;
	private $validation_code;
	private $status;
	private $user_info_json;

	function __construct(argument)
	{
		$this->CI = & get_instance();
	}

	public function getName()
	{
		return $this->name;
	}

	public function setName()
	{
		$this->name = $name;
	}

}

?>