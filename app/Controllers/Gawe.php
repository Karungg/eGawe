<?php

namespace App\Controllers;

class Gawe extends BaseController
{
    public function index()
    {
        $builder = $this->db->table('gawe');
        $query   = $builder->get()->getResult();
        $data['gawe'] = $query;
        return view('gawe/get', $data);
    }

    public function create()
    {
        return view('gawe/add');
    }

    public function store()
    {
        $data = $this->request->getPost();

        $this->db->table('gawe')->insert($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('gawe'))->with('success', 'Data Berhasil Ditambahkan');
        }
    }

    public function edit($id = null)
    {
        if ($id != null) {
            $query = $this->db->table('gawe')->getWhere(['id_gawe' => $id]);
            if ($query->resultID->num_rows > 0) {
                $data['gawe'] = $query->getRow();
                return view('gawe/edit', $data);
            } else {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }
    }

    public function update($id)
    {
        $data = $this->request->getPost();
        unset($data['_method']);

        $this->db->table('gawe')->where(['id_gawe' => $id])->update($data);

        if ($this->db->affectedRows() > 0) {
            return redirect()->to(site_url('gawe'))->with('success', "Data Berhasil Diupdate");
        }
    }
}