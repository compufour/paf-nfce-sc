<?php

namespace NFePHP\Sintegra;

use IsmaelAdriano\PAFNFCe\Blocks\BlockA2;
use IsmaelAdriano\PAFNFCe\Blocks\BlockU1;
use IsmaelAdriano\PAFNFCe\Blocks\BlockP2;
use IsmaelAdriano\PAFNFCe\Blocks\BlockE2;
use IsmaelAdriano\PAFNFCe\Blocks\BlockD2;
use IsmaelAdriano\PAFNFCe\Blocks\BlockD3;
use IsmaelAdriano\PAFNFCe\Blocks\BlockD4;
use IsmaelAdriano\PAFNFCe\Blocks\BlockEAD;
use IsmaelAdriano\PAFNFCe\Blocks\BlockJ1;
use IsmaelAdriano\PAFNFCe\Blocks\BlockJ2;
use IsmaelAdriano\PAFNFCe\PAFNFCe;

final class PAFNFCBuilder extends PAFNFCe
{
    protected $possibles = [
        'blockU1' => ['class' => BlockU1::class, 'order' => 1],
        'blockA2' => ['class' => BlockA2::class, 'order' => 2],
        'blockP2' => ['class' => BlockP2::class, 'order' => 3],
        'blockE2' => ['class' => BlockE2::class, 'order' => 4],
        'blockD2' => ['class' => BlockD2::class, 'order' => 5],
        'blockD3' => ['class' => BlockD3::class, 'order' => 6],
        'blockD4' => ['class' => BlockD4::class, 'order' => 7],
        'blockJ1' => ['class' => BlockJ1::class, 'order' => 8],
        'blockJ2' => ['class' => BlockJ2::class, 'order' => 9],
        'blockEAD' => ['class' => BlockEAD::class, 'order' => 10],
    ];
}
