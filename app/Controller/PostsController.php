<?php 
class PostsController extends AppController {
	public $helpers = array('Html', 'Form');

	public function index() {
	}
	
	public function testtest12() {
		echo "Nothing";
		die;
	}

	public function view($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
	}
}