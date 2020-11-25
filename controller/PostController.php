<?php
class PostController
{
	public function number_Post()
	{
		$postmanager = new PostManager();
		
		$result = $postmanager->getNumberPost();
		
		return $result;
	}

	public function getUrl() {
		return 'index.php?action=single&idChapter=' . $this->id;
	}

	public function getContent() {
		return substr($this->content, 0, 300) . '...';
	}
}