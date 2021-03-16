 <?php
class Pages extends Controller {
    public function __construct() {
        //$this->userModel = $this->model('Operations');
    }

    public function drugstockview() {
        
        $this->view('Drug_Stock_page');
    }
    public function notificationmanagerview() {
       
        $this->view('Notification_Manager');
    }
    public function adddrugstockpageview() {
       
        $this->view('Add_Drug_Stock_Page');
    }
    public function addsupplierorderview() {
       
        $this->view('Add_Supplier_Order');
    }
    public function drugstockupdateformview() {
       
        $this->view('Drug_Stock_Update_Form');
    }
    public function inquiriesmanagerview() {
       
        $this->view('Inquiries_Manager');
    }
    public function myaccountmanagerview() {
       
        $this->view('My_Account_Manager');
    }
    public function stockrefilformview() {
       
        $this->view('Stock_Refil_Form');
    }
    public function supplierordersview() {
       
        $this->view('Supplier_Orders');
    }
    public function updatesupplierorderview() {
       
        $this->view('Update_Supplier_Order');
    }
     public function stockrefilview() {
       
        $this->view('Stock_Refil');
    }
    public function homeView(){
        $this ->view("Home");
    }
    
    public function cartView(){
        $this ->view("Cart");
    }
    public function complaintView(){
        $this ->view("Complaint");
    }
    public function editProfileView(){
        $this ->view("EditProfile");
    }
    public function fogotPasswordView(){
        $this ->view("FogotPassword");
    }
   
    public function homeAfterLoginView(){
        $this ->view("HomeAfterLogin");
    }
    public function makeOrderView(){
        $this ->view("MakeOrder");
    }
    public function myOrdersView(){
        $this ->view("MyOrders");
    }
    public function registerView(){
        $this ->view("Register");
    }
    public function uploadPrescriptionView(){
        $this ->view("UploadPrescription");
    }
    public function ViewOrderView(){
        $this ->view("ViewOrder");
    }

    public function tempView(){
        $this ->view("temp");
    }

    public function passwordRecoverVIew(){
        $this ->view("passwordRecover");
    }
   
//pharmacist..
    public function make_order() {

        $this->view('pc_make_order');
    }
    public function view_order() {

        $this->view('pc_view_order');
    }

    public function show_confirm_orders() {

        $this->view('pc_confirmed_orders');
    }

    
}
