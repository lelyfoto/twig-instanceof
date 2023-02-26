<?php

declare(strict_types=1);

namespace Lelyfoto\Twig\InstanceOf\Extension;

use Lelyfoto\Twig\InstanceOf\Expression\InstanceOfExpression;
use Twig\Extension\AbstractExtension;
use Twig\TwigTest;

class InstanceOfExtension extends AbstractExtension
{
    public function getTests(): array
    {
        return [
            new TwigTest(
                'instanceof',
                null,
                [
                    'node_class' => InstanceOfExpression::class,
                    'one_mandatory_argument' => true
                ]
            )
        ];
    }
}
