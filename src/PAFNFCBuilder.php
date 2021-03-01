<?php

namespace NFePHP\Sintegra;

use IsmaelAdriano\PAFNFCe\Blocks\Block1;
use IsmaelAdriano\PAFNFCe\PAFNFCe;

final class PAFNFCBuilder extends PAFNFCe
{
    protected $possibles = [
        'blockU1' => ['class' => Block1::class, 'order' => 1],
    ];
}
