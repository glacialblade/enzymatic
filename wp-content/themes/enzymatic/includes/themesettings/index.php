<?php
	class EnzymaticThemeSettings{
		public function __construct(){
			add_action("admin_menu", array($this,"menus"));
			add_action('admin_init', array($this,'options'));
		}
		
		public function menus(){
			add_menu_page('themesettings', 
				          'Theme Settings', 
				          'manage_options', 
	                      'theme_settings', 
	                      array($this,'index'));

			add_submenu_page('theme_settings', 
					         'Contact Settings', 
					         'Contact Settings', 
					         'manage_options', 
					         'contact_settings', 
					         array($this,'contact'));
		}

		public function options(){
			register_setting('enzymatic_contact_group','enzymatic_contact_setting');
		}

		public function index(){
			require_once get_template_directory()."/includes/themesettings/template/index.php";
		}
		public function contact(){
			require_once get_template_directory()."/includes/themesettings/template/contact.php";
		}
	}
	$enzymaticthemesettings = new EnzymaticThemeSettings();
?>