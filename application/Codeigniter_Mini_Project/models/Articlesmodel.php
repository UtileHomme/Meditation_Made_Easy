<?php

class Articlesmodel extends CI_Model
{
    public function articles_list($limit,$offset)
    {
        //taking out user id from session
        $this->load->library('session');
        $user_id = $this->session->userdata('user_id');
        $user_id = intval($user_id);
        // or we can pass an array of fields ['title','id']
        $query = $this->db
                    ->select(['title','id','created_at'])
                    ->from('articles')
                    ->where('user_id',$user_id)
                    ->limit($limit,$offset)
                    ->get();

        return $query->result();
    }

    public function all_articles_list($limit,$offset)
    {
        //taking out user id from session
        $this->load->library('session');
        // or we can pass an array of fields ['title','id']

        $query = $this->db
                    ->select(['title','id','created_at'])
                    ->from('articles')
                    ->limit($limit,$offset)
                    ->order_by('created_at','DESC')
                    ->get();

        return $query->result();
    }

    public function count_all_articles()
    {
        $query = $this->db
                    ->select(['title','id'])
                    ->from('articles')
                    ->get();

        return $query->num_rows();
    }

    public function num_rows()
    {
        $this->load->library('session');
        $user_id = $this->session->userdata('user_id');
        $user_id = intval($user_id);
        // or we can pass an array of fields ['title','id']
        $query = $this->db
                    ->select(['title','id'])
                    ->where('user_id',$user_id)
                    ->from('articles')
                    ->get();

        return $query->num_rows();
    }

    public function add_article($array)
    {
        return $this->db->insert('articles', $array);
    }

    public function find_article($article_id)
    {
        $q = $this->db->select(['id','title','body'])
        ->where('id', $article_id)
        ->from('articles')
        ->get();

        return $q->row();
    }

    //$article is an array comprising of title and body of the article to be edited
    public function update_article($article_id, $article)
    {
        $time = time();
        $cur_time = date('d m y @ H:i:s', $time);
        return $this->db->update('articles', $article, "id=$article_id");
        // return $this->db->update('articles', $article, ['id'=>$article_id, 'created_at'=>$cur_time]);
    }

    //to delete the article
    public function delete_article($article_id)
    {
        return $this->db->delete('articles',['id'=>$article_id]);
    }

    //search all artices
    public function search($query , $limit, $offset)
    {
        $q = $this->db->from('articles')
            ->like('title', $query)
            ->limit($limit,$offset)
            ->get();

        return $q->result();
    }

    public function count_search_results($query)
    {
        $q = $this->db->from('articles')
        ->like('title', $query)
        ->get();

        return $q->num_rows();
    }

    public function find($id)
    {
        $q = $this->db->from('articles')
        ->where(['id'=> $id])
        ->get();

        if($q->num_rows())
        {
            return $q->row();
        }
        else
        {
            return false;
        }
    }
}

 ?>
