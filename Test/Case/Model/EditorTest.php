<?php
App::uses('Editor', 'Model');

/**
 * Editor Test Case
 *
 */
class EditorTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.editor',
		'app.article',
		'app.edition',
		'app.user',
		'app.categoria',
		'app.news',
		'app.relevancia'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Editor = ClassRegistry::init('Editor');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Editor);

		parent::tearDown();
	}

}
