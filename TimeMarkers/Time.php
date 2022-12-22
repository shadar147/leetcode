<?php

namespace Shadar\Leetcode\TimeMarkers;

class Time
{
    private array $times = [];
    private float $startTime;

    public function getTimes(int $precision = 4): array
    {
        return array_map(fn(float $time) => round($time, $precision), $this->times);
    }

    public function startTime(): void
    {
        $this->startTime = microtime(true);
    }

    public function stopTime(): void
    {
        if ($this->startTime) {
            $this->addTime(microtime(true) - $this->startTime);
            $this->resetStartTime();
        }
    }

    private function resetStartTime(): void
    {
        unset($this->startTime);
    }

    private function addTime(float $time): void
    {
        $this->times[] = $time;
    }
}