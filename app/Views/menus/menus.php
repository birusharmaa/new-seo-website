<?= $this->extend('template/main');?>
<?= $this->section('content');?>
<style>
	ul {
		list-style-type: none;
	}
	
	.box_custom {
		padding-left: 0px;
		padding-top: 3px;
		padding-bottom: 6px;
		border: 1px solid #a8afc7;
		/* border-top: 0px;
		border-left: 0px;
		border-right: 0px; */
		margin: 0px;
		background-color: #f0f8ff;
	}
	.disabled {
		pointer-events:none;
		opacity:0.6;
	}
	
</style>

	<div class="page-header">
		<div>
			<h2 class="main-content-title tx-24 mg-b-5">Update <?= $title; ?></h2>
			<ol class="breadcrumb mt-4">
				<li class="breadcrumb-item"><a href="#">Home</a></li>
				<li class="breadcrumb-item active" aria-current="page">
					<?= $title; ?>
				</li>
			</ol>
		</div>
	</div>
			
	<div class="row row-sm mx-auto">
		<div class="col-md-12 ">
			<div class="row">
				<div class="col-md-12 box-shadow border rounded">
					<div class="col-md-6">
					<form class="py-4 px-2" id="UpdateListMenue">	
						<ul class="pl-0" id="example_1">
							<?php $num=1; if($menus): foreach($menus as $value):?>   	
								<?php
								$cl = ""; 
								if($value->default_menu =="1"){
									$cl ="disabled";
								}
								?>									
								<li class ="box_custom pl-0 ml-0 <?= $cl; ?>"  value="<?= $value->id;?>">
									<span class="pl-3 fs-12"><?= $value->menu_name;?></span> 
									<?php if($value->default_menu =="0"){
									?>
									<span class="float-right">
										<a href="javascript:void(0)" onclick="removeMenu(<?= $value->id;?>)"> 
											<i class="fa fa-times fs-12 pr-2" aria-hidden="true"></i>
										</a>
									</span>
									<?php } ?>
								</li>                                               
							<?php $num++; endforeach; endif; ?>  	
						</ul>
						<div>
							<button class="btn btn-primary btn-sm">Update</button>
						</div>
					</form>			
						<form class="py-4 px-2 d-none" id="CreateMenus">
							<div class="form-group ">					
								<div class="mb-3">                                                            			
									<input type="text" class="form-control" name="menu_name" id="menu_name" placeholder="Enter Menu Name">
								</div>
							</div>
							<div>
								<button class="btn btn-primary btn-sm">Create</button>
							</div>
						</form>   
						<form class="py-4 px-2" id="DefaultMenus">                                             
							<div class="form-group ">					
								<div class="mb-3">
									<lable>Default Menu</lable>                                                            			
									<select class="form-control" name="menu_name" id="Default_Menu">
										<option value=""> Select Menu</option>
										<?php if($default): foreach($default as $value): ?>
											<option value="<?= $value->id ?>"><?= $value->menu_name ?></option>
										<?php endforeach; endif; ?>                                                           
									</select>
								</div>
							</div>
							<div>
								<button class="btn btn-primary btn-sm">Default</button>
							</div>
						</form>      
					</div>                                       
				</div>									
			</div>  
		</div>
	</div>	

<?= $this->endSection();?>

<?= $this->section('script');?>
	<script src="<?php echo base_url().env('SEO_SUBPATH') ?>/assets/js/othercustomscripts.js"></script>
	<script src="<?php echo base_url().env('SEO_SUBPATH') ?>/assets/sortable/Sortable.min.js"></script>
	<script>
		$(document).ready(function(){
			$('#inventory-table').DataTable();
		})
		new Sortable(document.getElementById('example_1'), {
		});

		function removeMenu(id){
			var BASEURL = $("#url").val();
			if(id){
				let url = BASEURL + "/manage/remove-menu/"+id;
				$.ajax({
					url: url,
					type: "POST",
					data: '',
					success: function (response) {
						response = JSON.parse(response);
						if (response.status) {
							Swal.fire({icon:'success', text: response.message}).then((result)=>{
								location.reload();
							});
						} else {
							Swal.fire({icon:'error', text: response.message});
						}
					},
					error:function(){
					}
				});
			}
		}
    </script>
<?= $this->endSection();?>
