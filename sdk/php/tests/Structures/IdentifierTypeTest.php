<?php

namespace Avtocod\Specifications\Tests\Structures;

use Avtocod\Specifications\Structures\IdentifierType;

/**
 * @covers \Avtocod\Specifications\Structures\IdentifierType<extended>
 */
class IdentifierTypeTest extends AbstractStructureTestCase
{
    /**
     * @var IdentifierType
     */
    protected $instance;

    /**
     * {@inheritdoc}
     */
    public function testConfigure(): void
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
    public function testConfigureWithNulls(): void
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
    public function testArrayAccess(): void
    {
        $this->instance = $this->factory([
            'type' => $type = 'some type',
        ]);

        $this->assertTrue(isset($this->instance['type']));
        $this->assertEquals($type, $this->instance['type']);

        $this->assertFalse(isset($this->instance['bar']));
    }

    /**
     * {@inheritdoc}
     *
     * @return IdentifierType
     */
    protected function factory(...$arguments): IdentifierType
    {
        return new IdentifierType(...$arguments);
    }
}
