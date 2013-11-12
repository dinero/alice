<?php 
App::uses('AppController', 'Controller');

/**
* 
*/
class HomeController extends AppController {

	public $uses = array('Edition', 'Article');

	public $components = array('Funciones', 'Image');
	
	public function index() {
		
		$lastEdition = $this->Edition->find(
			'first',
			array(
				'order' => array(
					'Edition.created' => 'DESC',
					'Edition.id' => 'DESC'
				)
			)
		);

		if (!empty($lastEdition)) {

			$lastArticles = $this->Article->find(
				'all',
				array(
					'conditions' => array(
						'Article.edition_id' => @$lastEdition['Edition']['id']
					),
					'order' => array(
						'Article.relevancia_id' => 'ASC',
						'Article.created' => 'DESC',
						'Article.id' => 'DESC'
					)
				)
			);

			$lastEditions = $this->Edition->find(
				'all',
				array(
					'conditions' => array(
						'Edition.id !=' => $lastEdition['Edition']['id']
					),
					'order' => array(
						'Edition.created' => 'DESC',
						'Edition.id' => 'DESC'
					),
					'limit' => 3
				)
			);
		}


		$this->set(
			array(
				'lastArticles' => @$lastArticles,
				'lastEditions' => @$lastEditions
			)
		);

	}

	public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('index'); // Letting users register themselves
    }

}

?>