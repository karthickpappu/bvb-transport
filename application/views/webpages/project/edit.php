<style>       
	.card-collapsed .card-options-collapse i:before {
		content: '\f078';
	} 
	.card-collapsed .card-options-collapse i:before {
		content: '\f078';
	}
	.card-fullscreen .card-options-fullscreen i:before {
		content: '\f066';
	}
	.bootstrap-select.show-tick .dropdown-menu .selected span.check-mark {
		position: absolute;
		display: inline-block;
		right: 20px;
		top: 6px;
	}
	.bootstrap-select:not([class*=col-]):not([class*=form-control]):not(.input-group-btn) {
		width: 100%;
	}
	.input-daterange .input-group-addon {
		width: auto;
		min-width: 15px;
		padding: 7px 15px;
		line-height: 1.42857143;
		text-shadow: 0 1px 0 #fff;
		border-width: 1px 0;
		margin-left: -5px;
		margin-right: -5px;
	}

	.dropdown-menu .dropdown-item {
		color: #333537;
		font-size: 14px;
		padding: 5px;
		margin: 0 10px;
		width: auto;
	}
	.btn.btn-default, .dataTables_wrapper .dataTables_paginate .btn-default.paginate_button {
		color: #4D5052;
		background-color: #fff;
		border-color: #E8E9E9;
		//padding: 6px 14px;
		padding: .375rem .75rem;
	}
	.input-client .show-tick{
		width: 75% !important;
	}

	.input-daterange input {
		text-align: left;
	}
	.table td, .table th {
    	padding: 0.2rem;
	}

	
	.dropdown {
		display: inline-block;
		position: relative;
	}

	.dd-button {
		display: inline-block;
		border: 1px solid gray;
		border-radius: 4px;
		padding: 10px 30px 10px 20px;
		background-color: #ffffff;
		cursor: pointer;
		white-space: nowrap;
	}

	.dd-button:after {
		content: '';
		position: absolute;
		top: 50%;
		right: 15px;
		transform: translateY(-50%);
		width: 0; 
		height: 0; 
		border-left: 5px solid transparent;
		border-right: 5px solid transparent;
		border-top: 5px solid black;
	}

	.dd-button:hover {
		background-color: #eeeeee;
	}

	.dd-input {
		display: none;
	}

	.dd-menu {
		position: absolute;
		top: 100%;
		border: 1px solid #ccc;
		border-radius: 4px;
		padding: 0;
		margin: 2px 0 0 0;
		box-shadow: 0 0 6px 0 rgba(0,0,0,0.1);
		background-color: #ffffff;
		list-style-type: none;
		right: 0;    
		z-index: 1;
	}

	.dd-input + .dd-menu {
		display: none;
	} 

	.dd-input:checked + .dd-menu {
		display: block;
	} 

	.dd-menu li {
		padding: 10px 20px;
		cursor: pointer;
		white-space: nowrap;
	}

	.dd-menu li:hover {
		background-color: #f6f6f6;
	}

	.dd-menu li a {
		display: block;
		margin: -10px -20px;
		padding: 10px 20px;
	}

	.dd-menu li.divider{
		padding: 0;
		border-bottom: 1px solid #cccccc;
	}
	.dropa {
		text-decoration: none;
		color: #000000;
	}

	.dropa:hover {
		color: #222222
	}
	</style>   

    <div class="section-body">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12">
					<div class="d-flex justify-content-between align-items-center">
						<ul class="nav nav-tabs page-header-tab">
							<li class="nav-item"><a class="nav-link" data-toggle="tab" href="#Project-add" id="addprojectbutton">Edit Project</a></li>
						</ul>
						<div class="header-action d-md-flex">
                            <button onclick="javascript:window.history.back();" class="btn btn-sm btn-danger">Back</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="section-body mt-3">
		<div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Edit Project</h3>
                            <!-- <div class="card-options">
                                <a type="button" class="btn btn-primary btn-sm addclient" data-toggle="tab" href="#Client-add" ><i class="fa fa-plus mr-2"></i>Add Client</a>
                            </div> -->
                        </div>
                        <div class="card-body">
                            <?php echo form_open_multipart('data/project/create','id="createproject" name="createproject" autocomplete="on" ');?>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">                                   
                                            <input type="text" class="form-control" placeholder="Title" name="title" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">                                   
                                            <input type="text" class="form-control" placeholder="Scope" name="scope" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Description" name="description" required></textarea>
                                        </div>
                                    </div>  
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <select class="selectpicker show-menu-arrow" onchange="showclient()" data-style="form-control" data-live-search="true" title="Select Type" id="type" name="project_type" required>
                                                <option data-tokens="Internal" value="Internal">Internal</option>
                                                <option data-tokens="External" value="External">External</option>
                                                <option data-tokens="Other"value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>			
                                    <div class="col-lg-4 col-md-4" style="display:none;" id="clientdiv">
                                        <div class="form-group">
                                            <select class="selectpicker show-menu-arrow" data-style="form-control" data-live-search="true" title="Select Client"  name="client" >
                                            <?php 
                                                if($allclient){
                                                foreach($allclient as $output){
                                            ?>
                                                <option data-tokens="<?php echo $output->user_name;?>" value="<?php echo $output->client_id;?>"><?php echo $output->name;?></option>
                                            <?php } } ?>
                                                <option data-tokens="Self" value="Self">Self</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <select class="selectpicker show-menu-arrow" data-style="form-control" data-live-search="true" title="Select Team" multiple="multiple" name="team[]" required>
                                            <?php 
                                                if($allusers){
                                                foreach($allusers as $output){
                                            ?>
                                                <option data-tokens="<?php echo $output->user_name;?>" value="<?php echo $output->user_id;?>"><?php echo $output->user_name;?></option>
                                            <?php } } ?>
                                            </select>
                                        </div>
                                    </div>		
                                </div>
                                <div class="row" style="padding-bottom:10px">    	
                                    <div class="col-lg-12 col-md-12">
                                        <label>Signing On & Time Duration</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="input-daterange input-group" data-provide="datepicker">
                                            <input type="text" class="form-control datepicker" name="signed_on" autocomplete="off" required value="<?php echo date('d-m-Y');?>">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="input-daterange input-group" data-provide="datepicker">
                                            <input type="text" class="form-control datepicker" name="start_date" autocomplete="off" required value="<?php echo date('d-m-Y');?>">
                                            <span class="input-group-addon"> to </span>
                                            <input type="text" class="form-control datepicker" name="handover_date" autocomplete="off" required value="<?php echo date('d-m-Y');?>">
                                        </div>
                                    </div>         
                                </div>     
                                <div class="row">  
                                    <div class="col-lg-12 col-md-12">
                                        <label>Project Budget</label>
                                    </div>
                                    <div class="col-lg-4 col-md-4">
                                        <div class="form-group">
                                            <select class="selectpicker show-menu-arrow" onchange="showbudget()" data-style="form-control" data-live-search="true" id="budget_type" title="Select Budget Type" name="budget_type" required>
                                                <option data-tokens="Confidential" value="Confidential">Confidential</option>
                                                <option data-tokens="Public" value="Public">Public</option>
                                                <option data-tokens="Other" value="Other">Other</option>
                                            </select>
                                        </div>
                                    </div>    
                                    <div class="col-lg-4 col-md-4" style="display:none;" id="budgetdiv">
                                        <div class=" input-group">
                                            <input type="number" class="form-control" placeholder="Budget Amount" name="budget_amount" autocomplete="off" value="">
                                        </div>
                                    </div>   
                                </div>   
                                <div class="row">  
                                    <div class="col-lg-12 col-md-12">
                                        <label>Project Attachment</label>
                                    </div>
                                    <div class="col-lg-4">
                                        <input type="file" class="dropify" name="attachment">
                                    </div>   
                                </div>     
                                <div class="row" style="padding-top: 10px;">    
                                    <div class="col-lg-12 col-md-12 text-right">           
                                        <a type="button" class="btn btn-default closebutton" data-toggle="tab" href="#Project-OnGoing" >Close</a>
                                        <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
		</div>            
	</div>


	<!-- Add New Module -->
	<div class="modal fade" id="addmodule" tabindex="-1" role="dialog">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h6 class="title" id="defaultModalLabel">Add New Module</h6>
				</div>
				<?php echo form_open_multipart('data/project/createmodule','id="createmodule" name="createmodule" autocomplete="on" ');?>
					<div class="modal-body">
						<div class="row clearfix">
							<div class="col-12">
								<div class="form-group">                                   
									<input type="hidden" id="project_id" name="project_id" >
									<input type="text" class="form-control" placeholder="Title" name="module" required>
								</div>
							</div>
							<div class="col-12">
								<div class="form-group">
									<textarea class="form-control" placeholder="Description" name="module_description" required></textarea>
								</div>
							</div>                   
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" id="submitmodule" class="btn btn-primary">Add</button>
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<script src='https://rendro.github.io/easy-pie-chart/javascripts/jquery.easy-pie-chart.js'></script>
    <script src='https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js'></script>
    <script src='https://use.fontawesome.com/e8927eb029.js'></script>

	<script>
		/* Multiple Item Picker */
		$(document).ready(function() {
			$('#example').DataTable();
		} );

		function showclient(){
			if($("#type").val() == 'External'){
				$("#clientdiv").show();
			}else{
				$("#clientdiv").hide();
			}
		}

		function showbudget(){
			if($("#budget_type").val() == 'Public'){
				$("#budgetdiv").show();
			}else{
				$("#budgetdiv").hide();
			}
		}

		function projectid(project_id){
			$("#project_id").val(project_id);
		}

		$(document).ready(function(){
			$(".datepicker").datepicker({
				"format": "d-m-yyyy",
			});
		});

		$('.closebutton').click(function() {
			$(this).removeClass('active');
			$('#ongioingbutton').addClass('active');
			$('#addprojectbutton').removeClass('active');
		});

		$(document).on('click','#submit', function(e) { 
			e.preventDefault();
			// for (instance in CKEDITOR.instances) {
				// CKEDITOR.instances[instance].updateElement();
			// }
			if($("#createproject")[0].reportValidity()) 
			{
				var datastring =  new FormData($('#createproject')[0]); 
				$.ajax({
					type:'POST',
					url:'<?php echo $this->config->item("base_url");?>data/project/create',
					enctype: 'multipart/form-data',
					data: datastring,    
					contentType: false,
					processData:false,
					cache: false,
					dataType:"JSON",
					token: '<?php echo $this->security->get_csrf_hash();?>',
					success:function(data){
						console.log(data);
						$('#token').val(data.csrfHash);
						if(data.status == 1){				
							swal({title: 'Action Update!',text: data.msg,type: 'success'},function() {
								window.location.reload();
							});
						}else{				
							swal({title: 'Action Update!',text: data.msg,type: 'error'},function() {
								window.location.reload();
							});
						}
					},
					timeout: 10000,
					async: false			
				});
			}
		});


		$(document).on('click','#submitmodule', function(e) { 
			e.preventDefault();		
			if($("#createmodule")[0].reportValidity()) 
			{
				var datastring =  new FormData($('#createmodule')[0]); 
				$.ajax({
					type:'POST',
					url:'<?php echo $this->config->item("base_url");?>data/project/createmodule',
					enctype: 'multipart/form-data',
					data: datastring,    
					contentType: false,
					processData:false,
					cache: false,
					dataType:"JSON",
					token: '<?php echo $this->security->get_csrf_hash();?>',
					success:function(data){
						console.log(data);
						$('#token').val(data.csrfHash);
						if(data.status == 1){				
							swal({title: 'Action Update!',text: data.msg,type: 'success'},function() {
								window.location.reload();
							});
						}else{				
							swal({title: 'Action Update!',text: data.msg,type: 'error'},function() {
								window.location.reload();
							});
						}
					},
					timeout: 10000,
					async: false			
				});
			}
		});


		function deletemodule(id) { 
            $.ajax({
                type:'POST',
                url:'<?php echo $this->config->item("base_url");?>data/project/deletemodule',
                enctype: 'multipart/form-data',
                data: {id:id},    
                // contentType: false,
                // processData:false,
                // cache: false,
                dataType:"JSON",
                success:function(data){
                    console.log(data);
                    $('#token').val(data.csrfHash);
                    if(data.status == 1){				
                        swal({title: 'Action Update!',text: data.msg,type: 'success'},function() {
                            window.location.reload();
                        });
                    }else{				
                        swal({title: 'Action Update!',text: data.msg,type: 'error'},function() {
                            window.location.reload();
                        });
                    }
                },
                timeout: 10000,
                async: false			
            });
        }

		function changestatus(id,status) { 
			// alert(status);
			// alert(id);
            $.ajax({
                type:'POST',
                url:'<?php echo $this->config->item("base_url");?>data/project/changeprojectstatus',
                enctype: 'multipart/form-data',
                data: {id:id,project_status:status},    
                // contentType: false,
                // processData:false,
                // cache: false,
                dataType:"JSON",
                success:function(data){
                    console.log(data);
                    $('#token').val(data.csrfHash);
                    if(data.status == 1){				
                        swal({title: 'Action Update!',text: data.msg,type: 'success'},function() {
                            window.location.reload();
                        });
                    }else{				
                        swal({title: 'Action Update!',text: data.msg,type: 'error'},function() {
                            window.location.reload();
                        });
                    }
                },
                timeout: 10000,
                async: false			
            });
        }
	</script>