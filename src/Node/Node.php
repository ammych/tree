<?php
namespace Tree\Node;

class Node implements NodeInterface
{
    use NodeTrait;

    /**
     * @param mixed           $value
     * @param NodeInterface[] $children
     */
    public function __construct($value = null, array $children = [])
    {
        $this->setValue($value);

        if ([] === $children) {
            return;
        }

        $this->setChildren($children);
    }
}
