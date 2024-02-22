
<?php include_once(G5_PATH.'/_common.php'); ?>

<script type="text/javascript">
function checkFrm(obj) {
 if(obj.wr_6.checked == false) {
  alert('개인정보 활동동의에 체크해주세요.');
  obj.wr_6.focus();
  return false;
 }
}
</script>

<table width=320 border="0" align="center" cellpadding="0" cellspacing="0" >
  <form name=frm method=post action="<?php echo G5_BBS_URL; ?>/write_update.php" onsubmit="return checkFrm(this);">
		<input type=hidden name=w        value="">
		<input type=hidden name=bo_table value="myform">
		<input type="hidden" name="token" value="<?php echo get_write_token('myform'); ?>">
		<input type=hidden name=wr_id    value="">
		<input type=hidden name=sca      value="">
		<input type=hidden name=sfl      value="">
		<input type=hidden name=stx      value="">
		<input type=hidden name=spt      value="">
		<input type=hidden name=sst      value="">
		<input type=hidden name=sod      value="">
		<input type=hidden name=s    value="s">
		<input type=hidden name=wr_subject  value="빠른 상담 신청">
		<input type=hidden name=wr_content  value="빠른 상담 신청">
        <input type=hidden name="wr_1"  value="">
	  <tr>
		<td width="320" height="150" align="center" valign=top style="border-bottom: 0px solid #ccc;">			  
		  <table width="320" border=0 cellpadding=0 cellspacing=0>
			<tr>
				<td  width="50px" height="30px" style="padding-left:10px;">
				  <div class="style7">이름</div>
				</td>
				<td width="50"> <input class='quick' type="text" name="wr_name" size="22" style="font-size: 12px; height:20px;" required itemname="이름"></td>
				<td width="79" rowspan="3">
			      <div align="right" >
			        <input name="image" type=image src="<?php echo $board_skin_url; ?>online/img/tyt04_bt03.png" alt="상담신청" >
		          </div>			    
		        </td>
			</tr>
			<tr>
			     <td height=40><div class="style7">휴대폰</div></td>
			     <td>
			       <select name="wr_7" style="height:20px" itemname="휴대폰" required >
				     <option value="010">010</option>
				     <option value="011">011</option>
				     <option value="016">016</option>
				     <option value="017">017</option>
				     <option value="018">018</option>
				     <option value="019">019</option>
			       </select>-
		           <input name="wr_8" type="text" required class='ed' style="width:35px;height:20px;border:1px solid #444444;" maxlength="4" itemname="휴대폰"/>-
		           <input name="wr_9" type="text" required class='ed' style="width:35px;height:20px;border:1px solid #444444;" maxlength="4" itemname="휴대폰"/></td>
			</tr>
			<tr>
			  <td width=50 height=30 style="padding-left:10px;">
			     <div class="style7">메모</div>
			  </td>
			  <td>
			     <input class='quick' type="text" name="wr_content" size="22" style="font-size: 12px; height:20px;" required itemname="메모">
			  </td>
			</tr>
			<tr align="center">
			  <td height="30" colspan="3">
			     <span class="style9">*고객님의 정보는 상담을 위해서만 사용됩니다.</span>
			  </td>
			</tr>
			<tr align="center">
			  <td colspan="3">
                <input type=checkbox name=wr_6 value="6"  required>
                <span class="style7">개인정보 활용동의</span><a href="../privacy.html" target="_blank"><img src="<?php echo $board_skin_url; ?>online/img/privacy.gif" width="50" height="16" border="0"></a>
              </td>
			</tr>
			<tr align="center">
			  <td height="10" colspan="3"></td>
			</tr>
	      </table>
	    </td>
	</tr>
  </form>
</table>
<!--//-->
