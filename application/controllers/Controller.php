<?php
class Controller extends framework {

    public function __construct(){

        $this->helper("link");
        $this->accountModel = $this->model('accountModel');
    }
    public function getCategoryList(){
        $menu = array();
        $parentCategory = $this->accountModel->getdata();
        foreach ($parentCategory as $key => $value) {
            $menu[$value->id]['mainCat'][] = $value;
            $childCategory = $this->accountModel->getchildData($value->id);
            if(count($childCategory) > 0){
                foreach ($childCategory as $ckey => $cvalue) {
                    $menu[$value->id]['childCat'][$cvalue->id] = $cvalue;
                }
            }
        }
        // echo "<pre>";
        // var_dump($menu);exit;

        return $menu;
    }
    public function getSettingdata(){
       $menu = array();
       $Settingsdata = $this->accountModel->getSetdata();
       foreach ($Settingsdata as $key => $value) {
        $menu[$value->id]['setdata'][] = $value;
       
    }

    return $menu;

}
}
?>
