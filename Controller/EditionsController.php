<?php
App::uses('AppController', 'Controller');
/**
 * Editions Controller
 *
 * @property Edition $Edition
 */
class EditionsController extends AppController {

	public function index()	{
		
	}

	public function viewAll() {

		$this->layout = 'into';

		$this->set(
			array(
				'title_for_section' => 'Ediciones'
			)
		);

	}

	public function view() {
		
		$this->layout = 'into';

		$this->set(
			array(
				'title_for_section' => 'Edicion No 123'
			)
		);

	}

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'viewAll', 'view'); // Letting users register themselves
    }


}
