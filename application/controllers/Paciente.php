<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Paciente extends CI_Controller {

	public function index()
	{
		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('contenido');
		$this->load->view('inc/footersbadmin2');
	}
	public function index1()
	{
		$lista=$this->paciente_model->listapacientes();
		$data['paciente']=$lista;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('lista/lista.php',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function agregar()
	{

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('formulario/formulario');
		$this->load->view('inc/footersbadmin2');
	}

	public function agregarbd()
	{
		$data['nombres']=$_POST['nombres'];
		$data['apellidoPaterno']=$_POST['apellidopaterno'];
		$data['apellidoMaterno']=$_POST['apellidomaterno'];
		$data['direccion']=$_POST['direccion'];
		$data['telefono']=$_POST['telefono'];

		$lista=$this->cliente_model->agregarcliente($data);
		redirect('cliente/index1','refresh');
	}

	public function eliminarbd()
	{
		$idcliente=$_POST['idcliente'];
		$this->cliente_model->eliminarcliente($idcliente);
		redirect('cliente/index1','refresh');
	}

	public function modificar()
	{
		$idcliente=$_POST['idcliente'];
		$data['infocliente']=$this->cliente_model->recuperarcliente($idcliente);

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('formulario/formulariomodificar',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function modificarbd()
	{
		$idcliente=$_POST['idcliente'];

		$data['nombres']=$_POST['nombres'];
		$data['apellidoPaterno']=$_POST['apellidopaterno'];
		$data['apellidoMaterno']=$_POST['apellidomaterno'];
		$data['direccion']=$_POST['direccion'];
		$data['telefono']=$_POST['telefono'];

		$this->cliente_model->modificarcliente($idcliente,$data);
		redirect('cliente/index1','refresh');
	}

	public function deshabilitarbd()
	{
		$idcliente=$_POST['idcliente'];
		$data['estado']='0';

		$this->cliente_model->modificarcliente($idcliente,$data);
		redirect('cliente/index1','refresh');
	}

	public function deshabilitados()
	{
		$lista=$this->cliente_model->listaclientesdeshabilitados();
		$data['cliente']=$lista;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('lista/listadeshabilitados',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function habilitarbd()
	{
		$idcliente=$_POST['idcliente'];
		$data['estado']='1';

		$this->cliente_model->modificarcliente($idcliente,$data);
		redirect('cliente/deshabilitados','refresh');
	}
	public function registrarmotorizado()
	{
		$idcliente=$_POST['idcliente'];

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('formulario/formularioregistrarvehiculo',$data);
		$this->load->view('inc/footersbadmin2');
	}
}
