<?php

namespace IsmaelAdriano\PAFNFCe;

use IsmaelAdriano\PAFNFCe\Common\BlockInterface;

abstract class PAFNFCe
{
    protected $possibles = [];

    public function add(BlockInterface $block = null)
    {
        if (empty($block)) {
            return;
        }
        $name = strtolower((new \ReflectionClass($block))->getShortName());
        if (key_exists($name, $this->possibles)) {
            $this->{$name} = $block->get();
        }
    }

    public function get()
    {
        $pafNFce = '';
        $keys = array_keys($this->possibles);
        foreach ($keys as $key) {
            if (isset($this->$key)) {
                $pafNFce .= $this->$key;
            }
        }
        return $pafNFce;
    }
}
