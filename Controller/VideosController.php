<?php
App::uses('AppController', 'Controller');
/**
 * Videos Controller
 *
 * @property Video $Video
 */
class VideosController extends AppController {

	public function index() {

	}

	public function viewAll() {

		$this->set(
			array(
				'title_for_section' => 'Videos'
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
        $this->Auth->allow('index', 'viewAll'); // Letting users register themselves
    }

}
