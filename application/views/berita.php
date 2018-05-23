<?php include(APPPATH."views/includes/header.php"); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/profil.css?crc=3811099586" id="pagesheet"/>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/berita.css?crc=3811099586" id="pagesheet"/>
<div class="container-fluid bg-white-full">
	<div class="row main-width">
		<div class="col-md-4" style="padding-left: 0px;">
			<div class="clearfix grpelem" id="u7341"><!-- column -->
				<div class="clearfix colelem" id="u7342"><!-- column -->
					<div class="Heading-2--32px clearfix colelem" id="u7344-4"><!-- content -->
						Kategori
					</div>
					<div class="colelem" id="u7343"><!-- simple frame --></div>
					<div class="clearfix"></div>
					<ul class="profil-list">
						<li>
							<div class="Teks_link Teks_link--16 clearfix grpelem" id="u7488-4"><!-- content -->
								<a href="<?php echo base_url(); ?>berita" class="<?php echo ($url_type == 'list-berita' ? 'active' : ''); ?>">Berita</a>
							</div>
						</li>
						<li>
							<div class="Teks_link Teks_link--16 clearfix grpelem" id="u7488-4"><!-- content -->
								<a href="<?php echo base_url(); ?>berita/laporan_kerja" class="<?php echo ($url_type == 'laporan-kerja' ? 'active' : ''); ?>">Laporan Kerja</a>
							</div>
						</li>
						<li>
							<div class="Teks_link Teks_link--16 clearfix grpelem" id="u7488-4"><!-- content -->
								<a href="<?php echo base_url(); ?>berita/informasi_kegiatan" class="<?php echo ($url_type == 'informasi-kegiatan' ? 'active' : ''); ?>">Informasi Kegiatan</a>
							</div>
						</li>
						<li>
							<div class="Teks_link Teks_link--16 clearfix grpelem" id="u7488-4"><!-- content -->
								<a href="<?php echo base_url(); ?>berita/infografis" class="<?php echo ($url_type == 'infografis' ? 'active' : ''); ?>">Infografis Operasional Haji</a>
							</div>
						</li>
						<li>
							<div class="Teks_link Teks_link--16 clearfix grpelem" id="u7488-4"><!-- content -->
								<a href="<?php echo base_url(); ?>berita/grafik" class="<?php echo ($url_type == 'grafik' ? 'active' : ''); ?>">Grafik Kunjungan Web</a>
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

		<div class="col-md-8">
			<div class="Heading-2--32px clearfix colelem" id="u5002-4"><!-- content -->
        		<?php echo $sub_title; ?>
       		</div>
       		<div class="colelem" id="u5003"><!-- simple frame --></div>
       		<div class="clearfix"></div>
			<?php echo $load_berita_type; ?>
		</div>
	</div>
</div>
<?php include(APPPATH."views/includes/footer.php"); ?>