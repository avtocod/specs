<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Structures;

use Traversable;

class VehicleModelType extends AbstractStructure
{
    /**
     * Vehicle types models.
     *
     * @var string
     */
    const VEHICLE_TYPE_AGRICULTURAL = 'agricultural';
    const VEHICLE_TYPE_ARTIC        = 'artic';
    const VEHICLE_TYPE_ATV          = 'atv';
    const VEHICLE_TYPE_AUTOLOADER   = 'autoloader';
    const VEHICLE_TYPE_BULLDOZER    = 'bulldozer';
    const VEHICLE_TYPE_BUS          = 'bus';
    const VEHICLE_TYPE_CAR          = 'car';
    const VEHICLE_TYPE_CONSTRUCTION = 'construction';
    const VEHICLE_TYPE_CRANE        = 'crane';
    const VEHICLE_TYPE_SELF_LOADER  = 'self_loader';
    const VEHICLE_TYPE_DREDGE       = 'dredge';
    const VEHICLE_TYPE_LIGHT_TRUCK  = 'light_truck';
    const VEHICLE_TYPE_MOTORCYCLE   = 'motorcycle';
    const VEHICLE_TYPE_MUNICIPAL    = 'municipal';
    const VEHICLE_TYPE_SCOOTER      = 'scooter';
    const VEHICLE_TYPE_SNOWMOBILE   = 'snowmobile';
    const VEHICLE_TYPE_TRAILER      = 'trailer';
    const VEHICLE_TYPE_TRUCK        = 'truck';

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
     * Get name.
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Get vehicle type identifier.
     *
     * @return string|null
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the instance as an array.
     *
     * @return array
     */
    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'id'   => $this->id,
        ];
    }

    /**
     * Configure itself.
     *
     * @param mixed|null $raw_data
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
