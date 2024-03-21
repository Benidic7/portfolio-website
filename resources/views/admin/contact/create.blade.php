@extends('layouts.admin')

@section('content')

    <div class="row justify-content-center">
        <div class="card col-md-10 px-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Creating Contact Info</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('contact.index') }}" class="btn btn-secondary float-right">Cancel</a>
                    </div>
                </div>
            </div>
            <form action="{{ route('contact.store') }}" method="post">
                <div class="card-body">
                    @csrf
                    <div class="row mb-4">
                        <div class="col-md-4">
                            <label for="">Associate Name:</label>
                            <select class="form-control select2" name="hi" style="width: 70%;">
                                <option disabled selected>Select Associate Name</option>
                                @foreach($home as $item)
                                    <option value="{{ $item->id }}" {{ old('hi') == $item->id ? 'selected' : '' }}>{{ $item->first_name }}</option>
                                @endforeach
                            </select>
                            @error('hi')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2 justify-content-around">
                        <div class="form-group col-md-4">
                            <label for="">Email:</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your Email" value="{{ old('email') }}" required>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Phone:</label>
                            <input type="number" class="form-control" name="phone" placeholder="Enter phone number" value="{{ old('phone') }}" required>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="form-group col-md-4">
                            <label for="">Address:</label>
                            <input type="text" class="form-control" name="address" placeholder="Enter your address" value="{{ old('address') }}" required>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Zip Code:</label>
                            <input type="number" class="form-control" name="zipcode" placeholder="Enter Zip Code" value="{{ old('zipcode') }}" required>
                            @error('zipcode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn bg-purple">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
