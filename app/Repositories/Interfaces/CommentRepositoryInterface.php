<?php

namespace App\Repositories\Interfaces;

interface CommentRepositoryInterface
{
    /**
     * Get's a comment by it's ID
     *
     * @param int
     */
    public function get($comment_id);

    /**
     * Get's all comment.
     *
     * @return mixed
     */
    public function all();

    /**
     * Deletes a comment.
     *
     * @param inat
     */
    public function delete($comment_id);

    /**
     * Updates a comment.
     *
     * @param int
     * @param array
     */
    public function update($comment_id, array $comment_data);
}
