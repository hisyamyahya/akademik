<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');}

	class Twig {
		private $CI;
		private $_config = array();
		private $_twig;
		private $_template_dir;
		private $_cache_dir;
		private $_data = array();
		private $_globals = array();
		private $_template;

		function __construct($debug = false) {
			$this->CI =& get_instance();
			$this->CI->config->load('twig');
			$this->_config = $this->CI->config->item('twig');
			
			ini_set('include_path',
			ini_get('include_path') . PATH_SEPARATOR . APPPATH . 'plugins/Twig');
			require_once (string) "Autoloader" . EXT;

			log_message('debug', "Twig Autoloader Loaded");

			Twig_Autoloader::register();

			$template_dir = array();

			if($this->CI->router->fetch_module() !== "") {
				array_push($template_dir, APPPATH.'modules/'.$this->CI->router->fetch_module().'/views');
			}
			
			$template_dir = array_merge($template_dir, $this->_config['template_dir']);

			$this->_template_dir = $template_dir;
			
			$this->_cache_dir = $this->_config['cache_dir'];

			$loader = new Twig_Loader_Filesystem($this->_template_dir);

			$this->_twig = new Twig_Environment($loader, array(
					'cache' => $this->_cache_dir,
					'debug' => $debug,
			));
			
			foreach(get_defined_functions() as $functions) {
					foreach($functions as $function) {
						$this->_twig->addFunction($function, new Twig_Function_Function($function));
					}
			}
		}

		public function add_function($name) {
			$this->_twig->addFunction($name, new Twig_Function_Function($name));
		}

		public function render($template, $data = array()) {
			$template = $this->_twig->loadTemplate($template);
			return $template->render($data);
		}
		public function template($name)
		{
			$this->_template = $name;

			return $this;
		}
		private function _load()
		{
			$this->set( TRUE);
			$this->_rendered = TRUE;

			return $this->_twig->loadTemplate($this->_template .$this->_config['extension']);
		}
		public function display($template='') {
			if(!empty($template)) $this->template($template);

			try
			{
				$this->_load()->display($this->_data);
			}
			catch(Twig_Error_Loader $e)
			{
				show_error($e->getRawMessage());
			}
		}

		public function set_variable($name, $value) {
			$this->_twig->addGlobal($name, $value);
		}
		public function set($key, $value = NULL, $global = FALSE)
		{
			if(is_array($key))
			{
				foreach($key as $k => $v) $this->set($k, $v, $global);
			}
			else
			{
				if($global)
				{
					$this->_twig->addGlobal($key, $value);
					$this->_globals[$key] = $value;
				}
				else
				{
				 	$this->_data[$key] = $value;
				}	
			}

			return $this;
		}
	}

