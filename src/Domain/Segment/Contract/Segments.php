<?php
declare(strict_types=1);

namespace App\Domain\Segment\Contract;


use App\Domain\Segment\Segment;

interface Segments
{
    /**
     * @param Segment $section
     */
    public function add(Segment $section): void;

    /**
     * @param string $uid
     * @return Segment|null
     */
    public function find(string $uid): ?Segment;

    /**
     * @param string $uid
     */
    public function remove(string $uid): void;

    /**
     * @return array|Segment[]
     */
    public function all(): array;
}