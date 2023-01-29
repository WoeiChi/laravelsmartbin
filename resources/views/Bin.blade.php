@extends('master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header text-center"><b>Smart Bin Information</b>
                <div class="row">
                    <div class="col">
                        <a href="{{ url('/Report')}}" type="button" class="btn btn-warning btn-sm"
                            style="float:right;"><b>Graph</b></a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <div class="row w-100">
                    <div class="col-8">
                        <iframe src="https://maps.google.com/maps?q=pap%20ump&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            class="w-100" height="400" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                    <div class="col-4">
                        <div>
                            <table class="table table-borderless">
                                <thead>
                                    <tr>
                                        <th scope="col" class="text-center">Compartment</th>
                                        <th scope="col" class="text-center">Capacity Percentage(%)</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--loop all data out -->
                                    @foreach($bins as $item)
                                    <tr>
                                        <td><b>{{$item->compartment}}</b>
                                            @if($item['status'] == 'Full')
                                            <span class="badge rounded-pill bg-danger">{{$item->status}}</span>
                                            @else
                                            <span class="badge rounded-pill bg-success">{{$item->status}}</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            {{\App\Http\Controllers\binController::calculate(30, $item->remaining)}}
                                        </td>
                                    </tr>
                                </tbody>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection