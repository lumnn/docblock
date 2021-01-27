<?php

namespace Phpactor\Docblock\Ast;

class UnknownTag extends TagNode
{
    /**
     * @var Token
     */
    private $name;

    public function __construct(Token $name)
    {
        $this->name = $name;
    }
}
