<br/>
<center>
<?
if($numPage>1){
?>
Total <?= $numRecord;?> Record(s) : <?=$numPage;?> Page(s)<br/>
<?
if($previousPage){
echo " <a style= \" text-decoration: none;\" href='$_SERVER[SCRIPT_NAME]?menu=$_GET[menu]&pages=$_GET[pages]&top=$perPage&page=$previousPage&search=$_REQUEST[search]&cmo_access_status=$_REQUEST[cmo_access_status]&cmo_access_efa=$_REQUEST[cmo_access_efa]&cmo_employee_status=$_REQUEST[cmo_employee_status]&cmo_access_emembers=$_REQUEST[cmo_access_emembers]&department_id=$_REQUEST[department_id]&company_id=$_REQUEST[company_id]'><< Back</a> ";
}
 
for($i=1; $i<=$numPage; $i++){
	if($i != $page){
		echo "[ <a style= \" text-decoration: none;\" href='".@$_SERVER[SCRIPT_NAME]."?menu=".@$_GET[menu]."&pages=".@$_GET[pages]."&top=".@$perPage."&page=$i&search=".@$_REQUEST[search]."&cmo_access_status=".@$_REQUEST[cmo_access_status]."&cmo_access_efa=".@$_REQUEST[cmo_access_efa]."&cmo_employee_status=".@$_REQUEST[cmo_employee_status]."&cmo_access_emembers=".@$_REQUEST[cmo_access_emembers]."&department_id=".@$_REQUEST[department_id]."&company_id=".@$_REQUEST[company_id]."'>$i</a> ]";
	}else{
		echo "<b> $i </b>";
	}
}
if($page!=$numPage){
	echo " <a style= \" text-decoration: none;\" href ='".@$_SERVER[SCRIPT_NAME]."?menu=".@$_GET[menu]."&pages=".@$_GET[pages]."&top=$perPage&page=$nextPage&search=".@$_REQUEST[search]."&cmo_access_status=".@$_REQUEST[cmo_access_status]."&cmo_access_efa=".@$_REQUEST[cmo_access_efa]."&cmo_employee_status=".@$_REQUEST[cmo_employee_status]."&cmo_access_emembers=".@$_REQUEST[cmo_access_emembers]."&department_id=".@$_REQUEST[department_id]."&company_id=".@$_REQUEST[company_id].">Next >></a> ";
}
//mysql_close($objConnect);
}
?>
<br/>
</center>