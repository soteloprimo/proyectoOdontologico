<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {


	public function index()
	{
		$lista=$this->usuario_model->listausuarios();
		$data['usuario']=$lista; 

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('lista/lista_usuarios',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function inicio()
	{
		if ($this->session->userdata('login')) 
		{
			$this->load->view('inc/headersbadmin2');
			$this->load->view('inc/menu');
			$this->load->view('contenido');
			$this->load->view('inc/footersbadmin2');
		}

		else
		{
			$this->load->view('inc/headersbadmin2');
			$this->load->view('login');
			$this->load->view('inc/footersbadmin2');
			 
		}
	}
	public function menu()
	{
		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('contenido');
		$this->load->view('inc/footersbadmin2');
	}

	public function validar()
	{
		//agregar el metodo md5 en paswword pero arreglar la parte de llave que es adjuntado con nombres
		$login=$_POST['login'];
		$contrasenia=md5($_POST['password']);

		$consulta =$this->usuario_model->validar($login,$contrasenia);

		if ($consulta->num_rows()>0) 
		{
			foreach ($consulta->result() as $row) 
			{
				$this->session->set_userdata('idusuario',$row->login);
				$this->session->set_userdata('login',$row->contrasenia);
				$this->session->set_userdata('cargo',$row->cargo);

				redirect('usuario/menu','refresh');
			}
		}
		else
		{
			redirect('usuario/inicio','refresh');
		}
	}

	public function panel()
	{
		if ($this->session->userdata('login')) 
		{
			foreach ($consulta->result() as $row) 
			{
				redirect('usuario/menu','refresh');
			}
		}
		else
		{
			redirect('usuario/inicio','refresh');
		}
	}
		

public function agregar()
	{

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('formulario/formulario_usuarios');
		$this->load->view('inc/footersbadmin2');
	}
	public function agregarbd()
	{
		$data['cargo']=$_POST['cargo'];
		$data['nombres']=$_POST['nombres'];
		$data['apellidoPaterno']=$_POST['apellidopaterno'];
		$data['apellidoMaterno']=$_POST['apellidomaterno'];
		$data['contrasenia']=md5($_POST['contrasenia']);

///generacion de login de usuario de forma aleatoria de la adjuncion de nombres y apellidos con 5 caracteres
		$data['login']=substr(str_shuffle($_POST['nombres'].$_POST['apellidopaterno'].$_POST['apellidomaterno']), 0, 5);

		$lista=$this->usuario_model->agregarusuario($data);
		redirect('usuario/index','refresh');
	}

	public function eliminarbd()
	{
		$idcliente=$_POST['idusuario'];
		$this->cliente_model->eliminarusuario($idusuario);
		redirect('usuario/index','refresh');
	}

	public function modificar()
	{
		$idusuario=$_POST['idusuario'];
		$data['infousuario']=$this->usuario_model->recuperarusuario($idusuario);

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('modificar/formulario_modificar_usuarios',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function modificarbd()
	{
		$idusuario=$_POST['idusuario'];

		$data['cargo']=$_POST['cargo'];
		$data['nombres']=$_POST['nombres'];
		$data['apellidoPaterno']=$_POST['apellidopaterno'];
		$data['apellidoMaterno']=$_POST['apellidomaterno'];

		$this->usuario_model->modificarusuario($idusuario,$data);
		redirect('usuario/index','refresh');
	}

	public function deshabilitarbd()
	{
		$idusuario=$_POST['idusuario'];
		$data['estado']='0';

		$this->usuario_model->modificarusuario($idusuario,$data);
		redirect('usuario/index','refresh');
	}

	public function deshabilitados()
	{
		$lista=$this->usuario_model->listausuariosdeshabilitados();
		$data['usuario']=$lista;

		$this->load->view('inc/headersbadmin2');
		$this->load->view('inc/menu');
		$this->load->view('lista/lista_deshabilitados_usuarios',$data);
		$this->load->view('inc/footersbadmin2');
	}

	public function habilitarbd()
	{
		$idusuario=$_POST['idusuario'];
		$data['estado']='1';

		$this->usuario_model->modificarusuario($idusuario,$data);
		redirect('usuario/deshabilitados','refresh');
	}
	public function logout()
	{
		$this->session->sess_destroy();
		redirect('usuario/inicio','refresh');
	}
}
