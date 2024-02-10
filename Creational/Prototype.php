<?php

class Post
{
	public function __construct(
		public string $title,
		public string $description,
		public string $state = 'ready'
	) {}

	public function __clone()
	{
		$this->title = 'Copy of ' . $this->title;
		$this->description = 'Copy of ' . $this->description;
		$this->state = 'draft';
	}
}

$post = new Post('Post Title', 'Post Description');
$clonedPost = clone $post;
print_r($clonedPost);
