<?php

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Description of Seguranca_model
 *
 * @author Mikael
 */
class Seguranca_model extends CI_Model {

    public function getCsrf() {
        // Gera o name e o hash para o campo hidden
        $csrf = array(
            'name' => $this->security->get_csrf_token_name(),
            'hash' => $this->security->get_csrf_hash()
        );
        return $csrf;
    }

}
