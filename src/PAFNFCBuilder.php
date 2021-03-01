<?php

namespace NFePHP\Sintegra;

use IsmaelAdriano\PAFNFCe\Blocks\BlockU1;
use IsmaelAdriano\PAFNFCe\PAFNFCe;

final class PAFNFCBuilder extends PAFNFCe
{
    protected $possibles = [
        'blockU1' => ['class' => BlockU1::class, 'order' => 1],
    ];
}
