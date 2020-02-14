<?php

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('m_admin');


		if ($this->session->userdata('status') != 'login') {
			redirect(base_url('login'));
		}
	}

	function index()
	{
		$this->load->view('v_admin');
	}

	function editBio()
	{
		$biodata = [
			'name' => $_POST['name'],
			'email' => $this->session->userdata('email'),
			'phone_number' => $_POST['phone_number'],
			'alamat' => $_POST['alamat']
		];

		$cek = $this->m_admin->editBio($biodata);

		if ($cek) {
			redirect(base_url('admin/bio'));
		} else {
			redirect(base_url('admin'));
		}
	}

	function bio()
	{
		$this->load->view('a_sukses');
	}
}
