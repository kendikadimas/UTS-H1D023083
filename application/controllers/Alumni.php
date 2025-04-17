<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Alumni_model');
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $data['alumni'] = $this->Alumni_model->get_all_alumni();
        $this->load->view('templates/header');
        $this->load->view('alumni/index', $data);
        $this->load->view('templates/footer');
    }

    public function tambah() {
        $this->load->view('templates/header');
        $this->load->view('alumni/tambah');
        $this->load->view('templates/footer');
    }

    public function simpan() {
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required|numeric');
        
        if ($this->form_validation->run() === FALSE) {
            $this->tambah();
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon')
            );
            
            $this->Alumni_model->tambah_alumni($data);
            $this->session->set_flashdata('success', 'Data alumni berhasil ditambahkan.');
            redirect('alumni');
        }
    }

    public function edit($id) {
        $data['alumni'] = $this->Alumni_model->get_alumni_by_id($id);
        $this->load->view('templates/header');
        $this->load->view('alumni/edit', $data);
        $this->load->view('templates/footer');
    }

    public function update() {
        $id = $this->input->post('id');
        
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required|valid_email');
        $this->form_validation->set_rules('tahun_lulus', 'Tahun Lulus', 'required|numeric');
        
        if ($this->form_validation->run() === FALSE) {
            $this->edit($id);
        } else {
            $data = array(
                'nama' => $this->input->post('nama'),
                'email' => $this->input->post('email'),
                'tahun_lulus' => $this->input->post('tahun_lulus'),
                'pekerjaan' => $this->input->post('pekerjaan'),
                'alamat' => $this->input->post('alamat'),
                'telepon' => $this->input->post('telepon')
            );
            
            $this->Alumni_model->update_alumni($id, $data);
            $this->session->set_flashdata('success', 'Data alumni berhasil diperbarui.');
            redirect('alumni');
        }
    }

    public function hapus($id) {
        $this->Alumni_model->hapus_alumni($id);
        $this->session->set_flashdata('success', 'Data alumni berhasil dihapus.');
        redirect('alumni');
    }

    public function cari() {
        $keyword = $this->input->get('keyword');
        $tahun_lulus = $this->input->get('tahun_lulus');
        
        $data['alumni'] = $this->Alumni_model->cari_alumni($keyword, $tahun_lulus);
        $data['keyword'] = $keyword;
        $data['tahun_lulus'] = $tahun_lulus;
        
        $this->load->view('templates/header');
        $this->load->view('alumni/index', $data);
        $this->load->view('templates/footer');
    }

    public function statistik() {
        $data['statistik'] = $this->Alumni_model->get_statistik_alumni();
        $this->load->view('templates/header');
        $this->load->view('alumni/statistik', $data);
        $this->load->view('templates/footer');
    }
}