<?php

 function countCategory($categoryName)
{
    $thisAnahtar =& get_instance();
    $thisAnahtar->load->database();
    $thisAnahtar->db->where('categories',$categoryName);
    $thisAnahtar->db->from('posts');
    $conc = $thisAnahtar->db->count_all_results();
    return $conc;
} 

function postCount()
{
    $thisAnahtar =& get_instance();
    $thisAnahtar->load->database();
    $thisAnahtar->db->from('posts');
    $conc = $thisAnahtar->db->count_all_results();
    return $conc;
}

function countMessages()
{
    $thisAnahtar =& get_instance();
    $thisAnahtar->load->database();
    $thisAnahtar->db->from('messages')->where('readMessage','true');
    $conc = $thisAnahtar->db->count_all_results();
    return $conc;
} 
function countBildirim()
{
    $thisAnahtar =& get_instance();
    $thisAnahtar->load->database();
    $thisAnahtar->db->from('bildirimler');
    $conc = $thisAnahtar->db->count_all_results();
    return $conc;
} 
?>