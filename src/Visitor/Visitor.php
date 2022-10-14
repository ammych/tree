<?php


namespace Tree\Visitor;

use Tree\Node\NodeInterface;

/**
 * Visitor interface for Nodes.
 *
 */
interface Visitor
{
    /**
     * @return mixed
     */
    public function visit(NodeInterface $node);
}
