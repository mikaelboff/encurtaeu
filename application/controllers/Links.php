<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Controller Link
 *
 * @author Mikael
 */
class Links extends CI_Controller {

    public $data = array();

    public function __construct() {
        parent::__construct();
        $this->load->model('Link_model', 'lm');
        $this->load->model('Seguranca_model', 'sm');
    }

    public function index() {

        $this->data['csrf'] = $this->sm->getCsrf();

        if ($this->session->flashdata('sucesso')) {
            $this->data['success'] = $this->session->flashdata('sucesso');
        } elseif ($this->session->flashdata('erro')) {
            $this->data['erro'] = $this->session->flashdata('erro');
        }

        $this->load->view('header');
        $this->load->view('Home', $this->data);
        $this->load->view('footer');
    }

    public function Encurtar() {
        $this->form_validation->set_rules('url', 'url', 'callback_valid_url_format');
        if ($this->form_validation->run() == FALSE) {
            $this->session->set_flashdata('erro', 'Preencha o campo com um link válido!');
        } else {
            $url = preg_replace('/\s+/', '', $this->input->post('url'));

            $urlhttps = substr($url, 0, 8); //https://

            if (!preg_match("|" . $urlhttps . "|i", "https://")) {
                $urlhttp = substr($url, 0, 7); //http://    

                if (!preg_match("|" . $urlhttp . "|i", "http://")) {
                    $urlFinal = "http://" . $url;
                } else {
                    $urlFinal = $url;
                }
            } else {
                $urlFinal = $url;
            }

            $data = array(
                'endereco' => $urlFinal
            );

            $linkExistente = $this->lm->getIdByEndereco($urlFinal);

            if ($linkExistente) {
                $this->session->set_flashdata('sucesso', $this->config->base_url($linkExistente->idlink));
            } else {
                if ($this->lm->insert($data)) {
                    $last_id = $this->db->insert_id();
                    $this->session->set_flashdata('sucesso', $this->config->base_url($last_id));
                } else {
                    $this->session->set_flashdata('erro', 'Erro ao encurtar link, tente novamente mais tarde!');
                }
            }
        }
        redirect('');
    }

    public function Redirecionar($urlDestino) {
        $linkFinal = $this->lm->getEnderecoById($urlDestino);
        if ($linkFinal) {
            header("Location: " . $linkFinal->endereco);
            die();
        } else {
            $this->session->set_flashdata('erro', 'Não existe um link encurtado com esse código!');
            redirect('');
        }
    }

    /**
     * Validate URL format
     *
     * @access  public
     * @param   string
     * @return  string
     */
    public function valid_url_format($str) {
        $str = preg_replace('/\s+/', '', $str);
        $pattern = "|^(http(s)?:\/\/)?(www.)?[a-zA-Z0-9-]+(.[A-Za-z0-9-]+)*(:[0-9]+)?(\/.*)?$|i";

        if (!preg_match($pattern, $str)) {
            return FALSE;
        } else {
            return TRUE;
        }
    }

}
