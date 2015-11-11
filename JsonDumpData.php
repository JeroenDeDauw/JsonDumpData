<?php

/**
 * @licence GNU GPL v2+
 * @author Jeroen De Dauw < jeroendedauw@gmail.com >
 */
class JsonDumpData {

	private $dataPath;

	public function __construct() {
		$this->dataPath = __DIR__ . '/data/';
	}

	/**
	 * @since 0.1
	 * @return string
	 */
	public function getEmptyDumpPath() {
		return $this->dataPath . 'empty.json';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getEmptyBz2DumpPath() {
		return $this->dataPath . 'empty.json.bz2';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getEmptyGzDumpPath() {
		return $this->dataPath . 'empty.json.gz';
	}

	///////////////////////////////////////////////////
	// Most recent
	///////////////////////////////////////////////////

	/**
	 * @since 0.1
	 * @return string
	 */
	public function getOneItemDumpPath() {
		return $this->dataPath . '/20151109/one-item.json';
	}

	/**
	 * @since 0.1
	 * @return string
	 */
	public function getFiveEntitiesDumpPath() {
		return $this->dataPath . '/20151109/five-entities.json';
	}

	/**
	 * @since 0.1
	 * @return string
	 */
	public function getOneThousandEntitiesDumpPath() {
		return $this->dataPath . '/20151109/1000-entities.json';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneItemBz2DumpPath() {
		return $this->dataPath . '/20151109/one-item.json.bz2';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getFiveEntitiesBz2DumpPath() {
		return $this->dataPath . '/20151109/five-entities.json.bz2';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneThousandEntitiesBz2DumpPath() {
		return $this->dataPath . '/20151109/1000-entities.json.bz2';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneItemGzDumpPath() {
		return $this->dataPath . '/20151109/one-item.json.gz';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getFiveEntitiesGzDumpPath() {
		return $this->dataPath . '/20151109/five-entities.json.gz';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneThousandEntitiesGzDumpPath() {
		return $this->dataPath . '/20151109/1000-entities.json.gz';
	}

	///////////////////////////////////////////////////
	// 2015
	///////////////////////////////////////////////////

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneItemFrom2015DumpPath() {
		return $this->dataPath . '/20151109/one-item.json';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getFiveEntitiesFrom2015DumpPath() {
		return $this->dataPath . '/20151109/five-entities.json';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneThousandEntitiesFrom2015DumpPath() {
		return $this->dataPath . '/20151109/1000-entities.json';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneItemFrom2015Bz2DumpPath() {
		return $this->dataPath . '/20151109/one-item.json.bz2';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getFiveEntitiesFrom2015Bz2DumpPath() {
		return $this->dataPath . '/20151109/five-entities.json.bz2';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneThousandEntitiesFrom2015Bz2DumpPath() {
		return $this->dataPath . '/20151109/1000-entities.json.bz2';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneItemFrom2015GzDumpPath() {
		return $this->dataPath . '/20151109/one-item.json.gz';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getFiveEntitiesFrom2015GzDumpPath() {
		return $this->dataPath . '/20151109/five-entities.json.gz';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneThousandEntitiesFrom2015GzDumpPath() {
		return $this->dataPath . '/20151109/1000-entities.json.gz';
	}


	///////////////////////////////////////////////////
	// 2014
	///////////////////////////////////////////////////

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneItemFrom2014DumpPath() {
		return $this->dataPath . '/20140929/one-item.json';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getFiveEntitiesFrom2014DumpPath() {
		return $this->dataPath . '/20140929/five-entities.json';
	}

	/**
	 * @since 1.0
	 * @return string
	 */
	public function getOneThousandEntitiesFrom2014DumpPath() {
		return $this->dataPath . '/20140929/1000-entities.json';
	}

}