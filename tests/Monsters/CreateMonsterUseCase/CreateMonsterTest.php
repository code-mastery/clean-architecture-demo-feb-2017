<?php
declare(strict_types = 1);

namespace Monsters\CreateMonsterUseCase;

use PHPUnit\Framework\TestCase;

class CreateMonsterTest extends TestCase
{
    /**
     * @var CreateMonsterRepository
     */
    private $createMonsterRepository;

    /**
     * @var CreateMonsterUseCase
     */
    private $createMonsterUseCase;

    /**
     * @var CreateMonsterResponse
     */
    private $createMonsterResponse;

    /**
     * @var CreateMonsterRequest
     */
    private $createMonsterRequest;

    public function setUp()
    {
        $this->createMonsterRepository = new CreateMonsterRepositorySpy();
        $this->createMonsterUseCase = new CreateMonsterUseCase($this->createMonsterRepository);
        $this->createMonsterResponse = new CreateMonsterResponse();
        $this->createMonsterRequest = new CreateMonsterRequest();
        $this->createMonsterRequest->id = "12346";
    }

    public function testCheckIdIsSame()
    {
        $this->createMonsterUseCase->handle($this->createMonsterRequest, $this->createMonsterResponse);

        $this->assertEquals("12346", $this->createMonsterResponse->id);
    }

    public function testDatabaseIdIsSameAsRequestId()
    {
        $this->createMonsterUseCase->handle($this->createMonsterRequest, $this->createMonsterResponse);

        $this->assertEquals("12346", $this->createMonsterRepository->getLastMonster()->getId());
    }

    public function testDatabaseIdIsSameAsRequestIdAndMonsterIsSaved()
    {
        $this->createMonsterUseCase->handle($this->createMonsterRequest, $this->createMonsterResponse);

        $this->assertEquals("12346", $this->createMonsterRepository->getLastMonster()->getId());
    }
}
