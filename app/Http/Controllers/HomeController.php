<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\DataSet;
use App\Models\DataStaf;
use App\Models\Infografis;
use App\Models\InformasiBerkala;
use App\Models\InformasiSertaMerta;
use App\Models\InformasiSetiapSaat;
use App\Models\PengajuanKeberatan;
use App\Models\Pengumuman;
use App\Models\PermohonanInformasiPublik;
use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $berita = Berita::paginate(10);
        return view('components.pages.beranda', compact('berita'));
    }

    public function profile()
    {
        $profiles = DataStaf::all();
        return view('components.pages.profile', compact('profiles'));
    }

    public function ppid()
    {
        return view('components.pages.ppid');
    }

    public function rekapitulasi_home()
    {
        $permohonan = PermohonanInformasiPublik::select(PermohonanInformasiPublik::raw("COUNT(*) as count"), PermohonanInformasiPublik::raw("MONTHNAME(created_at) as month_name"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(PermohonanInformasiPublik::raw("created_at"))
            ->pluck('count', 'month_name');

        $labels = $permohonan->keys();
        $jumlah = $permohonan->values();
        return view('components.pages.rekapitulasi_permohonan_informasi_publik', compact('labels', 'jumlah'));
    }

    public function dataset()
    {
        return view('components.pages.dataset.dataset');
    }

    //infografis
    public function index_infografis()
    {
        $infografis = Infografis::all();
        return view('components.pages.infografis.infrografis', compact('infografis'));
    }
    public function infografis_details($slug)
    {
        $infografis = Infografis::where('slug', $slug)->firstOrFail();
        return view('components.pages.infografis.details-info', compact('infografis'));
    }
    public function pencarian_infografis(Request $request)
    {
        $keywords = $request->search;
        $infografis = Infografis::where('title', 'like', "%" . $keywords . "%")->paginate(10);
        return view('components.pages.infografis.infrografis', compact('infografis'));
    }

    //berita
    public function index_berita()
    {
        $berita = Berita::all();
        return view('components.pages.berita.index', compact('berita'));
    }
    public function pencarian_berita(Request $request)
    {
        $keywords = $request->search;
        $berita = Berita::where('title', 'like', "%" . $keywords . "%")->paginate(10);
        return view('components.pages.berita.index', compact('berita'));
    }
    public function details_berita($slug)
    {
        $berita = Berita::where('slug', $slug)->firstOrFail();
        return view('components.pages.berita.details-berita', compact('berita'));
    }

    // informasi publik
    public function index_informasi_public()
    {
        $berkala = InformasiBerkala::all();
        $sertamerta = InformasiSertaMerta::all();
        $setiapsaat = InformasiSetiapSaat::all();
        return view('components.pages.informasi-public.informasai-public', compact('berkala', 'sertamerta', 'setiapsaat'));
    }
    public function pencarian_infromasi_berkala(Request $request)
    {
        $keywords = $request->search;
        $berkala = InformasiBerkala::where('nama', 'like', "%" . $keywords . "%")->paginate(10);
        $sertamerta = InformasiSertaMerta::all();
        $setiapsaat = InformasiSetiapSaat::all();
        return view('components.pages.informasi-public.informasai-public', compact('berkala', 'sertamerta', 'setiapsaat'));
    }
    public function pencarian_infromasi_serta_merta(Request $request)
    {
        $keywords = $request->search;
        $berkala = InformasiBerkala::all();
        $sertamerta = InformasiSertaMerta::where('nama', 'like', "%" . $keywords . "%")->paginate(10);
        $setiapsaat = InformasiSetiapSaat::all();
        return view('components.pages.informasi-public.informasai-public', compact('berkala', 'sertamerta', 'setiapsaat'));
    }
    public function pencarian_infromasi_setiap_saat(Request $request)
    {
        $keywords = $request->search;
        $berkala = InformasiBerkala::all();
        $sertamerta = InformasiSertaMerta::all();
        $setiapsaat = InformasiSetiapSaat::where('nama', 'like', "%" . $keywords . "%")->paginate(10);
        return view('components.pages.informasi-public.informasai-public', compact('berkala', 'sertamerta', 'setiapsaat'));
    }

    //publikasi
    public function index_publikasi()
    {
        $publlikasi = Publikasi::all();
        return view('components.pages.publikasi.index-publikasi', compact('publlikasi'));
    }
    public function pencarian_publikasi(Request $request)
    {
        $keywords = $request->search;
        $publlikasi = Publikasi::where('title', 'like', "%" . $keywords . "%")->paginate(10);
        return view('components.pages.publikasi.index-publikasi', compact('publlikasi'));
    }
    public function details_pulikasi($slug)
    {
        $publlikasi = Publikasi::where('slug', $slug)->firstOrFail();
        return view('components.pages.publikasi.details-publikasi', compact('publlikasi'));
    }

    public function pengumuman()
    {
        $pengumuman = Pengumuman::all();
        return view('components.pages.pengumuman', compact('pengumuman'));
    }

    // permohonan publik
    public function permohonan_publik()
    {
        $jumlahpemohon = PermohonanInformasiPublik::count();
        return view('components.pages.layanan.permohonan-publik', compact('jumlahpemohon'));
    }

    public function form_permohonan_publik()
    {
        return view('components.pages.layanan.form-permohonan-informasi-publik');
    }

    public function store_permohonan_publik(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'email' => 'required',
            'nama' => 'required',
            'no_hp' => 'required',
            'no_ktp' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'rincian' => 'required',
            'tujuan' => 'required',
            'foto_ktp' => 'required',
        ], $message);

        if ($request->file('foto_ktp')) {
            $file = $request->file('foto_ktp')->store('permohonan-publik', 'public');
        }

        PermohonanInformasiPublik::create([
            'email' => $request->input('email'),
            'nama' => $request->input('nama'),
            'no_hp' => $request->input('no_hp'),
            'no_ktp' => $request->input('no_ktp'),
            'nomor_pengesahaan' => $request->input('nomor_pengesahaan'),
            'alamat' => $request->input('alamat'),
            'pekerjaan' => $request->input('pekerjaan'),
            'rincian' => $request->input('rincian'),
            'tujuan' => $request->input('tujuan'),
            'foto_ktp' => $file
        ]);

        return redirect()->route('form_permohonan_publik')->with('status', 'Selamat data permohonan publik berhasil ditambahkan');
    }

    // keberatan publik
    public function keberatan_publik()
    {
        $jumlahkeberatan = PengajuanKeberatan::count();
        return view('components.pages.layanan.pengajuan-publik', compact('jumlahkeberatan'));
    }

    public function form_keberatan_publik()
    {
        return view('components.pages.layanan.form-keberatan-informasi-publik');
    }

    public function store_keberatan_publik(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu'
        ];

        $this->validate($request, [
            'no_pendaftaran' => 'required',
            'tujuan_pengguna' => 'required'
        ], $message);

        PengajuanKeberatan::create([
            'no_pendaftaran' => $request->input('no_pendaftaran'),
            'tujuan_pengguna' => $request->input('tujuan_pengguna')
        ]);

        return redirect()->route('form_keberatan_publik')->with('status', 'Selamat data keberatan publik berhasil ditambahkan');
    }

    public function keran_sulsel()
    {
        return view('components.pages.layanan.keran-sulsel');
    }

    public function lapor()
    {
        return view('components.pages.layanan.lapor');
    }
}
