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

    public function notificationcounter(){
        $totalnotifications=$this->postModel->countallnotifications();
        $data= [$totalnotifications->count];
        header('Content-type: application/json');
		echo json_encode($data);
		return;
    }

    public function inquiriescounter(){
      $unread=$this->postModel->count_unread();
      $processing=$this->postModel->count_processing();
      $completed=$this->postModel->count_completed();
      $data= [$unread->count,$processing->count,$completed->count];
      header('Content-type: application/json');
  echo json_encode($data);
  return;
  }
    }
    ?>
