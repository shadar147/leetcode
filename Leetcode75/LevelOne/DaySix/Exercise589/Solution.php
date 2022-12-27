<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DaySix\Exercise589;

use Shadar\Leetcode\Contracts\SolutionContract;
use Shadar\Leetcode\Entities\Node;

/**
 * Given the root of an n-ary tree, return the preorder traversal of its nodes' values.
 * Nary-Tree input serialization is represented in their level order traversal. Each group of children is separated by the null value (See examples)
 */
class Solution implements SolutionContract
{
    /**
     * @param Node|null $root
     * @return array<int>
     */
    public function preorder(?Node $root): array
    {
        if (is_null($root)) {
            return [];
        }

        $result = [$root->val];

        for ($i = 0; $i < count($root->children); $i++) {
            $result = array_merge($result, $this->preorder($root->children[$i]));
        }

        return $result;
    }
}