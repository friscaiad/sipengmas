<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use App\Models\Periode;
use App\Models\Prodi;
use App\Models\Pengmas;
use App\Models\Skema;
use Illuminate\Http\Request;
use \Illuminate\Support\Collection;

class TampilkanPengmasController extends Controller
{
    public function index(Request $request) {
        $prodi = Prodi::all();
        $periode = Periode::all();
        $dep = Departemen::all();
        $skema = Skema::all();
        $pengmas = empty(session()->get('pengmas')) ?
        Pengmas::with(['periode', 'prodi', 'ketua', 
        'anggota', 'departemen', 'skema'])
        ->get() : session()->get('pengmas');

        $prodi = $this->checkboxHelper($prodi, $request->old("prodi"), "nama_prodi");
        $periode = $this->checkboxHelper($periode, $request->old("periode"), "tahun");
        $dep = $this->checkboxHelper($dep, $request->old("departemen"), "nama_departemen");
        $skema = $this->checkboxHelper($skema, $request->old("skema"), "nama_skema");

        return view('data', [
            'prodi' => $prodi,
            'periode' => $periode,
            'departemen' => $dep,
            'skema' => $skema,
            'pengmas' => $pengmas,
        ]);
    }

    public function filter(Request $r) {
        $search = $r->input('search');
        $periode = $r->input('periode');
        $prodi = $r->input('prodi');
        $skema = $r->input('skema');
        $departemen = $r->input('departemen');

        if(!empty($search)) {
            $filteredPengmas = Pengmas::search($search);
            
            if(!empty($periode)) {
                foreach ($periode as $p) {
                    $filteredPengmas->where('periode.id', $p);
                }
            }

            if(!empty($prodi)) {
                foreach ($prodi as $p) {
                    $filteredPengmas->where('prodi.id', $p);
                }
            }

            if(!empty($skema)) {
                foreach ($skema as $s) {
                    $filteredPengmas->where('skema.id', $s);
                }
            }

            if(!empty($departemen)) {
                foreach ($departemen as $d) {
                    $filteredPengmas->where('departemen.id', $d);
                }
            }

            return redirect("/data")
            ->withInput()
            ->with("pengmas", $filteredPengmas->get());
        } else {
            $filteredPengmas = Pengmas::search();
            
            if(!empty($periode)) {
                foreach ($periode as $p) {
                    $filteredPengmas->where('periode.id', $p);
                }
            }

            if(!empty($prodi)) {
                foreach ($prodi as $p) {
                    $filteredPengmas->where('prodi.id', $p);
                }
            }

            if(!empty($skema)) {
                foreach ($skema as $s) {
                    $filteredPengmas->where('skema.id', $s);
                }
            }

            if(!empty($departemen)) {
                foreach ($departemen as $d) {
                    $filteredPengmas->where('departemen.id', $d);
                }
            }

            return redirect("/data")
            ->withInput()
            ->with("pengmas", $filteredPengmas->get());
        }

        return redirect("/data");
    }

    /**
     * dataname itu nama kolom yang mengandung deskripsi checkbox
     * @param Collection $collection
     * @param array|null $sessionData
     * @param string $dataname
     * @return Collection
     */
    private function checkboxHelper($collection, $sessionData, $dataname) {
        $c = $collection;
        if($sessionData) {
            $c = $c->map(function($item, $key) use ($sessionData, $dataname) {
                for ($i=0; $i < count($sessionData); $i++) { 
                    if($item->id == $sessionData[$i]) {
                        return [
                            'id' => $item->id,
                            $dataname => $item[$dataname],
                            'checked' => true
                        ];
                    }
                }

                return [
                    'id' => $item->id,
                    $dataname => $item[$dataname],
                    'checked' => false
                ];
            });
        }

        return $c;
    }
}
