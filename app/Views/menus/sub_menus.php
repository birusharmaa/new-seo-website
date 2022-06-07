<?= $this->extend('template/main');?>

<?= $this->section('content');?>
		<style>
			ul {
				list-style-type: none;
			}
			.box_custom {
				padding-top: 3px;
				padding-bottom: 6px;
				border: 1px solid #a8afc7;
				border-top: 0px;
				border-left: 0px;
				border-right: 0px;
				margin: 9px;
			}
			/* .row.abc {
				box-shadow: 1px 1px 1px 2px;
			} */
		</style>

		<!-- Page Header -->
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
		<!-- End Page Header -->

    	<!--Row-->
		<div class="row row-sm mx-auto">
			<div class="col-md-12 ">
				<div class="row">
					<div class="col-md-12 box-shadow border">
							
						<?php if($menus): foreach($menus as $value):?>      
							<div class ="box_custom">  
								<div class="row">
									<div class="col-md-4">
										<?= $value->menu_name ; ?>
									</div>
									<div class="col-md-4" id="<?= $value->id;?>" data-isEmpty="true">
										<a href="javascript:void(0)" onclick="showSubMenu(<?= $value->id;?>)">
											<i class="fa fa-plus-circle"></i>
										</a>

									</div>
								</div>
							</div>
						<?php endforeach; endif; ?>   

						
						<form class="py-4 px-2 border shadow-lg p-3 mb-5 mt-5s bg-white rounded" id="SetSubMenu">                                             
							<div class="form-group row">					
								<div class="mb-3 col-4">                                                                                                                  			
									<select class="form-control" name="parent_menu_name" id="parent_menu_name">
										<option value=""> Select Menu</option>
										<?php if($default): foreach($default as $value): ?>
											<option value="<?= $value->id ?>"><?= $value->menu_name ?></option>
										<?php endforeach; endif; ?>                                                           
									</select>
								</div>
								
							</div>

							<div class="form-group row d-none">					
								<div class="mb-3 col-4">                                                            			
									<input type="text" class="form-control" name="menu_name" id="menu_name" placeholder="Enter Sub Menu Name">
								</div>
							</div>
							<div>
								<button class="btn btn-primary d-none">Create</button>
							</div>
						</form>      

					</div>									
				</div>  
			</div>
		</div>
		<!-- Row end -->
	</div>
	

<?= $this->endSection();?>

<?= $this->section('script');?>
	<script>
		$(document).ready(function(){
			$('#inventory-table').DataTable();
		})
	</script>
	<script src="<?php echo base_url('assets/js/othercustomscripts.js')?>"></script>
	<script>
		function showSubMenu(id){
			return false;
			var BASEURL = $("#url").val();
			if(id){
				let url = BASEURL + "/manage/getSubMenu/"+id;
				$.ajax({
					url: url,
					type: "POST",
					data: '',
					success: function (response) {
						response = JSON.parse(response);
						if(response.length>0){
							// var appendData = $("#"+id).find('.row');
							var appendData = $("#"+id).attr('data-isEmpty');
							// console.log(appendData);
							let html="<div class='row'> ";
							response.forEach(function( value,index ) {
								html += '<div class="col-12 border-bottom">'+value.menu_name+"</div>";
							});
							html += '</div>';
							if(appendData === "true"){
								$("#"+id).find('.row').remove();
								$("#"+id).append(html);
								$("#"+id).find("i").toggleClass('fa-plus-circle fa-minus-circle');
								$("#"+id).attr('data-isEmpty', 'false');
								$("#"+id).parent().find('.row').addClass("card");
							}if(appendData === "false"){
								$("#"+id).find("i").toggleClass('fa-plus-circle fa-minus-circle');
								$("#"+id).find('.row').remove();
								$("#"+id).attr('data-isEmpty', 'true')
								$("#"+id).parent().find('.row').removeClass("card");
							}
						}
						else {
							Swal.fire({icon:'warning', text: 'No submenu found.'});
						}
					},
					error:function(){
					}
				});
			}
		}
	</script>
<?= $this->endSection();?>
