<form action="{{ route('jenis-buku.update', $buku->id) }}" method="POST">
			@csrf
			@method('patch')
			<label for="judul">jenis</label>
			<input type="text" id="judul" name="jenis" value="{{ $buku->judul}}">

			<button type="submit" value="Submit">Simpan</button>
		</form>