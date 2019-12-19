@extends('layout')


@section('content')

    <section>
        <div class="container">
            <div class="row">
                @foreach($city as $item)
                    <div>
                        <div>
                            latitude: {{$item['latitude']}}
                        </div>
                        <div>
                            longitude: {{$item['longitude']}}
                        </div>
                        <div>
                            time zone: {{$item['time_zone']}}
                        </div>
                    </div>
                @endforeach

                <div>
                    <geo-location :urldata="{{json_encode($city)}}"></geo-location>
                </div>
            </div>
        </div>
    </section>

@endsection
