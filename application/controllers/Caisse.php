<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Caisse extends CI_Controller {
    public function index()
    {
        $this->load->view('inc/header.php');
        $this->load->view('inc/nav-bar.php');
        $this->load->view('Saisie.php', ['title' => "Caisse"]);
        $this->load->view('inc/footer.php');
    }
}
