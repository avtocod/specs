<?php

declare(strict_types=1);

namespace Avtocod\Specifications\Structures;

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
     * Get the instance as an array.
     *
     * @return mixed[]
     *
     * @deprecated Will be removed in closest major release
     */
    public function toArray(): array
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
     *
     * @deprecated Will be removed in closest major release
     */
    protected function configure($raw_data)
    {
        if (\is_iterable($raw_data)) {
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
