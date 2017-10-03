<?php
/**
 * @see       https://github.com/zendframework/zend-expressive-session for the canonical source repository
 * @copyright Copyright (c) 2017 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   https://github.com/zendframework/zend-expressive-session/blob/master/LICENSE.md New BSD License
 */

namespace Zend\Expressive\Session;

/**
 * Interface describing basic storage capabilities for a session or session
 * segment. Note that it deals only with data storage and serialization.
 */
interface SessionDataInterface
{
    /**
     * Serialize the session data to an array for storage purposes.
     */
    public function toArray() : array;

    /**
     * Retrieve a value from the session.
     *
     * @param mixed $default Default value to return if $name does not exist.
     * @return mixed
     */
    public function get(string $name, $default = null);

    /**
     * Set a value within the session.
     *
     * Values MUST be serializable in any format; we recommend ensuring the
     * values are JSON serializable for greatest portability.
     *
     * @param mixed $value
     */
    public function set(string $name, $value) : void;

    /**
     * Remove a value from the session.
     */
    public function unset(string $name) : void;

    /**
     * Clear all values.
     */
    public function clear() : void;

    /**
     * Does the session contain changes? If not, the middleware handling
     * session persistence may not need to do more work.
     */
    public function hasChanged() : bool;
}
