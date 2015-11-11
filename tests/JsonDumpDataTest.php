<?php

/**
 * @covers JsonDumpData
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class JsonDumpDataTest extends \PHPUnit_Framework_TestCase {

	public function testReturnsGoodPaths() {
		ini_set( 'memory_limit', '512M' );

		$data = new JsonDumpData();

		$jsonFiles = [
			$data->getEmptyDumpPath(),

			$data->getOneItemDumpPath(),
			$data->getFiveEntitiesDumpPath(),
			$data->getOneThousandEntitiesDumpPath(),

			$data->getOneItemFrom2015DumpPath(),
			$data->getFiveEntitiesFrom2015DumpPath(),
			$data->getOneThousandEntitiesFrom2015DumpPath(),
			
			$data->getOneItemFrom2014DumpPath(),
			$data->getFiveEntitiesFrom2014DumpPath(),
			$data->getOneThousandEntitiesFrom2014DumpPath()
		];

		foreach ( $jsonFiles as $jsonFile ) {
			$this->assertFileExists( $jsonFile );
			$this->assertJson( file_get_contents( $jsonFile ) );
		}

		$bz2Files = [
			$data->getEmptyBz2DumpPath(),

			$data->getOneItemBz2DumpPath(),
			$data->getFiveEntitiesBz2DumpPath(),
			$data->getOneThousandEntitiesBz2DumpPath(),

			$data->getOneItemFrom2015Bz2DumpPath(),
			$data->getFiveEntitiesFrom2015Bz2DumpPath(),
			$data->getOneThousandEntitiesFrom2015Bz2DumpPath()
		];

		foreach ( $bz2Files as $bz2File ) {
			$this->assertFileExists( $bz2File );
			$this->assertJson( bzdecompress( file_get_contents( $bz2File ) ) );
		}
	}

}
