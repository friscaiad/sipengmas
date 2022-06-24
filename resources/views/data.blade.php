@extends('layouts.data')
@section('contain')
            <div id="content" class="col-sm-8">
                <form class="input-group mt-3 ml-2 mb-3" method="POST" action="{{ url('/data/filter') }}">
                    @csrf
                    <input type="text" class="form-control" name="search" placeholder="Search Pengmas">
                    <button class="btn btn-outline-dark" type="submit">
                        <i class="bi bi-search"></i>
                    </button>
                </form>
                <!-- <button id="filter-toggle" class="btn btn-secondary">
                    <i class="bi bi-funnel-fill"></i>
                    <span>
                        Toggle Filter
                    </span>
                </button> -->
                <div class="table-responsive-sm">
                    <table class="table table-bordered m-auto mt-2">
                        <thead class="bg-primary text-white">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Judul</th>
                                <th scope="col">Ketua</th>
                                <th scope="col">Anggota</th>
                                <th scope="col">Periode</th>
                                <th scope="col">Dana</th>
                                <th scope="col">Download SK</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pengmas as $i => $p)
                                <tr>
                                    <th>{{ $i + 1 }}</th>
                                    <th>{{ $p->judul }}</th>
                                    <th>
                                        @foreach ($p->ketua as $k)
                                            {{ $k->nama_lengkap }}
                                        @endforeach
                                    </th>
                                    <th>
                                        <ul>
                                            @foreach ($p->anggota as $a)
                                                <li>{{ $a->nama_lengkap }}</li>
                                            @endforeach
                                        </ul>
                                    </th>
                                    <th>{{ $p->periode->tahun }}</th>
                                    <th>{{ $p->dana }}</th>
                                    <th>
                                        <i class="bi bi-arrow-down-circle-fill"></i>    
                                    </th>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
@endsection
