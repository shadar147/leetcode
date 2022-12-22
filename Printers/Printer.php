<?php

namespace Shadar\Leetcode\Printers;

use Shadar\Leetcode\Contracts\Example;
use Shadar\Leetcode\{DataStructure, Leetcode75};
use Shadar\Leetcode\Traits\Arrayable;

class Printer
{
    use Arrayable;

    private array $exercises = [
        'Data Structure' => [
            'Level 1' => [
                'Day 1' => [
                    '53. Maximum Subarray' => DataStructure\LevelOne\DayOne\Exercise53\Example::class,
                    '217. Contains Duplicate' => DataStructure\LevelOne\DayOne\Exercise217\Example::class
                ]
            ]
        ],
        'Leetcode75' => [
            'Level 1' => [
                'Day 1' => [
                    '1480. Running Sum of 1d Array ' => Leetcode75\LevelOne\DayOne\Exercise1480\Example::class,
                    '724. Find Pivot Index' => Leetcode75\LevelOne\DayOne\Exercise724\Example::class
                ]
            ]
        ]
    ];

    private array $steps = [
        'chooseCourse',
        'chooseLevel',
        'chooseDay',
        'chooseExercise',
    ];

    private string $course;
    private string $level;
    private string $day;
    private string $exercise;

    public function start(): ?Example
    {
        foreach ($this->steps as $step) {
            $this->{$step}();
        }
        $exerciseClass = $this->getExercise();

        return is_null($exerciseClass) ? null : new $exerciseClass;
    }

    private function chooseCourse(): void
    {
        $this->course = $this->chooseEntity($this->exercises, 'a course');
    }

    private function chooseLevel(): void
    {
        $this->level = $this->chooseEntity($this->getLevels(), 'a level');
    }

    private function chooseDay(): void
    {
        $this->day = $this->chooseEntity($this->getDays(), 'a day');
    }

    private function chooseExercise(): void
    {
        $this->exercise = $this->chooseEntity($this->getExercises(), 'an exercise');
    }

    private function chooseEntity(array $entities, string $entity): string|int
    {
        $keys = array_keys($entities);
        echo "Choose {$entity} by enter a number." . PHP_EOL;
        $this->printArray($keys);
        $index = readline('Your choice: ');

        return $keys[$index - 1];
    }

    private function getLevels(): array
    {
        return empty($this->course) ? [] : $this->exercises[$this->course];
    }

    private function getDays(): array
    {
        return empty($this->level) ? [] : $this->getLevels()[$this->level];
    }

    private function getExercises(): array
    {
        return empty($this->day) ? [] : $this->getDays()[$this->day];
    }

    private function getExercise(): ?string
    {
        return empty($this->exercise) ? null : $this->getExercises()[$this->exercise];
    }
}
