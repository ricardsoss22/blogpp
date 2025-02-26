<?php
require "Database.php";

class BlogController {
    public function index() {
      $db = new Database();
$posts = $db->query("SELECT * FROM posts")->fetchAll();

        require "views/blog/index.view.php";
      }         
      
}
  