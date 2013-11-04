<?php
App::uses('AppController', 'Controller');
/**
 * Articles Controller
 *
 * @property Article $Article
 */
class ArticlesController extends AppController {

	public $helpers = array(
		'Form'
	);

	public function index() {

	}

	public function view() {

		$this->layout = 'into';

	}

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'view'); // Letting users register themselves
    }


}
