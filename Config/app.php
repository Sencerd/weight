<?php

	class Config_app extends Abstract_Config
	{

		public function configs()
		{
			return array(
				'name' => 'Trackly',
				'menu_items' => array(
					0 => array('page' => 'home',     'name' => 'Home',     'url' => '/'),
					1 => array('page' => 'records',  'name' => 'Records',  'url' => '/records',  'logged_in' => true),
					2 => array('page' => 'settings', 'name' => 'Settings', 'url' => '/settings', 'logged_in' => true),
					// 3 => array('page' => 'tools',    'name' => 'Tools',    'url' => '/tools',    'logged_in' => true),
					3 => array('page' => 'about',    'name' => 'About',    'url' => '/about'),
					4 => array('page' => 'signup',   'name' => 'Sign up',  'url' => '/signup',   'logged_out' => true),
					5 => array('page' => 'login',    'name' => 'Log in',   'url' => '/login',    'logged_out' => true),
					6 => array('page' => 'logout',   'name' => 'Log out',  'url' => '/logout',   'logged_in' => true)
				),
				'weight_units' => 'lbs',
				'height_units' => 'in',
				'user_settings' => array(
					0 => array(
						'name'         => 'graph_smoothing',
						'title'        => 'Smooth graph',
						'description'  => 'Show a smoothed out graph on the main page',
						'type_boolean' => true,
						'default'      => 0,
						'validate'     => 'boolean',
						'order'        => 1
					),
					1 => array(
						'name'         => 'height',
						'title'        => 'Height',
						'description'  => 'Your height in inches',
						'type_string'  => true,
						'default'      => 0,
						'validate'     => 'height',
						'order'        => 2
					)
				)
			);
		}

	}
