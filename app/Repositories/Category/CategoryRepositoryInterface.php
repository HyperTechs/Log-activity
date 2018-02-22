<?php

namespace App\Repositories\Category;

use App\Category;

interface CategoryRepositoryInterface
{

	/**
   * Get's a post by it's ID
   *
   * @param int
   */
	public function get($category_id);
		
	/**
	 * Get's all posts.
	 *
	 * @return mixed
	 */
	public function all();
		
	/**
	 * Deletes a post.
	 *
	 * @param int
	 */
	public function delete($category_id);
		
	/**
	 * Updates a post.
	 *
	 * @param int
	 * @param array
	 */
	public function update($category_id, array $category_data);

}