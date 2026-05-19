<?php

declare(strict_types=1);

namespace PinkaryProject\LaravelReflection;

/**
 * @internal
 */
final readonly class Extend
{
    /**
     * Create a new Extend instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the models.
     *
     * @return array<int, mixed>
     */
    public function models(): array
    {
        $models = type(glob(modelPath().'/*.php'))->asArray();

        return collect($models)
            ->map(fn ($file) => 'App\Models\\'.basename($file, '.php'))
            ->toArray();
    }
}
