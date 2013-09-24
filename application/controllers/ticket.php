<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ticket extends CI_Controller {

	public function index()
	{
		$this->load->view('v_ticket');
	}
}

/* End of file ticket.php */
/* Location: ./application/controllers/ticket.php */