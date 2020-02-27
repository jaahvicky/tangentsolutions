<?php

namespace App\Repositories;

use App\Category;

class CategoryRepository implements CategoryRepositoryInterface
{

    /**
     * Get's a category by it's ID
     *
     * @param int
     * @return collection
     */
    public function show($category_id)
    {
        return Category::find($category_id);
    }

    /**
     * Get's all categories.
     *
     * @return mixed
     */
    public function index()
    {
        return Category::index();
    }

    /**
     * Deletes a category.
     *
     * @param int
     */
    public function delete($category_id)
    {
        Category::destroy($category_id);
    }

    /**
     * Updates a category.
     *
     * @param int
     * @param array
     */
    public function update($category_id, array $category_data)
    {
        Category::find($category_id)->update($category_data);
    }

}
