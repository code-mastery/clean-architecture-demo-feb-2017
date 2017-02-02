<?php
declare(strict_types = 1);

namespace Monsters\CreateMonsterUseCase;

interface CreateMonsterRepository
{
    /**
     * @param Monster $monster
     */
    public function save(Monster $monster);
}