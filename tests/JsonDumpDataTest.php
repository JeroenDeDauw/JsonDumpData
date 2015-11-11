<?php

/**
 * @covers JsonDumpData
 *
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class JsonDumpDataTest extends \PHPUnit_Framework_TestCase {

	public function setUp() {
		ini_set( 'memory_limit', '512M' );
	}

	public function testJsonPaths() {
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
			$this->assertJson( file_get_contents( $jsonFile ), $jsonFile );
		}
	}

	public function testBz2Paths() {
		$data = new JsonDumpData();

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
			$this->assertJson( bzdecompress( file_get_contents( $bz2File ) ), $bz2File );
		}
	}

	public function testGzPaths() {
		$data = new JsonDumpData();

		$gzFiles = [
			$data->getEmptyGzDumpPath(),

			$data->getOneItemGzDumpPath(),
			$data->getFiveEntitiesGzDumpPath(),
			$data->getOneThousandEntitiesGzDumpPath(),

			$data->getOneItemFrom2015GzDumpPath(),
			$data->getFiveEntitiesFrom2015GzDumpPath(),
			$data->getOneThousandEntitiesFrom2015GzDumpPath()
		];

		foreach ( $gzFiles as $gzFile ) {
			$this->assertFileExists( $gzFile );
			$this->assertJson( $this->gzdecode( file_get_contents( $gzFile ) ), $gzFile );
		}
	}

	private function gzdecode( $string ) {
		return file_get_contents( 'compress.zlib://data:who/cares;base64,' . base64_encode( $string ) );
	}

}
