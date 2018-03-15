<?php

/**
* 
*/
class Auth_model extends CI_Model
{
	
	public function __construct()
	{
		parent::__construct();
	}

	public function getUser($usuario = FALSE)
	{
		if($usuario)
		{
			$this->db->where('usuario', $usuario);
			$query = $this->db->get('usuario');		
			return $query->row(); //row nos arroja un solo resultado
		}else{
			$query = $this->db->get('usuario');// 10 es un limit consuklta sql
			return $query->result(); //result nos arroja todos los resultados
		}
	}

	public function validOldPass($passOld,$cedula)
	{
		$this->db->where('cedula',$cedula);
		$this->db->where('clave',$passOld);
		$result=$this->db->get('usuario');
		if($result->row())
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	}

	public function updatePass($cedula,$passNew)
	{
		$this->db->where('cedula',$cedula);
		$this->db->update('usuario',$passNew);
	}
}