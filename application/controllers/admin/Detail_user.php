<?php 
	class Detail_user extends MY_Controller
	{
		function __construct()
		{                   
			parent::__construct();
			$this->load->model('Thanhvien_model');
		}
             
                
		function chitiet()
		{
			$input = array();                      
			$data['list'] = $this->Thanhvien_model->get_list($input);
			$data['temp'] = 'admin/chitiet';
                        var_dump($data);die;
			$this->load->view('admin/Detail_user',$data);
			
		}
		
	}
?>