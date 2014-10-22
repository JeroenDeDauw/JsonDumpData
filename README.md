# JsonDumpData

[![Build Status](https://secure.travis-ci.org/JeroenDeDauw/JsonDumpData.png?branch=master)](http://travis-ci.org/JeroenDeDauw/JsonDumpData)
[![Download count](https://poser.pugx.org/jeroen/json-dump-data/d/total.png)](https://packagist.org/packages/jeroen/json-dump-data)
[![Latest Stable Version](https://poser.pugx.org/jeroen/json-dump-data/version.png)](https://packagist.org/packages/jeroen/json-dump-data)


**JsonDumpData** holds extracts of [Wikibase](http://wikiba.se/) Repository JSON dumps.
 
Such extracts are often needed when testing code interacting with dumps and can also
be useful to import realistic data into a test wiki. Adding the extracts to the VCS repository
that holds the code needing them can unreasonably inflate its size. Loading this component
via Composer works around that problem.


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

## Release notes

### Version 0.1.0 (2014-10-22)

* Initial release