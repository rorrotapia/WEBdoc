<?php


namespace App\DataPersister;


use ApiPlatform\Core\DataPersister\DataPersisterInterface;
use App\Entity\TabResultats;

class PostPersister implements DataPersisterInterface
{
    public function supports($data): bool
    {
        return $data instanceof TabResultats;
    }

    public function persist($data)
    {
        return $data;
    }

    public function remove($data)
    {
        // TODO: Implement remove() method.
    }
}