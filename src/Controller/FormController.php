<?php

namespace App\Controller;

class FormController extends Controller
{
    /**
     * @return object
     */
    public function index(): object
    {
        return $this->view('/home');
    }

    /**
     * @return object
     */
    public function form(): object
    {
        $request = $_POST;
        $form    = json_decode($request['form'], true);

        return $this->view('/form', compact('form'));
    }
}