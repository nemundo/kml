<?php

use Nemundo\Geo\Kml\Style\LineStyle;
use Nemundo\Geo\Kml\Style\Style;

require 'config.php';


$kml = new \Nemundo\Geo\Kml\Document\KmlDocument();
$kml->filename = 'kml_example.kml';


$placemark = new \Nemundo\Geo\Kml\Container\Placemark($kml);

$style=new Style($placemark);

$lineStyle=new LineStyle($style);
$lineStyle->color = 'FF1400FF';
$lineStyle->width = 1;


/*
$multi = new \Nemundo\Geo\Kml\Element\MultiGeometry($placemark);

$line = new \Nemundo\Geo\Kml\Element\LineString($multi);  // new \Nemundo\Geo\Kml\Element\KmlLine($kml);

$geoCoordinate =new \Nemundo\Core\Type\Geo\GeoCoordinateAltitude();
$geoCoordinate->longitude = 10;
$geoCoordinate->latitude = 10;
$geoCoordinate->altitude = 3000;
$line->addPoint($geoCoordinate);

$geoCoordinate =new \Nemundo\Core\Type\Geo\GeoCoordinateAltitude();
$geoCoordinate->longitude = 11;
$geoCoordinate->latitude = 11;
$geoCoordinate->altitude = 3000;
$line->addPoint($geoCoordinate);*/



$line = new \Nemundo\Geo\Kml\Element\LineString($placemark);

$geoCoordinate =new \Nemundo\Core\Type\Geo\GeoCoordinateAltitude();
$geoCoordinate->longitude = 12;
$geoCoordinate->latitude = 12;
$geoCoordinate->altitude = 3000;
$line->addPoint($geoCoordinate);

$geoCoordinate =new \Nemundo\Core\Type\Geo\GeoCoordinateAltitude();
$geoCoordinate->longitude = 6;
$geoCoordinate->latitude = 8;
$geoCoordinate->altitude = 3000;
$line->addPoint($geoCoordinate);

$kml->render();

