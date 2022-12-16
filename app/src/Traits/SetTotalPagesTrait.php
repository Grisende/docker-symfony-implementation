<?php

namespace App\Traits;

trait SetTotalPagesTrait
{
    public function setTotalPages(int $totalResult, int $limit, int $after, ?string $sort = null, ?int $before = null)
    {
        $after = $after + 1;
        $total = floor($totalResult / $limit);

        $result['after'] = $after > $total ? null : $after;
        $result['sort'] = $sort;
        $result['before'] = $before;
        $result['total'] = $total;

        return $result;
    }
}