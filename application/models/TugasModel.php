<?php
// application/models/TugasModel.php
class TugasModel extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function insert_tugas($data)
    {
        $this->db->insert('tugas', $data);
        return $this->db->insert_id();
    }

    public function get_all_tugas()
    {
        $query = $this->db->get('tugas');
        return $query->result_array();
    }
    public function get_tugas_by_id($id)
    {
        $query = $this->db->get_where('tugas', array('id' => $id));
        return $query->row_array();
    }

    public function update_tugas($id, $data)
    {
        $this->db->where('id', $id);
        $this->db->update('tugas', $data);
    }

    public function delete_tugas($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('tugas');
    }

    public function get_view_tugas_by_id($id)
    {
        return $this->db->get_where('tugas', array('id' => $id))->row_array();
    }

    public function get_tasks_due_in_1_day()
    {
        // Ambil data tugas dengan batas waktu H-1
        $today = date('Y-m-d');
        $tomorrow = date('Y-m-d', strtotime('+1 day'));

        $this->db->where('batas_waktu >=', $today);
        $this->db->where('batas_waktu <', $tomorrow);
        $query = $this->db->get('tugas');

        return $query->result_array();
    }
}
