<?php

/**
 * @generate-class-entries static
 * @generate-function-entries static
 */

namespace MongoDB\BSON;

final class Document implements \IteratorAggregate, \Serializable, Type
{
    private function __construct() {}

    final static public function fromBSON(string $bson): Document {}

    final static public function fromJSON(string $json): Document {}

#if PHP_VERSION_ID >= 80000
    final static public function fromPHP(array|object $value): Document {}
#else
    /** @param array|object $value */
    final static public function fromPHP($value): Document {}
#endif

#if PHP_VERSION_ID >= 80000
    final public function get(string $key): mixed {}
#else
    /** @return mixed */
    final public function get(string $key) {}
#endif

    final public function getIterator(): Iterator {}

    final public function has(string $key): bool {}

#if PHP_VERSION_ID >= 80000
    final public function toPHP(?array $typeMap = null): array|object {}
#else
    /** @return array|object */
    final public function toPHP(?array $typeMap = null) {}
#endif

    final public function toCanonicalExtendedJSON(): string {}

    final public function toRelaxedExtendedJSON(): string {}

    final public function __toString(): string {}

    final public static function __set_state(array $properties): Document {}

    final public function serialize(): string {}

#if PHP_VERSION_ID >= 80000
    final public function unserialize(string $data): void {}
#else
    /** @param string $serialized */
    final public function unserialize($serialized): void {}
#endif

    final public function __unserialize(array $data): void {}

    final public function __serialize(): array {}
}
