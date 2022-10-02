<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Post extends BaseController
{
    public function index()
    {
        $session = session();

        $const = config(\Config\ConstDef::class);

        $postModel = model('App\Models\PostModel');
        $items = $postModel->orderBy('updated_at', 'desc')->paginate($const->pagination['link_size']);
        $pager = $postModel->pager;

        return view('admin/post/index', compact('items', 'pager', 'session'));
    }

    public function add()
    {
        $session = session();
        if (!($validation = $session->getFlashdata('validation'))) {
            $this->validate([]);
            $validation = $this->validator;
        }

        $const = config(\Config\ConstDef::class);
        $item = new \App\Entities\Post();

        $postStatus = \App\Consts\PostStatus::toArray();
        return view('admin/post/add', compact('item', 'postStatus', 'session', 'validation'));
    }

    public function create()
    {
        try {
            return $this->toTable($this->request->getPost());
        } catch (\Exceptoin $e) {
            $session->setFlashdata('error', '新規登録に失敗しました。');
            return redirect()->route('admin.post.index');
        }
    }

    public function edit($id)
    {
        $session = session();
        if (!($validation = $session->getFlashdata('validation'))) {
            $this->validate([]);
            $validation = $this->validator;
        }

        $const = config(\Config\ConstDef::class);
        $postModel = model('App\Models\PostModel');
        $item = $postModel->find($id);
        if (!$item) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        $postStatus = \App\Consts\PostStatus::toArray();
        return view('admin/post/edit', compact('item', 'postStatus', 'session', 'validation'));
    }

    public function update()
    {
        try {
            return $this->toTable($this->request->getPost());
        } catch (\Exceptoin $e) {
            $session->setFlashdata('error', '更新に失敗しました。');
            return redirect()->route('admin.post.index');
        }
    }

    public function toTable($data)
    {
        $rules = [
            'title' => [
                'label' => 'タイトル',
                'rules' => 'required',
            ],
            'description' => [
                'label' => '内容',
                'rules' => 'required',
            ],
        ];

        $session = session();
        if (!$this->validate($rules)) {
            $session->setFlashdata('validation', $this->validator);
            if (isset($data['id']) && $data['id'] > 0) {
                return redirect()->route('admin.post.edit', [$data['id']]);
            } else {
                return redirect()->route('admin.post.add');
            }
        }

        $postModel = model('App\Models\PostModel');
        if (isset($data['id']) && $data['id'] > 0) {
            $item = $postModel->find($data['id']);
            if (!$item) {
                throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
            }
        } else {
            $item = new \App\Entities\Post();
            $item->created_at = date('Y-m-d H:i:s');
        }
        $item->title        = $data['title'];
        $item->description  = $data['description'];
        $item->status       = $data['status'];
        $item->updated_at   = date('Y-m-d H:i:s');

        $file = $this->request->getFile('file');
        if ($file->isValid()) {
            $fname  = $file->getClientName();
            $fext   = $file->getClientExtension();
            $path = FCPATH . 'uploads/';
            $fn = hash("sha256", $fname) . '.' . $fext;
            $file->move($path, $fn);
            $item->image = '/uploads/' . $fn;
        }

        $postModel->save($item);

        if (isset($data['id']) && $data['id'] > 0) {
            $session->setFlashdata('message', '更新に成功しました。');
        } else {
            $session->setFlashdata('message', '新規登録に成功しました。');
        }
        return redirect()->route('admin.post.index');
    }
}
