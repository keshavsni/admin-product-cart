@extends('admin.main.layout')
@section('title', $title)

@section('content')

    <div class="pcoded-content">
        <div class="pcoded-inner-content">

            <div class="main-body">
                <div class="page-wrapper">

                    <div class="page-body">

                        <div class="card">
                            <div class="card-header">
                                <h5>{{ $title }}</h5>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive dt-responsive">
                                    <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr  style="background-color:#263544; color:#fff">
                                                <th>Sr No</th>
                                                <th>Product Name</th>
                                                <th>Product Price</th>
                                                <th>Product Image</th>
                                                <th>Description</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php
                                                $index = 1;
                                            @endphp
                                            @foreach ($products as $v)
                                                <tr>
                                                    <td>{{ $index }}</td>
                                                    <td>{{ $v->product_name ?? 'N/A' }}</td>
                                                    <td>{{ $v->price }}</td>
                                                    @php
                                                        $imgs = json_decode($v->images);
                                                    @endphp
                                                    <td> <img src="{{ Storage::url($imgs[0]) }}" width="50" height="50"
                                                                style="border-radius:25px;" />
                                                        
                                                    </td>
                                                    <td>{{ $v->descrition }}</td>
                                                </tr>
                                                @php
                                                    $index++;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                    </div>

                @endsection
