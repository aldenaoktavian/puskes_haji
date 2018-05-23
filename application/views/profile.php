<?php include(APPPATH."views/includes/header.php"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/profil.css?crc=3811099586" id="pagesheet"/>
<div class="container-fluid bg-white-full">
	<div class="row main-width">
		<div class="col-md-4" style="padding-left: 0px;">
			<div class="clearfix grpelem" id="u7341"><!-- column -->
				<div class="clearfix colelem" id="u7342"><!-- column -->
					<div class="Heading-2--32px clearfix colelem" id="u7344-4"><!-- content -->
						Profil
					</div>
					<div class="colelem" id="u7343"><!-- simple frame --></div>
					<div class="clearfix"></div>
					<ul class="profil-list">
						<li>
							<div class="Teks_link Teks_link--16 clearfix grpelem" id="u7488-4"><!-- content -->
								<a href="<?php echo base_url(); ?>profile/visi_misi" class="<?php echo ($url_type == 'visi-misi' ? 'active' : ''); ?>">Visi Misi</a>
							</div>
						</li>
						<li>
							<div class="Teks_link Teks_link--16 clearfix grpelem" id="u7488-4"><!-- content -->
								<a href="<?php echo base_url(); ?>profile/tugas_fungsi" class="<?php echo ($url_type == 'tugas-fungsi' ? 'active' : ''); ?>">Tugas dan Fungsi</a>
							</div>
						</li>
						<li>
							<div class="Teks_link Teks_link--16 clearfix grpelem" id="u7488-4"><!-- content -->
								<a href="<?php echo base_url(); ?>profile/struktur_organisasi" class="<?php echo ($url_type == 'struktur-organisasi' ? 'active' : ''); ?>">Struktur Organisasi</a>
							</div>
						</li>
					</ul>
				</div>

				<div class="clearfix colelem" id="u7320"><!-- column -->
					<div class="Heading-2--32px clearfix colelem" id="u7321-4"><!-- content -->
						BERITA VIDEO
					</div>
					<div class="colelem" id="u7322"><!-- simple frame --></div>
					<div class="clearfix"></div>
					<div class="profil-video">
						<iframe width="100%" height="250" src="https://www.youtube.com/embed/_T2z_MnV_Pc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
					<div class="profil-video">
						<iframe width="100%" height="250" src="https://www.youtube.com/embed/_T2z_MnV_Pc" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
					</div>
				</div>
				<div class="clearfix colelem" id="u7276"><!-- column -->
					<div class="Heading-2--32px clearfix colelem" id="u7277-4"><!-- content -->
						BERITA populer
					</div>
					<div class="colelem" id="u7278"><!-- simple frame --></div>
					<div class="clearfix"></div>
					<div class="row profil-berita-item">
						<div class="col-md-5">
							<img src="<?php echo base_url(); ?>images/61ec650b9dadf33b3452ecb968882066-u10772-fr.png?crc=449260016" width="100%" />
						</div>
						<div class="col-md-7 no-padding desc">
							<a href="#">Pertemuan Sosialisasi Peraturan Kepegawaian</a>
							<div class="clearfix colelem" id="pu10770-4"><!-- group -->
					        	<img class="grpelem" id="u10770-4" alt="" src="<?php echo base_url(); ?>images/u10770-4.png?crc=451249281" data-image-width="20"><!-- rasterized frame -->
					        	<div class="Small_text--14px clearfix grpelem" id="u10771-4"><!-- content -->
					        		<p>wed, 05/02/2018 22:14:28</p>
					        	</div>
					       	</div>
						</div>
					</div>
				</div>
	    	</div>
		</div>

		<div class="col-md-8 no-padding">
			<div class="museBGSize grpelem" id="u7624"><!-- simple frame --></div>
			<?php echo $load_profile_type; ?>
		</div>
	</div>
</div>
<?php include(APPPATH."views/includes/footer.php"); ?>