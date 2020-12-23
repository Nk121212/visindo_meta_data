<!DOCTYPE html>
<html>
	<head>

  		<title>Update Pelayanan</title>

		  <link href="<?=base_url()?>assets/img/favicon.png" rel="icon">
		  <link href="<?=base_url()?>assets/img/apple-touch-icon.png" rel="apple-touch-icon">

		  <!-- Google Fonts -->
		  <link href="<?=base_url()?>assets/css/my_css.css" rel="stylesheet">

		  <!-- Vendor CSS Files -->
		  <link href="<?=base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		  <link href="<?=base_url()?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
		  <link href="<?=base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
		  <link rel="stylesheet" href="<?=base_url('/assets/css/sweetalert.css')?>">

	</head>
	<body>

		<div class="col-lg-12" style="margin-top: 10px;font-size: small;">
			<div class="row">
				<div class="col-lg-2"></div>
				<div class="col-lg-8">

					<div class="card">
		              <div class="card-header bg-primary text-white">
		                Data Activity
		              </div>
		              <div class="card-body">

		              	<?php
		                  if(!empty($this->session->flashdata('message'))){
		                    $msg = $this->session->flashdata('message');
		                    echo '
		                      <div class="alert alert-'.$msg['color'].' alert-dismissible fade show" role="alert">
		                        <strong>'.ucfirst($msg['status']).'</strong> '.$msg['message'].'
		                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
		                          <span aria-hidden="true">&times;</span>
		                        </button>
		                      </div>
		                    ';
		                  }else{

		                  }
		              	?>

		              	<button style="margin-bottom: 10px;" class="btn btn-sm btn-primary text-white float-right" href="<?=base_url()?>Main/add_activity_modal" data-toggle="modal"> 
                <i class="bx bx-plus"></i> Tambah Activity</button>

		              	<div class="table-responsive">
							<table class="table table-hover table-activity text-center">
								<thead>
									<tr>
										<th>No</th>
										<th>Title</th>
										<th>Desc</th>
										<th>Image</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody></tbody>
							</table>
						</div>

		              </div>
		              <div class="card-footer text-center">

		              </div>
					
				</div>
				<div class="col-lg-2"></div>
			</div>
		</div>

	</body>

</html>

		<!-- Vendor JS Files -->
  	<script src="<?=base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  	<script src="<?=base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

	<script src="<?=base_url('/assets/js/sweetalert.min.js')?>"></script>
  	<!--script src="<?=base_url()?>assets/js/sweetalert.js"></script-->

  	<script src="<?=base_url()?>assets/js/my_script.js"></script>

  	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/datatables.min.css')?>" />
	<script type="text/javascript" src="<?=base_url('assets/js/datatables.min.js')?>"></script>

	<script>
		$(function() {
		    var dataTable = $('.table-activity').DataTable( {
		        ajax: {
		            url: "<?=base_url()?>ajax/activity.json",
		            data: function(data){
		                data.search.status = $("#status").val();
		                data.search.tgl1 = $("#tgl1").val();
		                data.search.tgl2 = $("#tgl2").val();
		                data.search.q = $("#search").val();
		            },
		            dataSrc: 'data',
		        },
		        searching: false,
		        fnInfoCallback: function( oSettings, iStart, iEnd, iMax, iTotal, sPre ) {
		            return "Menampilkan "+iStart+" Sampai "+iEnd+" Dari "+(oSettings.json ? oSettings.json.recordsTotal : iTotal)+" Data";
		        },
		        pagingType: 'full_numbers',
		        language: {paginate: {
		            first: '<i class="fa fa-step-backward"></i>',
		            last: '<i class="fa fa-step-forward"></i>',
		            previous: '<i class="fa fa-backward"></i>',
		            next: '<i class="fa fa-forward"></i>',
		        }},
		        paging: true,
		        order: [[ 2, "asc" ]],
		        dom: 'tip',
		        pageLength: 25,
		        serverSide: true,
		        serverMethod: 'post',
		        columns: [
		            //{data: "id", visible: false},
		            {data: "no", orderable:false, width: "30px", className: "dt-body-center"},
		            {data: "title"},
		            {data: "desc"},
		            {data: "image"},
		            {data: "action", orderable:false, className: "dt-body-center"}
		        ]
		    });

		    $('.form-filter').submit(function(e){

		        window.swal({
		            title: "Searching ...",
		            text: "Please wait",
		            icon: '<?=base_url()?>assets/img/searching.gif',
		            button: false,
		            allowOutsideClick: false
		        })
		        e.preventDefault();    
		        var formData = new FormData(this);

		        //var status = $('#status').val();
		        var search = $('#search').val();

		        $('.table-activity').dataTable().fnDestroy();

		        $('.table-activity').DataTable( {
		            ajax: {
		                url: '<?=base_url()?>ajax/document/type.json?search='+search+'',
		                data: function(data){
		                    console.log(data);
		                    //data.search.role = $("#role").val();
		                    //data.search.q = $("#search").val();
		                },
		                dataSrc: 'data',
		            },
		            "initComplete": function( oSettings, json ) {
		                swal({
		                    icon: 'success',
		                    title: 'Finish',
		                    //message: resp.message,
		                    button: 'Close'
		                });
		            },
		            searching: false,
		            fnInfoCallback: function( oSettings, iStart, iEnd, iMax, iTotal, sPre ) {
		                return "Menampilkan "+iStart+" Sampai "+iEnd+" Dari "+(oSettings.json ? oSettings.json.recordsTotal : iTotal)+" Data";
		            },
		            pagingType: 'full_numbers',
		            language: {paginate: {
		                first: '<i class="fa fa-step-backward"></i>',
		                last: '<i class="fa fa-step-forward"></i>',
		                previous: '<i class="fa fa-backward"></i>',
		                next: '<i class="fa fa-forward"></i>',
		            }},
		            paging: true,
		            order: [[ 2, "asc" ]],
		            dom: 'tip',
		            pageLength: 25,
		            serverSide: true,
		            serverMethod: 'post',
		            columns: [
		                {data: "no", orderable:false, width: "30px", className: "dt-body-center"},
			            {data: "title"},
			            {data: "desc"},
			            {data: "image"},
			            {data: "action", orderable:false, className: "dt-body-center"}
		            ]
		        });

		    });



		    var table = $('.table-activity').DataTable();
     
	        $('.table-activity tbody').on('click', 'tr td a.del', function () {
	            //var data = table.row( this ).data();
	            var id = $(this).attr('id-activity');

	            //alert(id);

	            swal("Anda yakin akan menghapus Activity ini ?", {
	                buttons: {
	                    yes: {
	                        text: "Ya",
	                        value: "yes",
	                    },
	                    no: {
	                        text: "Tidak",
	                        value: "no",
	                    },
	                },
	                })
	                .then((value) => {

	                switch (value) {
	                
	                    case "yes":
	                        //swal("And Memilih yes data id : "+id_group);
	                        $.post("<?=base_url()?>Main/delete_activity",
	                        {
	                            id: id,
	                        },
	                        function(resp){
	                            //alert("Data: " + data + "\nStatus: " + status);
	                            console.log(resp);

	                            swal({
	                                icon: resp.icon,
	                                title: resp.status,
	                                text: resp.message,
	                            }).then(function() {
	                                table.draw();
	                            });
	                        });

	                    break;
	                
	                    case "no":
	                        //swal("And Memilih no data id : "+id_group);
	                    break;
	                
	                    default:
	                        //swal("And Memilih hold data id : "+id_group);
	                }

	            });

	        });	





		});
	</script>