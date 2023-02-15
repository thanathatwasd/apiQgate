<?php
class getdata extends CI_Controller
{


     public function getDatabaseServerName()
     {



          $rs = $this->mainoffice_model->getDatabaseServerName();

          if (empty($rs)) {
               echo "0";
          } else {
               echo $rs[0]["scq_ip_address"];
          }
     }

     public function getLocalHost()
     {



          $rs = $this->mainoffice_model->getLocalHost();

          if (empty($rs)) {
               echo "0";
          } else {
               echo $rs[0]["scq_ip_address"];
          }
     }

     public function getUser()
     {
          $name = $_GET["name"];
          $rs = $this->mainoffice_model->getUser($name);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }
     public function getAdmin()
     {
          $name = $_GET["name"];


          $rs = $this->mainoffice_model->getAdmin($name);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }
     public function getPhase()
     {



          $rs = $this->mainoffice_model->getPhase();

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

   
     public function getZone()
     {
          parse_str($_SERVER['QUERY_STRING'], $_GET);
          $phase = $_GET["phase"];
          $id = $this->mainoffice_model->Get_ID_table("mpa_id", "mst_plant_admin_app", "mpa_name = '$phase'");
          $rs = $this->mainoffice_model->getZone($id);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }
     public function getPosition()
     {
          parse_str($_SERVER['QUERY_STRING'], $_GET);
          $phase = $_GET["phase"];
          $zone = $_GET["zone"];

          $id = $this->mainoffice_model->Get_ID_table("mpa_id", "mst_plant_admin_app", "mpa_name = '$phase'");
          $id2 = $this->mainoffice_model->Get_ID_table("mza_id", "mst_zone_admin_app", "mza_name = '$zone'");
          //**เช็คว่าตัวแปรที่เอามาแปลงเป็น id ถูกไหม */
          // echo $id;

          // echo "|||";
          // echo $id2;
          // exit();
          //**เช็คว่าตัวแปรที่เอามาแปลงเป็น id ถูกไหม */  

          $rs = $this->mainoffice_model->getPosition($id,  $id2);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }


     public function getTypeByPosition()
     {
          parse_str($_SERVER['QUERY_STRING'], $_GET);
          $phase = $_GET["phase"];
          $zone = $_GET["zone"];
          $station = $_GET["station"];
          //**เช็คว่าตัวแปรที่เอามาแปลงเป็น id ถูกไหม */
          // echo $id;

          // echo "|||";
          // echo $id2;
          // exit();
          //**เช็คว่าตัวแปรที่เอามาแปลงเป็น id ถูกไหม */  

          $rs = $this->mainoffice_model->getTypeByPosition($phase,  $zone,$station);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }



     public function getWorkShift()
     {
          $timeshift = $_GET["timeshift"];


          $rs = $this->mainoffice_model->getWorkShift($timeshift);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }



     public function getdefectID()
     {
          parse_str($_SERVER['QUERY_STRING'], $_GET);
          $defectcode = $_GET["defectcode"];
          $id = $this->mainoffice_model->Get_ID_table("md_id", "mst_defect_app", "md_defect_code = '$defectcode'");
          $rs = $this->mainoffice_model->getdefectID($id);

          if (empty( $rs  )) {
               echo "0";
          } else {
               echo json_encode( $rs );
          }
     }
     public function getDefectGroup()
     {
          $stationid = $_GET["stationid"];
          $defectid = $_GET["defectid"];
          $rs = $this->mainoffice_model->getDefectGroup($stationid,$defectid);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }










     public function getSelectPart()
     {



          $rs = $this->mainoffice_model->getSelectPart();

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getPartInfo()
     {
          parse_str($_SERVER['QUERY_STRING'], $_GET);
          $partname = $_GET["partname"];
          $partdate = $_GET["dodate"];
          $id = $this->mainoffice_model->Get_ID_table("msp_id", "mst_select_part_app", "msp_part_no = '$partname'");
          $rs = $this->mainoffice_model->getPartINFO($id, $partdate);
          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }



     public function getSelectPartName()
     {
          $name = $_GET["name"];


          $rs = $this->mainoffice_model->getSelectPartName($name);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }


     public function getOldTag()
     {
          $oldtag = $_GET["oldtag"];


          $rs = $this->mainoffice_model->getOldTag($oldtag);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }



     public function getMenu()
     {
          $staffname = $_GET["staffname"];


          $rs = $this->mainoffice_model->getMenu($staffname);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getPartTagFA()
     {
          $partno = $_GET["partno"];


          $rs = $this->mainoffice_model->getPartTagFA($partno);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getPartCodeMaster()
     {
          parse_str($_SERVER['QUERY_STRING'], $_GET);
          $codemaster = $_GET["codemaster"];
          $id = $this->mainoffice_model->Get_ID_table("mfcm_id", "mst_fa_code_master_app", "mfcm_name_code = '$codemaster'");
          $rs = $this->mainoffice_model->getPartCodeMaster($id);
          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getSubString()
     {
          $part_no = $_GET["partno"];


          $rs = $this->mainoffice_model->getPartSubString($part_no);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getQrProduct()
     {
          $qrproduct = $_GET["qrproduct"];


          $rs = $this->mainoffice_model->getQrProduct($qrproduct);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }


     public function getQProductId()
     {
          $productid = $_GET["productid"];


          $rs = $this->mainoffice_model->getQProductId($productid);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }


     public function getIdWorkShift()
     {
          $workshift = $_GET["workshift"];


          $id = $this->mainoffice_model->Get_ID_table("mws_id", "mst_work_shift_app", "mws_shift = '$workshift'");
          $rs = $this->mainoffice_model->getIdWorkShift($id );


          if (empty($rs)) {

               echo "0";
          } else {
               echo json_encode($rs);
          }
     }


     public function getIdTagfa()
     {
          $tagfa = $_GET["tagfa"];
        

     
          $id = $this->mainoffice_model->Get_ID_table("ifts_id", "info_fa_tag_scan_app", "ifts_tag = '$tagfa'");
          $rs = $this->mainoffice_model->getIdTagfa($id);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }
     public function getIddigit()
     {
          $namedigit = $_GET["namedigit"];
        


          $id = $this->mainoffice_model->Get_ID_table("mdt_id", "mst_dmc_type_app", "mdt_name = '$namedigit'");
          $rs = $this->mainoffice_model->getIddigit($id);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }


     public function getDuringTime()
     {
          $stationid = $_GET["stationid"];
          $workdate = $_GET["workdate"];
          $workshift = $_GET["workshift"];


          $rs = $this->mainoffice_model->getDuringTime($stationid,$workdate,$workshift);
     }
        
     public function getIdPhaseAndZone()
     {
       
          $phase = $_GET["phase"];
          $zone = $_GET["zone"];
          $id = $this->mainoffice_model->Get_ID_table("mpa_id", "mst_plant_admin_app", "mpa_name = '$phase'");
          $id2 = $this->mainoffice_model->Get_ID_table("mza_id", "mst_zone_admin_app", "mza_name = '$zone'");

          $rs = $this->mainoffice_model->getIdPhaseAndZone($id,  $id2);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }
     public function getPartNOToReprintTag()
     {
       
          $phase = $_GET["phase"];
          $zone = $_GET["zone"];
          $dateselect = $_GET["dateselect"];

          $rs = $this->mainoffice_model->getPartNOToReprintTag($phase,  $zone,$dateselect);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getPartNOToReprintDefect()
     {
       
          $dateselect = $_GET["dateselect"];

          $rs = $this->mainoffice_model->getPartNOToReprintDefect($dateselect);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getLotNoToReprintTag()
     {
       
          $phase = $_GET["phase"];
          $zone = $_GET["zone"];
          $dateselect = $_GET["dateselect"];
          $parno = $_GET["parno"];
          $rs = $this->mainoffice_model->getLotNoToReprintTag($phase, $zone,$dateselect,$parno);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getLotNoToReprintDefect()
     {
       
          $dateselect = $_GET["dateselect"];
        
          $partno = $_GET["partno"];

          $rs = $this->mainoffice_model->getLotNoToReprintDefect($dateselect,$partno);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getBoxNoToReprintTag()
     {
       
          $phase = $_GET["phase"];
          $zone = $_GET["zone"];
          $dateselect = $_GET["dateselect"];
          $parno = $_GET["parno"];
          $lotno = $_GET["lotno"];
          $rs = $this->mainoffice_model->getBoxNoToReprintTag($phase, $zone,$dateselect,$parno,$lotno);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }


     public function getBoxNoToReprintDefect()
     {
       

          $dateselect = $_GET["dateselect"];
          $parno = $_GET["parno"];
          $lotno = $_GET["lotno"];
          $rs = $this->mainoffice_model->getBoxNoToReprintDefect($dateselect,$parno,$lotno);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }
     public function getDataScanPrint()
     {
       
          $tagqgate = $_GET["tagqgate"];
          $rs = $this->mainoffice_model->getDataScanPrint($tagqgate);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getDataScanPrintDefectByTag()
     {
          $tagdefect = $_GET["tagdefect"];
          $rs = $this->mainoffice_model->getDataScanPrintDefectByTag($tagdefect);
          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }


     public function getMacAddress()
     {
       
          $macaddress = $_GET["macaddress"];


          $rs = $this->mainoffice_model->getMacAddress($macaddress);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function getZoneSetMenu()
     {
       
          $zone = $_GET["zone"];


          $rs = $this->mainoffice_model->getZoneSetMenu($zone);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }


     public function getTagByQrProduct()
     {
       
          $qrproduct = $_GET["qrproduct"];


          $rs = $this->mainoffice_model->getTagByQrProduct($qrproduct);

          if (empty($rs)) {
               echo "0";
          } else {
               echo json_encode($rs);
          }
     }

     public function GETLOT_TBKKFATHAILAND()
 {
  parse_str($_SERVER['QUERY_STRING'], $_GET); 
  $lot_dt = $_GET["lot_dt"];
  $_YEARS = array ('J', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I');
  $_MONTH = array ('L', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K');
  $D = date('d',strtotime($lot_dt));
  $M = date('m',strtotime($lot_dt));
  $Y = date('y',strtotime($lot_dt));
  //echo $_YEARS[($Y % 10)].$_MONTH[($M % 12)].$D; exit();
  echo $_YEARS[($Y % 10)].$_MONTH[($M % 12)].$D;
 }


}
?>