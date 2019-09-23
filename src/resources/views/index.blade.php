@extends('layouts.app')

@section('content')
    <div class="container m-auto">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 text-center">
                <h1>Contact Us</h1>
                @if(isset($message))
                    <div class="alert alert-success">
                        {{ $message }}
                    </div>
                @endif
                <form class="{{$errors->any() ? '' :  'needs-validation'}}" id="needs-validation" action="/contact" method="post" novalidate>
                    {{ csrf_field() }}
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                @if($errors->any())
                                    <input type="text" name="name" class="form-control {{$errors->has('name') ? 'is-invalid':'is-valid'}}" id="name" placeholder="Name" value="{{ old('name')}}" required>
                                @else
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{ old('name')}}" required>
                                @endif
                                <div class="invalid-feedback">
                                    {{$errors->has('name') ?  $errors->first('name') : 'Please enter your name'}}
                                </div>
                                <div class="valid-feedback">
                                    Validation
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                @if($errors->any())
                                    <input type="email" name="email" class="form-control {{$errors->has('email') ? 'is-invalid':'is-valid'}}" id="email" placeholder="Email" value="{{old('email')}}" required>
                                @else
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Email" value="{{old('email')}}" required>
                                @endif
                                <div class="invalid-feedback">
                                    {{$errors->has('email') ?  $errors->first('email') : 'Please enter a valid email address'}}
                                </div>
                                <div class="valid-feedback">
                                    Validation
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="message">Message</label>
                                @if($errors->any())
                                    <textarea type="text" name="message" class="form-control {{$errors->has('message') ? 'is-invalid':'is-valid'}}" id="message" placeholder="Message" rows="5" required>{{ old('message')}}</textarea>
                                @else
                                    <textarea type="text" name="message" class="form-control" id="message" placeholder="Message" rows="5" required>{{ old('message')}}</textarea>
                                @endif
                                <div class="invalid-feedback">
                                    {{$errors->has('message') ?  $errors->first('message') : 'Please enter your message'}}
                                </div>
                                <div class="valid-feedback">
                                    Validation
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2 send text-center text-lg-left">
                        <button class="btn btn-lg btn-outline-primary" type="submit">{{__('Send')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection