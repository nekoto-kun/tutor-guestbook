@extends('layouts.template')

@section('title', 'Register New Guest')

@section('body')

    <div class="mt-4 p-5 bg-black text-white rounded">
        <h1>Register New Guest</h1>
    </div>

    <div class="row my-5">
        <div class="col-12 px-5">
            <form action="{{ route('guests.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <label for="guest_name">Guest Name</label>
                    <input type="text" class="form-control" id="guest_name"
                        placeholder="Guest Name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="message">Message</label>
                    <input type="text" class="form-control" id="message"
                        placeholder="Message" name="message" required>
                </div>

                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email"
                        placeholder="Email Address" name="email">
                </div>

                <div class="form-group">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number"
                        placeholder="Phone Number" name="phone_number">
                </div>

                {{-- Input avatar --}}

                <button type="submit" class="btn btn-primary btn-block">Save</button>
            </form>
        </div>
    </div>

@endsection
