<?php
App::uses('AppController', 'Controller');
/**
 * Articles Controller
 *
 * @property Article $Article
 */
class ArticlesController extends AppController {

	public function index() {

	}

	public function view() {

		$this->layout = 'into';

		$this->set(
			array(
				'title_for_section' => 'Titulo del articulo'
			)
		);

	}

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view'); // Letting users register themselves
    }


}
