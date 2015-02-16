<?php if ( ! defined("BASEPATH")) exit("No direct script access allowed");


class Auth extends Application {

	public function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$login = $this->session->userdata('loggend_in');
		if ( $login == TRUE )
		{
			$status = $this->session->userdata('status');
			if ($status == "Administrator") {
				# code...
				redirect('admin');

			} elseif ( $status == "Dosen") {

				redirect('dosen');

			} elseif ( $status == "Mahasiswa") {

				redirect('mahasiswa');
			}

		} else {
			$this->twig->display('login');
		}
	}

	public function login()
	{
		$login = $this->session->userdata('loggend_in');
		if ( $login == TRUE )
		{
			$status = $this->session->userdata('status');
			if ($status == "Administrator") {
				# code...
				redirect('admin');

			} elseif ( $status == "Dosen") {

				redirect('dosen');

			} elseif ( $status == "Mahasiswa") {

				redirect('mahasiswa');
			}

		} else {
			$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[5]|max_length[12]|xss_clean');
			$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[5]|max_length[12]|xss_clean');
			if ( $this->form_validation->run() == FALSE)
			{
				$return['error'] = "1";
			            $return['pesan'] = validation_errors();
			            echo json_encode($return);
				

			} else {
				$username = $this->input->post('username', true);
				$password = md5($this->input->post('password', true));
				$cek = $this->akademik_model->ceklogin($username,$password);

				if ( $cek->num_rows() <> 0) {
					# code...
					$dbs = $cek->row();
					$u = $dbs->username;
					$names = $dbs->status;

					if ( $names == "Administrator") {

						$ambil = $this->db->get_where('sia_admin',array('username' => $u));
						foreach ($ambil->result() as $rows) {
							# code...
							$sess = array(
								'loggend_in' => TRUE,
								'username' => $rows->username,
								'nama' => $rows->nama,
								'status' => 'Administrator',);
						}
						$this->session->set_userdata($sess);
						redirect('admin');

					} elseif ( $names == "Dosen" ) {



					} elseif ( $names == "Mahasiswa" ){



					}
					$return['logerror'] = "0";
				             $return['logpesan'] = "Login sukses ";
				             $return['logsukses'] = $names;
				             echo json_encode($return);
				} else {
					$return['logerror'] = "1";
				             $return['logpesan'] = "Login Failed : cek username and password your !!!";
				             echo json_encode($return);
				}
			}
		}

	}
}