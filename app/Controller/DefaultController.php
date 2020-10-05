<?php

namespace Controller;

use \W\Controller\Controller;
use Model\OptionModel as ModelOptionModel;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		$option = new ModelOptionModel();

		$galleries = $option->getGallery();

		/* file_get_contents ($filename); */

		return $this->render('default/home', [
			'galleries' => $galleries,
		]);
	}

	/**
	 * Page d'blog
	 */
	public function blog()
	{

		return $this->render('default/blog', [
			'myVar' => 'qqchose',
		]);
	}

	


}