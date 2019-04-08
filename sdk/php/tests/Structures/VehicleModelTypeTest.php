<?php

namespace Avtocod\Specifications\Tests\Structures;

use Avtocod\Specifications\Structures\VehicleModelType;

class VehicleModelTypeTest extends AbstractStructureTestCase
{
    /**
     * @var VehicleModelType
     */
    protected $instance;

    /**
     * Test object array access.
     *
     * @return void
     */
    public function testArrayAccess()
    {
        $this->instance = $this->factory($input = [
            'id'           => $id_type = 'some id',
            'name'         => $name = 'some name',
        ]);

        $this->assertEquals($id_type, $this->instance->getId());
        $this->assertEquals($name, $this->instance->getName());

        $this->assertEquals($input, $this->instance->toArray());
    }

    /**
     * Test self-configuration method.
     *
     * @return void
     */
    public function testConfigure()
    {
        $this->instance = $this->factory($input = [
            'id'           => null,
            'name'         => null,
        ]);

        $this->assertNull($this->instance->getId());
        $this->assertNull($this->instance->getName());
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
        return new VehicleModelType(...$arguments);
    }
}
