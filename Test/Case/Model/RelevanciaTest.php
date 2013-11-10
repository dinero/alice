<?php
App::uses('Relevancia', 'Model');

/**
 * Relevancia Test Case
 *
 */
class RelevanciaTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.relevancia',
		'app.article',
		'app.editor',
		'app.edition',
		'app.user',
		'app.categoria',
		'app.news'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Relevancia = ClassRegistry::init('Relevancia');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Relevancia);

		parent::tearDown();
	}

}
