<?php
namespace I95dev\Interface\Api;
interface TestRepositoryInterface
{
    /**
     * Create or update a data
     */
    public function save(\I95dev\Interface\Api\Data\TestInterface $test);
    public function getById($testId);
    /**
     * Delete test.
     */
    public function delete(\I95dev\Interface\Api\Data\TestInterface $test);
    /**
     * Delete test by ID.
     */
    public function deleteById($testId);
}
