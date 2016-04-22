<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


	class MY_Controller extends CI_Controller {

		public function __construct() {
			parent::__construct();
			/*$status= $this->session->userdata('signed_in');
			if ($status != 'Y')
			{
				header('Location:'.base_url().'login');
			}*/
		}
	}

?>
