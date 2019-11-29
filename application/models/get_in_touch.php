<?php

class Get_in_touch extends CI_Model {
    public function add($newMessage)
    {
        $this->db->insert('getintouch', $newMessage);
        
    }
}