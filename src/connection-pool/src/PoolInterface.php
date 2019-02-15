<?php declare(strict_types=1);


namespace Swoft\Connection\Pool;

/**
 * Class PoolInterface
 *
 * @since 2.0
 */
interface PoolInterface
{
    /**
     * Create connection
     *
     * @return ConnectionInterface
     */
    public function createConnection(): ConnectionInterface;

    /**
     * Get connection from pool
     *
     * @return ConnectionInterface
     */
    public function getConnection(): ConnectionInterface;

    /**
     * Release connection to pool
     *
     * @param ConnectionInterface $connection
     */
    public function release(ConnectionInterface $connection): void;
}