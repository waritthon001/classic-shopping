<?php 
/* * * * * * * * * * * * * * *
* Returns all published posts
* * * * * * * * * * * * * * */
function getScales() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT distinct productScale FROM products";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}
function getVendors() {
	// use global $conn object in function
	global $conn;
	$sql = "SELECT distinct productVendor FROM products";
	$result = mysqli_query($conn, $sql);
	// fetch all posts as an associative array called $posts
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $posts;
}
/* * * * * * * * * * * * * * *
* Returns a single post
* * * * * * * * * * * * * * */
function getPost($page){
	global $conn;
	// Get single post slug
	$post_page = $_GET['page'];
	$sql = "SELECT * FROM products WHERE productScale='$post_page' || productVendor='$post_page'";
	$result = mysqli_query($conn, $sql);
	// fetch query results as associative array.
	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	/*if ($post) {
		// get the topic to which this post belongs
		$post['topic'] = getPostTopic($post['id']);
	}*/
	return $posts;
}
/* * * * * * * * * * * *
*  Returns all topics
* * * * * * * * * * * * */
function getAllTopics()
{
	global $conn;
	$sql = "SELECT * FROM products";
	$result = mysqli_query($conn, $sql);
	$topics = mysqli_fetch_all($result, MYSQLI_ASSOC);
	return $topics;
}

?>


