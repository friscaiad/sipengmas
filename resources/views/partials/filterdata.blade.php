<form id="filter" class="col-sm-3 m-3" method="POST" action="{{ url('/data/filter') }}">
    @csrf
    <div class="text-dark">
        <h5>Filter Pengmas</h5>
    </div>
    <div class="text-dark ml-2 mt-2">
        <h6>Skema</h6>
    </div>
    @foreach ($skema as $s)
        <div class="form-check ml-5">
            <input class="form-check-input" name="skema[]" type="checkbox" value="{{ $s['id'] }}"
                id="flexCheckDefault" {{ $s['checked'] ? 'checked' : '' }}>
            <label class="form-check-label" for="skema[]">
                {{ $s['nama_skema'] }}
            </label>
        </div>
    @endforeach
    <div class="text-dark ml-2">
        <h6>Tahun</h6>
    </div>
    @foreach ($periode as $p)
        <div class="form-check ml-5">
            <input class="form-check-input" name="periode[]" type="checkbox" value="{{ $p['id'] }}"
                id="flexCheckDefault" {{ $p['checked'] ? 'checked' : '' }}>
            <label class="form-check-label" for="periode[]">
                {{ $p['tahun'] }}
            </label>
        </div>
    @endforeach
    <div class="text-dark ml-2 mt-2">
        <h6>Departemen</h6>
    </div>
    @foreach ($departemen as $d)
        <div class="form-check ml-5">
            <input class="form-check-input" name="departemen[]" type="checkbox" value="{{ $d['id'] }}"
                id="flexCheckDefault" {{ $d['checked'] ? 'checked' : '' }}>
            <label class="form-check-label" for="departemen[]">
                {{ $d['nama_departemen'] }}
            </label>
        </div>
    @endforeach
    <div class="text-dark ml-2 mt-2">
        <h6>Prodi</h6>
    </div>
    @foreach ($prodi as $i => $p)
        <div class="form-check ml-5">
            <input class="form-check-input" name="prodi[]" type="checkbox" value="{{ $p['id'] }}"
                id="flexCheckDefault" {{ $p['checked'] ? 'checked' : '' }}>
            <label class="form-check-label" for="prodi[]">
                {{ $p['nama_prodi'] }}
            </label>
        </div>
    @endforeach
    <button class="btn btn-primary mt-4" type="submit">
        Filter Data
    </button>
</form>