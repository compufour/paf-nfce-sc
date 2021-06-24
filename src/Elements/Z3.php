<?php

namespace IsmaelAdriano\PAFNFCe\Elements;

use IsmaelAdriano\PAFNFCe\Common\Element;
use \stdClass;

class Z3 extends Element
{
    const REGISTRO = 'Z3';
    const LEVEL = 0;
    const PARENT = '';

    protected $parameters = [
        'NOME_APLICATIVO' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => true,
            'info' => 'Nome do aplicativo.',
            'format' => '',
            'length' => 50
        ],
        'VERSAO' => [
            'type' => 'string',
            'regex' => '^[0-9]{2,14}$',
            'required' => true,
            'info' => 'Versão do aplicativo do NFC-e',
            'format' => '',
            'length' => 10
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
