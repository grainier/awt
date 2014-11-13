<?php

/**
 * Created by PhpStorm.
 * User: grainier
 * Date: 11/13/14
 * Time: 11:13 AM
 */
class Dict extends CI_Controller
{
    public function index()
    {
        $this->load->view('dictform');
    }

    public function lookup()
    {
        $typed = $this->input->get('t');
        if ($typed == null || $typed == '') {
            echo ''; // send back nothing if we got nothing
            exit;
        }
        $this->load->model('words');
        $wordlist = $this->words->match($typed);
        $this->output->set_content_type('text/xml');
        $this->load->view('wordview', array('words' => $wordlist));
    }
}