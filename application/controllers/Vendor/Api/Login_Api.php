<?php defined("BASEPATH") or exit("No direct script access allowed");
include_once(APPPATH."controllers/Vendor/Common.php");

class Login_Api extends Common {

    function __construct()
    {
        parent::__construct();
    }

    public function send_otp_for_login()
    {     #-------------------------- Send otp for login

        $mobile = $this->input->post(param_mobile);
        $login_otp = rand(1000, 9999);
        if (empty($mobile)) {
            $this->response(['success' => false, 'message' => "Enter Mobile Number"], 200);
        } else {
            $this->init_login_model();
            $this->init_vendor_model();

            $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
            if (!empty($user_id)) {
                $previous_otp_details = $this->Vendor_model->get_previous_otp_details($user_id);
                if (!empty($previous_otp_details->created_at))
                {
                    $otp_expire_timestamp = strtotime("+".validation_time_of_otp_in_minutes." minutes", strtotime($previous_otp_details->created_at));
                    if ($otp_expire_timestamp > time())
                    {
                        $previous_otp_valid = true;
                    }
                }

                if (!empty($previous_otp_valid))
                {
                    $is_sent = true;
                    $response = ['success' => true, 'message' => 'OTP is sent', 'otp' => $previous_otp_details->otp];
                }
                else
                {
                    $is_sent = $this->Login_model->sent_otp_for_login($user_id, $login_otp, $previous_otp_details->created_at);
                    $response = ['success' => true, 'message' => 'OTP is sent', 'otp' => $login_otp];
                }
                
                if ($is_sent) {
                    $this->response($response, 200);
                } else {
                    $this->response(['success' => false, 'message' => 'Something went wrong'], 200);
                }
            } else {
                $this->response(['success' => false, 'message' => 'User Not Exist'], 200);
            }
        }
    }

    public function authenticate_user() {    # ------------------------------------ Login check user 
        $mobile = $this->input->post(param_mobile);
        $otp = $this->input->post(param_otp);
        $this->init_vendor_model();
        $this->init_login_model();
        if (!empty($otp)) {
            $user_id = $this->Vendor_model->get_user_by_mobile($mobile);
            // $user_id = $user->uid;
            $user_details = $this->Login_model->get_user_details_by_otp($user_id, $otp);
            if (!empty($user_details->name)) {
                $this->session->set_userdata('vendor_id', $user_details->uid);
                $this->session->set_userdata(field_name, $user_details->name);
                $this->response(['success' => true, 'message' => 'Login successfull', 'redirect' => base_url('vendor/dashboard')], 200);
            } else {
                $this->response(['success' => false, 'message' => 'Invaild  OTP!', 'user_details' => $user_details, 'mobile' => $mobile, 'otp' => $otp], 200);
            }
        } else {
            $this->response(['success' => false, 'message' => 'OTP is not given!',], 200);
        }
    }

    public function logout()
    {
        $this->session->unset_userdata(field_name);
        $this->session->unset_userdata(field_mobile);
        $this->session->unset_userdata('bussiness_type');
        $this->session->unset_userdata('vendor_id');
        $this->session->unset_userdata('user_id');
        redirect(base_url('vendor'));
    }

}