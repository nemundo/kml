<?php

namespace Nemundo\Geo\Kml\Style;


use Nemundo\Html\Container\AbstractTagContainer;

class Style extends AbstractTagContainer
{

    public $styleId;

    public function getContent()
    {

        $this->tagName = 'Style';
        $this->addAttribute('id', $this->styleId);

        return parent::getContent();

    }

}