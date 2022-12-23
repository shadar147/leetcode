<?php

namespace Shadar\Leetcode\Printers;

use Shadar\Leetcode\Contracts\Example;
use Shadar\Leetcode\Abstract\AbstractStructure;
use Shadar\Leetcode\Printers\Structures;
use Shadar\Leetcode\Traits\Arrayable;

class Printer
{
    use Arrayable;

    private array $structures = [
        'Data Structure' => Structures\DataStructureStructure::class,
        'Exercises' => Structures\ExercisesStructure::class,
        'Leetcode75' => Structures\Leetcode75Structure::class
    ];

    private AbstractStructure $structure;
    private string $level;
    private string $day;
    private string $exercise;

    public function start(): ?Example
    {
        $this->chooseStructure();

        if (!in_array('chooseExample', $this->structure->getSteps())) {
            return null;
        }

        foreach ($this->structure->getSteps() as $step) {
            if (!method_exists($this->structure::class, $step)) {
                return null;
            }

            $this->structure->{$step}();
        }

        return $this->getExample();
    }

    private function chooseStructure(): void
    {
        $structuresKeys = array_keys($this->structures);
        echo "Choose a structure by enter a number." . PHP_EOL;
        $this->printArray($structuresKeys);
        $structureKey = readline('Your choice: ');
        $structureClass = $structuresKeys[$structureKey - 1];

        $this->structure = new $this->structures[$structureClass];
    }

    private function getExample(): ?Example
    {
        return $this->structure->getExample();
    }
}
