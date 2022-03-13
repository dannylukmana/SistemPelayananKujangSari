<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Impulse extends CI_Controller
{

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
        $this->load->library('session');
        $this->load->model('M_SistemPelayanan');
		$this->load->library('form_validation');
    }

    public function index(){
        $this->load->view('front_page');
    }

    public function login()
	{	
		$this->form_validation->set_rules('username', 'Username', 'required|trim');
		$this->form_validation->set_rules('password', 'Password', 'required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('login_page');
		} else {
			$this->process_login();
		}
    }
    
    public function process_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$login = $this->db->get_where('user', ['username' => $username])->row_array();
		if ($login) {
			if ($password == $login['password']) {
				$data = [
					'username' => $login['username'],
				];
				$this->session->set_userdata($data);
				if ($password == 'admin'){
					$this->load->view('navbar');
					$this->load->view('admin');
				}
			} else {
				$this->session->set_flashdata('message', 'Gagal login: Cek password! ');
				redirect('Impulse/login');
			}
		} else {
			$this->session->set_flashdata('message', 'Gagal login: Cek username! ');
			redirect('Impulse/login');
		}
    }

    public function inputJadwal(){
        $this->form_validation->set_rules('hari', 'Hari','required|trim');
		$this->form_validation->set_rules('nama', 'Nama', 'required|trim');
        $this->form_validation->set_rules('nip', 'NIP', 'required|trim|is_unique[jadwal.nip]');
        $this->form_validation->set_rules('pekerjaan', 'Pekerjaan', 'required|trim');
        $this->form_validation->set_rules('poli', 'Poli', 'required|trim');
        if ($this->form_validation->run() == false) {
			$this->load->view('navbar');
			$this->load->view('admin');	
		} else {
            $data =[
                'hari'=>$this->input->post('hari', true),
                'nama'=>$this->input->post('nama', true),
                'nip'=>$this->input->post('nip', true),
                'pekerjaan'=>$this->input->post('pekerjaan', true),
                'poli'=>$this->input->post('poli', true),
            ];
            $table = 'jadwal';
            $register = $this->M_SistemPelayanan->Minsert($table, $data);
			if ($register) {
				$this->session->set_flashdata('alert', 'registrasi_berhasil');
				$this->load->view('navbar');
				$this->load->view('Jadwal');	
			}
        }
	}
	
	public function viewJadwal(){
		$this->load->view('navbar');
		$table = 'jadwal';
		$data['jadwal']['entries'] = $this->M_SistemPelayanan->get_data($table);
		$this->load->view('Jadwal',$data);
	}

	public function jadwalSenin(){
		$this->load->view('navbar');
		$table = 'jadwal';
		$where = array('hari' => 'Senin');
		$data['jadwal'] ['entries'] = $this->M_SistemPelayanan->
		get_query($where, $table);
		$this->load->view('Jadwal',$data);
	}

	public function jadwalSelasa(){
		$this->load->view('navbar');
		$table = 'jadwal';
		$where = array('hari' => 'Selasa');
		$data['jadwal'] ['entries'] = $this->M_SistemPelayanan->
		get_query($where, $table);
		$this->load->view('Jadwal',$data);
	}

	public function jadwalRabu(){
		$this->load->view('navbar');
		$table = 'jadwal';
		$where = array('hari' => 'Rabu');
		$data['jadwal'] ['entries'] = $this->M_SistemPelayanan->
		get_query($where, $table);
		$this->load->view('Jadwal',$data);
	}

	public function jadwalKamis(){
		$this->load->view('navbar');
		$table = 'jadwal';
		$where = array('hari' => 'Kamis');
		$data['jadwal'] ['entries'] = $this->M_SistemPelayanan->
		get_query($where, $table);
		$this->load->view('Jadwal',$data);
	}

	public function jadwalJumat(){
		$this->load->view('navbar');
		$table = 'jadwal';
		$where = array('hari' => 'Jumat');
		$data['jadwal'] ['entries'] = $this->M_SistemPelayanan->
		get_query($where, $table);
		$this->load->view('Jadwal',$data);
	}

    public function inputRekap(){
        $this->form_validation->set_rules('nama', 'Nama','required|trim');
        $this->form_validation->set_rules('bpjs', 'BPJS','required|trim|is_unique[rekap_medis.bpjs]');
        $this->form_validation->set_rules('usia', 'Usia','required|trim');
        $this->form_validation->set_rules('keluhan', 'Keluhan','required|trim');
        $this->form_validation->set_rules('tanggal', 'Tanggal','required|trim');
        if ($this->form_validation->run() == false) {
			$this->load->view('navbar');
            $this->load->view('inputRekap');	
		} else {
            $data = [
                'nama'=>$this->input->post('nama', true),
                'bpjs'=>$this->input->post('bpjs', true),
                'usia'=>$this->input->post('usia', true),
                'keluhan'=>$this->input->post('keluhan', true),
                'tanggal'=>$this->input->post('tanggal', true),
            ];
            $table = 'rekap_medis';
            $register = $this->M_SistemPelayanan->Minsert($table, $data);
			if ($register) {
				$this->session->set_flashdata('alert', 'registrasi_berhasil');
				$this->load->view('navbar');
                $this->load->view('viewRekap');
			} 
        }
	}

	public function viewRekap(){
		$this->load->view('navbar');
		$table = 'rekap_medis';
		$data['rekap_medis']['entries'] = $this->M_SistemPelayanan->get_data($table);
		$this->load->view('viewRekap',$data);
	}
	
	public function inputKeluhan(){
		$this->form_validation->set_rules('nama', 'Nama','required|trim');
		$this->form_validation->set_rules('komentar', 'Komentar','required|trim');
		if ($this->form_validation->run() == false) {
			$this->load->view('front_page');	
		} else {
			$data = [
				'nama' => $this->input->post('nama', true),
				'keluhan' => $this->input->post('komentar', true),
			];
			$table = 'komentar';
			$register = $this->M_SistemPelayanan->Minsert($table, $data);
			if ($register) {
				$this->session->set_flashdata('alert', 'registrasi_berhasil');
				$this->load->view('front_page');
			}
		}
	}

	public function viewKeluhan(){
		$this->load->view('navbar');
		$table = 'komentar';
		$data['komentar']['entries'] = $this->M_SistemPelayanan->get_data($table);
		$this->load->view('lihatKomen',$data);
	}

	public function logout(){
		$this->load->view('front_page');
		
	}

}
