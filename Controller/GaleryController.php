<?php
App::uses('AppController', 'Controller');
/**
 * Galery Controller
 *
 * @property Galery $Galery
 */
class GaleryController extends AppController {

	public function index() {
		$this->redirect('viewAll');
	}

	public function viewAll() {

		$this->set(
			array(
				'title_for_section' => 'Galerías'
			)
		);

	}

	public function view() {

		$this->set(
			array(
				'title_for_section' => 'Galerías'
			)
		);
	}

	public function beforeFilter() {
        parent::beforeFilter();
        if ($this->params['admin'] == 1) {
        	$this->layout = 'admin';
        } else {
        	$this->layout = 'into';
        }
        $this->Auth->allow('index', 'viewAll', 'view'); // Letting users register themselves
    }

}
