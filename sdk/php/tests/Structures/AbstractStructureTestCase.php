<?php

namespace Avtocod\Specifications\Tests\Structures;

use LogicException;
use Avtocod\Specifications\Structures\AbstractStructure;
use Avtocod\Specifications\Tests\AbstractTestCase;

abstract class AbstractStructureTestCase extends AbstractTestCase
{
    /**
     * @var AbstractStructure
     */
    protected $instance;

    /**
     * {@inheritdoc}
     */
    protected function setUp()
    {
        parent::setUp();

        $this->instance = $this->factory();
    }

    /**
     * Test to array converting without any data.
     */
    public function testBasicToArray()
    {
        $this->assertInternalType('array', $this->instance->toArray());
        $this->assertInternalType('string', $this->instance->toJson());
    }

    /**
     * Test object array access.
     *
     * @return void
     */
    abstract public function testArrayAccess();

    /**
     * @return void
     */
    public function testArrayAccessExceptionOnChanging()
    {
        $this->expectException(LogicException::class);

        $this->instance['foo'] = 'bar';
    }

    /**
     * @return void
     */
    public function testIterator()
    {
        $this->assertInstanceOf(\ArrayIterator::class, $this->instance->getIterator());


        foreach (\array_keys($this->instance->toArray()) as $array_key) {
            $found = false;
            $loop_counter = 0;

            foreach ($this->instance as $key => $value) {
                ++$loop_counter;

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
    public function testArrayAccessExceptionOnUnset()
    {
        $this->expectException(LogicException::class);

        unset($this->instance['foo']);
    }

    /**
     * Tested instance factory.
     *
     * @param mixed ...$arguments
     *
     * @return mixed
     */
    abstract protected function factory(...$arguments);

    /**
     * Test self-configuration method.
     *
     * @return void
     */
    abstract public function testConfigure();
}
