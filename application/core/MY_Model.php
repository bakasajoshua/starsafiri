<?php

	class MY_Model extends CI_Model{
		
		function thumbnail_creator($path,$width,$height)
		{
			$config['image_library'] = 'gd2';
			$config['source_image']	= $path;
			$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width']	 = $width;
			$config['height']	= $height;

			$this->load->library('image_lib', $config); 

			$resize = $this->image_lib->resize();
			// echo "<pre>";print_r($resize);die();
			// echo "<pre>";print_r($path);die();
			if(!$resize){
				$this->image_lib->display_errors();
			}else{
				$extension = pathinfo($path, PATHINFO_EXTENSION);
				$name = explode('.'.$extension, $path);
				$name = $name[0].'_thumb'.'.'.$extension;
			
				$delete = unlink($path);
				if ($delete) {
					rename($name, $path);
				}

				return TRUE;
			}
		}
	}


?>