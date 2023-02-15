<?php
class insertdata extends CI_Controller
{
	public function insertloglogin()
    {
          $id = $_GET["idstaff"];

 
        $rs = $this->mainoffice_model->insertloglogin($id);
		echo json_encode($rs);

    }
    public function insertlogpart()
    {
      parse_str($_SERVER['QUERY_STRING'], $_GET); 
          $part = $_GET["part"];
          $staffname = $_GET["name"];
          $id = $this->mainoffice_model->Get_ID_table("msp_id","mst_select_part_app","msp_part_no = '$part'");
        $rs = $this->mainoffice_model->insertlogpart($id, $staffname);
		echo json_encode($rs);

    }


    public function insertPartInfo()
    {
          $partid = $_GET["partid"];
          $partcount = $_GET["partcount"];
          $staffname = $_GET["staffname"];

   
          $id = $this->mainoffice_model->Get_ID_table("msp_id","mst_select_part_app","msp_part_no = '$partid'");
        $rs = $this->mainoffice_model->insertPartInfo($id,$partcount,$staffname);
		echo json_encode($rs);

    }



    public function insertTAGFA()
    {
          $codemaster = $_GET["codemaster"];
          $tagfa = $_GET["tagfa"];
          $linecd = $_GET["linecd"];
          $plandate = $_GET["plandate"];
          $seqplan = $_GET["seqplan"];
          $partno = $_GET["partno"];
          $actualdate1 = $_GET["actualdate1"];
          $snp = $_GET["snp"];
          $lotno = $_GET["lotno"];
          $actualdate2 = $_GET["actualdate2"];
          $seqactual = $_GET["seqactual"];
          $plant = $_GET["plant"];
          $box = $_GET["box"];


        $rs = $this->mainoffice_model->insertTAGFA($codemaster,$tagfa,$linecd,$plandate,$seqplan,$partno,$actualdate1,$snp
        ,$lotno,$actualdate2,$seqactual,$plant,$box);
		echo json_encode($rs);

    }


    public function insertQRProduct()
    {
          $oldtagfaid = $_GET["oldtagfaid"];
          $stationid = $_GET["stationid"];
          $partdigit = $_GET["partdigit"];
          $workshift = $_GET["workshift"];
          $productcount = $_GET["productcount"];
          $productrank = $_GET["productrank"];
          $productcheckcount = $_GET["productcheckcount"];
          $productqr = $_GET["productqr"];
          $staffcode = $_GET["staffcode"];
          $timecheck = $_GET["counttime"];
// echo "oldtagfaid===> ". $oldtagfaid;
// echo "stationid===> ". $stationid;
// echo "partdigit===> ". $partdigit;
// echo "workshift===> ". $workshift;
// echo "productcount===> ". $productcount;
// echo "productrank===> ".$productrank;
// echo  "productcheckcount===> ".$productcheckcount;
// echo  "productqr===> ".$productqr;
// echo "staffcode===> ". $staffcode;
// echo "timecheck===> ". $timecheck; -->



        $rs = $this->mainoffice_model->insertQRProduct($oldtagfaid,$stationid, $partdigit, $workshift, $productcount,$productrank
        , $productcheckcount, $productqr , $staffcode,$timecheck);
		echo json_encode($rs);

    }


    

    public function insertDuringTime()
    {
          $stationid = $_GET["stationid"];
          $workshift = $_GET["workshift"];
          $workdate = $_GET["workdate"];
          $staffname = $_GET["staffname"];
echo "stationid===> ".$stationid;
echo  "workshift===> ".$workshift;
echo  "workdate===> ".$workdate;
echo "staffname===> ". $staffname;

        $rs = $this->mainoffice_model->insertDuringTime($stationid,$workshift,$workdate,$staffname);

    }



    public function insertStaffWorker()
    {
          $duringtimeid = $_GET["duringtimeid"];
          $staffname = $_GET["staffname"];
          echo  "duringtimeid===> ".$duringtimeid;
echo "staffname===> ". $staffname;
        $rs = $this->mainoffice_model->insertStaffWorker($duringtimeid,$staffname);
		echo json_encode($rs);

    }
 


    public function insertInfoDefect()
    {
          $defectid = $_GET["defectid"];
          $qrid = $_GET["qrid"];
          $numng = $_GET["numng"];
          $staffname = $_GET["staffname"];
        $rs = $this->mainoffice_model->insertInfoDefect($defectid,$qrid,$numng,$staffname);
		echo json_encode($rs);

    }


    public function insertDefectcount()
    {
          $stationid = $_GET["stationid"];
          $defectcodeid = $_GET["defectcodeid"];
          $numdefect = $_GET["numdefect"];
          $staffname = $_GET["staffname"];
          $ngornc = $_GET["ngornc"];
        $rs = $this->mainoffice_model->insertDefectcount($stationid,$defectcodeid,$numdefect,$staffname,$ngornc);
		echo json_encode($rs);

    }

    //เครื่องใหม่

    public function insertlogreprint()
    {
          $tagconpleteid = $_GET["tagconpleteid"];
          $empcode = $_GET["empcode"];


   
         
        $rs = $this->mainoffice_model->insertlogreprint($tagconpleteid,$empcode);
		echo json_encode($rs);

    }

}
?>


