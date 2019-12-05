<?php

namespace Avtocod\Specifications\Tests\Structures;

use Avtocod\Specifications\Structures\VehicleModel;

/**
 * @covers \Avtocod\Specifications\Structures\VehicleModel<extended>
 */
class VehicleModelTest extends AbstractStructureTestCase
{
    /**
     * @var VehicleModel
     */
    protected $instance;

    /**
     * {@inheritdoc}
     */
    public function testConfigure(): void
    {
        $this->instance = $this->factory($input = [
            'id'      => $description = 'some description',
            'name'    => $name = 'some name',
            'mark_id' => $mark_id = 'some mark id',
        ]);

        $this->assertEquals($description, $this->instance->getId());
        $this->assertEquals($name, $this->instance->getName());
        $this->assertEquals($mark_id, $this->instance->getMarkId());

        $this->assertEquals($input, $this->instance->toArray());
    }

    /**
     * @return void
     */
    public function testConfigureWithNulls(): void
    {
        $this->instance = $this->factory($input = [
            'id'      => null,
            'name'    => null,
            'mark_id' => null,
        ]);

        $this->assertNull($this->instance->getId());
        $this->assertNull($this->instance->getName());
        $this->assertNull($this->instance->getMarkId());
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
     * @return VehicleModel
     */
    protected function factory(...$arguments): VehicleModel
    {
        return new VehicleModel(...$arguments);
    }
}
