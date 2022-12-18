@extends('layouts.app') @section('content')
    <div class="container">
        <h1>users</h1>


        <div class="card-body">
            <body>
                {{-- @if (count($users)) @foreach ($users as $index => $user) --}}
                {{-- @empty(!$users) @foreach ($users as $index => $user) --}}
                @forelse ($users as $index => $user)

                <div class="card mt-3" style="max-width: 540px;">
                    <div class="row no-gutters ">
                        <div class="col-md-4 mt">
                            <img src="https://www.fcbarcelona.com/photo-resources/2022/12/16/591b287e-aa54-4753-8054-fd367df2c8e7/ent_1612-001.JPG?width=1200&height=750" class="card-img" alt="...">
                        </div>
                        <div class="col-md-7">
                            <div class="card-body">
                                <h5 class="card-title">{{ $user['name'] }}</h5>

                                <p>{{ $user['email'] }}</p>
                                {{-- <p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p> --}}
                            </div>
                        </div>
                    </div>
                </div>
                        {{-- <td>{{ $index + 1 }}</td>
                        <td></td>
                        <td></td --}}

                @empty


                    {{-- @endforeach @else --}}
                    <tr>
                        <td colspan="4">
                            <div class="text-center">Data is currently empty.</div>
                        </td>
                    </tr>
                @endforelse
                {{-- @endif --}}
            </body>

    </div>
    @include('component.template')
</div>
@endsection

<script src="js/app.js"></script>
