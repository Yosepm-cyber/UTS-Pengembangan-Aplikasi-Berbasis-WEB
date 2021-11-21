<div class="panel-header bg-primary-gradient">
					<div class="page-inner py-5">
						<div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
							<div>
								<h2 class="text-white pb-2 fw-bold">Absensi Siswa</h2>
								<h5 class="text-white op-7 mb-2">Selamat Datang, <b class="text-warning"><?=$data['nama_guru']; ?></b></h5>
							</div>
							<!-- <div class="ml-md-auto py-2 py-md-0">
								<a href="#" class="btn btn-white btn-border btn-round mr-2">Manage</a>
								<a href="#" class="btn btn-secondary btn-round">Add Customer</a>
							</div> -->
						</div>
					</div>
				</div>
<div class="page-inner mt--5">
					<div class="row mt--2">
						<div class="col-md-6">
							<div class="card full-height">
								<div class="card-body">
									<div class="card-title">
										<center>
											<img src="../assets/img/LOGO SMK.png" width="50">
											<br>
											<b>SMK YAPAN</b>
										</center>
									</div>
									<div class="card-category">
										<center>
Kp. Cikawung Desa Sukatani Kecamatan Parakansalak Kabupaten Sukabumi - Jawa Barat
	<br>Kode Pos 43355
Telepon +62
E-mail yapansmk@gmail.com
									</center>
									</div>

											<p>
										<ul class="list-group">
										<?php


										foreach ($mengajar as $dm) { ?>
										 <li class="list-group-item">
										<a class="btn btn-secondary btn-block text-left" href="?page=rekap&pelajaran=<?=$dm['id_mengajar'] ?> ">
											<i class="fas fa-chevron-circle-right"></i>
										<span class="sub-item"><?=strtoupper($dm['mapel']); ?> (<?=strtoupper($dm['nama_kelas']); ?>)</span>
										</a>
										<?php 
										$bulan = date('m');

										 ?>
										</li>
										<?php } ?>
										</ul>
											</p>


										</div>
										<div class="tab-pane fade" id="pills-contact-icon" role="tabpanel" aria-labelledby="pills-contact-tab-icon">
											<p>
												<hr>

												Aplikasi Absensi Siswa ini dibuat untuk mendokumentasikan kehadiran Siswa SMK YAPAN, Aplikasi sangat Mudah digunakan (Berbasis Web)
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="row">
						
						<!-- <div class="col-md-8">
							<div class="card">
								<div class="card-body">
									<div class="card-title fw-mediumbold">Suggested People</div>
									<div class="card-list">
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
											
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/chadengle.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Chad</div>
												<div class="status">CEO Zeleaf</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/mlane.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">John Doe</div>
												<div class="status">Back End Developer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/talha.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Talha</div>
												<div class="status">Front End Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
										<div class="item-list">
											<div class="avatar">
												<img src="../assets/img/jm_denis.jpg" alt="..." class="avatar-img rounded-circle">
											</div>
											<div class="info-user ml-3">
												<div class="username">Jimmy Denis</div>
												<div class="status">Graphic Designer</div>
											</div>
											<button class="btn btn-icon btn-primary btn-round btn-xs">
												<i class="fa fa-plus"></i>
											</button>
										</div>
									</div>
								</div>
							</div>
						</div> -->
						
					</div>
					
				</div>