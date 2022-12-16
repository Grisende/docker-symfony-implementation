<?php

namespace App\Presenter;

class HashPresenter
{
    public function presentBadges(?array $hashes, array $pagination = []): array
    {
        $hashesToPresent = [
            'after' => $pagination['after'] ?? null,
            'sort' => $pagination['sort'] ?? null,
            'before' => $pagination['before'] ?? null,
            'total' => $pagination['total'] ?? null,
            'hashes' => [],
        ];

        if (empty($hashes)) {
            return $hashesToPresent;
        }

        foreach ($hashes as $key => $hash) {
            $hashesToPresent['hash'][$key] = [
                'batch_timestamp' => $hash['batchTimestamp']->format('Y-m-d H:i:s'),
                'block_number' => $hash['blockNumber'],
                'input_string' => $hash['inputString'],
                'key_matched' => $hash['keyMatched'],
            ];
        }

        return $hashesToPresent;
    }
}