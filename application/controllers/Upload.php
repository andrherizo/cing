<?php
	class Upload extends CI_Controller {
		
		public function save() {
			$config['upload_path'] = 'C:\uploads';
			$config['allowed_types'] = 'gif|jpg|png|jpeg|pdf|docx';
			$config['max_size'] = 2048;
			$config['file_name'] = 'facedev';
			$config['overwrite'] = TRUE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);
			
			if (isset($_FILES['file']['tmp_name'])) {
				if (!$this->upload->do_upload('file')) {
					echo $this->upload->display_errors();
				} else {
					echo 'OK';
				}
			} else {
				echo 'File upload not found';
			}		
		}
	}
