<?php
App::uses('Cocinero', 'Model');

/**
 * Cocinero Test Case
 */
class CocineroTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.cocinero'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Cocinero = ClassRegistry::init('Cocinero');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Cocinero);

		parent::tearDown();
	}

}
