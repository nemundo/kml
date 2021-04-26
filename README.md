# Kml

### Installation
```
composer config repositories.kml vcs https://github.com/nemundo/kml
composer require nemundo/kml
```



### config.php
```
$lib = new Library($autoload);
$lib->source = __DIR__ . '/kml/src/';
$lib->namespace = 'Nemundo\\Geo\\Kml';
```


