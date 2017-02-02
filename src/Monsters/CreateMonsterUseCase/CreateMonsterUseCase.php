<?php
declare(strict_types = 1);

namespace Monsters\CreateMonsterUseCase;

class CreateMonsterUseCase
{
    /**
     * @var CreateMonsterRepository
     */
    private $createMonsterRepository;

    /**
     * CreateMonsterUseCase constructor.
     *
     * @param $createMonsterRepository CreateMonsterRepository
     */
    public function __construct(CreateMonsterRepository $createMonsterRepository)
    {
        $this->createMonsterRepository = $createMonsterRepository;
    }

    /**
     * @param $createMonsterRequest CreateMonsterRequest
     * @param $createMonsterResponse CreateMonsterResponse
     */
    public function handle(CreateMonsterRequest $createMonsterRequest, CreateMonsterResponse $createMonsterResponse)
    {
        $createMonsterResponse->id = $createMonsterRequest->id;
        $monster = new Monster($createMonsterRequest->id);
        $this->createMonsterRepository->save($monster);
    }
}
