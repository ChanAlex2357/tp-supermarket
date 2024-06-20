<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$this->load->view('login');
	}

    public function authentification(){
        //--- Load ---
        $this->load->helper(array('form', 'url'));
        $this->load->model('Utilisateur', 'User');

        $reponse = ["success" => false, "message" => ''];

        try {
            $login = $this->input->post('login');
            $motdepasse = $this->input->post('pwd');

            $reponse['success'] = $this->User->login($login, $motdepasse);
            if ($reponse['success']){
                $this->session->set_userdata('utilisateur', serialize($this->User->getUtilisateur($login, $motdepasse)));
            }
        } catch (Exception $e){
            $reponse['message'] = $e->getMessage();
        }
        echo json_encode($reponse);
    }
}
