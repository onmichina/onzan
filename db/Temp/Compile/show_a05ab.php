<?php if(!defined("HDPHP_PATH"))exit;C("SHOW_NOTICE",FALSE);?><!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>显示模版</title>
</head>
<body>
	<a href="http://localhost/github/onzan/db.php/News/add">发表文章</a>
	<table border="1" width="100%">
		<tr>
			<td>ID</td>
			<td>标题</td>
		</tr>
		<?php $hd["list"]["n"]["total"]=0;if(isset($news) && !empty($news)):$_id_n=0;$_index_n=0;$lastn=min(1000,count($news));
$hd["list"]["n"]["first"]=true;
$hd["list"]["n"]["last"]=false;
$_total_n=ceil($lastn/1);$hd["list"]["n"]["total"]=$_total_n;
$_data_n = array_slice($news,0,$lastn);
if(count($_data_n)==0):echo "";
else:
foreach($_data_n as $key=>$n):
if(($_id_n)%1==0):$_id_n++;else:$_id_n++;continue;endif;
$hd["list"]["n"]["index"]=++$_index_n;
if($_index_n>=$_total_n):$hd["list"]["n"]["last"]=true;endif;?>

			<tr>
				<td><?php echo $n['id'];?></td>
				<td><?php echo $n['title'];?></td>
			</tr>
		<?php $hd["list"]["n"]["first"]=false;
endforeach;
endif;
else:
echo "";
endif;?>
	</table>
	<?php echo $page;?>
</body>
</html>