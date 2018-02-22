<?php
namespace App\Repositories\Category;

use App\Repositories\Category\CategoryRepositoryInterface;
use App\Category;

class CategoryRepository implements CategoryRepositoryInterface
{

	protected $category;

	public function __construct(Category $category){

		$this->category = $category;

	}
	/**
	* Get’s a post by it’s ID
	*
	* @param int
	* @return collection
	*/
	public function get($category_id)
	{
			return $this->category->find($category_id);
	}
	/**
	* Get’s all posts.
	*
	* @return mixed
	*/
	public function all()
	{
			return $this->category->all();
	}
	/**
	* Deletes a post.
	*
	* @param int
	*/
	public function delete($category_id)
	{
		$this->category->destroy($category_id);
	}
	/**
	* Updates a post.
	*
	* @param int
	* @param array
	*/
	public function update($category_id, array $category_data)
	{
		$this->category->find($category_id)->update($category_data);
	}
}