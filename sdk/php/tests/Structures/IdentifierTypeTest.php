<?php

namespace Avtocod\Specifications\Tests\Structures;

use Avtocod\Specifications\Structures\IdentifierType;

class IdentifierTypeTest extends AbstractStructureTestCase
{
    /**
     * @var IdentifierType
     */
    protected $instance;

    /**
     * {@inheritdoc}
     *
     * @return IdentifierType
     */
    protected function factory(...$arguments)
    {
        return new IdentifierType(...$arguments);
    }

    /**
     * {@inheritdoc}
     */
    public function testConfigure()
    {
        $this->instance = $this->factory($input = [
            'description' => $description = 'some description',
            'type'        => $type = 'some type',
        ]);

        $this->assertEquals($description, $this->instance->getDescription());
        $this->assertEquals($type, $this->instance->getType());

        $this->assertEquals($input, $this->instance->toArray());
    }

    /**
     * @return void
     */
    public function testConfigureWithNulls()
    {
        $this->instance = $this->factory($input = [
            'description' => null,
            'type'        => null,
        ]);

        $this->assertNull($this->instance->getDescription());
        $this->assertNull($this->instance->getType());
    }

    /**
     * {@inheritdoc}
     */
    public function testArrayAccess()
    {
        $this->instance = $this->factory([
            'type' => $type = 'some type',
        ]);

        $this->assertTrue(isset($this->instance['type']));
        $this->assertEquals($type, $this->instance['type']);

        $this->assertFalse(isset($this->instance['bar']));
    }
}
