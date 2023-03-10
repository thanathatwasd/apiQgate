<?php
class updatedata extends CI_Controller
{

	public function updateactive(){
		$id =  $_GET["id"];
		$datetime =  $_GET["datetime"];

          
		$res= $this->mainoffice_model->updateactive($id,$datetime );
		echo json_encode($res);
		
	   }

	   public function updateInfoPart(){
		
		$partid = $_GET["partid"];
		
		$partcount = $_GET["partcount"];
		$staffname = $_GET["staffname"];
		$selectdate = $_GET["dodate"];

		$id = $this->mainoffice_model->Get_ID_table("msp_id","mst_select_part_app","msp_part_no = '$partid'"); 
		
		$res= $this->mainoffice_model->updateInfoPart($id,$partcount,$staffname,$selectdate );
		echo json_encode($res);
		
	   }

	   public function updateQRProduct(){
		$oldtagfaid = $_GET["oldtagfaid"];
		$stationid = $_GET["stationid"];
		$workshift = $_GET["workshift"];
		$productcount = $_GET["productcount"];	
		$productcheckcount = $_GET["productcheckcount"];
		$staffcode = $_GET["staffcode"];
		$productqr = $_GET["productqr"];
		$timecheck = $_GET["timecheck"];


	
		$res= $this->mainoffice_model->updateQRProduct($oldtagfaid,$stationid, $workshift, $productcount
		, $productcheckcount,  $staffcode,$productqr ,$timecheck );
		echo json_encode($res);
		
	   }



	   public function updateDuringTime(){
		$lotdate = $_GET["lotdate"];
		$staffname = $_GET["staffname"];
		$stationid = $_GET["stationid"];
		$workdate = $_GET["workdate"];	
		$workshift = $_GET["workshift"];
		$res= $this->mainoffice_model->updateDuringTime($lotdate,$staffname,$stationid,$workdate,$workshift);
		echo json_encode($res);
		
	   }


	   public function updateSelectPart(){
		$partno =  $_GET["partno"];
		$macadd =  $_GET["macadd"];

          
		$res= $this->mainoffice_model->updateSelectPart($partno,$macadd);
		echo json_encode($res);
		
	   }




	   public function updateFlgProduct(){
		$productid =  $_GET["productid"];

          
		$res= $this->mainoffice_model->updateFlgProduct($productid );
		echo json_encode($res);
		
	   }


	   public function updateconfigdeletemacaddold(){
		$macaddress =  $_GET["macaddress"];

          
		$res= $this->mainoffice_model->updateconfigdeletemacaddold($macaddress );
		echo json_encode($res);
		
	   }

	   


	   public function updateFlgProductManual(){
		$tagfa =  $_GET["tagfa"];
		$productcount =  $_GET["productcount"];
          
		$res= $this->mainoffice_model->updateFlgProductManual($tagfa,$productcount );
		echo json_encode($res);
		
	   }

	   
	   public function updateStatusDefectCount(){
		$defectgroup =  $_GET["defectgroup"];
		$staffcode =  $_GET["staffcode"];
          
		$res= $this->mainoffice_model->updateStatusDefectCount($defectgroup,$staffcode );
		echo json_encode($res);
		
	   }

	   public function updateConfigMacAddress(){
		
		$phase = $_GET["phase"];
		$zone = $_GET["zone"];
		$station = $_GET["station"];
		$macaddress = $_GET["macaddress"];
		$empcode = $_GET["empcode"];
		$setdefaultpartno = $_GET["setdefaultpartno"];
		
		$res= $this->mainoffice_model->updateConfigMacAddress($phase,$zone,$station,$macaddress,$empcode,$setdefaultpartno);
		echo json_encode($res);
		
	   }

	   public function updateDefectCount(){

		$configposition = $_GET["configposition"];
		$countdefect = $_GET["countdefect"];
		$staffcode = $_GET["staffcode"];
		$datatecurrent = $_GET["datatecurrent"];
		$producttype = $_GET["producttype"];
		
		$res= $this->mainoffice_model->updateDefectCount($configposition,$countdefect,$staffcode,$datatecurrent,$producttype);
		echo json_encode($res);
		
	   }

}
?>