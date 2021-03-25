<?php 
	class Man_drug_display extends Controller {
    public function __construct() {
		$this->postModel = $this->model('Man_Drug_Displaym');
	}

    public function drugcount(){
        $totaldrugs=$this->postModel->countalldrugs();
        $data= [$totaldrugs->count];
        header('Content-type: application/json');
		echo json_encode($data);
		return;
    }

    }
    ?>
