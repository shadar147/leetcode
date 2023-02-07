<?php

namespace Shadar\Leetcode\Abstract;

use Shadar\Leetcode\Entities\TreeNode;

abstract class TreeNodeAbstractExample extends AbstractExample
{
    protected function createTree(array $array): ?TreeNode
    {
        if (empty($array)) {
            return null;
        }

        $root = new TreeNode($array[0]);
        $left = $this->createTree($array[1]);
        $right = $this->createTree($array[2]);
        $root->left = $left;
        $root->right = $right;
        return $root;
    }
}