<?php
App::uses('AppController', 'Controller');

App::uses('CakeTime', 'Utility');
/**
 * Articles Controller
 *
 * @property Article $Article
 */
class ArticlesController extends AppController {

	public $components = array('Funciones');

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Article->recursive = 0;
		$this->paginate = array('limit' => 10);
		$this->set('articles', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
		$this->set('article', $this->Article->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Article->create();
			$this->request->data['Article']['permalink'] = $this->Funciones->generatePermalink($this->request->data['Article']['titulo']);
			$this->request->data['Article']['created'] = CakeTime::format('Y-m-d 00:00:00', time());
			$this->request->data['Article']['user_id'] = $this->Auth->user('id');
			$this->Article->id = @$this->Article->find(
				'first',
				array(
					'conditions'=>array('Article.user_id'=>$this->Auth->user('id'),'titulo'=>''),
					'fields' => 'Article.id'
				)
			);
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		}
		$editors = $this->Article->Editor->find('list');
		$editions = $this->Article->Edition->find('list');
		$categorias = $this->Article->Categoria->find('list');
		$relevancias = $this->Article->Relevancia->find('list');
		$users = $this->Article->User->find('list');
		$this->set(compact('editors', 'editions', 'categorias', 'relevancias', 'users'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Article->exists($id)) {
			throw new NotFoundException(__('Invalid article'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			$this->request->data['Article']['permalink'] = $this->Funciones->generatePermalink($this->request->data['Article']['titulo']);
			if ($this->Article->save($this->request->data)) {
				$this->Session->setFlash(__('The article has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The article could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Article.' . $this->Article->primaryKey => $id));
			$this->request->data = $this->Article->find('first', $options);
		}
		$editors = $this->Article->Editor->find('list');
		$editions = $this->Article->Edition->find('list');
		$categorias = $this->Article->Categoria->find('list');
		$relevancias = $this->Article->Relevancia->find('list');
		$users = $this->Article->User->find('list');
		$this->set(compact('editors', 'editions', 'categorias', 'relevancias', 'users'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Article->id = $id;
		if (!$this->Article->exists()) {
			throw new NotFoundException(__('Invalid article'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Article->delete()) {
			$this->Session->setFlash(__('Article deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Article was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function view() {

		$this->layout = 'into';

		$this->set(
			array(
				'title_for_section' => 'Titulo del articulo'
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
