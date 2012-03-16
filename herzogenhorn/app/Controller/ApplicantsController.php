<?php
class ApplicantsController extends AppController {
    public $name = 'Applicants';
    public $helpers = array('Html', 'Form');
    public $components = array('Session');

    public function index() {
        $this->set('activeMenuButton', 'a.index');
        $this->set('applicants', $this->Applicant->find('all'));
    }

    public function view($id = null) {
        $this->Applicant->id = $id;
        $this->set('activeMenuButton', 'a.view');
        $this->set('applicant', $this->Applicant->read());
    }

    public function add() {
        if ($this->request->is('post')) {
            if ($this->Applicant->save($this->request->data)) {
                $this->Session->setFlash(__("applicants.save.success"));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__("applicants.save.error"));
            }
        }
    }

/* TODO */
   public function edit($id = null) {
    $this->Applicant->id = $id;
    $this->set('activeMenuButton', 'a.edit');
    if ($this->request->is('get')) {
        $this->request->data = $this->Applicant->read();
    } else {
        if ($this->Applicant->save($this->request->data)) {
            $this->Session->setFlash('Applicant has been updated.');
            $this->redirect(array('action' => 'index'));
        } else {
            $this->Session->setFlash('Unable to update your applicant.');
        }
    }
    }

public function delete($id) {
    if ($this->request->is('get')) {
        throw new MethodNotAllowedException();
    }
    if ($this->Applicant->delete($id)) {
        $this->Session->setFlash(__("applicants.delete.success"). $id);
        $this->redirect(array('action' => 'index'));
    }
}

}
