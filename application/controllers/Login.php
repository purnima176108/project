<?php
class Login extends CI_Controller{
    public function userLogin()
    {
        
        $this->load->model('user');
        $uid = $this->input->post('uid');
        $pword = $this->input->post('pword');
        $this->user->registerUser($name,$uid,$pword);
        return $this->load->view('admin');
    }
    public function userRegister()
    {
        if($this->session->userdata('uid'))
            return redirect('Login/admindashboard');
        return $this->load->view('register');
    }
    public function adminDashboard()
    {
        if($this->session->userdata('uid'))
            return $this->load->view('admin');
        return redirect('Login/userRegister');
    }
    public function acceptData()
    {
        $this->load->model('user');
        $name = $this->input->post('uname');
        $uid = $this->input->post('uid');
        $pword = $this->input->post('pword');
        $this->user->registerUser($name,$uid,$pword);
        //user registered success

        $this->session->set_userdata('uid',$uid);


        return $this->adminDashboard();
    }
    public function userLogout()
    {
        $this->session->unset_userdata('uid');
        return redirect('Login/userRegister');
    }
}

?>