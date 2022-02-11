<?php

declare(strict_types=1);

namespace Lelyfoto\Twig\InstanceOf\Expression;

use Twig\Compiler;
use Twig\Node\Expression\TestExpression;

class InstanceOfExpression extends TestExpression
{
    public function compile(Compiler $compiler): void
    {
        $className = $this->getNode('arguments')->getNode('0')->getAttribute('value');
        $compiler
            ->raw('(')
            ->subcompile($this->getNode('node'))
            ->raw(' instanceof ')
            ->raw($className)
            ->raw(')')
        ;
    }
}
