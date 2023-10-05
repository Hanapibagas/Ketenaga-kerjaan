<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\DataSet;
use App\Models\DataStaf;
use App\Models\DetailsDataset;
use App\Models\Infografis;
use App\Models\InformasiBerkala;
use App\Models\InformasiPublik;
use App\Models\InformasiSertaMerta;
use App\Models\InformasiSetiapSaat;
use App\Models\MetaData;
use App\Models\Organisasi;
use App\Models\PengajuanKeberatan;
use App\Models\PengajuanKeberatanPublik;
use App\Models\Pengumuman;
use App\Models\PermintaanData;
use App\Models\PermohonanInformasiPublik;
use App\Models\PermohonanPublik;
use App\Models\Publikasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $pengumuman = Pengumuman::first();
        $berita = Berita::paginate(10);
        return view('components.pages.beranda', compact('berita', 'pengumuman'));
    }

    public function profile()
    {
        $profiles = DataStaf::all();
        return view('components.pages.profile', compact('profiles'));
    }

    public function tampilan_data_pegawai(Request $request, $id)
    {
        $lihatdatapegawasi = DataStaf::wherer('id', $id)->first();
        return view('components.pages.profile', compact('lihatdatapegawasi'));
    }

    public function cari_data_pegarawai(Request $request)
    {
        $keywords = $request->search;
        // dd($keywords);
        $profiles = DataStaf::where('nama', 'like', "%" . $keywords . "%")->get();
        return view('components.pages.profile', compact('profiles'));
    }

    public function ppid()
    {
        $organisasi = Organisasi::all();
        return view('components.pages.ppid', compact('organisasi'));
    }

    public function rekapitulasi_home(Request $request)
    {
        $tahun = $request->tahun;

        $labels = ['January', 'February', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $mounth = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];

        $pemohon = [];
        $dipenuhi = [];
        $ditolak = [];
        $diproses = [];
        foreach ($mounth as $key => $value) {
            $pemohon[] = PermohonanInformasiPublik::whereYear('tahun', $tahun)
                ->whereMonth('tahun', $value)
                ->count();
            $dipenuhi[] = PermohonanInformasiPublik::whereYear('tahun', $tahun)
                ->whereMonth('tahun', $value)
                ->where('status', 'Dipenuhui')
                ->count();
            $ditolak[] = PermohonanInformasiPublik::whereYear('tahun', $tahun)
                ->whereMonth('tahun', $value)
                ->where('status', 'Ditolak')
                ->count();
            $diproses[] = PermohonanInformasiPublik::whereYear('tahun', $tahun)
                ->whereMonth('tahun', $value)
                ->where('status', 'Proses')
                ->count();
        }

        return view('components.pages.rekapitulasi_permohonan_informasi_publik', compact('labels', 'pemohon', 'ditolak', 'dipenuhi', 'diproses'));
    }

    public function filter_tahun_rekapitulasi(Request $request)
    {
        $tahun = $request->tahun;

        $filtertahunrekap = PermohonanInformasiPublik::whereYear('tahun', $tahun);

        $labels = ['January', 'February', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $mounth = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];

        $pemohon = [];
        $dipenuhi = [];
        $ditolak = [];
        $diproses = [];
        foreach ($mounth as $key => $value) {
            $pemohon[] = PermohonanInformasiPublik::whereYear('tahun', $tahun)
                ->whereMonth('tahun', $value)
                ->count();
            $dipenuhi[] = PermohonanInformasiPublik::whereYear('tahun', $tahun)
                ->whereMonth('tahun', $value)
                ->where('status', 'Dipenuhui')
                ->count();
            $ditolak[] = PermohonanInformasiPublik::whereYear('tahun', $tahun)
                ->whereMonth('tahun', $value)
                ->where('status', 'Ditolak')
                ->count();
            $diproses[] = PermohonanInformasiPublik::whereYear('tahun', $tahun)
                ->whereMonth('tahun', $value)
                ->where('status', 'Proses')
                ->count();
        }

        return view('components.pages.rekapitulasi_permohonan_informasi_publik', compact('labels', 'pemohon', 'ditolak', 'dipenuhi', 'diproses', 'filtertahunrekap'));
    }

    // dataset
    public function dataset()
    {
        $dataset = DataSet::all();
        return view('components.pages.dataset.dataset', compact('dataset'));
    }

    public function cari_dataset(Request $request)
    {
        $keywords = $request->search;
        $dataset = DataSet::where('nama_dataset', 'like', "%" . $keywords . "%")->paginate(10);
        return view('components.pages.dataset.dataset', compact('dataset'));
    }

    public function details_dataset(Request $request, $nama_dataset)
    {
        $tahun = $request->tahun;

        $dataset = DataSet::where('nama_dataset', $nama_dataset)->first();
        $filtertahun = DetailsDataset::paginate(24);
        $labels = ['January', 'February', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $mounth = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];

        $grafik = [];
        foreach ($mounth as $key => $value) {
            $grafik[] = DetailsDataset::whereYear('tahun', $tahun)
                ->where('dataset_id', $nama_dataset)
                ->whereMonth('tahun', $value)
                ->count();
        }
        return view('components.pages.dataset.details-dataset', compact('dataset', 'filtertahun', 'labels', 'grafik'));
    }

    public function filter_dataset_home(Request $request, $nama_dataset, $dataset)
    {
        $tahun = $request->tahun;

        $dataset = DataSet::where('nama_dataset', $nama_dataset)->first();

        $filtertahun = DetailsDataset::whereYear('tahun', $tahun)->where('dataset_id', $dataset)->get();

        $labels = ['January', 'February', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
        $mounth = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12'];

        $grafik = [];
        foreach ($mounth as $key => $value) {
            $grafik[] = DetailsDataset::whereYear('tahun', $tahun)
                ->where('dataset_id', $dataset)
                ->whereMonth('tahun', $value)
                ->count();
        }

        return view('components.pages.dataset.details-dataset', compact('dataset', 'filtertahun', 'labels', 'grafik'));
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

    // permohonan publik
    public function permohonan_publik()
    {
        $jumlahpemohon = PermohonanInformasiPublik::count();
        $informasi = InformasiPublik::first();
        return view('components.pages.layanan.permohonan-publik', compact('jumlahpemohon', 'informasi'));
    }

    public function form_permohonan_publik()
    {
        return view('components.pages.layanan.form-permohonan-informasi-publik');
    }

    public function store_permohonan_publik(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu',
            'image' => 'Mohon maaf type file anda bukan foto'
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
            'foto_ktp' => 'required|image|mimes:jpg,png',
            'tahun' => 'required',
            'captcha' => ['required', 'captcha'],
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
            'foto_ktp' => $file,
            'tahun' => $request->input('tahun')
        ]);

        return redirect()->route('form_permohonan_publik')->with('status', 'Selamat data permohonan publik berhasil ditambahkan');
    }

    // keberatan publik
    public function keberatan_publik()
    {
        $jumlahkeberatan = PengajuanKeberatan::count();
        $keberatan = PengajuanKeberatanPublik::first();
        return view('components.pages.layanan.pengajuan-publik', compact('jumlahkeberatan', 'keberatan'));
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
            'tujuan_pengguna' => 'required',
            'captcha' => ['required', 'captcha'],
        ], $message);

        PengajuanKeberatan::create([
            'no_pendaftaran' => $request->input('no_pendaftaran'),
            'tujuan_pengguna' => $request->input('tujuan_pengguna')
        ]);

        return redirect()->route('form_keberatan_publik')->with('status', 'Selamat data keberatan publik berhasil ditambahkan');
    }

    public function RelodKeberatan()
    {
        return response()->json(['captcha' => captcha_img()]);
    }

    public function keran_sulsel()
    {
        return view('components.pages.layanan.keran-sulsel');
    }

    public function lapor()
    {
        return view('components.pages.layanan.lapor');
    }

    public function permintaan_home_guest()
    {
        return view('components.pages.permintaan-data.guest_permintaan_data');
    }

    public function permintaan_data_home()
    {
        return view('components.pages.permintaan-data.permintaan_data');
    }

    public function postPermintaanData(Request $request)
    {
        $message = [
            'required' => 'Mohon maaf anda lupa untuk mengisi ini dan harap anda mangisi terlebih dahulu',
            'image' => 'Mohon maaf type file anda bukan foto'
        ];

        $this->validate($request, [
            'email' => 'required',
            'nama' => 'required',
            'no_tlpn' => 'required',
            'no_ktp' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'rincian' => 'required',
            'tujuan' => 'required',
            'foto_ktp' => 'required|image|mimes:jpeg,png,jpg,gif',
            'foto_pengajuan' => 'required|image|mimes:jpeg,png,jpg,gif',
            'captcha' => ['required', 'captcha'],
        ], $message);

        if ($request->file('foto_ktp')) {
            $foto_ktp = $request->file('foto_ktp')->store('permintaan-data', 'public');
        }
        if ($request->file('foto_pengajuan')) {
            $foto_pengajuan = $request->file('foto_pengajuan')->store('permintaan-data', 'public');
        }

        PermintaanData::create([
            'email' => $request->input('email'),
            'nama' => $request->input('nama'),
            'no_tlpn' => $request->input('no_tlpn'),
            'no_ktp' => $request->input('no_ktp'),
            'alamat' => $request->input('alamat'),
            'pekerjaan' => $request->input('pekerjaan'),
            'rincian' => $request->input('rincian'),
            'tujuan' => $request->input('tujuan'),
            'foto_ktp' => $foto_ktp,
            'foto_pengajuan' => $foto_pengajuan
        ]);

        return redirect()->back()->with('status', 'Selamat permintaan data anda berhasil dikirim');
    }
}
