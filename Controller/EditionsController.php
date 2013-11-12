<?php
App::uses('AppController', 'Controller');


App::uses('CakeTime', 'Utility');

/**
 * Editions Controller
 *
 * @property Edition $Edition
 */
class EditionsController extends AppController {


	public $components = array('Funciones');
	//public $uses = array('Article', 'Edition');
/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Edition->recursive = 0;
		var_dump($this->paginate());
		$this->set('editions', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Edition->exists($id)) {
			throw new NotFoundException(__('Invalid edition'));
		}
		$options = array('conditions' => array('Edition.' . $this->Edition->primaryKey => $id));
		$this->set('edition', $this->Edition->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Edition->create();
			$this->request->data['Edition']['permalink'] = $this->Funciones->generatePermalink($this->request->data['Edition']['nombre']);
			$this->request->data['Edition']['created'] = CakeTime::format('Y-m-d 00:00:00', time());
			$this->request->data['Edition']['user_id'] = $this->Auth->user('id');
			$this->Edition->id = @$this->Edition->find(
				'first',
				array(
					'conditions'=>array('Edition.user_id'=>$this->Auth->user('id'),'nombre'=>''),
					'fields' => 'Edition.id'
				)
			);
			if ($this->Edition->save($this->request->data)) {
				$this->Session->setFlash(__('La edición se guardo correctamente'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La edición no pudo ser guardada, Favor Intente de Nuevo'));
			}
		}
		$users = $this->Edition->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {

		if (!$this->Edition->exists($id)) {
			throw new NotFoundException(__('Invalid edition'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Edition->save($this->request->data)) {
				$this->Session->setFlash(__('The edition has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The edition could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Edition.' . $this->Edition->primaryKey => $id));
			$this->request->data = $this->Edition->find('first', $options);
		}
		$users = $this->Edition->User->find('list');
		$this->set(compact('users'));
	}

	/*public function isAuthorized($user) {
	    // Admin can access every action
	    if ($this->Edition->isOwnedBy(1, 1)) {
	    die('ola');
            return true;
        }
        die('juaz');
	    // Default deny
	    return false;
	}*/
/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Edition->id = $id;
		if (!$this->Edition->exists()) {
			throw new NotFoundException(__('Invalid edition'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Edition->delete()) {
			$this->Session->setFlash(__('Edition deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Edition was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	/*public function beforeFilter() {
		parent::beforeFilter();
		$this->layout = 'admin';
	}*/

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
        if ($this->params['admin'] == 1) {
        	$this->layout = 'admin';
        }
        $this->Auth->allow('index', 'viewAll', 'view'); // Letting users register themselves
    }

}
