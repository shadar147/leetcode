<?php

namespace Shadar\Leetcode\Entities;

class ListNode
{
    public function __construct(
        public int $val = 0,
        public ?ListNode $next = null
    ) {}
}