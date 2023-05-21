<?php
require 'InteractsWithTime.php';

class RateLimiter
{
    use InteractsWithTime;

    /**
     * The cache store implementation.
     *
     */
    protected $cache;

    /**
     * Create a new rate limiter instance.
     *
     *
     * @return void
     */
    public function __construct($cache)
    {
        $this->cache = $cache;
    }

    /**
    * Determine if the given key has been "accessed" too many times.
    */
    public function tooManyAttempts($key, $maxAttempts)
    {
        if ($this->attempts($key) >= $maxAttempts) {
            if ($this->cache->has($key.':timer')) {
                return true;
            }

            $this->resetAttempts($key);
        }
        return false;
    }

    /**
    * Increment the counter for a given key for a given decay time.
    */
    public function hit($key, $decaySeconds = 60)
    {
        $this->cache->add(
            $key.':timer', $this->availableAt($decaySeconds), $decaySeconds
        );

        $added = $this->cache->add($key, 0, $decaySeconds);

        $hits = (int) $this->cache->increment($key);

        if (! $added && $hits == 1) {
            $this->cache->put($key, 1, $decaySeconds);
        }
        return $hits;
    }


    /**
    * Get the number of attempts for the given key.
    */
    public function attempts($key)
    {
        return $this->cache->get($key, 0);
    }

    /**
    * Reset the number of attempts for the given key.
    */
    public function resetAttempts($key)
    {
        return $this->cache->forget($key);
    }

    /**
    * Get the number of retries left for the given key.
    */
    public function retriesLeft($key, $maxAttempts)
    {
        $attempts = $this->attempts($key);


        return $maxAttempts - $attempts;
    }

    /**
    * Clear the hits and lockout timer for the given key.
    */
    public function clear($key)
    {
        $this->resetAttempts($key);


        $this->cache->forget($key.':timer');
    }
}
