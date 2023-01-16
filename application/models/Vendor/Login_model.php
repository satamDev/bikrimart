<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Login_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }
    public function get_user_id_by_mobile($mobile){
        $this->db->select(field_uid);
        $this->db->where(field_mobile, $mobile);
        $query = $this->db->get(table_users);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0][field_uid] : [];
    }

    public function get_otp_create_time($user_id){
        $this->db->select(field_created_at);
        $this->db->where(field_user_id, $user_id);
        $query = $this->db->get(table_otp_list);
        $query = $query->result_array();
        return (!empty($query)) ? $query[0][field_created_at] : null;
    }


    public function sent_otp_for_login($user_id, $login_otp, $otp_created_at){
        $past_time = strtotime($otp_created_at);
        $current_time = time();
        $difference = $current_time - $past_time;
        $difference_minute =  $difference / 60;
        if (intval($difference_minute) > 15) {
            $data = [
                field_otp => $login_otp, 
                field_created_at => date(field_date)
            ];
            $this->db->where(field_user_id, $user_id);
            $this->db->update(table_otp_list, $data);
            return ($this->db->affected_rows() == 1) ? true : false;
        } else {
            $this->db->select(field_otp);
            $this->db->where(field_user_id, $user_id);
            $query = $this->db->get(table_otp_list);
            $query = $query->result();
            $query = $query[0];
            $fixed_otp = $query->otp;
            $data = [
                field_otp => $fixed_otp,
            ];
            $this->db->where(field_user_id, $user_id);
            $update= $this->db->update(table_otp_list, $data);
            return $update;
        }
    }
    
    public function get_user_details_by_otp($user_id, $otp)
    {
        $select = table_users .'.'. field_name .','. table_users .'.'. field_email.','. table_vendor.'.'. field_uid;
        $this->db->select($select);
        $this->db->from(table_users);
        $this->db->join(table_otp_list, table_users.'.'.field_uid.'='.table_otp_list.'.'.field_user_id);
        $this->db->join(table_vendor, table_users.'.'.field_uid.'='.table_vendor.'.'.field_user_id);
        $this->db->where([table_users.'.'.field_uid=>$user_id, table_otp_list.'.'.field_otp=>$otp]);
        $query=$this->db->get();
        $query=$query->result();
        return (!empty($query))?$query[0]:null;
    }
}