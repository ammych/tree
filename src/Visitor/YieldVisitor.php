<?php

namespace Tree\Visitor;

use Tree\Node\NodeInterface;

class YieldVisitor implements Visitor
{
    public function visit(NodeInterface $node)
    {
        if ($node->isLeaf()) {
            return [$node];
        }

        $yield = [];

        foreach ($node->getChildren() as $child) {
            $yield = \array_merge($yield, $child->accept($this));
        }

        return $yield;
    }
}
