<?php
namespace Mrix\Rql\Parser\TokenParser\Query\FiqlOperator;

use Mrix\Rql\Parser\TokenParser\Query\AbstractFiqlTokenParser;
use Mrix\Rql\Parser\Node\Query\ScalarOperator\EqNode;

/**
 */
class EqTokenParser extends AbstractFiqlTokenParser
{
    /**
     * @inheritdoc
     */
    protected function getOperatorNames()
    {
        return ['eq', '=', '=='];
    }

    /**
     * @inheritdoc
     */
    protected function createNode($field, $value)
    {
        return new EqNode($field, $value);
    }
}