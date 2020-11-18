<?php
class PostUtility {
	
	public function getUrl() {
		return 'index.php?action=single&idChapter=' . $this->id;
	}

	public function getContent() {
		return '<p>' . substr($this->content, 0, 300) . '...</p>';
	}
}