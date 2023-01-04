<form action="/insert" method="post">
    {{ csrf_field() }}
<div class="row">
	<div class="col-md-6">
		<div class="card">
			<div class="card-header">
				<div class="card-title">Form Daftar</div>
			</div>
			<div class="card-body">
                {{-- 1.Siswa --}}
            <b style="font-size: 15px;">1.Form Siswa</b>
			<div class="form-group">
				<label for="exampleFormControlFile1">Foto Siswa 3x4 :</label>
				<input type="file" name="file" class="form-control-file" id="exampleFormControlFile1">
			</div>
			<div class="form-group">
				<label for="namalengkap">Nama Lengkap :</label>
				<input type="text" name="nama_lengkap" class="form-control" id="namalengkap" placeholder="Enter fullname...">
            </div>
            <div class="form-group">
				<label for="namapanggil">Nama Panggilan :</label>
				<input type="text" name="nama_panggilan" class="form-control" id="namapanggil" placeholder="Enter name...">
            </div>
            <div class="form-group">
				<label for="prsts">Prestasi Yang Pernah Diraih :</label>
                <input type="text" name="prestasi" class="form-control" id="prsts" placeholder="...">
            </div>
            <div class="form-group">
				<label for="exampleFormControlSelect1">Informasi SMK Wikrama 1 Garut Dari :</label>
					<select name="infowk" class="form-control" id="exampleFormControlSelect1">
						<option value="family">family</option>
						<option value="website">website</option>
						<option value="teman">teman</option>
						<option value="brosur">brosur</option>
                        <option value="sekolahsmp">sekolah smp</option>
                        <option value="facebook">facebook</option>
                        <option value="karyawan">karyawan/guru</option>
                        <option value="lainnya">lainnya</option>
					</select>
            </div>
			<div class="card-action">
				<button class="btn btn-success">Submit</button>
				<button class="btn btn-danger">Cancel</button>
            </div>
		  </div>
      </div>
  </div>
</div>
</form>
