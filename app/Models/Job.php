<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    /**
     * @return array[]
     */
    public static function all(): array
    {
        return [
            [
                'id' => 1,
                'title' => 'Director',
                'salary' => '$50,000'
            ],
            [
                'id' => 2,
                'title' => 'Developer',
                'salary' => '$20,000'
            ],
            [
                'id' => 3,
                'title' => 'Designer',
                'salary' => '$10,000'
            ]
        ];
    }


    /**
     * @param int $id
     * @return array|null
     */
    public static function find(int $id): ?array
    {
        $job = Arr::first(static::all(), fn ($job) => $job['id'] == $id);

        // If job not found, return 404
        if (!$job) abort(404);

        return $job;
    }
}
