<?php

class SanityCheckTest extends TestCase {

	/**
	 * Pelo menos o root tem que funcionar
	 *
	 * @return void
	 */
	public function testBasicExample()
	{
		$crawler = $this->client->request('GET', '/');

		$this->assertTrue($this->client->getResponse()->isOk());
	}

}
