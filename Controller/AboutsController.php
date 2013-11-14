<?php
App::uses('AppController', 'Controller');
/**
 * Abouts Controller
 *
 * @property About $About
 */
class AboutsController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->About->recursive = 0;
		$this->set('abouts', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Invalid about'));
		}
		$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
		$this->set('about', $this->About->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->About->create();
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('The about has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The about could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->About->exists($id)) {
			throw new NotFoundException(__('Invalid about'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->About->save($this->request->data)) {
				$this->Session->setFlash(__('The about has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The about could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('About.' . $this->About->primaryKey => $id));
			$this->request->data = $this->About->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->About->id = $id;
		if (!$this->About->exists()) {
			throw new NotFoundException(__('Invalid about'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->About->delete()) {
			$this->Session->setFlash(__('About deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('About was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

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
