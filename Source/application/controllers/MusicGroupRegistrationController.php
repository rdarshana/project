<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MusicGroupRegistrationController extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->library('image_lib');
        $this->load->model("musicGroupRegistrationModel");
    }

    public function index() {
        $id = $this->musicGroupRegistrationModel->getRegistrationNumber();
        $reg_no = NULL;
        if ($id) {
            $x = intval($id) + 1;
            $reg_no = "M00" . $x;
            $data['regNo'] = $reg_no;
        } else {
            $reg_no = "M001";
            $data['regNo'] = $reg_no;
        }
        $this->load->view('Registration/Music/music_home-view', $data);
    }

    public function createMusicGroup() {
        //get post data
        $gid = $this->input->post('gid');
        $reg_no = $this->input->post('reg_no');
        $group_name = $this->input->post('group_name');
        $address = $this->input->post('address');
        $person_name = $this->input->post('person_name');
        $phone = $this->input->post('phone');
        $email = $this->input->post('email');
        $web = $this->input->post('web');
        $members = intval($this->input->post('members'));
        $music_style = $this->input->post('music_style');
        $group_details = $this->input->post('group_details');
        $charge = doubleval($this->input->post('charge'));

        date_default_timezone_set("Asia/Colombo");
        $date = date("Y-m-d H:i:s");

        $datainfo = array(
            "registration_no" => $reg_no,
            "group_name" => $group_name,
            "address" => $address,
            "contact_person_name" => $person_name,
            "contact_no" => $phone,
            "email" => $email,
            "web" => $web,
            "number_of_members" => $members,
            "music_styles" => $music_style,
            "group_details" => $group_details,
            "charges" => $charge,
            "added_date" => $date
        );

        if ($gid == "") {
            if ($this->musicGroupRegistrationModel->insertMusicGroup($datainfo)) {
                echo "success";
            } else {
                echo "error";
            }
        } else {
            $datainfo = array(
                "group_name" => $group_name,
                "address" => $address,
                "contact_person_name" => $person_name,
                "contact_no" => $phone,
                "email" => $email,
                "web" => $web,
                "number_of_members" => $members,
                "music_styles" => $music_style,
                "group_details" => $group_details,
                "charges" => $charge,
                "edit_date" => $date
            );
            if ($this->musicGroupRegistrationModel->updateMusicGroup($gid, $datainfo)) {
                echo "1";
            } else {
                echo "error";
            }
        }
    }

    public function editMusicGroup($id) {

        $groupDetail = $this->musicGroupRegistrationModel->getGroupDetails($id);
        if ($groupDetail) {
            foreach ($groupDetail as $result) {
                $data['id'] = $result->id;
                $data["registration_no"] = $result->registration_no;
                $data["group_name"] = $result->group_name;
                $data["address"] = $result->address;
                $data["contact_person_name"] = $result->contact_person_name;
                $data["contact_no"] = $result->contact_no;
                $data["email"] = $result->email;
                $data["web"] = $result->web;
                $data["number_of_members"] = $result->number_of_members;
                $data["music_styles"] = $result->music_styles;
                $data["group_details"] = $result->group_details;
                $data["charges"] = $result->charges;
                $data["added_date"] = $result->added_date;
            }
        }
        $this->load->view('Registration/Music/music_home-view', $data);
    }

    public function viewMusicGroup() {
        $data['allDetails'] = $this->musicGroupRegistrationModel->getAllGroupDetails();
        $this->load->view('Registration/Music/music_Groups-View', $data);
    }

    public function viewMusicGroupDetails($id) {

        $groupDetail = $this->musicGroupRegistrationModel->getGroupDetails($id);
        if ($groupDetail) {
            foreach ($groupDetail as $result) {
                $data['id'] = $result->id;
                $data["registration_no"] = $result->registration_no;
                $data["group_name"] = $result->group_name;
                $data["address"] = $result->address;
                $data["contact_person_name"] = $result->contact_person_name;
                $data["contact_no"] = $result->contact_no;
                $data["email"] = $result->email;
                $data["web"] = $result->web;
                $data["number_of_members"] = $result->number_of_members;
                $data["music_styles"] = $result->music_styles;
                $data["group_details"] = $result->group_details;
                $data["charges"] = $result->charges;
                $data["images"] = $this->musicGroupRegistrationModel->getImages($result->id);
            }
        }
        $this->load->view('Registration/Music/music_ProfileView', $data);
    }

    public function deleteGroup($id) {
        $images = $this->musicGroupRegistrationModel->getImages($id);
        if ($images) {
            foreach ($images as $img) {
                unlink("img/uploads/new_" . $img->image_name);
                $this->musicGroupRegistrationModel->deleteData('music_group_images', 'id', $img->id);
            }
        }
        if ($this->musicGroupRegistrationModel->deleteData('music_group_details', 'id', $id)) {
            echo "success";
        }
    }

    public function loadImagesAddView() {
        $data['allDetails'] = $this->musicGroupRegistrationModel->getAllGroupDetails();
        $this->load->view('Registration/Music/Add_Music_Images', $data);
    }

    public function uploadImages() {
        $groupId = $this->input->post('group');
        date_default_timezone_set("Asia/Colombo");
        $date = date("Y-m-d H:i:s");

        if (!empty($_FILES['userFiles']['name'])) {
            $filesCount = count($_FILES['userFiles']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                if ($_FILES['userFiles']['tmp_name'][$i] !== "") {
                    $my_string = $this->rand_string(20);
                    $exp = explode("/", $_FILES['userFiles']['type'][$i]);
                    $img = $my_string . "." . $exp[1];
                } else {
                    $img = "";
                }

                $_FILES['userFile']['name'] = $img;
                $_FILES['userFile']['type'] = $_FILES['userFiles']['type'][$i];
                $_FILES['userFile']['tmp_name'] = $_FILES['userFiles']['tmp_name'][$i];
                $_FILES['userFile']['error'] = $_FILES['userFiles']['error'][$i];
                $_FILES['userFile']['size'] = $_FILES['userFiles']['size'][$i];

                $uploadPath = 'img/uploads/';
                $config['upload_path'] = $uploadPath;
                $config['allowed_types'] = 'gif|jpg|png|jpeg|pdf';
                //$config['max_size']	= '100';
                //$config['max_width'] = '1024';
                //$config['max_height'] = '768';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                if ($this->upload->do_upload('userFile')) {
                    $fileData = $this->upload->data();

                    //resize images
                    $config['image_library'] = 'gd2';
                    $config['source_image'] = $fileData['full_path'];
                    $config['maintain_ratio'] = FALSE;
                    $config['new_image'] = './img/uploads/new_' . $img;
                    $config['width'] = '800';
                    $config['height'] = '600';
                    $this->image_lib->initialize($config);
                    $this->image_lib->resize();

                    unlink("img/uploads/" . $img);

                    $datainfo = array(
                        "image_name" => $fileData['file_name'],
                        "added_date" => $date,
                        "group_details_id" => $groupId,
                    );
                    if ($this->musicGroupRegistrationModel->insertImages($datainfo)) {
                        echo "success";
                    } else {
                        echo "error";
                    }
                } else {
                    echo $this->upload->display_errors();
                }
            }
        }
    }
    
    /*
     * create image name
     */

    function rand_string($length) {
        $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
        $str = NULL;
        $size = strlen($chars);
        for ($i = 0; $i < $length; $i++) {
            $str .= $chars[rand(0, $size - 1)];
        }
        return $str;
    }

}
