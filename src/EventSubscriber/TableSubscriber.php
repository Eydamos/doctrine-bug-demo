<?php

declare(strict_types=1);

namespace App\EventSubscriber;

use App\Entity\ConnA\Table;
use App\Repository\ConnZ\LampRepository;
use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use Doctrine\ORM\Events;

/**
 * Class LampSubscriber
 */
class TableSubscriber implements EventSubscriber
{
    public function __construct(private LampRepository $lampRepository)
    {
    }

    /**
     * @inheritDoc
     */
    public function getSubscribedEvents(): array
    {
        return [
            Events::prePersist,
        ];
    }

    /**
     * @param \Doctrine\ORM\Event\LifecycleEventArgs $eventArgs
     */
    public function prePersist(LifecycleEventArgs $eventArgs): void
    {
        $entity = $eventArgs->getObject();
        if (!$entity instanceof Table) {
            return;
        }
        // do something with a Lamp via LampRepository
    }
}
