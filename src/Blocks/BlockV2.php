<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockV2 extends Block
{
    public $elements = [
        'v2' => ['class' => Elements\V2::class, 'level' => 0, 'type' => 'single'],
    ];
}
