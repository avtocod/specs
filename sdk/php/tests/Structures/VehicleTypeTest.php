<?php

namespace Avtocod\Specifications\Tests\Structures;

use Avtocod\Specifications\Structures\VehicleType;

/**
 * @covers \Avtocod\Specifications\Structures\VehicleType<extended>
 */
class VehicleTypeTest extends AbstractStructureTestCase
{
    /**
     * @var VehicleType
     */
    protected $instance;

    /**
     * Test object array access.
     *
     * @return void
     */
    public function testArrayAccess(): void
    {
        $this->instance = $this->factory($input = [
            'id'           => $id_type = 'some id',
            'name'         => $name = 'some name',
            'alias'        => $alias = 'some alias',
        ]);

        $this->assertEquals($id_type, $this->instance->getId());
        $this->assertEquals($name, $this->instance->getName());
        $this->assertEquals($alias, $this->instance->getAlias());

        $this->assertEquals($input, $this->instance->toArray());
    }

    /**
     * Test self-configuration method.
     *
     * @return void
     */
    public function testConfigure(): void
    {
        $this->instance = $this->factory($input = [
            'id'           => null,
            'name'         => null,
            'alias'        => null,
        ]);

        $this->assertNull($this->instance->getId());
        $this->assertNull($this->instance->getName());
        $this->assertNull($this->instance->getAlias());
    }

    /**
     * Tested instance factory.
     *
     * @param mixed ...$arguments
     *
     * @return mixed
     */
    protected function factory(...$arguments)
    {
        return new VehicleType(...$arguments);
    }
}
