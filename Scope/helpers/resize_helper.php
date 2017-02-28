<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * resizeImage
 *
 * Resizes Image and Save to to Destination Folder
 *
 * @access	public
 * @param	string
 * @param	string
 * @param	string
 * @return	bool
 */

function resizeImage($sourcePath, $destinationPath, $fileName)
{
	//Load libs and Models
	$CI =& get_instance();
    $CI->load->model('profile_model');
							
	//List Profiles
	$profiles = $CI->profile_model->listProfiles();
	foreach($profiles as $profile)
		{
			//Config Image Lib
			$config['image_library'] = 'gd2';
			$config['source_image']	= $sourcePath;
			$config['maintain_ratio'] = TRUE;
			$config['width']	 = $profile->width;
			$config['height']	 = $profile->height;
			$config['new_image'] = $destinationPath.'/'.$fileName.'_'.$profile->width.'_'.$profile->height.'.jpg';
								
			//Execute Resize Action And Clear Settings
			$CI->image_lib->initialize($config);
			$CI->image_lib->resize();
			$CI->image_lib->clear();
		}
	return true;
}

?>