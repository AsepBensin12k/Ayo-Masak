<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    private $resepList = [
        [
            'id' => 1,
            'nama' => 'Nasi Goreng',
            'bahan' => "- 4 sdm minyak goreng\n- 2 batang daun bawang, iris kasar\n- 50 g wortel, potong kecil\n- 100 g daging ayam rebus, iris halus\n- 2 butir telur ayam, kocok\n- 500 g nasi putih dingin\n- 5 sdm kecap manis\n- 1 sdm kaldu ayam bubuk\n- 1/2 sdt merica bubuk\n\nBumbu Halus:\n- 3 buah cabe merah keriting\n- 5 butir bawang merah\n- 3 siung bawang putih\n- 1 sdt terasi goreng\n- 2 sdt garam",
            'langkah' => "1. Panaskan minyak, tumis Bumbu Halus hingga matang dan harum.\n2. Masukkan daun bawang, wortel, dan ayam. Aduk rata dan sisihkan ke pinggir wajan.\n3. Tuang telur kocok, aduk hingga bergumpal kecil lalu campur rata dengan bahan lain.\n4. Tambahkan nasi putih, kecap manis, kaldu ayam bubuk, dan merica bubuk.\n5. Besarkan api, aduk-aduk hingga seluruh bumbu meresap.\n6. Sajikan hangat, bisa ditaburi bawang merah goreng.",
            'kategori' => 'Nasi',
            'gambar' => 'images/nasi-goreng.jpg'
        ],
        [
            'id' => 2,
            'nama' => 'Salad Sayur',
            'bahan' => "- 2 sdt mustard\n- Sejumput garam dan lada bubuk\n- 3 sdm madu\n- 1/4 cangkir balsamic vinegar\n- 1 siung bawang putih, cincang halus\n- 5 buah stroberi\n- 1 buah mentimun\n- 1/4 cangkir minyak zaitun (virgin olive oil)\n- 1/2 ikat bayam segar\n- 1/2 sdt thyme kering",
            'langkah' => "1. Campurkan semua bahan salad dressing, aduk lembut hingga merata.\n2. Potong dan tata sayuran serta stroberi di atas piring saji.\n3. Siram dengan salad dressing secara merata.\n4. Salad siap dinikmati sebagai menu sehat dan segar.",
            'kategori' => 'Sayuran',
            'gambar' => 'images/salad-sayur.jpg'
        ],
        [
            'id' => 3,
            'nama' => 'Ayam Bakar',
            'bahan' => "- 700 gr ayam potong \n- 5-6 sdm kecap manis \n- 1 sdm mentega \n- 1 sdm air asam jawa \n- garam, merica, kaldu jamur secukupnya \n- 2 lembar daun salam \n- 1 batang serai geprek \n- gula merah \n- 1 ruas lengkuas geprek \n- 4 lembar daun jeruk \n- air secukupnya \nBumbu halus: \n- 3 butir kemiri sangrai \n- 1 sdt ketumbar sangrai \n- sedikit jahe dan kunyit \n- 8 butir bawang merah \n- 5 siung bawang putih",
            'langkah' => "1. Cuci bersih ayam, beri perasan air jeruk nipis sisihkan.\n2. Tumis bumbu halus dan bumbu tambahan dengan minyak dan sedikit mentega sampai wangi dan benar-benar matang mengeluarkan minyak.\n3. Tambahkan gula merah, kecap dan air asam aduk sebentar.\n4. Masukkan ayam masak sampai kaku dan berubah warna.\n5. Tambahkan air sampai ayam agak terendam, beri garam, merica dan kaldu jamur secukupnya.\n6. Masak dengan api sedang cenderung kecil sambil ditutup sampai bumbu meresap dan air berkurang.\n7. Angkat ayam, lalu bakar di atas arang sambil dioles sisa bumbu yang dicampur dengan sedikit mentega.\n8. Sajikan dengan lalapan dan sambel sesuai selera.",
            'kategori' => 'Daging',
            'gambar' => 'images/ayam-bakar.jpg'
        ],
        [
            'id' => 4,
            'nama' => 'Es Teh Manis',
            'bahan' => "-Teh \n- Gula \n- Es Batu",
            'langkah' => "1. Siapkan teh 1 bungkus\n2. Seduh dengan air panas\n3. Tambahkan gula dan es batu \n4 Es teh siap dinikmati",
            'kategori' => 'Minuman',
            'gambar' => 'images/es-teh-manis.jpg'
        ],
        [
            'id' => 5,
            'nama' => 'Fettucine Aglio Olio',
            'bahan' => "- 250 gram pasta fettucine\n- 5 buah cabai rawit\n- 4 siung bawang putih\n- 1 kaleng tuna vegetable oil\n- 1/2 sdt olive oil\n- 1/2 siung bawang bombay\n- 1/2 sdt garam\n- 1/2 sdt merica/lada\n- 1/2 sdm oregano",
            'langkah' => "1. Rebus pasta menggunakan sedikit garam dan mentega sampai al dente.\n2. Siapkan potongan cabai rawit, cincang bawang putih, dan iris bawang bombay. Panaskan olive oil, tumis hingga setengah matang dan wangi.\n3. Masukkan tuna kaleng ke dalam tumisan.\n4. Tambahkan pasta, aduk hingga merata.\n5. Sajikan selagi hangat.",
            'kategori' => 'Makanan Barat',
            'gambar' => 'images/fettucine-aglio-olio.jpg'
        ],
        [
            'id' => 6,
            'nama' => 'Beef Yakiniku',
            'bahan' => "- 4 sdm saus tiram\n- 2 sdm kecap asin\n- 1 sdm kecap manis\n- 1 sdm minyak wijen\n- 3 sdm air\n- 4 cm jahe, potong 3 bagian\n- 1 bawang bombay, iris tipis\n- 4 sdm minyak sayur\n- 2 siung bawang putih, geprek\n- 500 gram daging yakiniku tipis",
            'langkah' => "1. Campur daging dengan semua bahan saus, diamkan 10 menit.\n2. Tumis bawang putih, bawang bombay, dan jahe hingga harum.\n3. Masukkan daging dan saus, tambahkan sedikit air.\n4. Masak hingga daging matang. Sajikan.",
            'kategori' => 'Daging',
            'gambar' => 'images/beef-yakiniku.jpg'
        ],
        [
            'id' => 7,
            'nama' => 'Italian Pizza',
            'bahan' => "- 200 gram tepung terigu\n- 2 sdm gula pasir\n- 1 sdt ragi instan\n- 100 ml air\n- 2 sdm margarin\n- 1 buah sosis\n- ½ bawang bombay\n- 50 gram mayones\n- 100 gram saus bolognese\n- 75 gram keju mozarella",
            'langkah' => "1. Campur tepung, ragi, gula. Tambahkan air sedikit demi sedikit hingga kalis.\n2. Tambahkan margarin, uleni lagi, diamkan 30 menit.\n3. Gilas adonan, tusuk dengan garpu. Oles saus bolognese, beri topping.\n4. Panggang 15–20 menit. Sajikan.",
            'kategori' => 'Makanan Barat',
            'gambar' => 'images/italian-pizza.jpg'
        ],
        [
            'id' => 8,
            'nama' => 'Bakso Sapi',
            'bahan' => "- 250 gram daging sapi\n- 1 putih telur\n- 50 gram tepung sagu\n- 1 sdm bawang putih goreng\n- 1 sdt garam\n- ¼ sdt lada bubuk\n- ½ sdt baking powder\n- 100 gram es batu",
            'langkah' => "1. Haluskan daging dan es batu.\n2. Tambahkan putih telur, haluskan kembali.\n3. Masukkan bahan lainnya, haluskan.\n4. Bentuk bulat, masukkan ke air panas.\n5. Rebus hingga matang. Sajikan.",
            'kategori' => 'Daging',
            'gambar' => 'images/bakso-sapi.jpg'
        ],
        [
            'id' => 9,
            'nama' => 'Mie Ayam Pangsit',
            'bahan' => "- 300 g ayam, potong dadu\n- 1 bungkus mie telor\n- ¼ bawang bombay, iris\n- 4 daun bawang, iris\n- 6 daun jeruk\n- 2 daun salam\n- 1 batang serai, geprek\n- 1 lengkuas, geprek\n- 1 jahe, geprek\n- 1 sdt garam\n- 1 sdt kaldu jamur\n- 1 sdt merica\n- ½ sdt gula\n- 1 sdm kecap manis\n- 1 sdm saus tiram\n- 1 sdm minyak wijen\n- 700–800 ml air panas\n- 4 bawang putih\n- 3 bawang merah\n- 1 kemiri\n- Pangsit rebus\n- Pangsit goreng\n- 4 batang sawi hijau\n- Kecap asin secukupnya",
            'langkah' => "1. Tumis bumbu halus dan rempah hingga wangi.\n2. Masukkan ayam, aduk rata.\n3. Tambahkan air, masak 20–30 menit.\n4. Tambahkan bumbu pelengkap, koreksi rasa.\n5. Sajikan dengan mie, pangsit, sawi, kecap asin.",
            'kategori' => 'Mie',
            'gambar' => 'images/mie-ayam-pangsit.jpg'
        ],
        [
            'id' => 10,
            'nama' => 'Mac and Cheese',
            'bahan' => "- 300 gram makaroni\n- 3 sdm mentega\n- 3 sdm tepung terigu\n- 500 ml susu cair plain\n- 200 gram keju cheddar parut\n- 100 gram keju mozzarella\n- Garam secukupnya\n- Merica secukupnya\n- Bawang putih bubuk secukupnya\n- Sejumput peterseli cincang (opsional)",
            'langkah' => "1. Rebus makaroni hingga al dente, tiriskan.\n2. Lelehkan mentega, tambahkan tepung, aduk rata.\n3. Tuang susu perlahan, aduk hingga kental.\n4. Tambahkan keju, bumbu, aduk rata.\n5. Masukkan makaroni, aduk hingga terbalut saus.\n6. Sajikan hangat, taburi peterseli.",
            'kategori' => 'Makanan Barat',
            'gambar' => 'images/mac-n-cheese.jpg'
        ]

    ];


    public function login()
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('login');
    }

    public function doLogin(Request $request)
    {
        $username = $request->input('username');
        $password = $request->input('password');
        $request->session()->put('username', $username);
        $request->session()->put('password', $password);
        return redirect()->route('dashboard');
    }

    public function pengelolaan(Request $request)
    {
        $username = $request->session()->get('username');
        $search = $request->query('search');
        $kategori = $request->query('kategori');

        $filtered = $this->resepList;

        if ($search) {
            $filtered = array_filter($filtered, fn($item) => stripos($item['nama'], $search) !== false);
        }

        if ($kategori) {
            $filtered = array_filter($filtered, fn($item) => $item['kategori'] === $kategori);
        }

        $kategoriList = collect($this->resepList)
            ->pluck('kategori')
            ->unique()
            ->sort()
            ->values()
            ->all();

        return view('pengelolaan', [
            'username' => $username,
            'reseps' => $filtered,
            'kategori' => $kategori,
            'search' => $search,
            'kategoriList' => $kategoriList,
        ]);
    }

    public function detail($id, Request $request)
    {
        $resepDetail = collect($this->resepList)->firstWhere('id', $id);
        $username = $request->session()->get('username');
        return view('resep_detail', compact('resepDetail', 'username'));
    }

    public function profile(Request $request)
    {
        $username = $request->session()->get('username');
        $password = $request->session()->get('password');
        return view('profile', compact('username', 'password'));
    }

    public function dashboard(Request $request)
    {
        $username = $request->session()->get('username');
        return view('dashboard', [
            'username' => $username
        ]);
    }
}
