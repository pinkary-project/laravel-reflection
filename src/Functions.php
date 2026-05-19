<?php

declare(strict_types=1);

if (! function_exists('modelPath')) {

    /**
     * Get the model path.
     *
     * @return string
     */
    function modelPath(): string
    {
        return app()->path('Models'); // @phpstan-ignore-line
    }
}
