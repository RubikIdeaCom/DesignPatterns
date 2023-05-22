<?php
require 'AddedComment.php';
require 'EmailAuthor.php';

$new_comment = 'This is a new comment';
$blog_post_id = 564;


echo "Adding observers to subject<br>";
$addedComment = new AddedComment($new_comment, $blog_post_id); 
$addedComment->attach(new IncrementCommentCount())->attach(new EmailOtherCommentators())->attach(new EmailAuthor());  


echo "Now going to notify() them...<br>";
$addedComment->notify();


echo "Done<br>";
