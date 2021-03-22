<?php

namespace IsmaelAdriano\PAFNFCe\Elements;

use IsmaelAdriano\PAFNFCe\Common\Element;
use IsmaelAdriano\PAFNFCe\Common\ElementInterface;
use \stdClass;

class J4 extends Element implements ElementInterface
{
    const REGISTRO = 'J4';

    protected $parameters = [
        'CNPJ' => [
            'type' => 'string',
            'regex' => '^[0-9]{14}$',
            'required' => true,
            'info' => 'Número de inscrição do estabelecimento matriz da pessoa jurídica no CNPJ.',
            'format' => '',
            'length' => 14
        ],
        'DATA_EMISSAO' => [
            'type' => 'string',
            'regex' => '^([12]\d{3})(0[1-9]|1[0-2])(0[1-9]|[1-2][0-9]|31(?!(?:0[2469]|11))|30(?!02))$',
            'required' => true,
            'info' => 'Data de emissão da NFC-e emitida em CONTINGÊNCIA',
            'format' => '',
            'length' => 8
        ],
        'NUMERO_ITEM' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Número sequencial do item registrado no documento',
            'format' => 'totalNumber',
            'length' => 3
        ],
        'CODIGO_PRODUTO' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Código do produto ou serviço registrado no documento',
            'format' => 'totalNumber',
            'length' => 14
        ],
        'DESCRICAO' => [
            'type' => 'string',
            'regex' => '^.{1,100}$',
            'required' => true,
            'info' => 'Descrição do produto ou serviço constante no NFCe',
            'format' => '',
            'length' => 100
        ],
        'QUANTIDADE' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Quantidade, sem a separação das casas decimais',
            'format' => 'totalNumber',
            'length' => 7
        ],
        'UNIDADE' => [
            'type' => 'string',
            'regex' => '^.{1,3}$',
            'required' => true,
            'info' => 'Unidade de medida cadastrada',
            'format' => '',
            'length' => 3
        ],
        'VALOR_UNITARIO' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor unitário do produto ou serviço, sem a separação da casas decimais',
            'format' => 'totalNumber',
            'length' => 8
        ],
        'DESCONTO' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do desconto incidente sobre o valor do item, com duas casas decimais.',
            'format' => 'totalNumber',
            'length' => 8
        ],
        'ACRESCIMO' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => false,
            'info' => 'Valor do acréscimo incidente sobre o valor do item, com duas casas decimais.',
            'format' => 'totalNumber',
            'length' => 8
        ],
        'VALOR_TOTAL_LIQUIDO' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Valor total líquido do item, com duas casas decimais.',
            'format' => 'totalNumber',
            'length' => 14
        ],
        'TOTALIZADOR_PARCIAL' => [
            'type' => 'string',
            'regex' => '^.{1,7}$',
            'required' => true,
            'info' => 'Código do totalizador relativo ao produto ou serviço conforme tabela abaixo',
            'format' => '',
            'length' => 7
        ],
        'CASAS_DECIMAIS_QTD' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parâmetro de número de casas decimais da quantidade',
            'format' => '',
            'length' => 1
        ],
        'CASAS_DECIMAIS_VLR' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Parâmetro de número de casas decimais de valor unitário',
            'format' => '',
            'length' => 1
        ],
        'NUMERO_NFCE' => [
            'type' => 'numeric',
            'regex' => '^\d+(\.\d*)?|\.\d+$',
            'required' => true,
            'info' => 'Número da NFce',
            'format' => '',
            'length' => 10
        ],
        'SERIE_NFCE' => [
            'type' => 'string',
            'regex' => '^.{3,3}$',
            'required' => true,
            'info' => 'Série da NFce',
            'format' => '',
            'length' => 3
        ],
        'CHAVE_NFCE' => [
            'type' => 'string',
            'regex' => '^.{44,44}$',
            'required' => true,
            'info' => 'Chave de acesso da NFC-e',
            'format' => '',
            'length' => 44
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
