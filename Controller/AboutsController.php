<?php
App::uses('AppController', 'Controller');
/**
 * Abouts Controller
 *
 * @property About $About
 */
class AboutsController extends AppController {

	public function index()	{
		

	}

	public function view() {

		$this->set(
			array(
				'title_for_section' => 'Acerca de Alice'
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
        $this->Auth->allow('index', 'view'); // Letting users register themselves
    }

}
