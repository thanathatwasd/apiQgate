<?php
class mainoffice_model extends CI_Model

{

	public function getDatabaseServerName()
	{
		$sql = "EXEC [dbo].[GET_DATABASESERVER]";
		$res = $this->db->query($sql);
		$row = $res->result_array();
		
		return $row;
		
	}
	public function getLocalHost()
	{
		$sql = "EXEC [dbo].[GET_LOCALHOST]";
		$res = $this->db->query($sql);
		$row = $res->result_array();
		
		return $row;
		
	}

	//**แปลงค่าที่รับมาจาก String เป็น id */
	public function Get_ID_table($attr , $table , $condition ){
        $sql = "select  $attr from $table where $condition";
        $query = $this->db->query($sql);
        $get = $query->result_array();
        if (empty($get)){
            return  "0";
        }else{
            return $get["0"][$attr];
        }
    }
	/////// GET_DATA
	public function getUser($name)
	{
		
		$sql = "EXEC [dbo].[GET_USER] @emp_code= '{$name}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}

	public function getAdmin($name)
	{
		
		$sql = "EXEC [dbo].[GET_DATA_ADMIN] @emp_code= '{$name}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}
	public function getPhase()
	{
		$sql = "EXEC [dbo].[GET_PHASE]";
		$res = $this->db->query($sql);
		$row = $res->result_array();
		
		return $row;
		
	}


	public function getZone($phase)
	{
		
		
		$sql = "EXEC [dbo].[GET_ZONE] @phase_id= '{$phase}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}

	
	public function getWorkShift($timeshift)
	{
		
		$sql = "EXEC [dbo].[GET_TIME_WORK_SHIFT] @time_work_shift= '{$timeshift}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}




	public function getPosition($phase, $zone)
	{
		
		$sql = "EXEC [dbo].[GET_POSITION] @mpa_id= '{$phase}',@mza_id= '{$zone}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
															
		return $row;
	}


	public function getTypeByPosition($phase, $zone,$station)
	{
		
		$sql = "EXEC [dbo].[GET_TYPE_BY_POSITION] @mpa_id= '{$phase}', @mza_id= '{$zone}', @msa_id= '{$station}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
		//echo "<pre>";												
		return $row;
		//echo "</pre>";
		//pre คือการแยก Array ของแต่ละตัวออกมาให้อ่านง่าย
	}

	public function getSelectPart()
	{
		$sql = "EXEC [dbo].[GET_SELECT_PART]";
		$res = $this->db->query($sql);
		$row = $res->result_array();
		
		return $row;
		
	}
	public function getPartInfo($id,$partdate)
	{
		
		$sql = "EXEC [dbo].[GET_PART_INFO] @part_id='{$id}', @select_date='{$partdate}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}

	public function getOldTag($oldtag)
	{
		
		$sql = "EXEC [dbo].[GET_OLD_TAG_FA] @old_tag= '{$oldtag}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}

	public function getSelectPartName($name)
	{
		$sql = "EXEC [dbo].[GET_PARTNAME] @msp_part_no= '{$name}'";
		$res = $this->db->query($sql);
		$row = $res->result_array();
		
		return $row;
		
	}
	public function getMenu($staffname)
	{
		
		
		$sql = "EXEC [dbo].[GET_MENU] @emp_code= '{$staffname}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}

	public function getPartTagFA($partno)
	{
		
		$sql = "EXEC [dbo].[GET_PART_TAGFA] @part_no= '{$partno}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}

	public function getPartSubString($part_no)
	{
		
		$sql = "EXEC [dbo].[GET_SUBSTRING] @part_no= '{$part_no}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}


	public function getPartCodeMaster($id)
	{
		
		$sql = "EXEC [dbo].[GET_CODEMASTER] @id_code_master='{$id}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}
	public function getIdWorkShift($id)
	{
		
		$sql = "EXEC [dbo].[GET_ID_WORK_SHIFT] @workshift_id='{$id}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}
	public function getIdTagfa($id)
	{
		
		$sql = "EXEC [dbo].[GET_ID_TAG_FA] @tag_fa_id='{$id}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}
	public function getIddigit($id)
	{
		
		$sql = "EXEC [dbo].[GET_ID_NAME_DIGIT] @name_digit_id='{$id}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}

	public function getQrProduct($qrproduct)
	{
		
		$sql = "EXEC [dbo].[GET_QR_PRODUCT] @qrproduct='{$qrproduct}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}



	
	public function getQProductId($productid)
	{
		
		$sql = "EXEC [dbo].[GET_ID_PRODUCT] @product_id='{$productid}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}



	public function getDuringTime($stationid,$workdate,$workshift)
	{
		
		$sql = "EXEC [dbo].[GET_STAFF_DURING_TIME] @station_id='{$stationid}', @work_date='{$workdate}', @work_shift='{$workshift}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}
	public function getDefect()
	{
		
		$sql = "EXEC [dbo].[GET_DEFECT]";
		$res = $this->db->query($sql);
		$row = $res->result_array();
		
		return $row;
		
	}
	public function getDefectGroup($stationid,$defectid)
	{
		
		$sql = "EXEC [dbo].[GET_DEFECT_GROUP_ID] @station_id='{$stationid}', @defect_id='{$defectid}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}
	public function getDefectCount($productdefectid,$datecurrent,$producttype)
	{

		$sql = "EXEC [dbo].[GET_DEFECT_COUNT] @product_defectid='{$productdefectid}', @date_current='{$datecurrent}', @product_type='{$producttype}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}

public function getdefectID($id)
	{
		
		$sql = "EXEC [dbo].[GET_DEFECT_ID] @defect_id='{$id}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																
		return $row;
	}























	////INSERT_DATA
	public function insertloglogin($id)
	{
		$sql = "EXEC [dbo].[INSERT_LOG_ACTIVE] @staff_id= '{$id}'";
	 	$res = $this->db->query($sql);
		 if($res){   
			return true;	   

		}else {
			return false;
		}
	}
	public function insertlogpart($id,$staffname)
	{
		$sql = "EXEC [dbo].[INSERT_LOG_PART] @part_id= '{$id}', @staff_id= '{$staffname}'";
	 	$res = $this->db->query($sql);
		 if($res){   
			return true;	   

		}else {
			return false;
		}
		
	}
	public function insertPartInfo($id,$partcount,$staffname)
	{

		$sql = "EXEC [dbo].[INSERT_PART_INFO] @part_id= '{$id}', @part_count= '{$partcount}', @staff_name= '{$staffname}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}

	public function insertTAGFA($codemaster,$tagfa,$linecd,$plandate,$seqplan,$partno,$actualdate1,$snp
	,$lotno,$actualdate2,$seqactual,$plant,$box,$lotcur)
	{

		$sql = "EXEC [dbo].[INSERT_INFO_TAG_FA] @part_code_master= '{$codemaster}', @part_tag_fa= '{$tagfa}', @part_linecd= '{$linecd}',@part_plan_date= '{$plandate}'
		, @part_seq_plan= '{$seqplan}'
		, @part_no= '{$partno}'
		, @part_actual_date1= '{$actualdate1}'
		, @part_snp= '{$snp}'
		, @part_lot_no= '{$lotno}'
		, @part_actual_date2= '{$actualdate2}'
		, @part_seq_actual= '{$seqactual}'
		, @part_plant= '{$plant}'
		, @part_box= '{$box}'
		, @lot_cur= '{$lotcur}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}

	public function insertQRProduct($oldtagfaid,$stationid, $partdigit, $workshift, $productcount,$productrank
	, $productcheckcount, $productqr , $staffcode,$timecheck)
	{

		$sql = "EXEC [dbo].[INSERT_PRODUCTQR] @old_tag= '{$oldtagfaid}', @station_id= '{$stationid}', @partname_digit= '{$partdigit}',@work_shift= '{$workshift}'
		, @product_count= '{$productcount}'
		, @product_rank= '{$productrank}'
		, @product_check_count= '{$productcheckcount}'
		, @product_qr= '{$productqr}'
		, @staff_code= '{$staffcode}'
		, @time_check= '{$timecheck}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}



	public function insertDuringTime($stationid,$workshift,$workdate,$staffname)
	{

		$sql = "EXEC [dbo].[INSERT_WORK_DURING_TIME] @station_id= '{$stationid}', @work_shift= '{$workshift}', @work_date='{$workdate}', @staff_name='{$staffname}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}

	public function insertInfoDefect($defectid,$qrid,$numng,$staffname)
	{

		$sql = "EXEC [dbo].[INSERT_INFO_DEFECT] @defect_id= '{$defectid}', @qrproduct_id= '{$qrid}', @num_ng='{$numng}', @staff_code='{$staffname}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}



	public function insertStaffWorker($duringtimeid,$staffname)
	{

		$sql = "EXEC [dbo].[INSERT_STAFF_WORKER] @during_time_id= '{$duringtimeid}', @staff_name= '{$staffname}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}



	public function insertDefectcount($stationid,$defectcodeid,$numdefect,$staffname,$ngornc)
	{

		$sql = "EXEC [dbo].[INSERT_DEFECT_COUNT] @defectgroup_id= '{$stationid}', @defectcode_id= '{$defectcodeid}', @num_defect='{$numdefect}', @staff_code='{$staffname}', @ng_or_nc='{$ngornc}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}


	public function insertTagQgateComplete($oldtag,$countbox,$tagcount,$empcode,$tagcomplete)
	{

		$sql = "EXEC [dbo].[INSERT_TAG_QGATE_COMPLETE] @old_tag= '{$oldtag}', @count_box= '{$countbox}', @tag_count='{$tagcount}', @emp_code='{$empcode}', @tag_complete='{$tagcomplete}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}



	public function insertInfoDefectCount($defectgroupid,$productype,$countdefect,$staffcode,$partno)
	{

		$sql = "EXEC [dbo].[INSERT_INFO_DEFECT_COUNT] @defectgroup_id= '{$defectgroupid}', @product_type= '{$productype}', @count_defect= '{$countdefect}', @staff_code='{$staffcode}', @part_no='{$partno}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}














	///update_DATA

	public function updateactive($id,$datetime){
		$sql = "EXEC [dbo].[UPDATE_LOG_ACTIVE] @staff_id= '{$id}' , @staff_date ='{$datetime}'";
		$res = $this->db->query($sql);
		if($res){
		 return true;
		}else{
		 return false; 
		}

	}
	public function updateInfoPart($id,$partcount,$staffname,$selectdate){
		echo $id, $partcount, $staffname, $selectdate;
		$sql = "EXEC [dbo].[UPDATE_PART_INFO] @part_id= '{$id}' , @part_count ='{$partcount}', @staff_name ='{$staffname}', @select_date ='{$selectdate}'";
		$res = $this->db->query($sql);
		if($res){
		 return true;
		}else{
		 return false; 
		}

	}

	public function updateSelectPart($partno,$macadd){
		$sql = "EXEC [dbo].[UPDATE_CONFIG_SELECT_PART] @select_part= '{$partno}' , @mac_address ='{$macadd}'";
		$res = $this->db->query($sql);
		if($res){
		 return true;
		}else{
		 return false; 
		}

	}

	public function updateDefectCount($defectgroupid,$countdefect,$staffcode,$datatecurrent,$producttype)
	{
		$sql = "EXEC [dbo].[UPDATE_DEFECT_COUNT] @defectgroup_id= '{$defectgroupid}' , @count_defect ='{$countdefect}', @staff_code ='{$staffcode}', @date_current ='{$datatecurrent}', @product_type ='{$producttype}'";
		$res = $this->db->query($sql);
		if($res){
		 return true;
		}else{
		 return false; 
		}

	}





	public function updateQRProduct($oldtagfaid,$stationid, $workshift, $productcount
	, $productcheckcount,  $staffcode,$productqr ,$timecheck)
	{
		// echo "oldtagfaid ===>".$oldtagfaid;
		// echo "stationid ===>".$stationid;
		// echo "workshift ===>".$workshift;
		// echo "productcount ===>".$productcount;
		// echo "productcheckcount ===>".$productcheckcount;
		// echo "staffcode ===>".$staffcode;
		// echo "productqr ===>".$productqr;
		// echo "timecheck ===>".$timecheck;
		$sql = "EXEC [dbo].[UPDATE_QR_PRODUCT] @tag_id= '{$oldtagfaid}', @station_id= '{$stationid}'
		, @work_shift= '{$workshift}',@product_count= '{$productcount}'
		, @check_count= '{$productcheckcount}'
		, @staff_id= '{$staffcode}'
		, @qr_product= '{$productqr}'
		, @time_check= '{$timecheck}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}


	public function updateDuringTime($lotdate,$staffname,$stationid,$workdate,$workshift){
		
		$sql = "EXEC [dbo].[UPDATE_WORK_DURING_TIME] @lot_date= '{$lotdate}' , @staff_name ='{$staffname}', @station_id ='{$stationid}', @work_date ='{$workdate}', @work_shift ='{$workshift}'";
		$res = $this->db->query($sql);
		if($res){
		 return true;
		}else{
		 return false; 
		}

	}
	public function updateFlgProduct($productid){
		$sql = "EXEC [dbo].[UPDATE_STATUS_PRODUCT] @product_id= '{$productid}'";
		$res = $this->db->query($sql);
		if($res){
		 return true;
		}else{
		 return false; 
		}

	}

	
	public function updateFlgProductManual($tagfa,$productcount){
		$sql = "EXEC [dbo].[UPDATE_STATUS_PRODUCT_MANUAL] @tag_id= '{$tagfa}' , @count_product ='{$productcount}'";
		$res = $this->db->query($sql);
		if($res){
		 return true;
		}else{
		 return false; 
		}

	}

	public function updateStatusDefectCount($defectgroup,$staffcode){
		$sql = "EXEC [dbo].[UPDATE_INFO_DEFECT_COUNT] @defect_group= '{$defectgroup}' ,@staff_code ='{$staffcode}'";
		$res = $this->db->query($sql);
		if($res){
		 return true;
		}else{
		 return false; 
		}

	}




	
	///เครื่องใหม่


	public function getIdPhaseAndZone($phase, $zone)
	{
		
		$sql = "EXEC [dbo].[GET_ID_PHASE_STATION] @phase_id= '{$phase}',@zone_id= '{$zone}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
															
		return $row;
	}

	public function getMacAddress($macaddress)
	{
		
		$sql = "EXEC [dbo].[GET_MAC_ADDRESS] @mac_address= '{$macaddress}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
															
		return $row;
	}



	public function getPartNOToReprintTag($phase, $zone,$dateselect)
	{
		
		$sql = "EXEC [dbo].[GET_REPRINT_PARTNO_TAG] @phase_id= '{$phase}', @zone_id= '{$zone}', @date_select= '{$dateselect}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
		//echo "<pre>";												
		return $row;
		//echo "</pre>";
		//pre คือการแยก Array ของแต่ละตัวออกมาให้อ่านง่าย
	}

	public function getLotNoToReprintTag($phase, $zone,$dateselect,$parno)
	{
		
		$sql = "EXEC [dbo].[GET_REPRINT_LOT_TAG] @phase_id= '{$phase}', @zone_id= '{$zone}', @date_select= '{$dateselect}', @part_no= '{$parno}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
		//echo "<pre>";												
		return $row;
		//echo "</pre>";
		//pre คือการแยก Array ของแต่ละตัวออกมาให้อ่านง่าย
	}


	public function getBoxNoToReprintTag($dateselect,$parno,$lotno)
	{
		
		$sql = "EXEC [dbo].[GET_REPRINT_BOXNO_TAG]  @date_select= '{$dateselect}', @part_no= '{$parno}', @lot_no= '{$lotno}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
		//echo "<pre>";												
		return $row;
		//echo "</pre>";
		//pre คือการแยก Array ของแต่ละตัวออกมาให้อ่านง่าย
	}

	
	public function getDataScanPrint($tagqgate)
	{
		
		$sql = "EXEC [dbo].[GET_REPRINT_SCAN_PRINT] @tag_qgate= '{$tagqgate}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
															
		return $row;
	}

		
	public function getDataScanPrintDefectByTag($tagdefect)
	{
		
		$sql = "EXEC [dbo].[GET_REPRINT_SCANTAG_DEFECT] @tag_defect= '{$tagdefect}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
															
		return $row;
	}



	public function insertlogreprint($tagconpleteid,$empcode)
	{

		$sql = "EXEC [dbo].[INSERT_LOG_REPRINT_TAG] @tag_complete= '{$tagconpleteid}', @staff_code= '{$empcode}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}


	public function insertlogreprintDefect($tagconpleteid,$empcode)
	{

		$sql = "EXEC [dbo].[INSERT_LOG_REPRINT_TAG_DEFECT] @tag_complete= '{$tagconpleteid}', @staff_code= '{$empcode}'";
	 	$res = $this->db->query($sql);														
		return $res;
	}


	public function updateConfigMacAddress($phase,$zone,$station,$macaddress,$empcode){
		
		$sql = "EXEC [dbo].[UPDATE_CONFIG_MAC_ADDRESS] @phase_id= '{$phase}' , @zone_id ='{$zone}', @station_id ='{$station}', @mac_address ='{$macaddress}', @emp_code ='{$empcode}'";
		$res = $this->db->query($sql);
		if($res){
		 return true;
		}else{
		 return false; 
		}

	}

	public function getZoneSetMenu($zone)
	{
		
		
		$sql = "EXEC [dbo].[GET_ZONE_SETMENU] @zone_id= '{$zone}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}


	public function getTagByQrProduct($qrproduct)
	{
		
		
		$sql = "EXEC [dbo].[GET_REPRINT_BY_QR_PRODUCT] @qr_product= '{$qrproduct}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}

	public function getTagByQrProductDefect($qrproduct)
	{
		
		
		$sql = "EXEC [dbo].[GET_REPRINT_BY_QR_PRODUCT_DEFECT] @qr_product= '{$qrproduct}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}




	
	public function getPartNOToReprintDefect($dateselect)
	{
		
		$sql = "EXEC [dbo].[GET_REPRINT_PARTNO_DEFECT] @date_select= '{$dateselect}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
		//echo "<pre>";												
		return $row;
		//echo "</pre>";
		//pre คือการแยก Array ของแต่ละตัวออกมาให้อ่านง่าย
	}

	public function getLotNoToReprintDefect($dateselect,$partno)
	{
		
		$sql = "EXEC [dbo].[GET_REPRINT_LOTNO_DEFECT]  @date_select= '{$dateselect}', @part_no= '{$partno}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
		//echo "<pre>";												
		return $row;
		//echo "</pre>";
		//pre คือการแยก Array ของแต่ละตัวออกมาให้อ่านง่าย
	}


	public function getBoxNoToReprintDefect($dateselect,$parno,$lotno)
	{
		
		$sql = "EXEC [dbo].[GET_REPRINT_BOXNO_DEFECT]  @date_select= '{$dateselect}', @part_no= '{$parno}', @lot_no= '{$lotno}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
		//echo "<pre>";												
		return $row;
		//echo "</pre>";
		//pre คือการแยก Array ของแต่ละตัวออกมาให้อ่านง่าย
	}

	public function getQRProductToGenQr($tagfa)
	{
		
		$sql = "EXEC [dbo].[GET_QRPRODUCT_TO_GENQR] @tagfa_id= '{$tagfa}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
																	
		return $row;
	}
	public function getInfoDefectCount($defectgroup,$datecurr)
	{
		
		$sql = "EXEC [dbo].[GET_INFO_DEFECT_COUNT]  @defect_group= '{$defectgroup}', @date_curr= '{$datecurr}'";
	 	$res = $this->db->query($sql);
		$row = $res->result_array();
		//echo "<pre>";												
		return $row;
		//echo "</pre>";
		//pre คือการแยก Array ของแต่ละตัวออกมาให้อ่านง่าย
	}
















	}


?>
