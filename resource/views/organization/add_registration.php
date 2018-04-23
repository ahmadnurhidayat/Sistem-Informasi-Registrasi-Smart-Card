<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-2 col-md-8">
					<div class="navbar-header">
						<a class="navbar-brand" href="<?= url('') ?>">
							<img src="<?= url('resource/assets/images/logo.png') ?>">
							<span class="logo-text">SIREG Universitas X</span>
						</a>
					</div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?= url('') ?>">Daftar Event</a></li>
						<li><a href="<?= url('logout') ?>">Logout</a></li>
					</ul>
				</div>
			</div>
		</div>
	</nav>

	<div class="main grey">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-offset-2 col-md-6 section-title">
					Event Baru
				</div>
			</div>
			<div class="row">
				<div class="col-md-offset-3 col-md-6 content">
					<div class="main-box add-reg">
						<p class="nama-org">
							Data Event
						</p>
						<form method="POST" action="<?= url('proses_tambah_registrasi') ?>">
							
							<input type="text" name="title" class="form-control mb-2 add-title" placeholder="Judul" pattern=".{1,80}" title="Judul Maksimum 80 Karakter" required>
							
							<textarea name="description" class="form-control mb-2 add-desc" placeholder="Deskripsi" pattern=".{1,255}" title="Deskripsi Maksimum 255 Karakter" required></textarea>
							
							<input type="checkbox" name="privacy"> <span class="add-priv"> Membutuhkan data private*</span>
							
							<button class="button button-blue button-middle button-add-event">Tambah</button>
							<p class="priv-desc">* Untuk mendapatkan data private dibutuhkan persetujuan dari pihak LPTIK. Data private meliputi nomor telepon, email, dan alamat mahasiswa.</p>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>