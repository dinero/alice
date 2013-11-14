<?php
App::uses('AppController', 'Controller');
/**
 * Ads Controller
 *
 * @property Ad $Ad
 */
class AdsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Ad->recursive = 0;
		$this->paginate = array('order'=>array('Ad.id' => 'DESC'),'conditions'=>array('Ad.user_id'=>$this->Auth->user('id'),'nombre !='=>''));
		$this->set('ads', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
		$this->set('ad', $this->Ad->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		
		if ($this->request->is('post')) {
			$this->Ad->create();
			$this->request->data['Ad']['user_id'] = $this->Auth->user('id');
			$this->Ad->id = @$this->Ad->find(
				'first',
				array(
					'conditions'=>array('Ad.user_id'=>$this->Auth->user('id'),'nombre'=>''),
					'fields' => 'Ad.id'
				)
			);
			if ($this->Ad->save($this->request->data)) {
				$this->Session->setFlash(__('The ad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ad could not be saved. Please, try again.'));
			}
		} else {
			$this->Ad->deleteAll(
	    		array(
	    			'nombre' => '',
					'user_id' => $this->Auth->user('id')
	    		)
	    	);
		}
		$users = $this->Ad->User->find('list');
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
		if (!$this->Ad->exists($id)) {
			throw new NotFoundException(__('Invalid ad'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Ad->save($this->request->data)) {
				$this->Session->setFlash(__('The ad has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ad could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Ad.' . $this->Ad->primaryKey => $id));
			$this->request->data = $this->Ad->find('first', $options);
		}
		$users = $this->Ad->User->find('list');
		$this->set(compact('users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Ad->id = $id;
		if (!$this->Ad->exists()) {
			throw new NotFoundException(__('Invalid ad'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Ad->delete()) {
			$this->loadModel('Image');
			$this->Image->deleteAll(
	    		array(
	    			'seccion' => 'Ads',
					'seccion_id' => $id
	    		)
	    	);
			$this->Session->setFlash(__('Ad deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Ad was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function beforeFilter() {
        parent::beforeFilter();
        if ($this->params['admin'] == 1) {
        	$this->layout = 'admin';
        } else {
        	$this->layout = 'into';
        }
    }
}
