<?php

namespace App\Models;

class Verification_model extends Crud_model {

    protected $table = null;

    function __construct() {
        $this->table = 'seo_verification';
        parent::__construct($this->table);
    }

    function get_details($options = array()) {
        $verification_table = 'seo_verification';

        $where = "";

        $code = get_array_value($options, "code");
        if ($code) {
            $code = $this->db->escapeString($code);
            $where .= " AND $verification_table.code='$code'";
        }

        $type = get_array_value($options, "type");
        if ($type) {
            $where .= " AND $verification_table.type='$type'";
        }
      
        $sql = "SELECT $verification_table.*
        FROM $verification_table
        WHERE $verification_table.deleted=0 $where";
        return $this->db->query($sql);
    }

}
