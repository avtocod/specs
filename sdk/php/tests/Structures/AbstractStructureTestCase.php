<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Tests\Structures;

use LogicException;
use Avtocod\Specifications\Tests\AbstractTestCase;
use Avtocod\Specifications\Structures\AbstractStructure;

/**
 * @coversNothing
 */
abstract class AbstractStructureTestCase extends AbstractTestCase
{
    /**
     * @var AbstractStructure
     */
    protected $instance;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        parent::setUp();

        $this->instance = $this->factory();
    }

    /**
     * Test to array converting without any data.
     */
    public function testBasicToArray(): void
    {
        $this->assertIsArray($this->instance->toArray());
        $this->assertIsString($this->instance->toJson());
    }

    /**
     * Test object array access.
     *
     * @return void
     */
    abstract public function testArrayAccess(): void;

    /**
     * @return void
     */
    public function testArrayAccessExceptionOnChanging(): void
    {
        $this->expectException(LogicException::class);

        $this->instance['foo'] = 'bar';
    }

    /**
     * @return void
     */
    public function testIterator(): void
    {
        $this->assertInstanceOf(\ArrayIterator::class, $this->instance->getIterator());

        foreach (\array_keys($this->instance->toArray()) as $array_key) {
            $found        = false;
            $loop_counter = 0;

            foreach ($this->instance as $key => $value) {
                $loop_counter++;

                if ($key === $array_key) {
                    $found = true;

                    break;
                }
            }

            $this->assertGreaterThanOrEqual(1, $loop_counter);

            $this->assertTrue($found);
        }
    }

    /**
     * @return void
     */
    public function testArrayAccessExceptionOnUnset(): void
    {
        $this->expectException(LogicException::class);

        unset($this->instance['foo']);
    }

    /**
     * Test self-configuration method.
     *
     * @return void
     */
    abstract public function testConfigure(): void;

    /**
     * Tested instance factory.
     *
     * @param mixed ...$arguments
     *
     * @return mixed
     */
    abstract protected function factory(...$arguments);
}
