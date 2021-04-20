<?php


use Nemundo\Geo\Kml\Style\LineStyle;
use Nemundo\Geo\Kml\Style\Style;

require 'config.php';


$kml = new \Nemundo\Geo\Kml\Document\KmlDocument();
$kml->filename = 'timespan.kml';


$placemark = new \Nemundo\Geo\Kml\Container\Placemark($kml);

$placemark->addContent('<TimeSpan>
   <begin>2008-05-26T10:00:00Z</begin>
   <end>2008-05-26T21:00:00Z</end>
 </TimeSpan>');





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










/*
<TimeSpan>
   <begin>2008-05-26T21:51:17Z</begin>
   <end>2008-05-26T21:51:20Z</end>
 </TimeSpan>
*/

