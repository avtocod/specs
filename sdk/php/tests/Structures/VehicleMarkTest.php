<?php

namespace Avtocod\Specifications\Tests\Structures;

use Avtocod\Specifications\Structures\VehicleMark;

/**
 * @covers \Avtocod\Specifications\Structures\VehicleMark<extended>
 */
class VehicleMarkTest extends AbstractStructureTestCase
{
    /**
     * @var VehicleMark
     */
    protected $instance;

    /**
     * {@inheritdoc}
     */
    public function testConfigure(): void
    {
        $this->instance = $this->factory($input = [
            'id'   => $description = 'some description',
            'name' => $name = 'some name',
        ]);

        $this->assertEquals($description, $this->instance->getId());
        $this->assertEquals($name, $this->instance->getName());

        $this->assertEquals($input, $this->instance->toArray());
    }

    /**
     * @return void
     */
    public function testConfigureWithNulls(): void
    {
        $this->instance = $this->factory($input = [
            'id'   => null,
            'name' => null,
        ]);

        $this->assertNull($this->instance->getId());
        $this->assertNull($this->instance->getName());
    }

    /**
     * {@inheritdoc}
     */
    public function testArrayAccess(): void
    {
        $this->instance = $this->factory([
            'name' => $name = 'some name',
        ]);

        $this->assertTrue(isset($this->instance['name']));
        $this->assertEquals($name, $this->instance['name']);

        $this->assertFalse(isset($this->instance['bar']));
    }

    /**
     * {@inheritdoc}
     *
     * @return VehicleMark
     */
    protected function factory(...$arguments): VehicleMark
    {
        return new VehicleMark(...$arguments);
    }
}
