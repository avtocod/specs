<?php

namespace Avtocod\Specifications\Structures;

use Traversable;

class IdentifierType extends AbstractStructure
{
    /**
     * Type.
     *
     * @var string|null
     */
    protected $type;

    /**
     * Type description.
     *
     * @var string|null
     */
    protected $description;

    /**
     * {@inheritdoc}
     */
    public function toArray()
    {
        return [
            'type'        => $this->type,
            'description' => $this->description,
        ];
    }

    /**
     * Get description.
     *
     * @return null|string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get type.
     *
     * @return null|string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * {@inheritdoc}
     */
    protected function configure($raw_data)
    {
        if (\is_array($raw_data) || $raw_data instanceof Traversable) {
            foreach ($raw_data as $key => $value) {
                switch ($key) {
                    case 'type':
                        $this->type = $value === null
                            ? null
                            : (string) $value;
                        break;

                    case 'description':
                        $this->description = $value === null
                            ? null
                            : (string) $value;
                        break;
                }
            }
        }
    }
}
