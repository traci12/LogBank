<?php

class My_class extends CI_Controller {
 
    function __construct() {
        parent::__construct();
    }
 
    /**
    * getDataForDataGridSample
    * A sample to demonstrate CodeIgniter and a DataGrid 
    */
    function getDataForDataGridSample() {
        //load the model
        $this->load->model('my_data_model', '', TRUE);
        //get data from the model
        $datatable = $this->my_data_model->get();
 
        $data = "";
 
        //Loop through data
        if ($datatable->num_rows() > 0) {
            foreach ($datatable->result() as $row) { 
                $data[] = array(
                    $row->Id,
                    $row->FirstName,
                    $row->LastName    
                );
            }
        }
 
        //load view with data
        $data['datatable'] = $data;
        $data['main_content'] = 'sample/datagrid';
        $this->load->view('includes/sampleTemplate', $data);
    }
}