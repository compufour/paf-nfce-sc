<?php

namespace IsmaelAdriano\PAFNFCe\Blocks;

use IsmaelAdriano\PAFNFCe\Elements;
use IsmaelAdriano\PAFNFCe\Common\Block;

final class BlockV4 extends Block
{
    public $elements = [
        'v4' => ['class' => Elements\V4::class, 'level' => 0, 'type' => 'single'],
    ];
}
