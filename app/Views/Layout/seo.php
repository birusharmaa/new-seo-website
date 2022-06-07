<!DOCTYPE html>
<html lang="en">
	<head>
		<link
			rel="stylesheet"
			href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
		/>
		<style>
			* {
				margin: 0;
				padding: 0;
				box-sizing: border-box;
			}

			.plugin-box {
				position: fixed;
				bottom: 10px;
				left: 10px;
			}
			.plugin-box .plugin__open-btn {
				width: 50px;
				height: 50px;
				border: 0;
				border-radius: 50%;
				font-size: 30px;
			}
			.plugin-box .plugin__open-btn .plugin__chat-icon {
				width: 100%;
				height: 100%;
				transition-duration: 0.3s;
			}
			.plugin-box .plugin__open-btn .plugin__chat-icon:hover {
				transform: rotate(360deg);
			}
			.plugin-box .plugins {
				transition-duration: 0.3;
				transform: scale(0);
				position: absolute;
				top: -450%;
				left: 0px;
				display: flex;
				align-items: center;
				flex-direction: column;
				gap: 5px;
			}
			.plugin-box .plugins .icons {
				width: 50px;
				height: 50px;
				border-radius: 50%;
				position: relative;
			}
			.plugin-box .plugins .icons img {
				width: 100%;
				height: 100%;
			}
			.plugin-box .plugins .icons span {
				position: absolute;
				display: inline-block;
				right: -220%;
				width: 100px;
				background-color: rgba(0, 0, 0, 0.5);
				color: white;
				padding: 5px 10px;
				border-radius: 10px;
				opacity: 0;
				transform: scale(0);
				transition-duration: 0.3s;
			}
			.plugin-box .plugins .icons:hover span {
				opacity: 1;
				transform: scale(1);
			}
			.plugin-box .plugins.active {
				transform: scale(1);
			}
			body.modal-open {
				overflow: visible;
			}
		</style>
	</head>
	<body class="position-relative">
		<div class="plugin-box">
			<button type="button" class="plugin__open-btn">
				<img
					src="https://www.eparichaya.com/api-module/io-plugin/images/chaticon.png"
					alt=""
					class="plugin__chat-icon"
				/>
			</button>
			<div class="plugins">
				<a href="#" target="_blank" class="icons">
					<img
						src="https://www.eparichaya.com/api-module/io-plugin/images/WhatsApp.png"
						alt=""
					/>
					<span>Whatsapp</span>
				</a>
				<a href="tel:9898989898" class="icons">
					<img
						src="https://www.eparichaya.com/api-module/io-plugin/images/call.png"
						alt=""
					/>
					<span>Call</span>
				</a>
				<a href="#plugin__enquery-form" class="icons" data-bs-toggle="modal">
					<img
						src="https://www.eparichaya.com/api-module/io-plugin/images/inqury.png"
						alt=""
					/>
					<span>Enquiry</span>
				</a>
				<a href="#plugin__updates" class="icons" data-bs-toggle="modal">
					<img
						src="https://www.eparichaya.com/api-module/io-plugin/images/updates.png"
						alt=""
					/>
					<span>updates</span>
				</a>
			</div>
		</div>
		<!--   plugin__enquery-form -->
		<div
			class="modal fade"
			id="plugin__enquery-form"
			tabindex="-1"
			aria-labelledby="plugin__enqueryLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="plugin__enqueryLabel">
							MAKE AN INQUIRY!
						</h5>
						<button
							type="button"
							class="btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
					</div>
					<div class="modal-body">
						<form action="#">
							<div class="my-2">
								<label for="plugin__enquery-name">Name</label>
								<input
									type="text"
									class="form-control"
									id="plugin__enquery-name"
									placeholder="Enter your name"
								/>
							</div>
							<div class="my-2">
								<label for="plugin__enquery-phone">Phone</label>
								<input
									type="phone"
									class="form-control"
									id="plugin__enquery-phone"
									placeholder="Enter your phone"
								/>
							</div>
							<div class="my-2 mt-4">
								<button class="btn btn-danger w-100" type="submit">
									Submit
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!--   plugin__updates -->
		<div
			class="modal fade"
			id="plugin__updates"
			tabindex="-1"
			aria-labelledby="plugin__updatesLabel"
			aria-hidden="true"
		>
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="plugin__updatesLabel">
							Latest Updates
						</h5>
						<button
							type="button"
							class="btn-close"
							data-bs-dismiss="modal"
							aria-label="Close"
						></button>
					</div>
					<div class="modal-body" style="max-height: 400px; overflow-y: auto">
						<div class="card">
							<div class="card-body">
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Perferendis nobis quidem vero ad, impedit mollitia reiciendis
									nesciunt cupiditate accusamus obcaecati deserunt libero
									recusandae quae tempore unde porro laboriosam minus. Nemo
									facilis fugiat odit earum qui quia eius culpa quo, accusamus
									harum, aliquid distinctio explicabo illo ea in cum! Mollitia,
									natus.
								</p>
								<button class="btn btn-success float-end" type="button">
									Read More
								</button>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Perferendis nobis quidem vero ad, impedit mollitia reiciendis
									nesciunt cupiditate accusamus obcaecati deserunt libero
									recusandae quae tempore unde porro laboriosam minus. Nemo
									facilis fugiat odit earum qui quia eius culpa quo, accusamus
									harum, aliquid distinctio explicabo illo ea in cum! Mollitia,
									natus.
								</p>
								<button class="btn btn-success float-end" type="button">
									Read More
								</button>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Perferendis nobis quidem vero ad, impedit mollitia reiciendis
									nesciunt cupiditate accusamus obcaecati deserunt libero
									recusandae quae tempore unde porro laboriosam minus. Nemo
									facilis fugiat odit earum qui quia eius culpa quo, accusamus
									harum, aliquid distinctio explicabo illo ea in cum! Mollitia,
									natus.
								</p>
								<button class="btn btn-success float-end" type="button">
									Read More
								</button>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Perferendis nobis quidem vero ad, impedit mollitia reiciendis
									nesciunt cupiditate accusamus obcaecati deserunt libero
									recusandae quae tempore unde porro laboriosam minus. Nemo
									facilis fugiat odit earum qui quia eius culpa quo, accusamus
									harum, aliquid distinctio explicabo illo ea in cum! Mollitia,
									natus.
								</p>
								<button class="btn btn-success float-end" type="button">
									Read More
								</button>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Perferendis nobis quidem vero ad, impedit mollitia reiciendis
									nesciunt cupiditate accusamus obcaecati deserunt libero
									recusandae quae tempore unde porro laboriosam minus. Nemo
									facilis fugiat odit earum qui quia eius culpa quo, accusamus
									harum, aliquid distinctio explicabo illo ea in cum! Mollitia,
									natus.
								</p>
								<button class="btn btn-success float-end" type="button">
									Read More
								</button>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Perferendis nobis quidem vero ad, impedit mollitia reiciendis
									nesciunt cupiditate accusamus obcaecati deserunt libero
									recusandae quae tempore unde porro laboriosam minus. Nemo
									facilis fugiat odit earum qui quia eius culpa quo, accusamus
									harum, aliquid distinctio explicabo illo ea in cum! Mollitia,
									natus.
								</p>
								<button class="btn btn-success float-end" type="button">
									Read More
								</button>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Perferendis nobis quidem vero ad, impedit mollitia reiciendis
									nesciunt cupiditate accusamus obcaecati deserunt libero
									recusandae quae tempore unde porro laboriosam minus. Nemo
									facilis fugiat odit earum qui quia eius culpa quo, accusamus
									harum, aliquid distinctio explicabo illo ea in cum! Mollitia,
									natus.
								</p>
								<button class="btn btn-success float-end" type="button">
									Read More
								</button>
							</div>
						</div>
						<div class="card">
							<div class="card-body">
								<p>
									Lorem, ipsum dolor sit amet consectetur adipisicing elit.
									Perferendis nobis quidem vero ad, impedit mollitia reiciendis
									nesciunt cupiditate accusamus obcaecati deserunt libero
									recusandae quae tempore unde porro laboriosam minus. Nemo
									facilis fugiat odit earum qui quia eius culpa quo, accusamus
									harum, aliquid distinctio explicabo illo ea in cum! Mollitia,
									natus.
								</p>
								<button class="btn btn-success float-end" type="button">
									Read More
								</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
		<script>
			$(document).on("click", ".plugin__open-btn", function () {
				$(".plugins").toggleClass("active");
				if ($(".plugins").hasClass("active")) {
					$(this)
						.children("img")
						.attr(
							"src",
							"https://www.eparichaya.com/api-module/io-plugin/images/close-button.png"
						);
				} else {
					$(this)
						.children("img")
						.attr(
							"src",
							"https://www.eparichaya.com/api-module/io-plugin/images/chaticon.png"
						);
				}
			});
		</script>
	</body>
</html>
