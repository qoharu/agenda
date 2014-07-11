<?php
	include "connection.php";

	$query = mysql_query("SELECT * FROM surat");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!-- This file has been downloaded from Bootsnipp.com. Enjoy! -->
    <title>Bootstrap Snipp for Datatable - Bootsnipp.com</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
            </style>
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>
<body>
<!-- <script src="http://templateplanet.info/tooltip.js"></script>
<script src="http://templateplanet.info/modal.js"></script> -->


<div class="container">
	<div class="row">		
      	<div class="col-md-12">
        <h4>Agenda Surat Kedinasan</h4> <button class="btn btn-danger btn-s" data-title='Create New' data-toggle='modal' data-target='#new' data-placement='top'>Buat Baru</button>
        <div class="table-responsive"> 
              <table id="mytable" class="table table-bordred table-striped table-hover">
                   <thead>
	                   <th>ID</th>
	                   <th>No Surat</th>
	                   <th>Tanggal</th>
	                   <th>Tgl Terima</th>
	                   <th>Asal Surat</th>
	                   <th>Perihal</th>
	                   <th>Keterangan</th>
	                   <th>Edit</th>
	                   <th>Delete</th>
                   </thead>
    <tbody>
    <tr>
   	<?php
   		while($data = mysql_fetch_assoc($query)){
	   		$id = $data['id'];
	   		$no_surat = $data['no_surat'];
	   		$tanggal = $data['tanggal'];
	   		$tanggal_terima = $data['tanggal_terima'];
	   		$asal_surat = $data['asal_surat'];
	   		$perihal = $data['perihal'];
	   		$keterangan = $data['keterangan'];

	   		echo "<tr>";
	   		echo "<td>$id</td>";
		    echo "<td>$no_surat</td>";
		    echo "<td>$tanggal</td>";
		    echo "<td>$tanggal_terima</td>";
		    echo "<td>$asal_surat</td>";
		    echo "<td>$perihal</td>";
		    echo "<td>$keterangan</td>";
		    echo "<td>
		    		<p><button class='btn btn-primary btn-xs' data-title='Edit' data-toggle='modal' data-target='#edit' data-placement='top' rel='tooltip'>
		    		<span class='glyphicon glyphicon-pencil'></span>
		    		</button></p>
		    	  </td>";
		    echo "<td>
		    		<p><button onclick=\"hapus('$id','$no_surat','$tanggal','$tanggal_terima','$asal_surat','$perihal','$keterangan')\" class='btn btn-danger btn-xs' data-title='Delete' data-toggle='modal' data-target='#delete' data-placement='top' rel='tooltip'>
		    		<span class='glyphicon glyphicon-trash'></span>
		    		</button></p>
		    	  </td>";
		   	echo "</tr>";
   		}  
    ?>
    </tbody>
        
</table>

<div class="clearfix"></div>
<ul class="pagination pull-right">
  <li class="disabled"><a href="#"><span class="glyphicon glyphicon-chevron-left"></span></a></li>
  <li class="active"><a href="#">1</a></li>
  <li><a href="#">2</a></li>
  <li><a href="#">3</a></li>
  <li><a href="#">4</a></li>
  <li><a href="#">5</a></li>
  <li><a href="#"><span class="glyphicon glyphicon-chevron-right"></span></a></li>
</ul>
                
            </div>
            
        </div>
	</div>
</div>


<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
   		<div class="modal-content">
        	<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        		<h4 class="modal-title custom_align" id="Heading">Edit Your Detail</h4>
      		</div>
          	<div class="modal-body">
          		<div class="form-group">
        			<input class="form-control " type="text" placeholder="Mohsin">
        		</div>
        		<div class="form-group">
        			<input class="form-control " type="text" placeholder="Irshad">
        		</div>
        		<div class="form-group">
        			<textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    			</div>
      		</div>
          	<div class="modal-footer ">
        		<button type="button" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      		</div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
 </div>

 <div class="modal fade" id="new" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
   		<div class="modal-content">
        	<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        		<h4 class="modal-title custom_align" id="Heading">Tulis baru</h4>
      		</div>
          	<div class="modal-body">
          		<div class="form-group">
        			<input class="form-control " type="number" placeholder="No Surat">
        		</div>
        		<div class="form-group">
        			<input class="form-control " type="text" class="datepicker" placeholder="Tanggal">
        		</div>
        		<div class="form-group">
        			<textarea rows="2" class="form-control" placeholder="CB 106/107 Street # 11 Wah Cantt Islamabad Pakistan"></textarea>
    			</div>
      		</div>
          	<div class="modal-footer ">
        		<button type="button" type="submit" class="btn btn-warning btn-lg" style="width: 100%;"><span class="glyphicon glyphicon-ok-sign"></span> Update</button>
      		</div>
        </div>
    <!-- /.modal-content --> 
  </div>
      <!-- /.modal-dialog --> 
 </div>
    
    
    
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
        	<div class="modal-header">
        		<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        		<h4 class="modal-title custom_align" id="Heading">Delete this entry</h4>
      		</div>
          	<div class="modal-body">
       			<div class="alert alert-warning">
       			<span class="glyphicon glyphicon-warning-sign"></span>
       				Apakah anda yakin akan menghapus data berikut?<br>
       				No Surat   :<p id="delno"> <script type="text/javascript">document.write(NO);</script></p> <br>
       				Tanggal    :<p id="deltgl"> </p> <br>
       				Tgl Terima :<p id="deltglterima"> </p> <br>
       				Asal surat :<p id="delasal"> </p> <br>
       				Perihal    :<p id="delperihal"> </p> <br>
       				Keterangan :<p id="delketerangan"> </p> <br>
       			</div>
      		</div>
        <div class="modal-footer ">
        	<button type="button" class="btn btn-warning" ><span class="glyphicon glyphicon-ok-sign"></span> Ya</button>
        	<button type="button" class="btn btn-warning" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Tidak</button>
      	</div>
        </div>
    <!-- /.modal-content --> 
	</div>
      <!-- /.modal-dialog --> 
</div>

    <script type="text/javascript">

		$(function () {
            $("[rel='tooltip']").tooltip();
        });

		var NO;
	    	function hapus(id,no,tgl,tglTerima,asal,perihal,keterangan){
	    		NO = no;

	    		document.querySelector("#delid").innerHTML = id;
	    		document.querySelector("#delno").innerHTML = no;
	    		document.querySelector("#deltgl").innerHTML = tgl;
	    		document.querySelector("#deltglterima").innerHTML = tglTerima;
	    		document.querySelector("#delasal").innerHTML = asal;
	    		document.querySelector("#delperihal").innerHTML = perihal;
	    		document.querySelector("#delketerangan").innerHTML = keterangan;

				/*ID = id;
				NO = no;
				TGL = tgl;
				TGLTERIMA = tglTerima;
				ASAL = asal;
				PERIHAL = perihal;
				KETERANGAN = keterangan;*/
			}
    </script>
</body>
</html>