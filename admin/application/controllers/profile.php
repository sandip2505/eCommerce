<?php 

// class profile extends framework {

//     public function __construct()
//     {
//       if(!$this->getSession('userId')){

//         $this->redirect("accountController/loginForm");

//       }
//        $this->helper("link");
//        $this->profileModel = $this->model("profileModel"); 
//     }
//     public function index(){
//      $userId = $this->getSession('userId');
//       $data = $this->profileModel->getData($userId);
 
//       $this->view("profile", $data);

//     }




//     public function logout(){

//         $this->destroy();
//         $this->redirect("../eCommerceShop");
//     }

// }


class profile extends framework {

    public function __construct()
    {
      if(!$this->getSession('userId')){

        $this->redirect("accountController/loginForm");

      }
       $this->helper("link");
       $this->profileModel = $this->model("profileModel"); 
    }
    public function index(){
     $userId = $this->getSession('userId');
      $data = $this->profileModel->getData($userId);
 
      $this->view("profile", $data);

    }
  
    public function logout(){

        $this->destroy();
        $this->redirect("../eCommerceShop");

    }

}

?>