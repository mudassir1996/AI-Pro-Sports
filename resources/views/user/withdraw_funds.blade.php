@extends('layouts.app')
@section('content')
@include('layouts.partials.header')
@include('layouts.partials.sidebar')

<div class="page_title">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-6">
                <div class="page_title-content">
                    <p class="mb-0">
                        <a href="{{route('trade-statement')}}">Dashboard </a>
                        <span>/</span>
                        <span>Withdraw Funds</span>
                    </p>
                </div>
            </div>
            
        </div>
    </div>
</div>

<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Withdraw Funds</h4>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{route('withdraw-funds.request')}}" name="myform" class="personal_validate" novalidate="novalidate" >
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-xl-12">
                                    <label>I would like to withdraw</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <label class="input-group-text bg-light text-dark"><i class="mdi mdi-currency-gbp"></i></label>
                                        </div>
                                        <input type="text" class="form-control" required placeholder="10000" value="{{old('amount')}}" name="amount">
                                        @error('amount')
                                        <label id="amount-error" class="error" for="amount">{{ $message }}</label>
                                        @enderror
                                    </div>
                                </div>
                                <div class="form-group col-xl-12">
                                <label>Reason for withdrawal <span class="text-muted" style="font-size:12px; font-weight:400">(Optional)</span></label>
                                <textarea name="reason" rows="5" class="form-control py-2" placeholder="Your Reason">{{old('reason')}}</textarea>
                                </div>

                                <div class="form-group text-center col-12">
                                    <button class="btn btn-primary pl-5 pr-5">Request Withdraw Funds</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section('scripts')
<script src="{{asset('vendor/validator/jquery.validate.js')}}"></script>
<script src="{{asset('vendor/validator/validator-init.js')}}"></script>
@endsection

