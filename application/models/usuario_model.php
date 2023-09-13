<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_model extends CI_Model {

	public function listausuarios()
	{
		$this->db->select('u.idusuario,u.cargo,u.nombres,u.apellidoPaterno,u.apellidoMaterno,u.contrasenia,u.login');//select
		$this->db->from('usuario u');//tabla
		$this->db->where('u.estado','1');
		return $this->db->get();//devolucion del resultado de la consulta
	}

	public function agregarusuario($data)
	 {
		$this->db->insert('usuario',$data);//insert
	}

	public function eliminarusuario($idusuario)
	{
		$this->db->where('idusuario',$idusuario);//eliminar de bd
		$this->db->delete('usuario');
	}
	public function recuperarusuario($idusuario)
	{
		$this->db->select('*');//select
		$this->db->from('usuario');//tabla
		$this->db->where('idusuario',$idusuario);//eliminar de bd(bdd,formulario)
		return $this->db->get();//devolucion del resultado de la consulta
	}
	public function modificarusuario($idusuario,$data)
	{
		$this->db->where('idusuario',$idusuario);//(bdd,formulario)
		$this->db->update('usuario',$data);//update
	}
	public function listausuariosdeshabilitados()
	{
		$this->db->select('*');//select
		$this->db->from('usuario');//tabla
		$this->db->where('estado','0');
		return $this->db->get();//devolucion del resultado de la consulta
	}
	 public function validar($login,$contrasenia)
	{
		$this->db->select('*');
		$this->db->from('usuario');
		$this->db->where('login',$login);
		$this->db->where('contrasenia',$contrasenia);
		$this->db->where('estado','1');
		return $this->db->get();
	}
}
