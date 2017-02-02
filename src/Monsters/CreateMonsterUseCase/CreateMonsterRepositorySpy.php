<?php
declare(strict_types = 1);

namespace Monsters\CreateMonsterUseCase;

class CreateMonsterRepositorySpy implements CreateMonsterRepository
{
    /**
     * @var Monster
     */
    private $monster;

    /**
     * @return Monster
     */
    public function getLastMonster()
    {
        return $this->monster;
    }

    /**
     * @param Monster $monster
     */
    public function save(Monster $monster)
    {
        $this->monster = $monster;
    }
}
