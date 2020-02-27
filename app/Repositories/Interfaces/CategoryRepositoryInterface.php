<?php

namespace App\Repositories;

interface CategoryRepositoryInterface
{
    /**
     * Get's a category by it's ID
     *
     * @param int
     */
    public function show($category_id);

    /**
     * Get's all categories.
     *
     * @return mixed
     */
    public function index();

    /**
     * Deletes a category.
     *
     * @param int
     */
    public function delete($category_id);

    /**
     * Updates a category.
     *
     * @param int
     * @param array
     */
    public function update($category_id, array $post_data);
}