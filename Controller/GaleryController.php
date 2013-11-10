<?php
App::uses('AppController', 'Controller');
/**
 * Galery Controller
 *
 * @property Galery $Galery
 */
class GaleryController extends AppController {

	public function index() {

	}

	public function viewAll() {

		$this->layout = 'into';

		$this->set(
			array(
				'title_for_section' => 'Galerías'
			)
		);

	}

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'viewAll'); // Letting users register themselves
    }

}
