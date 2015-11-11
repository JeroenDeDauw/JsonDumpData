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
	 * @since 0.1
	 * @return string
	 */
	public function getOneItemDumpPath() {
		return $this->dataPath . '/20140929/one-item.json';
	}

	/**
	 * @since 0.1
	 * @return string
	 */
	public function getFiveEntitiesDumpPath() {
		return $this->dataPath . '/20140929/five-entities.json';
	}

	/**
	 * @since 0.1
	 * @return string
	 */
	public function getOneThousandEntitiesDumpPath() {
		return $this->dataPath . '/20140929/1000-entities.json';
	}

}