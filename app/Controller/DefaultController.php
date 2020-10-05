<?php

namespace Controller;

use \W\Controller\Controller;

class DefaultController extends Controller
{

	/**
	 * Page d'accueil par défaut
	 */
	public function home()
	{
		return $this->render('default/home');
	}

	/**
	 * Page de blog
	 */
	public function blog()
	{

		return $this->render('default/blog', [
			'myVar' => 'qqchose',
		]);
	}

	


}
