@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <h3>Editing Contact Info</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('contact.index') }}" class="btn btn-secondary float-right">Cancel</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('contact.update', $contact->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label for="">Associate Name:</label>
                        <select class="form-control select2" name="hi" value="{{ old('hi') }}" style="width: 70%;">
                            <option disabled selected>Select Associate Name</option>
                            @foreach($home as $item)
                                <option value="{{ $item->id }}" {{ $contact->home_id == $item->id ? 'selected' : '' }}>{{ $item->first_name }}</option>
                            @endforeach
                        </select>
                        @error('hi')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2">
                    <div class="form-group col-md-4 offset-2">
                        <label for="">Email:</label>
                        <input type="email" class="form-control" name="email" value="{{ $contact->email }}" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Phone:</label>
                        <input type="number" class="form-control" name="phone" value="{{ $contact->phone }}" required>
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-4 offset-2">
                        <label for="">Address:</label>
                        <input type="text" class="form-control" name="address" value="{{ $contact->address }}" required>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Zip Code:</label>
                        <input type="number" class="form-control" name="zipcode" value="{{ $contact->zip_code }}" required>
                        @error('zipcode')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn bg-purple">Update</button>
            </form>
        </div>

    </div>

@endsection
