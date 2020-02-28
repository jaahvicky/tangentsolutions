<?php

namespace App\Repositories;

use App\Comment;
use App\Repositories\Interfaces\CommentRepositoryInterface;

class CommentRepository implements CommentRepositoryInterface
{

    /**
     * Get's a comment by it's ID
     *
     * @param int
     * @return collection
     */
    public function get($comment_id)
    {
        return Comment::find($comment_id);
    }

    /**
     * Get's all comments.
     *
     * @return mixed
     */
    public function all()
    {
        return Comment::all();
    }

    /**
     * Deletes a comment.
     *
     * @param int
     */
    public function delete($category_id)
    {
        Comment::destroy($category_id);
    }

    /**
     * Updates a category.
     *
     * @param int
     * @param array
     */
    public function update($category_id, array $category_data)
    {
        Comment::find($category_id)->update($category_data);
    }
}
