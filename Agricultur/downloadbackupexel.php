<?php
include 'database.php';
$output="";
if ($_POST['export_exel']) {
	mysqli_set_charset($conn,'utf8');
	$query = "SELECT * FROM farmerinformation ORDER BY id DESC";
	$result = mysqli_query($conn,$query);
	if (mysqli_num_rows($result)>0) {
		$output .= '
          <table class="table" border="1">
          <tr>
            <th>ID</th>
            <th>FullName</th>
            <th>AdharNo</th>

          </tr>

          
		';
		while ($row = mysqli_fetch_array($result)) {
			$output .= '
              <tr>
                <td>'.$row["id"].'</td>
                <td>'.$row["FullName"].'</td>
                <td>'.$row["AdharNo"].'</td>
              </tr>
			';

		}
		$output .= '</table>';
		header('Content-Type: application/xls');
  header('Content-Disposition: attachment; filename=download.xls');
  echo $output;
  echo $row["id"];
	}
}

?>

