/**
 * 全选和取消全选
 */
function gettddate() {
//	alert("OK122");
	if (confirm('查询数据？')) {
		// 通过以下方式找到table对象，在获取tr，td。然后获取td的html内容
		var e = e || window.event; 
		var target = e.target || e.srcElement; 
		rowIndex = target.parentNode.parentNode.rowIndex; 
        var table = document.getElementById("commodity");//获取第一个表格
        var text=table.rows[rowIndex].cells[2].innerText;
        var name=table.rows[rowIndex].cells[1].innerText;
        var type=table.rows[rowIndex].cells[3].innerText;
        var num=table.rows[rowIndex].cells[4].innerText;
        var money=table.rows[rowIndex].cells[5].innerText;
        location.href="add_comm_detail.php?name="+name+"&text="+text+"&type="+type+"&num="+num+"&money="+money;
	}
else return;
}
function checkAll(name) {
var el = document.getElementsByTagName('input');
var len = el.length;
for(var i=0; i<len; i++) {
if((el[i].type=="checkbox") && (el[i].name==name)) {
el[i].checked = true;
}
}
}
function clearAll(name) {
var el = document.getElementsByTagName('input');
var len = el.length;
for(var i=0; i<len; i++) {
if((el[i].type=="checkbox") && (el[i].name==name)) {
el[i].checked = false;
}
}
}
function edit(element){

	　var oldhtml = element.innerHTML;//获得元素之前的内容
	　var newobj = document.createElement('input');//创建一个input元素
	　newobj.type = 'text';//为newobj元素添加类型
	  newobj.value=oldhtml;
	　element.innerHTML = '';　　 //设置元素内容为空
	　element.appendChild(newobj);//添加子元素
	　newobj.focus();//获得焦点
	  //设置newobj失去焦点的事件
	　newobj.onblur = function(){
	   //下面应该判断是否做了修改并使用ajax代码请求服务端将id与修改后的数据提交
	   alert(element.id);
	      //当触发时判断newobj的值是否为空，为空则不修改，并返回oldhtml
	      element.innerHTML = this.value ? this.value : oldhtml;
	   }
	}
function doclick_comm(e) 
{ 
var oldhtml = e.innerHTML;//获得元素之前的内容
alert("查看"+oldhtml+"详细信息"); 
location.href="commodity_deital.php?comm_name="+oldhtml;

}
function doclick_supp(e) 
{ 
var oldhtml = e.innerHTML;//获得元素之前的内容
alert("查看"+oldhtml+"详细信息"); 

location.href="producer.php?name="+oldhtml;
}
function allow() {
	if (confirm('查询数据？')) {
		// 通过以下方式找到table对象，在获取tr，td。然后获取td的html内容
		var e = e || window.event; 
		var target = e.target || e.srcElement; 
		rowIndex = target.parentNode.parentNode.rowIndex; 
        var table = document.getElementById("commodity");//获取第一个表格
        var name=table.rows[rowIndex].cells[1].innerText;
        var num_need=table.rows[rowIndex].cells[2].innerText;
        var num_have=table.rows[rowIndex].cells[3].innerText;
        var id=table.rows[rowIndex].cells[0].innerText;
        
        if(eval(num_have)<eval(num_need)){
        	 alert("储量不足"+num_need+"===="+num_have);
        }
        else{
        location.href="PHP/allow.php?name="+name+"&num="+num_need+"&id="+id;
	}}
}
function refuse() {
	if (confirm('查询数据？')) {
		// 通过以下方式找到table对象，在获取tr，td。然后获取td的html内容
		var e = e || window.event; 
		var target = e.target || e.srcElement; 
		rowIndex = target.parentNode.parentNode.rowIndex; 
        var table = document.getElementById("commodity");//获取第一个表格
        var name=table.rows[rowIndex].cells[1].innerText;
        var num0=table.rows[rowIndex].cells[2].innerText;
        var num1=table.rows[rowIndex].cells[3].innerText;
        var id=table.rows[rowIndex].cells[0].innerText;
       
       
        location.href="PHP/refuse.php?name="+name+"&num="+num0+"&id="+id;
	}
else return;
}
function back_gettddate() {
//	alert("OK122");
	if (confirm('查询详细数据？')) {
		// 通过以下方式找到table对象，在获取tr，td。然后获取td的html内容
		var e = e || window.event; 
		var target = e.target || e.srcElement; 
		rowIndex = target.parentNode.parentNode.rowIndex; 
        var table = document.getElementById("commodity");//获取第一个表格
        var text=table.rows[rowIndex].cells[1].innerText;
        var text2=table.rows[rowIndex].cells[2].innerText;
        location.href="back_list_detail.php?name="+text+"&producer_name="+text2;
	}
else return;
}
function down_gettddate() {
//	alert("OK122");
	if (confirm('进入降价促销？')) {
		// 通过以下方式找到table对象，在获取tr，td。然后获取td的html内容
		var e = e || window.event; 
		var target = e.target || e.srcElement; 
		rowIndex = target.parentNode.parentNode.rowIndex; 
        var table = document.getElementById("commodity");//获取第一个表格
        var text=table.rows[rowIndex].cells[1].innerText;
       
        location.href="up_down.php?conmdity_name="+text;
	}
else return;
}
function blacklist_gettddate() {
//	alert("OK122");
	if (confirm('查看公司详细信息')) {
		// 通过以下方式找到table对象，在获取tr，td。然后获取td的html内容
		var e = e || window.event; 
		var target = e.target || e.srcElement; 
		rowIndex = target.parentNode.parentNode.rowIndex; 
        var table = document.getElementById("commodity");//获取第一个表格
        var text=table.rows[rowIndex].cells[1].innerText;
       
        location.href="balck_producer.php?name="+text;
	}
else return;
}
function delete_time(){
//	alert("OK122");
	if (confirm('删除该限时促销')) {
		// 通过以下方式找到table对象，在获取tr，td。然后获取td的html内容
		var e = e || window.event; 
		var target = e.target || e.srcElement; 
		rowIndex = target.parentNode.parentNode.rowIndex; 
        var table = document.getElementById("commodity");//获取第一个表格
        var text=table.rows[rowIndex].cells[1].innerText;
       
        location.href="PHP/time_seller_delete.php?name="+text;
	}
else return;
}
function long_time(){
//	alert("OK122");
	if (confirm('延期该促销？')) {
		// 通过以下方式找到table对象，在获取tr，td。然后获取td的html内容
		var e = e || window.event; 
		var target = e.target || e.srcElement; 
		rowIndex = target.parentNode.parentNode.rowIndex; 
        var table = document.getElementById("commodity");//获取第一个表格
        var text=table.rows[rowIndex].cells[1].innerText;
       
        location.href="add_time_sell.php?conmdity_name="+text;
	}
else return;
}
function now_gettddate(){
//	alert("OK122");
	if (confirm('查看最近销售情况？')) {
		// 通过以下方式找到table对象，在获取tr，td。然后获取td的html内容
		var e = e || window.event; 
		var target = e.target || e.srcElement; 
		rowIndex = target.parentNode.parentNode.rowIndex; 
        var table = document.getElementById("commodity");//获取第一个表格
        var text=table.rows[rowIndex].cells[1].innerText;
       
        location.href="sell_detail.php?comm_name="+text;
	}
else return;
}
