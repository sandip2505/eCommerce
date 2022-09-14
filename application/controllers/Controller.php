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
        
        return $menu;
    }
    public function getSettingdata($key){
       $menu = array();
       $Settingsdata = $this->accountModel->getSetdata($key);
       // echo "<pre>";
       // var_dump($Settingsdata[0]->name);exit;

    return $Settingsdata[0]->name;

}
}
?>
