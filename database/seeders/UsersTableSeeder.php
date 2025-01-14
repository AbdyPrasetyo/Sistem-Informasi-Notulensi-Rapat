<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    //     $faker = Faker::create('user_id'); // Menggunakan bahasa Indonesia untuk Faker

    //     foreach (range(1, 10) as $index) { // Mengisi 10 data pengguna, sesuaikan dengan kebutuhan Anda
    //         DB::table('users')->insert([
    //             'name' => $faker->name,
    //             'email' => $faker->unique()->safeEmail,
    //             'password' => Hash::make('password'), // Menggunakan password default 'password', Anda mungkin ingin mengubah ini
    //             'role_id' => $faker->numberBetween(1, 3), // Contoh role_id yang di-generate secara acak antara 1 dan 3
    //             'position' => $faker->jobTitle,
    //             'phone_number' => $faker->phoneNumber,
    //             'faculty' => $faker->word, // Contoh faculty di-generate secara acak
    //             'study_program' => $faker->sentence(2), // Contoh study_program di-generate secara acak
    //             'created_at' => now(),
    //             'updated_at' => now(),
    //         ]);
    // }

    $name = [

        'JURIAH MULYANTI, Ir, M.Sc.',
        'ILHAM POERNOMO, Dr, Ir, M.T.',
        'JOKO WINARNO, S.T., M.Eng.',
        'SUKAMTO, S.T., M.T.',
        'SYAHRIL MACHMUD, Ir, M.MT.',
        'SUPRIYANTO, Ir, M.T.',
        'BUDDEWI SUKINDRAWATI, S.T., M.T.',
        'PRASETYA ADI, S.T., M.T.',
        'TANIA EDNA BHAKTY, Dr., S.T., M.T.',
        'SRI GATI HUTOMO, S.T., M.T.',
        'ARUSMALEM GINTING, S.T., M.T.',
        'TITIEK WIDYASARI, S.T., M.T.',
        'RISDIYANTO, Dr., S.T., M.T.',
        'BING SANTOSA, Ir, M.T.',
        'S A R D I, S.T., M.T.',
        'TEGUH WIDODO, S.T., M.T.',
        'NIZAR ACHMAD, S.T., M.Eng.',
        'NINDYO CAHYO KRESNANTO, Dr, S.T., M.T.',
        'MOCHAMAD SYAMSIRO, Dr. Eng., S.T., M.T.',
        'UNTORO BUDI SURONO, Dr., S.T., M.Eng.',
        'FATSYAHRINA FITRIASTUTI, S.Si., M.T.',
        'JEMMY EDWIN B, S.Kom., M.Eng.',
        'JEFFRY ANDHIKA PUTRA, S.T., M.M., M.Eng.',
        'ERI HARYANTO, S.Kom., M.Kom.',
        'AGUSTIN SETIYORINI, S.Kom., M.Kom.',
        'RYAN ARI SETYAWAN, S.Kom., M.Eng.',
        'SAHADI, Dr., Ir, M.T.',
        'SOFYAN, S.Kom., M.Kom.',
        'YUMARLIN MZ, S.Kom., M.Pd., M.Kom.',
        'NUR AYU DIANA CITRA DEWI SETYANINGSIH PUTRI, S.ST., M.T.',
        'SRI RAHAYU, S.Kom., M.Eng.',
        'ERRY MARICHA OKI NUR HARYANTO, S.Kom.',
        'SARJU, S.T., M.T.',
        'WIDYA KARTIKA, S.T., M.T.',
        'HERLINA SUSILAWATI, S.T., M.Eng.',
        'DIMAS BAYU ENDRAYANA (DHARMOWIJONO), S.T., M.T., Ph.D.',
        'NOESANTO DEWANTORO AHMAD, S.Pd., M.Eng.',
        'ANDRIAN PERMANA, S.T., M.Eng.',
        'MIFTAHUL IMAN, Dr., S.T., M.Eng.',
        'BAYU MEGAPRASTIO, S.T.',
        'M. ARIEF SAPUTRO, S.T.',
        'ARDIYAN RAMADHANI, S.T.',
        'TAUFIK KRIDIYANTO, S.KOM.',
        'CHRISTINA DARYANTI, A.Md.',
        'P R I H A N A ',
        'SRI SUWARTI ',
        'KELIK SETYO NUGROHO',
        'H A R D I Y A N T O ',
        'BERNADETHA IIN ENDANG RAHAYU',
        'S U D A R M O N O',
        'ANANTO WIDIATMOKO, A.Md.T.',
        'ZAINUR ROCHMAT',
        'EKO PRIYONO',
        'PUTHUT DIMAS INDRASWARA',
        'MIKA SETYAWAN, S.Pd.T.',
        'ENDAH KUMALASARI, A.Md.',
        'HABIBAH TURRAHMAH, S.Kom.',
        'JATI MURTI NASTITI, S.Kom.',
        'FREDI AJI FIRMANSYAH, S.T.',

    ];

    $email = [
                'jm.yanti@janabadra.ac.id',
                'ilham.purnomo@janabadra.ac.id',
                'jokowinarno@janabadra.ac.id',
                'kamto@janabadra.ac.id',
                'syahril@janabadra.ac.id',
                'SUPRIYANTO@example.com',
                'buddewi_sukindrawati@janabadra.ac.id',
                'prasetya@janabadra.ac.id',
                'tania@janabadra.ac.id',
                'srigati@janabadra.ac.id',
                'aginting@janabadra.ac.id',
                'titiekwidyasari@janabadra.ac.id',
                'risdiyanto@janabadra.ac.id',
                'bing@janabadra.ac.id',
                'sardi@janabadra.ac.id',
                'teguh_widodo@janabadra.ac.id',
                'nizar_achmad@janabadra.ac.id',
                'nindyo_ck@janabadra.ac.id',
                'syamsiro@janabadra.ac.id',
                'untorobs@janabadra.ac.id',
                'fitri@janabadra.ac.id',
                'jemmy@janabadra.ac.id',
                'jeffry@janabadra.ac.id',
                'eri@janabadra.ac.id',
                'agustin@janabadra.ac.id',
                'ryan@janabadra.ac.id',
                'sahadihadi5@janabadra.ac.id',
                'sofyan@janabadra.ac.id',
                'yumarlin@janabadra.ac.id',
                'nurayu@janabadra.ac.id',
                'ayu.dj@janabadra.ac.id',
                'errymaricha@janabadra.ac.id',
                'sarju@janabadra.ac.id',
                'widya.kartika@janabadra.ac.id',
                'herlina@janabadra.ac.id',
                'dimas@example.con',
                'noesanto@janabadra.ac.id',
                'andrian@janabadra.ac.id',
                'miftahul_iman@janabadra.ac.id',
                'bayumegaprastio@janabadra.ac.id',
                'ariefsaputro@janabadra.ac.id',
                'ardiyan@janabadra.ac.id',
                'taofik@janabadra.ac.id',
                'christina_daryanti@janabadra.ac.id',
                'prihana@janabadra.ac.id',
                'sri_suwarti@janabadra.ac.id',
                'kelik@janabadra.ac.id',
                'hardiyanto@janabadra.ac.id',
                'iin@janabadra.ac.id',
                'darmono@janabadra.ac.id',
                'ananto@janabadra.ac.id',
                'zainur@janabadra.ac.id',
                'eko@janabadra.ac.id',
                'puthut_indraswara@janabadra.ac.id',
                'mika@janabadra.ac.id',
                'endah@janabadra.ac.id',
                'habibah@janabadra.ac.id',
                'jati@janabadra.ac.id',
                'frediaji.f@janabadra.ac.id',

    ];
    $position = [
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'DOSEN',
        'ASS-DOSEN',
        'ASS-DOSEN',
        'ASS-DOSEN',
        'ASS-DOSEN',
        'ADMINIST',
        'ADMINIST',
        'ADMINIST',
        'ADMINIST',
        'AD-LABOR',
        'ADMINIST',
        'ADMINIST',
        'AD-LABOR',
        'AD-LABOR',
        'AD-LABOR',
        'AD-LABOR',
        'AD-LABOR',
        'ADMINIST',
        'ADMINIST',
        'ADMINIST',
        'AD-LABOR',

    ];
    $password = Hash::make('janameet123');

     // Buat pengguna dengan role admin
     User::create([
        'name' => 'Admin User',
        'email' => 'admin@example.com',
        'password' => Hash::make('admin1234'),
        'role' => 1, // Admin
        'image' => 'meyoong.png',
    ]);



    $count = count($name);

    for ($i = 0; $i < $count; $i++) {
        DB::table('users')->insert([
            'name' => $name[$i],
            'email' => $email[$i],
            'position' => $position[$i],
            'password' => $password,
            'role' => 4,
            'image' => 'meyoong.png',
        ]);
    }

    // Buat pengguna dengan role sekretaris
    // User::create([
    //     'name' => 'Sekretaris User',
    //     'email' => 'sekretaris@example.com',
    //     'password' => Hash::make('sekretaris1234'),
    //     'role' => 2, // Sekretaris
    // ]);

    // Buat pengguna dengan role notulensi
    // User::create([
    //     'name' => 'Notulensi User',
    //     'email' => 'notulensi_user@example.com',
    //     'password' => Hash::make('notulensi1234'),
    //     'role' => 3, // Notulensi
    // ]);

    // // Buat pengguna dengan role user
    // User::create([
    //     'name' => 'General User',
    //     'email' => 'user@example.com',
    //     'password' => Hash::make('user1234'),
    //     'role' => 4, // User
    // ]);

    }
}
