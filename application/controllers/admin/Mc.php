<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Mc extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->library('email');
        $this->load->helper('security');
        $this->load->model('M_user', 'user');
        $this->load->model('M_web', 'web');
        $this->load->model('M_mc', 'mc');
        $this->load->library('form_validation');
        if ($this->session->userdata('id') == NULL) {
            redirect('admin/login');
        }
        date_default_timezone_set('Asia/Jakarta');
    }
    public function index()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['feature1'] = $this->mc->get_feature_us()->result();
        $data['feature2'] = $this->mc->get_feature2_us()->result();
        $data['feature3'] = $this->mc->get_feature3_us()->result();
        $data['header3'] = $this->mc->get_header_feature3_us()->row();
        $data['mc'] = $this->mc->get_mc_us()->row();
        $data['header_feature'] = $this->mc->get_header_feature_ocs_us()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/mc/mc_us', $data);
        $this->load->view('admin/layout/footer');
    }
    public function id()
    {
        $data['logo'] = $this->web->get_logo()->row();
        $data['feature1'] = $this->mc->get_feature_id()->result();
        $data['feature2'] = $this->mc->get_feature2_id()->result();
        $data['feature3'] = $this->mc->get_feature3_id()->result();
        $data['mc'] = $this->mc->get_mc_id()->row();
        $data['header3'] = $this->mc->get_header_feature3_id()->row();
        $data['header_feature'] = $this->mc->get_header_feature_ocs_id()->row();
        $this->load->view('admin/layout/header');
        $this->load->view('admin/layout/navbar', $data);
        $this->load->view('admin/mc/mc_id', $data);
        $this->load->view('admin/layout/footer');
    }

    public function add_type()
    {
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->ocs->create_type($data);
        $this->session->set_flashdata('msg', 'Type berhasil di tambah');
        redirect('admin/ocs');
    }
    public function add_type_id()
    {
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->ocs->create_type_id($data);
        $this->session->set_flashdata('msg', 'Type berhasil di tambah');
        redirect('admin/ocs/id');
    }
    public function add_feature_en1()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/mc');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->create_feature_en($data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil di tambah');
        redirect('admin/mc');
    }
    public function add_feature_en2()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/mc');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->create_feature_en2($data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil di tambah');
        redirect('admin/mc');
    }
    public function add_feature_en3()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/mc');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->create_feature_en3($data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil di tambah');
        redirect('admin/mc');
    }
    public function add_feature_id1()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/mc/id');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->create_feature_id($data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil di tambah');
        redirect('admin/mc/id');
    }
    public function add_feature_id2()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/mc/id');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->create_feature_id2($data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil di tambah');
        redirect('admin/mc/id');
    }
    public function add_feature_id3()
    {
        $config['upload_path'] = "./assets/assets/img";
        $config['allowed_types'] = 'jpeg|jpg|png|svg';
        $config['max_size'] = '1024';
        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if ($this->upload->do_upload("gambar")) {
            $data = array('upload_data' => $this->upload->data());
            $file = $data['upload_data']['file_name'];
        } else {
            $this->session->set_flashdata('error', 'Gambar gagal di tambahkan');
            redirect('admin/mc/id');
        }
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->create_feature_id3($data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil di tambah');
        redirect('admin/mc/id');
    }
    public function update_bg()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'bg' => $file
        );
        $this->mc->update_bg($id, $data);
        $this->session->set_flashdata('msg', 'Background Feature 2 berhasil diupdate');
        redirect('admin/mc');
    }
    public function update_bg_id()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'bg' => $file
        );
        $this->mc->update_bg($id, $data);
        $this->session->set_flashdata('msg', 'Background Feature berhasil diupdate');
        redirect('admin/mc/id');
    }
    public function update_header()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_header' => $file
        );
        $this->mc->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header One-Coin Service berhasil diupdate');
        redirect('admin/mc');
    }
    public function update_header_id()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_header' => $file
        );
        $this->mc->update_header($id, $data);
        $this->session->set_flashdata('msg', 'Header One-Coin Service berhasil diupdate');
        redirect('admin/mc/id');
    }
    public function update_feature_en1()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->update_feature_en1($id, $data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil diupdate');
        redirect('admin/mc');
    }
    public function update_feature_en2()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->update_feature_en2($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/mc');
    }
    public function update_feature_en3()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->update_feature_en3($id, $data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil diupdate');
        redirect('admin/mc');
    }
    public function update_feature_id1()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->update_feature_id1($id, $data);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil diupdate');
        redirect('admin/mc/id');
    }
    public function update_feature_id2()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->update_feature_id2($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/mc/id');
    }
    public function update_feature_id3()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->update_feature_id3($id, $data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil diupdate');
        redirect('admin/mc/id');
    }
    public function update_profile()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/ocs');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_feature' => $file,
            'feature' => $this->input->post('feature', true),
            'sub_feature' =>  $this->input->post('konten', true)
        );
        $this->ocs->update_profile($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        redirect('admin/ocs');
    }
    public function update_profile_id()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/ocs/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img_feature' => $file,
            'feature_id' => $this->input->post('feature', true),
            'sub_feature_id' =>  $this->input->post('konten', true)
        );
        $this->ocs->update_profile($id, $data);
        $this->session->set_flashdata('msg', 'Header berhasil diupdate');
        redirect('admin/ocs/id');
    }
    public function update_type()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->ocs->update_type_us($id, $data);
        $this->session->set_flashdata('msg', 'Type berhasil diupdate');
        redirect('admin/ocs');
    }
    public function update_type_id()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->ocs->update_type_id($id, $data);
        $this->session->set_flashdata('msg', 'Type berhasil diupdate');
        redirect('admin/ocs/id');
    }
    public function update_feature_en()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->ocs->update_feature_en($id, $data);
        $this->session->set_flashdata('msg', 'Feature berhasil diupdate');
        redirect('admin/ocs');
    }
    public function update_feature_id()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->ocs->update_feature_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature berhasil diupdate');
        redirect('admin/ocs/id');
    }
    public function update_header_feature_en()
    {
        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true),
        );
        $this->mc->update_header_feature_en($id, $data);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil diupdate');
        redirect('admin/mc');
    }
    public function update_header_feature3_en()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->update_header_feature3_en($id, $data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil diupdate');
        redirect('admin/mc');
    }
    public function update_header_feature3_id()
    {
        if (empty($_FILES['gambar']['name'])) {
            $file = $this->input->post('gambar_lama', TRUE);
        } else {
            $config['upload_path'] = "./assets/assets/img";
            $config['allowed_types'] = 'jpeg|jpg|png|svg';
            $config['max_size'] = '1024';
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            if ($this->upload->do_upload("gambar")) {
                $data = array('upload_data' => $this->upload->data());
                $file = $data['upload_data']['file_name'];
            } else {
                $this->session->set_flashdata('error', 'Gambar gagal di update');
                redirect('admin/mc/id');
            }
        }

        $id = $this->input->post('id', true);
        $data = array(
            'img' => $file,
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->update_header_feature3_id($id, $data);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil diupdate');
        redirect('admin/mc/id');
    }
    public function update_header_feature_id()
    {

        $id = $this->input->post('id', true);
        $data = array(
            'header' => $this->input->post('header', true),
            'konten' =>  $this->input->post('konten', true)
        );
        $this->mc->update_header_feature_id($id, $data);
        $this->session->set_flashdata('msg', 'Header Feature 2 berhasil diupdate');
        redirect('admin/mc/id');
    }
    public function delete_type($id)
    {
        $this->ocs->delete_type($id);
        $this->session->set_flashdata('msg', 'Type berhasil dihapus');
        redirect('admin/ocs');
    }
    public function delete_type_id($id)
    {
        $this->ocs->delete_type_id($id);
        $this->session->set_flashdata('msg', 'Type berhasil dihapus');
        redirect('admin/ocs/id');
    }
    public function delete_feature_en1($id)
    {
        $this->mc->delete_feature_en1($id);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil dihapus');
        redirect('admin/mc');
    }
    public function delete_feature_en2($id)
    {
        $this->mc->delete_feature_en2($id);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil dihapus');
        redirect('admin/mc');
    }
    public function delete_feature_en3($id)
    {
        $this->mc->delete_feature_en3($id);
        $this->session->set_flashdata('msg', 'Feature 3 berhasil dihapus');
        redirect('admin/mc');
    }
    public function delete_feature_id1($id)
    {
        $this->mc->delete_feature_id1($id);
        $this->session->set_flashdata('msg', 'Feature 1 berhasil dihapus');
        redirect('admin/mc/id');
    }
    public function delete_feature_id2($id)
    {
        $this->mc->delete_feature_id2($id);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil dihapus');
        redirect('admin/mc/id');
    }
    public function delete_feature_id3($id)
    {
        $this->mc->delete_feature_id3($id);
        $this->session->set_flashdata('msg', 'Feature 2 berhasil dihapus');
        redirect('admin/mc/id');
    }
    public function ajax_feature_us1($id)
    {
        $data = $this->mc->get_by_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_id1($id)
    {
        $data = $this->mc->get_by_id_id($id);
        echo json_encode($data);
    }
    public function ajax_type_id($id)
    {
        $data = $this->ocs->get_by_id_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_en($id)
    {
        $data = $this->mc->get_feature_en_by_id($id);
        echo json_encode($data);
    }
    public function ajax_feature_en2($id)
    {
        $data = $this->mc->get_feature_en_by_id2($id);
        echo json_encode($data);
    }
    public function ajax_feature_en3($id)
    {
        $data = $this->mc->get_feature_en_by_id3($id);
        echo json_encode($data);
    }
    public function ajax_feature_id3($id)
    {
        $data = $this->mc->get_feature_id_by_id3($id);
        echo json_encode($data);
    }
    public function ajax_feature_id2($id)
    {
        $data = $this->mc->get_feature_id_by_id2($id);
        echo json_encode($data);
    }
    public function ajax_feature_id($id)
    {
        $data = $this->mc->get_feature_id_by_id($id);
        echo json_encode($data);
    }
}
