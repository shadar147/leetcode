<?php

namespace Shadar\Leetcode\Entities;

class Node
{
    public function __construct(
        public int $val = 0,
        public array $children = []
    )
    {}
}