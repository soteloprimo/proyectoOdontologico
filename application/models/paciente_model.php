<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente_model extends CI_Model {

	public function listapacientes()
	{
		$this->db->select('*');//select
		$this->db->from('paciente');//tabla
		$this->db->where('estado','1');
		return $this->db->get();//devolucion del resultado de la consulta
	}

	public function agregarcliente($data)
	 {
		$this->db->insert('cliente',$data);//insert
	}

	public function eliminarcliente($idcliente)
	{
		$this->db->where('idcliente',$idcliente);//eliminar de bd
		$this->db->delete('cliente');
	}
	public function recuperarcliente($idcliente)
	{
		$this->db->select('*');//select
		$this->db->from('cliente');//tabla
		$this->db->where('idcliente',$idcliente);//eliminar de bd(bdd,formulario)
		return $this->db->get();//devolucion del resultado de la consulta
	}
	public function modificarcliente($idcliente,$data)
	{
		$this->db->where('idcliente',$idcliente);//(bdd,formulario)
		$this->db->update('cliente',$data);//update
	}
	public function listaclientesdeshabilitados()
	{
		$this->db->select('*');//select
		$this->db->from('cliente');//tabla
		$this->db->where('estado','0');
		return $this->db->get();//devolucion del resultado de la consulta
	}
}
