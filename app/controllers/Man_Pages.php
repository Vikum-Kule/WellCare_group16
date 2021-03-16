 <?php
class Man_Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('Operations');
    }
    public function test() {
        
        $this->view('pc_view_order');
    }
    public function loginview() {
        
        $this->view('Man_Login');
    }
    public function managerregview() {
        
        $this->view('Man_ManagerReg');
    }
    public function drugstockview() {
        
        $this->view('Man_Drug_Stock_page');
    }
    public function notificationmanagerview() {
       
        $this->view('Man_Notification_Manager');
    }
    public function adddrugstockpageview() {
       
        $this->view('Man_Add_Drug_Stock_Page');
    }
    public function addsupplierorderview() {
       
        $this->view('Man_Add_Supplier_Order');
    }
    public function drugstockupdateformview() {
       
        $this->view('Man_Drug_Stock_Update_Form');
    }
    public function inquiriesmanagerview() {
       
        $this->view('Man_Inquiries_Manager');
    }
    public function myaccountmanagerview() {
       
        $this->view('Man_My_Account_Manager');
    }
    public function stockrefilformview() {
       
        $this->view('Man_Stock_Refil_Form');
    }
    public function supplierordersview() {
       
        $this->view('Man_Supplier_Orders');
    }
    public function updatesupplierorderview() {
       
        $this->view('Man_Update_Supplier_Order');
    }
     public function stockrefilview() {
       
        $this->view('Man_Stock_Refil');
    }
    
    public function invoiceview() {
       
        $this->view('Man_Invoices');
    }
    public function addinvoiceview() {
       
        $this->view('Man_Add_Invoice');
    }

    public function updatemyaccount() {
       
        $this->view('Man_Update_My_Account');
    }
    
}
