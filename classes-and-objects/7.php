<?php

/**
 * The questions in this exercise all deal with a class Dog that you have to program from scratch.
 *
 * Create a class Dog. Dogs should have a name, and a sex.
 * Make a class DogTest with a Main method in which you create the following Dogs:
 * Max, male
 * Rocky, male
 * Sparky, male
 * Buster, male
 * Sam, male
 * Lady, female
 * Molly, female
 * Coco, female
 * Change the Dog class so that each dog has a mother and a father.
 * Add to the main method in DogTest, so that:
 * Max has Lady as mother, and Rocky as father
 * Coco has Molly as mother, and Buster as father
 * Rocky has Molly as mother, and Sam as father
 * Buster has Lady as mother, and Sparky as father
 * Change the dog class to include a method fathersName that return the name of the father.
 * If the father reference is null, return "Unknown". Test in the DogTest main method that it works.
 * referenceToCoco.FathersName() returns the string "Buster"
 * referenceToSparky.FathersName() returns the string "Unknown"
 * Change the dog class to include a method boolean HasSameMotherAs(Dog otherDog).
 * The method should return true on the call
 * referenceToCoco.HasSameMotherAs(referenceToRocky). Show that the new method works in the DogTest main method.
 */
class Dog
{
    private string $name;
    private string $sex;
    public $mother;
    public $father;

    public function __construct(string $name, string $sex, $mother = null, $father = null)
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function fathersName(): string
    {
        if (!$this->father) {
            return "Unknown";
        }
        return $this->father->name;
    }

    public function hasSameMotherAs(Dog $otherDog): bool
    {
        if ($this->mother->name === $otherDog->mother->name)
        {
            return true;
        }
        return false;
    }
}

class DogTest
{
    public static function main()
    {
        // Create dogs
        $max = new Dog("Max", "male");
        $rocky = new Dog("Rocky", "male");
        $sparky = new Dog("Sparky", "male");
        $buster = new Dog("Buster", "male");
        $sam = new Dog("Sam", "male");
        $lady = new Dog("Lady", "female");
        $molly = new Dog("Molly", "female");
        $coco = new Dog("Coco", "female");

        // Set mother and father
        $max->mother = $lady;
        $max->father = $rocky;
        $coco->mother = $molly;
        $coco->father = $buster;
        $rocky->mother = $molly;
        $rocky->father = $sam;
        $buster->mother = $lady;
        $buster->father = $sparky;

        // Tests
        echo $coco->fathersName() . "\n";
        echo $sparky->fathersName() . "\n";
        echo $coco->hasSameMotherAs($rocky) ? "true\n" : "false\n";
        echo $coco->hasSameMotherAs($buster) ? "true\n" : "false\n";
    }
}

DogTest::main();