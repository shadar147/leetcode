<?php

namespace Shadar\Leetcode\Entities;

class TreeNode
{
    public function __construct(
        public int $val = 0,
        public ?TreeNode $left = null,
        public ?TreeNode $right = null,
    ) {}
}