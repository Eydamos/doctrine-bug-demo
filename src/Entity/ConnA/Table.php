<?php

declare(strict_types=1);

namespace App\Entity\ConnA;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class Lamp
 *
 * @ORM\Entity()
 */
class Table
{
    /**
     * @var int
     *
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(name="id", type="integer", options={"unsigned":true})
     */
    private int $id;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}
