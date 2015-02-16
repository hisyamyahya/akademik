<?php if (!defined("BASEPATH")) exit("No direct script access allowed");

	//customized twig
$config['twig']["template_dir"] = [
		APPPATH."views", 
		APPPATH."views".DIRECTORY_SEPARATOR."_backend",
		APPPATH."views".DIRECTORY_SEPARATOR."_backend/base",
		APPPATH."views".DIRECTORY_SEPARATOR."_frontend"
	];
$config['twig']['extension'] = ".twig";
$config['twig']["cache_dir"] = APPPATH."cache/t";
