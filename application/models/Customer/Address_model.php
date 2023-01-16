<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Address_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        date_default_timezone_set(field_location);
    }


}