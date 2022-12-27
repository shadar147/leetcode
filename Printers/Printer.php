<?php

namespace Shadar\Leetcode\Printers;

use Shadar\Leetcode\Contracts\ExampleContract;
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

    public function start(): ?ExampleContract
    {
        $this->chooseStructure();

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

    private function getExample(): ?ExampleContract
    {
        return $this->structure->getExample();
    }
}
