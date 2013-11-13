<?php
App::uses('Albume', 'Model');

/**
 * Albume Test Case
 *
 */
class AlbumeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.albume'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Albume = ClassRegistry::init('Albume');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Albume);

		parent::tearDown();
	}

}
