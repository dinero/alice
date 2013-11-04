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

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index', 'viewAll'); // Letting users register themselves
    }


}
