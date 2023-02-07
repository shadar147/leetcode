<?php

namespace Shadar\Leetcode\Leetcode75\LevelOne\DaySix\Exercise102;

use Shadar\Leetcode\Contracts\SolutionContract;
use Shadar\Leetcode\Entities\TreeNode;

class Solution implements SolutionContract
{
    /**
     * @param TreeNode|null $root
     * @return array<array<int>>
     */
    public function levelOrder(?TreeNode $root): array
    {
        if (is_null($root)) {
            return [];
        }

        $result = [$root->val];

        $result[] = array_filter([$root->left?->val, $root->right?->val]);

        $result[] = array_filter([$root->left?->left?->val, $root->left?->right->val, $root->right?->left?->val, $root->right?->right?->val]);

        return $result;
    }
}