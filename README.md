# JsonDumpData

[![Build Status](https://secure.travis-ci.org/JeroenDeDauw/JsonDumpData.png?branch=master)](http://travis-ci.org/JeroenDeDauw/JsonDumpData)
[![Download count](https://poser.pugx.org/jeroen/json-dump-data/d/total.png)](https://packagist.org/packages/jeroen/json-dump-data)
[![Latest Stable Version](https://poser.pugx.org/jeroen/json-dump-data/version.png)](https://packagist.org/packages/jeroen/json-dump-data)


**JsonDumpData** holds extracts of [Wikibase](http://wikiba.se/) Repository JSON dumps.
 
Such extracts are often needed when testing code interacting with dumps and can also
be useful to import realistic data into a test wiki. Adding the extracts to the VCS repository
that holds the code needing them can unreasonably inflate its size. Loading this component
via Composer works around that problem.

For more information on the JSON dump format, see the [Wikidata database download page]
(https://www.wikidata.org/wiki/Wikidata:Database_download).

## Installation

To add this package as a local, per-project dependency to your project, simply add a
dependency on `jeroen/json-dump-data` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
JsonDumpData 1.0:

```js
{
    "require": {
        "jeroen/json-dump-data": "1.0.*"
    }
}
```

## Usage

The dump extracts are stored in the `data` directory, and have stable paths. However, when using
PHP, it is recommended to obtain the paths via the `JsonDumpData` class.

```php
$dumpData = new JsonDumpData();
$dumpData->getFiveEntitiesDumpPath();
```

The methods in this class return the full path to the relevant file. These methods will return
the path to the most recent copy of the data this library holds:

* getOneItemDumpPath
* getFiveEntitiesDumpPath
* getOneThousandEntitiesDumpPath
* getEmptyDumpPath

This means that new versions of the library can have these methods return paths to files with
different content (though always adhering to the contract of the method). To get a fully stable
path to a specific version, or to get one for an older version, you can use the methods with time
qualification:

* getOneItemFrom2015DumpPath
* getFiveEntitiesFrom2014DumpPath
* ...

## Release notes

### Version 1.0.0 (dev)

* Added files from 2015-11-09 dump
* Added bz2 files
* Added gz files
* Added new path getters for the files from 2014

### Version 0.1.0 (2014-10-22)

* Initial release