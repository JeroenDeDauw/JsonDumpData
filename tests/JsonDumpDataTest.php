<?php

/**
 * @covers JsonDumpData
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class JsonDumpDataTest extends \PHPUnit_Framework_TestCase {

	public function testReturnsGoodPaths() {
		$data = new JsonDumpData();

		$this->assertFileExists( $data->getEmptyDumpPath() );
		$this->assertFileExists( $data->getOneItemDumpPath() );
		$this->assertFileExists( $data->getFiveEntitiesDumpPath() );
		$this->assertFileExists( $data->getOneThousandEntitiesDumpPath() );
	}

}
