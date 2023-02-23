<?php

function categoryName($id)
{
    $thisAnahtar =& get_instance();
    $thisAnahtar->load->database();
    $sql_query = "SELECT * FROM categorys WHERE cID = '$id'";
    $query=$thisAnahtar->db->query($sql_query);
    $row = $query->row();
    return $row->categoryName;
}

function categoryNamesef($id)
{
    $thisAnahtar =& get_instance();
    $thisAnahtar->load->database();
    $sql_query = "SELECT * FROM categorys WHERE categorySef = '$id'";
    $query=$thisAnahtar->db->query($sql_query);
    $row = $query->row();
    return $row->categoryName;
}

?>