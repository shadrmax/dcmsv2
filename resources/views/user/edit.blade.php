@extends('layouts.app')
@section('jsscript')
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js" defer></script>
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <form name="edit" action="/user/update" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="exampleFormControlInput1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>
                    <div class="mb-4">
                        <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </form>
                <button name="btn" class="btn btn-success">Кликни меня</button>
            </div>
        </div>
    </div>
@endsection
