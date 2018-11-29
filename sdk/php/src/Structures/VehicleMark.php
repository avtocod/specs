<?php

declare(strict_types = 1);

namespace Avtocod\Specifications\Structures;

use Traversable;

class VehicleMark extends AbstractStructure
{
    /**
     * Name.
     *
     * @var string|null
     */
    protected $name;

    /**
     * Unique identifier.
     *
     * @var string|null
     */
    protected $id;

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'id'   => $this->id,
        ];
    }

    /**
     * Get unique identifier.
     *
     * @return null|string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get name.
     *
     * @return null|string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure($raw_data)
    {
        if (\is_array($raw_data) || $raw_data instanceof Traversable) {
            foreach ($raw_data as $key => $value) {
                switch ($key) {
                    case 'name':
                        $this->name = $value === null
                            ? null
                            : (string) $value;
                        break;

                    case 'id':
                        $this->id = $value === null
                            ? null
                            : (string) $value;
                        break;
                }
            }
        }
    }
}
