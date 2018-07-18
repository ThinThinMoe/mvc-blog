<?php 

class CommentModel extends Database
{
	public function create($user_id, $post_id, $body)
    {
        $sql  = "INSERT INTO comment (user_id, post_id, body) VALUES (:user_id, :post_id, :body)";
        $data = ['user_id'=>$user_id, 'post_id'=>$post_id, 'body'=>$body];
        $this->query($sql, $data);
    }

    public function show($post_id)
	{
		
		$sql  = "SELECT * FROM comment WHERE post_id=:post_id ORDER BY modified_date DESC";
        $data = ['post_id' => $post_id];
        $this->query($sql, $data);
        return $this->multipleSet();
	}

}