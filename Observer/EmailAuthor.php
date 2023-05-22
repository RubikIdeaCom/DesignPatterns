<?php

class EmailAuthor implements SplObserver

{
    public function update(SplSubject $subject)
    {
        echo __METHOD__ . " Emailing the author of post id: " . $subject->post_id . " that someone commented with : " . $subject->comment_text . "<br>";
    }

}


class EmailOtherCommentators implements SplObserver

{
    public function update(SplSubject $subject)
    {
        echo __METHOD__ . " Emailing all other comment authors who commented on " . $subject->post_id . " that someone commented with : " . $subject->comment_text . "<br>";
    }

}


class IncrementCommentCount implements SplObserver

{
    public function update(SplSubject $subject)
    {
        echo __METHOD__ . " Updating comment count to + 1 for blog post id: " . $subject->post_id . "<br>";
    }

}
