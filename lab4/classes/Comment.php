<?php
include_once(__DIR__ . "/Db.php");

class Comment
{
    private $comment;
    private $user;
    private $video;

    /**
     * @return mixed
     */
    public function getVideo()
    {
        return $this->video;
    }

    /**
     * @param mixed $video
     */
    public function setVideo($video): void
    {
        $this->video = $video;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

    public function save()
    {
        $conn = Db::getInstance();
        $statement = $conn->prepare("insert into comments(user_id, text, video_id) values (:userid, :comment, :videoid)");
        $statement->bindValue("userid", $this->user);
        $statement->bindValue("comment", $this->comment);
        $statement->bindValue("videoid", $this->video);
        $statement->execute();
    }
    public static function getUserId(string $email)
    {
       $conn = Db::getInstance();
        $statement = $conn->prepare("select id from users where email = :email ");
        $statement->bindValue("email", $email);
        $statement->execute();
        $email = $statement->fetch(PDO::FETCH_ASSOC);
            return $email['id'];
    }
}