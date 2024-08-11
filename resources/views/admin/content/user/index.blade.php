@extends('admin.index')
@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $key => $item )
                <tr>
                    <th scope="row">{{ $key+1 }}</th>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->usertype }}</td>
                    <td>                
                        <a href="{{ route('user.edit', $item->id) }}" class="btn btn-sm btn-warning ">
                            <i class="bi bi-pencil"></i>
                        </a>
                        @if ($item->usertype == 'admin')                   
                            <form action="{{ route('user.destroy', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin menghapus?')" disabled>
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        @else
                            <form action="{{ route('user.destroy', $item->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-sm btn-danger" onclick="return confirm('Apakah yakin menghapus?')">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
