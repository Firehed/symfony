<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Config\Tests\Fixtures\Builder;

use Symfony\Component\Config\Definition\Builder\NodeBuilder as BaseNodeBuilder;
use Symfony\Component\Config\Definition\Builder\NodeDefinition;

class NodeBuilder extends BaseNodeBuilder
{
    public function barNode($name): NodeDefinition
    {
        return $this->node($name, 'bar');
    }

    protected function getNodeClass(string $type): string
    {
        switch ($type) {
            case 'bar':
            case 'variable':
                return __NAMESPACE__.'\\'.ucfirst($type).'NodeDefinition';
            default:
                return parent::getNodeClass($type);
        }
    }
}
