<?php 
	$year = $_GET['year'];
	$agency_id = $_GET['agency_id'];
	$row = $system->selected_agency($agency_id);

?>
<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><?php echo $row['org_name']; ?> Performance Report</h3>
  </div>
  <div class="panel-body">
<?php 
	$row = $system->selected_agency_data($year,$agency_id);
	$saving = $row['total_abc'] - $row['total_ca'];
?>  
		<table class="table table-bordered table-condensed">
			<tbody>
				<tr>
					<td>Total ABC</td><td class="right"><?php echo number_format($row['total_abc'],2); ?></td>
				</tr>
				<tr>
					<td>Total PO</td><td class="right"><?php echo number_format($row['total_ca'],2); ?></td>
				</tr>
				<tr>
					<td>Actual Savings,(ABC-PO)</td><td class="right"><?php echo number_format($saving,2); ?></td>
				</tr>
				<tr>
					<td>Savings Effeciency, %</td><td class="right"><?php echo number_format(($saving / $row['total_abc']) * 100,2);  ?></td>
				</tr>
				<tr>
					<td>On process ABC</td><td class="right"></td>
				</tr>
			</tbody>
		</table>
		<hr class="hr">
		<a href="a_page.php?page=a_home" class="btn btn-success btn-block"><i class="fa fa-arrow-left"></i> Back</a>
  </div>
</div>