<?php
App::uses('AppController', 'Controller');
/**
 * Videos Controller
 *
 * @property Video $Video
 */
class VideosController extends AppController {

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Video->recursive = 0;
		$this->paginate = array('order' => array('Video.id' => 'DESC'));
		$this->set('videos', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
		$this->set('video', $this->Video->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Video->create();
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The video has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.'));
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
		if (!$this->Video->exists($id)) {
			throw new NotFoundException(__('Invalid video'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Video->save($this->request->data)) {
				$this->Session->setFlash(__('The video has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The video could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Video.' . $this->Video->primaryKey => $id));
			$this->request->data = $this->Video->find('first', $options);
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
		$this->Video->id = $id;
		if (!$this->Video->exists()) {
			throw new NotFoundException(__('Invalid video'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Video->delete()) {
			$this->Session->setFlash(__('Video deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Video was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

	public function index() {

	}

	public function view($id = null) {

		if ($id != null) {
			$video = $this->Video->find(
				'first',
				array(
					'conditions' => array(
						'Video.id' => $id
					)
				)
			);

			echo '<h1>'.$video['Video']['titulo'].'</h1>
            <div class="paddingV">
                <div id="video" class="flex-video">
                    [youtube='.$video['Video']['url'].']
                </div>
            </div>';

			echo '<script type="text/javascript">
                $(function(){
                    $.mb_videoEmbedder.defaults.width=$("#video").width();
                    $("#video").mb_embedMovies();
                    $("#video").mb_embedAudio();
                });
            </script>';
		}

		exit(1);
	}

	public function viewAll() {
		$this->Video->recursive = 0;

		$this->loadModel('Ad');

		$this->paginate = array(
			'order' => array(
				'Video.id' => 'DESC'
			),
			'limit' => 8
		);

		$allV = array();

		$videoP = $this->Video->find(
			'first',
			array(
				'order' => array(
					'Video.id' => 'DESC'
				)
			)
		);

		if (!empty($videoP)) {
				
			$allV = $this->paginate(
				'Video',
				array(
					'Video.id !=' => $videoP['Video']['id']
				)
			);
			
		}

		$pubVidH = $this->Ad->find(
			'first',
			array(
				'conditions' => array(
					'Ad.orientacion' => 'horizontal',
					'Ad.bloque' => 'galerias'
				),
				'order' => array(
					'Ad.id' => 'DESC'
				)
			)
		);

		$this->set(
			array(
				'title_for_section' => 'Videos',
				'title_for-layout' => 'Videos',
				'videoP' => @$videoP,
				'allV' => @$allV,
				'pubVidH' => @$pubVidH
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
;
