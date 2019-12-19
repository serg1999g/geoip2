@extends('layout')


@section('content')

    <section>
        <div class="container">
            <div class="row">
                <form action="{{ route('store') }}" method="post">
                    {{ csrf_field() }}
                    <label for="ip">Enter ip address</label>
                    <input type="text" name="ip">
                    <button>Get location</button>
                </form>
            </div>
        </div>
    </section>

@endsection

