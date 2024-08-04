<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DaerahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    
        $data = [
            'Jawa Barat' => [
                'Kota Bandung' => [
                    'Andir' => ['Campaka', 'Ciroyom', 'Dunguscariang', 'Garuda', 'Kebonjeruk', 'Maleber'],
                    'Astana Anyar' => ['Cibadak', 'Karanganyar', 'Karasak', 'Nyengseret', 'Panjunan', 'Pelindung Hewan'],
                    'Antapani' => ['Antapani Mandalajati', 'Antapani Kulon', 'Antapani Wetan', 'Antapani Tengah'],
                    'Arcamanik' => ['Cisaranten Bina Harapan', 'Cisaranten Endah', 'Cisaranten Kulon', 'Sukamiskin']
                ],
                'Kota Bekasi' => [
                    'Bekasi Barat' => ['Bintara', 'Bintara Jaya', 'Jakasampurna', 'Kranji'],
                    'Bekasi Timur' => ['Aren Jaya', 'Bekasi Jaya', 'Duren Jaya', 'Margahayu'],
                    'Bekasi Selatan' => ['Jaka Setia', 'Kayuringin Jaya', 'Margajaya', 'Pekayon Jaya']
                ],
                'Kota Bogor' => [
                    'Bogor Barat' => ['Balungbangjaya', 'Bubulak', 'Cilendek Barat', 'Cilendek Timur'],
                    'Bogor Timur' => ['Baranangsiang', 'Katulampa', 'Sindangsari', 'Sukasari'],
                    'Bogor Selatan' => ['Batutulis', 'Bojongkerta', 'Cikaret', 'Cipaku']
                ],
                'Kabupaten Bandung' => [
                    'Baleendah' => ['Andir', 'Baleendah', 'Bojongmalaka', 'Jelegong', 'Manggahang', 'Rancamanyar'],
                    'Cilengkrang' => ['Cilengkrang', 'Ciporeat', 'Cisurupan', 'Mekarmanik', 'Sukadana'],
                    'Cileunyi' => ['Cibiru Hilir', 'Cileunyi Kulon', 'Cileunyi Wetan', 'Cimekar', 'Ciporeat', 'Mekar Mulya']
                ],
                'Kabupaten Bekasi' => [
                    'Babelan' => ['Babelan Kota', 'Bahagia', 'Buni Bakti', 'Hurip Jaya', 'Kedung Jaya', 'Kedung Pengawas'],
                    'Cibitung' => ['Cibuntu', 'Kertamukti', 'Mukri Jaya', 'Suka Danau', 'Suka Maju', 'Wanasari'],
                    'Cikarang Barat' => ['Danau Indah', 'Gandamekar', 'Jaya Sampurna', 'Jati Sampurna', 'Kalijaya', 'Mekar Wangi']
                ],
                'Kabupaten Bogor' => [
                    'Babakan Madang' => ['Babakan Madang', 'Bojong Koneng', 'Cijayanti', 'Cipambuan', 'Ciparigi', 'Kadumanggu'],
                    'Caringin' => ['Bojong Murni', 'Caringin', 'Ciderum', 'Cimande Hilir', 'Cimande', 'Pasir Buncir'],
                    'Cariu' => ['Babakan Raden', 'Cariu', 'Cibatu Tiga', 'Cikutamahi', 'Kuta Mekar', 'Kuta Rahayu']
                ],
                'Kota Cimahi' => [
                    'Cimahi Selatan' => ['Cibeber', 'Leuwigajah', 'Melong', 'Utama'],
                    'Cimahi Tengah' => ['Cibabat', 'Cigugur Tengah', 'Padasuka', 'Setiamanah'],
                    'Cimahi Utara' => ['Cipageran', 'Karangmekar', 'Pasirkaliki']
                ],
                'Kabupaten Cianjur' => [
                    'Cianjur' => ['Babakancaringin', 'Bojong', 'Cibanteng', 'Cibinong Hilir', 'Cikidang Bayabang', 'Cijedil'],
                    'Cibeber' => ['Cibadak', 'Cibokor', 'Cikondang', 'Margaluyu', 'Mayak', 'Sukamanah'],
                    'Cikalongkulon' => ['Cikalong', 'Cikalongkulon', 'Ciwalen', 'Kanoman', 'Sindangsari', 'Sukamulya']
                ],
                'Kabupaten Cirebon' => [
                    'Arjawinangun' => ['Arjawinangun', 'Bulak', 'Gegunung', 'Grogol', 'Jungjang', 'Kedung Jaya'],
                    'Astanajapura' => ['Astanajapura', 'Buntet', 'Japura Kidul', 'Japura Lor', 'Japura', 'Luwung'],
                    'Babakan' => ['Babakan', 'Bangkaloa Ilir', 'Bangkaloa', 'Ciledug Kulon', 'Ciledug Lor', 'Ciledug Wetan']
                ],
                'Kabupaten Garut' => [
                    'Balubur Limbangan' => ['Balubur Limbangan', 'Caringin', 'Ciwangi', 'Karangsewu', 'Limbangan Barat', 'Limbangan Timur'],
                    'Bayongbong' => ['Bayongbong', 'Cikajang', 'Cikedokan', 'Cikubang', 'Cikukulu', 'Cisero'],
                    'Bungbulang' => ['Bungbulang', 'Cihikeu', 'Cikandang', 'Ciroyom', 'Karyamekar', 'Mekarbakti']
                ],
                'Kabupaten Indramayu' => [
                    'Anjatan' => ['Anjatan Baru', 'Anjatan Utara', 'Bantarwaru', 'Bojongsari', 'Bugis', 'Lempuyang'],
                    'Arahan' => ['Arahan Lor', 'Arahan', 'Langgengsari', 'Panyindangan Kulon', 'Panyindangan Wetan', 'Sukadana'],
                    'Balongan' => ['Balongan', 'Bendungan', 'Kedungwungu', 'Loyang', 'Majakerta', 'Tukdana']
                ],
                'Kabupaten Karawang' => [
                    'Banyusari' => ['Banyusari', 'Ciptamarga', 'Ciptasari', 'Jayamakmur', 'Jayamukti', 'Mekarmaya'],
                    'Batujaya' => ['Batujaya', 'Baturaden', 'Karyamulya', 'Kedawung', 'Kertawaluya', 'Segaran'],
                    'Ciampel' => ['Batujaya', 'Baturaden', 'Karyamulya', 'Kedawung', 'Kertawaluya', 'Segaran']
                ],
                'Kabupaten Kuningan' => [
                    'Ciawigebang' => ['Ancaran', 'Bantarbarang', 'Cibingbin', 'Ciasem', 'Ciawi', 'Kalapa'],
                    'Cibingbin' => ['Bantarbarang', 'Cibingbin', 'Cibeureum', 'Cikaso', 'Cileuya', 'Kertajaya'],
                    'Cibugel' => ['Cibugel', 'Cieurih', 'Girimukti', 'Kertajaya', 'Mekarmulya', 'Panawangan']
                ],
                'Kota Banjar' => [
                    'Banjar' => ['Balokang', 'Banjarkolot', 'Banjar', 'Cibeureum', 'Cibereum', 'Hegarsari'],
                    'Langensari' => ['Langensari', 'Mulyasari', 'Neglasari', 'Rejasari', 'Sukamukti', 'Sukamaju'],
                    'Pataruman' => ['Batulawang', 'Binangun', 'Karangpanimbal', 'Mekarharja', 'Pataruman', 'Sukamukti']
                ],
                'Kota Cirebon' => [
                    'Harjamukti' => ['Argasunya', 'Harjamukti', 'Kalijaga', 'Larangan', 'Kejaksan', 'Kesambi'],
                    'Kejaksan' => ['Kejaksan', 'Kesenden', 'Sukapura', 'Sunyaragi', 'Panjunan', 'Karyamulya'],
                    'Pekalipan' => ['Drajat', 'Jagasatru', 'Kebonbaru', 'Kepatihan', 'Pulasaren', 'Pekalangan']
                ],
                'Kota Depok' => [
                    'Beji' => ['Beji', 'Beji Timur', 'Kemiri Muka', 'Pondok Cina', 'Tanah Baru', 'Kukusan'],
                    'Bojongsari' => ['Bojongsari', 'Curug', 'Duren Seribu', 'Pondok Petir', 'Sawangan Baru', 'Sawangan Lama'],
                    'Cilodong' => ['Cilodong', 'Kalibaru', 'Kalimulya', 'Kalimulya II', 'Jatimulya', 'Ratujaya']
                ],
                'Kota Sukabumi' => [
                    'Baros' => ['Baros', 'Cipanengah', 'Dayeuhluhur', 'Sudajaya Hilir', 'Sudajaya Girang', 'Sukakarya'],
                    'Cibeureum' => ['Babakan', 'Cibeureum Hilir', 'Cibeureum Kulon', 'Cibeureum Wetan', 'Sukakarya', 'Karamat'],
                    'Citamiang' => ['Cikole', 'Citamiang', 'Dayeuhluhur', 'Nanggeleng', 'Tipar', 'Selabintana']
                ],
                'Kabupaten Majalengka' => [
                    'Argapura' => ['Argalingga', 'Argamukti', 'Argapura', 'Argasari', 'Cikijing', 'Haurgeulis'],
                    'Banjaran' => ['Banjaran', 'Ciherang', 'Cilangkap', 'Cimanggu', 'Cintawangi', 'Jatiwangi'],
                    'Bantarujeg' => ['Bantarujeg', 'Bantrang', 'Bantranglor', 'Bantrangwetan', 'Kertajati', 'Mekarjati']
                ],
                'Kabupaten Purwakarta' => [
                    'Babakancikao' => ['Babakancikao', 'Bongas', 'Cikopo', 'Citeko', 'Gununghejo', 'Sindangkasih'],
                    'Bojong' => ['Bojong', 'Cibogohilir', 'Cibogowetan', 'Cijantung', 'Jatiluhur', 'Linggasari'],
                    'Campaka' => ['Campaka', 'Cikadu', 'Ciracas', 'Darangdan', 'Gandamekar', 'Gununghejo']
                ],
                'Kabupaten Subang' => [
                    'Binong' => ['Binong', 'Cijengkol', 'Gandasari', 'Kediri', 'Mekarjaya', 'Sindangsari'],
                    'Blanakan' => ['Blanakan', 'Ciasem', 'Cipicung', 'Jayamukti', 'Kalensari', 'Muara'],
                    'Cibogo' => ['Cibogo', 'Cikaum', 'Cisalak', 'Kalijati', 'Mekarjaya', 'Subang']
                ],
                'Kabupaten Sumedang' => [
                    'Buahdua' => ['Buahdua', 'Cibugel', 'Cileunyi', 'Cimanggung', 'Jatinangor', 'Paseh'],
                    'Cibugel' => ['Buahdua', 'Cibugel', 'Cileunyi', 'Cimanggung', 'Jatinangor', 'Paseh'],
                    'Cisitu' => ['Buahdua', 'Cibugel', 'Cileunyi', 'Cimanggung', 'Jatinangor', 'Paseh']
                ],
                'Kabupaten Tasikmalaya' => [
                    'Ciawi' => ['Bojonggambir', 'Ciawi', 'Cibalong', 'Cigalontang', 'Cikalong', 'Cikalong'],
                    'Cigalontang' => ['Bojonggambir', 'Ciawi', 'Cibalong', 'Cigalontang', 'Cikalong', 'Cikalong'],
                    'Cikalong' => ['Bojonggambir', 'Ciawi', 'Cibalong', 'Cigalontang', 'Cikalong', 'Cikalong']
                ],
                'Kota Tasikmalaya' => [
                    'Bungursari' => ['Bungursari', 'Cihideung', 'Indihiang', 'Kawalu', 'Mangkubumi', 'Tamansari'],
                    'Cihideung' => ['Bungursari', 'Cihideung', 'Indihiang', 'Kawalu', 'Mangkubumi', 'Tamansari'],
                    'Indihiang' => ['Bungursari', 'Cihideung', 'Indihiang', 'Kawalu', 'Mangkubumi', 'Tamansari']
                ]
            ]
        ];



        foreach ($data as $provinsi => $kota) {
            $provinsiId = DB::table('provinsis')->insertGetId(['name' => $provinsi]);
            foreach ($kota as $kotaName => $kecamatan) {
                $kotaId = DB::table('kotas')->insertGetId(['name' => $kotaName, 'provinsi_id' => $provinsiId]);
                foreach ($kecamatan as $kecamatanName => $kelurahan) {
                    $kecamatanId = DB::table('kecamatans')->insertGetId(['name' => $kecamatanName, 'kota_id' => $kotaId]);
                    foreach ($kelurahan as $kelurahanName) {
                        DB::table('kelurahans')->insert(['name' => $kelurahanName, 'kecamatan_id' => $kecamatanId]);
                    }
                }
            }
        }
    }
}
