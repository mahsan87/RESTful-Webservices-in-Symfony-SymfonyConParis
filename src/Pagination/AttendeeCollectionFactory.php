<?php

declare(strict_types=1);

namespace App\Pagination;

use App\Repository\AttendeeRepository;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepositoryInterface;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

final class AttendeeCollectionFactory extends PaginatedCollectionFactory
{
    public function __construct(
        private AttendeeRepository $attendeeRepository,
        private UrlGeneratorInterface $urlGenerator
    ) {
    }

    public function getRepository(): ServiceEntityRepositoryInterface
    {
        return $this->attendeeRepository;
    }

    public function getRouteName(): string
    {
        return 'list_attendee';
    }
}
