<?php

namespace Ynet;

class Module extends \ZRay\ZRayModule {
	
	public function config() {
	    return array(
	        'extension' => array(
				'name' => 'ynet',
			),
	        // configure  custom panels
            'defaultPanels' => array(
             ),
	        'panels' => array(
	            'ynet' => array(
	                'display'       => true,
					'alwaysShow'	=> true,
	                'logo'          => 'logo.png',
	                'menuTitle' 	=> 'Ynet',
	                'panelTitle'	=> 'Ynet'
	            ),
	         )
	    );
	}	
}