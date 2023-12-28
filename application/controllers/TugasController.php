<?php
defined('BASEPATH') or exit('No direct script access allowed');

class TugasController extends CI_Controller
{

    // Function untuk template
    private function loadTemplate($view, $data)
    {
        $this->load->view('template/header', $data);
        $this->load->view('template/navbar');
        $this->load->view($view); // Halaman konten
        $this->load->view('template/footer');
    }


    public function index()
    {
        $data['title'] = 'Daftar Tugas';

        // Load the TugasModel
        $this->load->model('TugasModel');

        // Fetch tugas from the database
        $data['tugas'] = $this->TugasModel->get_all_tugas();

        // Load the view with data
        $this->loadTemplate('tugas/daftar-tugas', $data);
    }


    public function create()
    {
        $this->load->model('TugasModel');
        $data['title'] = 'Tambah Tugas';
        $this->loadTemplate('tugas/tambah-tugas', $data);
    }

    public function store()
    {
        // Validasi formulir 
        $this->form_validation->set_rules('judul', 'Judul Tugas', 'required');

        if ($this->form_validation->run() == FALSE) {
            // Jika validasi gagal, kembali ke halaman tambah-tugas
            $this->create();
        } else {
            // Jika validasi berhasil, simpan data ke dalam database
            $data = array(
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'kategori' => $this->input->post('kategori'),
                'batas_waktu' => $this->input->post('batas_waktu'),
                'status' => 'belum_selesai',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            // Panggil model untuk menyimpan data
            $this->load->model('TugasModel');
            $tugas_id = $this->TugasModel->insert_tugas($data);

            // Redirect ke halaman tugas
            $this->session->set_flashdata('alert_type', 'success');
            $this->session->set_flashdata('alert_message', 'Data berhasil ditambahkan!');
            redirect(base_url('daftar-tugas'));
        }
    }


    public function edit($id)
    {
        $data['title'] = 'Edit Tugas';
        $this->load->model('TugasModel');
        $data['tugas'] = $this->TugasModel->get_tugas_by_id($id);
        $this->loadTemplate('tugas/edit-tugas', $data);
    }

    public function update($id)
    {
        // Load form validation library
        $this->load->library('form_validation');
        $this->form_validation->set_rules('judul', 'Judul Tugas', 'required');

        if (
            $this->form_validation->run() == FALSE
        ) {

            $this->edit($id);
        } else {
            $data = array(
                'judul' => $this->input->post('judul'),
                'deskripsi' => $this->input->post('deskripsi'),
                'kategori' => $this->input->post('kategori'),
                'batas_waktu' => $this->input->post('batas_waktu'),
                'status' => $this->input->post('status'),
                'updated_at' => date('Y-m-d H:i:s')
            );

            // Load the TugasModel
            $this->load->model('TugasModel');
            $this->TugasModel->update_tugas($id, $data);
            $this->session->set_flashdata('alert_type', 'success');
            $this->session->set_flashdata('alert_message', 'Data berhasil diedit!');
            redirect(base_url('daftar-tugas'));
        }
    }



    public function view($id)
    {
        $data['title'] = 'Detail Tugas';
        $this->load->model('TugasModel');
        $data['tugas'] = $this->TugasModel->get_tugas_by_id($id);

        $this->loadTemplate('tugas/lihat-tugas', $data);
    }

    public function delete($id)
    {
        $this->load->model('TugasModel');
        $this->TugasModel->delete_tugas($id);

        // Optionally, you can redirect to another page after deletion.
        $this->session->set_flashdata('alert_type', 'success');
        $this->session->set_flashdata('alert_message', 'Data berhasil dihapus!');
        redirect(base_url('daftar-tugas'));
    }
}
