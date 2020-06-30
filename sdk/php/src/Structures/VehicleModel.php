<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Structures;

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
     * Get the instance as an array.
     *
     * @return mixed[]
     *
     * @deprecated Will be removed in closest major release
     */
    public function toArray(): array
    {
        return [
            'name'    => $this->name,
            'id'      => $this->id,
            'mark_id' => $this->mark_id,
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
     * {@inheritdoc}
     *
     * @deprecated Will be removed in closest major release
     */
    protected function configure($raw_data)
    {
        if (\is_iterable($raw_data)) {
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
                }
            }
        }
    }
}
