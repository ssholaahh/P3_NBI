<form action="{{ route('jenis-buku.store') }}" method="POST">
			@csrf
			<label>Jenis</label>
			<input type="text" name="jenis" placeholder="Jenis..">

			<button type="submit" value="Submit">Simpan</button>
		</form>