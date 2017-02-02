<?php
declare(strict_types = 1);

namespace Monsters\CreateMonsterUseCase;

class Monster
{
    /**
     * @var string
     */
    private $id;

    /**
     * Monster constructor.
     *
     * @param string $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
}
