<?php

namespace Phpactor\Docblock\Ast;

class ParameterNode extends Node
{
    protected const CHILD_NAMES = [
        'type',
        'name',
        'default',
    ];

    /**
     * @var TypeNode|null
     */
    public $type;

    /**
     * @var VariableNode|null
     */
    public $name;

    /**
     * @var ValueNode|null
     */
    public $default;

    public function __construct(?TypeNode $type, ?VariableNode $name, ?ValueNode $default)
    {
        $this->type = $type;
        $this->name = $name;
        $this->default = $default;
    }

    public function name(): ?VariableNode
    {
        return $this->name;
    }

    public function type(): ?TypeNode
    {
        return $this->type;
    }

    public function default(): ?ValueNode
    {
        return $this->default;
    }
}
