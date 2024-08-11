@extends('admin.index')
@section('content')
    <div class="card">
        <div class="card-body">
            <div class="card-title">
                Update User
            </div>
            <form action="{{ route('user.update', $edit->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="form-group">
                    <label>Name</label>
                    <input value="{{ $edit->name }}" type="text" name="name" class="form-control" placeholder="Enter Name User">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input value="{{ $edit->email }}" type="email" name="email" class="form-control" placeholder="Enter Email User">
                </div>
                <div class="form-group">
                    <label>Type</label>
                    <input value="{{ $edit->usertype }}" type="text" name="usertype" class="form-control" placeholder="Enter Type User">
                </div>
                <div class="form-group">
                    <label>Phone</label>
                    <input value="{{ $edit->phone }}" type="text" name="phone" class="form-control" placeholder="Enter phone User">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input value="{{ $edit->password }}" type="password" name="password" class="form-control" placeholder="Enter Password User">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ url()->previous() }}" class="ml-2">Back</a>
            </form>
        </div>
    </div>
@endsection
