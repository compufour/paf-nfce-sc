<?php

namespace IsmaelAdriano\PAFNFCe\Elements;

use IsmaelAdriano\PAFNFCe\Common\Element;
use IsmaelAdriano\PAFNFCe\Common\ElementInterface;
use \stdClass;

class V4 extends Element implements ElementInterface
{
    const REGISTRO = 'V4';

    protected $parameters = [
        'DATA' => [
            'type' => 'string',
            'regex' => '^([12]\d{3})(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))$',
            'required' => true,
            'info' => 'Data da geração do arquivo',
            'format' => '',
            'length' => 8
        ],
    ];

    /**
     * Constructor
     * @param \stdClass $std
     */
    public function __construct(\stdClass $std)
    {
        parent::__construct(self::REGISTRO);
        $this->std = $this->standarize($std);
    }
}
