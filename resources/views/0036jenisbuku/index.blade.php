<a href="{{route('jenis-buku.create')}}" class="button button-hijau">Add Data</a>
<table border="1" width="100%">
<tr>
            <th>No.</th>
            <th>Jenis Buku</th>
            <th>Action</th>
        </tr>
        @foreach($buku as $bu => $b)
        <tr>
            <td>{{$bu + 1}}</td>
            <td>{{$b->jenis}}</td>
            <td>
                <form action="{{ route('jenis-buku.destroy', $b->id) }}" method="POST">
                    @csrf
                    @method('delete')
                    <a href="{{ route('jenis-buku.edit', $b->id) }}" class="button button-orange">Edit</a>
                    <button type="submit" class="button button-merah">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
        </table>