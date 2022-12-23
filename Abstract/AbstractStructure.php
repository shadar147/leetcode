<?php

namespace Shadar\Leetcode\Abstract;

use Shadar\Leetcode\Traits\Arrayable;

abstract class AbstractStructure
{
    use Arrayable;

    protected AbstractStepper $stepper;
    protected array $content;
    protected string $level;
    protected string $day;
    protected string $example;

    public function getSteps(): array
    {
        return $this->stepper->getSteps();
    }

    public function getExample(): ?Example
    {
        if (empty($this->example)) {
            return null;
        }

        $exampleClass = $this->getExamples()[$this->example];

        return new $exampleClass;
    }

    public function chooseLevel(): void
    {
        $this->level = $this->chooseEntity(array_keys($this->getContent()), 'a level');
    }

    public function chooseDay(): void
    {
        $this->day = $this->chooseEntity(array_keys($this->getDays()), 'a day');
    }

    public function chooseExample(): void
    {
        $this->example = $this->chooseEntity(array_keys($this->getExamples()), 'an example');
    }

    protected function chooseEntity(array $entities, string $entity): string|int
    {
        echo "Choose {$entity} by enter a number." . PHP_EOL;
        $this->printArray($entities);
        $index = readline('Your choice: ');

        return $entities[$index - 1];
    }

    protected function getContent(): array
    {
        return $this->content;
    }

    protected function getDays(): array
    {
        return empty($this->level) ? [] : $this->getContent()[$this->level];
    }

    protected function getExamples(): array
    {
        return empty($this->day) ? [] : $this->getDays()[$this->day];
    }
}