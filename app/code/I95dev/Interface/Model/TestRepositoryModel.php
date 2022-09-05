<?php
namespace I95dev\Interface\Model;
class TestRepositoryModel implements \Webkul\Hello\Api\TestRepositoryInterface
{
    /**
     * Save test data.
     */
    public function save(\I95dev\Interface\Api\Data\TestInterface $test)
    {
        //your code
    }
    /**
     * Retrieve test data.
     */
    public function getById($testId)
    {
        //your code
    }
    /**
     * Delete test.
     */
    public function delete(\I95dev\Interface\Api\Data\TestInterface $test)
    {
        //your code
    }
    /**
     * Delete test by test ID.
     */
    public function deleteById($testId)
    {
        //your code
    }
}

