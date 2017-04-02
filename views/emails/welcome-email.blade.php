@extends('emails.base-email')

@section('body')
<p>
    Welcome to Acme!
</p>

<p>
    Please <a href="{!! getenv('HOST') !!}/verify-account?token={!! $token !!}">click here</a> to activate your account.
</p>
@stop