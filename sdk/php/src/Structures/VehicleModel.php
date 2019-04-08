<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Structures;

use Traversable;

class VehicleModel extends AbstractStructure
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
     * Vehicle mark unique identifier.
     *
     * @var string|null
     */
    protected $mark_id;

    /**
     * Vehicle type identifier.
     *
     * @var string|null
     */
    protected $vehicle_type;

    /**
     * {@inheritdoc}
     */
    public function toArray(): array
    {
        return [
            'name'         => $this->name,
            'id'           => $this->id,
            'mark_id'      => $this->mark_id,
            'vehicle_type' => $this->vehicle_type,
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
     * Get mark unique identifier.
     *
     * @return null|string
     */
    public function getMarkId()
    {
        return $this->mark_id;
    }

    /**
     * Get vehicle type identifier.
     *
     * @return null|string
     */
    public function getVehicleType()
    {
        return $this->vehicle_type;
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

                    case 'mark_id':
                        $this->mark_id = $value === null
                            ? null
                            : (string) $value;
                        break;
                    case 'vehicle_type':
                        $this->vehicle_type = $value === null
                            ? null
                            : (string) $value;
                        break;
                }
            }
        }
    }
}
