<?php 

$source = [
	[
		"name" => "Terry Medhurst", 
		"age" => 50, 
		"university" => "Capitol University" 
	], 
	[
		"name" => "Sheldon Quigley", 
		"age" => 28, 
		"university" => "Stavropol State Technical University" 
	], 
	[
		"name" => "Terrill Hills", 
		"age" => 38, 
		"university" => "University of Cagayan Valley" 
	], 
	[
		"name" => "Miles Cummerata", 
		"age" => 49, 
		"university" => "Shenyang Pharmaceutical University" 
	], 
	[
		"name" => "Mavis Schultz", 
		"age" => 38, 
		"university" => "Estonian University of Life Sciences" 
	], 
	[
		"name" => "Alison Reichert", 
		"age" => 21, 
		"university" => "Universidade da Beira Interior" 
	], 
	[
		"name" => "Oleta Abbott", 
		"age" => 31, 
		"university" => "Institut Sains dan Teknologi Al Kamal" 
	], 
	[
		"name" => "Ewell Mueller", 
		"age" => 29, 
		"university" => "Wenzhou Medical College" 
	], 
	[
		"name" => "Demetrius Corkery", 
		"age" => 22, 
		"university" => "Nanjing University of Economics" 
	], 
	[
		"name" => "Eleanora Price", 
		"age" => 37, 
		"university" => "Melaka City Polytechnic" 
	], 
	[
		"name" => "Marcel Jones", 
		"age" => 39, 
		"university" => "Hodeidah University" 
	], 
	[
		"name" => "Assunta Rath", 
		"age" => 42, 
		"university" => "Kiev Slavonic University" 
	], 
	[
		"name" => "Trace Douglas", 
		"age" => 26, 
		"university" => "Dallas Christian College" 
	], 
	[
		"name" => "Enoch Lynch", 
		"age" => 21, 
		"university" => "University of Sri Jayawardenapura" 
	], 
	[
		"name" => "Jeanne Halvorson", 
		"age" => 26, 
		"university" => "Donghua University, Shanghai" 
	], 
	[
		"name" => "Trycia Fadel", 
		"age" => 41, 
		"university" => "Technical University of Mining and Metallurgy Ostrava" 
	], 
	[
		"name" => "Bradford Prohaska", 
		"age" => 43, 
		"university" => "Technical University of Mining and Metallurgy Ostrava" 
	], 
	[
		"name" => "Arely Skiles", 
		"age" => 42, 
		"university" => "Universidade Estadual do Ceará" 
	], 
	[
		"name" => "Gust Purdy", 
		"age" => 46, 
		"university" => "Xinjiang University" 
	], 
	[
		"name" => "Lenna Renner", 
		"age" => 41, 
		"university" => "Moraine Valley Community College" 
	], 
	[
		"name" => "Doyle Ernser", 
		"age" => 23, 
		"university" => "Nanjing University of Traditional Chinese Medicine" 
	], 
	[
		"name" => "Tressa Weber", 
		"age" => 41, 
		"university" => "Universitat Rámon Llull" 
	], 
	[
		"name" => "Felicity O'Reilly", 
		"age" => 46, 
		"university" => "University of lloilo" 
	], 
	[
		"name" => "Jocelyn Schuster", 
		"age" => 19, 
		"university" => "Bashkir State Medical University" 
	], 
	[
		"name" => "Edwina Ernser", 
		"age" => 21, 
		"university" => "Wuhan University of Technology" 
	], 
	[
		"name" => "Griffin Braun", 
		"age" => 35, 
		"university" => "Universitas Bojonegoro" 
	], 
	[
		"name" => "Piper Schowalter", 
		"age" => 47, 
		"university" => "Sultanah Bahiyah Polytechnic" 
	], 
	[
		"name" => "Kody Terry", 
		"age" => 28, 
		"university" => "Science University of Tokyo" 
	], 
	[
		"name" => "Macy Greenfelder", 
		"age" => 45, 
		"university" => "Fuji Women's College" 
	], 
	[
		"name" => "Maurine Stracke", 
		"age" => 31, 
		"university" => "Poznan School of Banking" 
	] 
]; 

// Buatlah syntax code dari nomor-nomor di bawah ini:

/**
* Nomor 1
*
* Tampilkan jumlah total data di atas.
*/
echo "<h1> Nomor 1 </h1>";
echo "Jumlah total data adalah " . count($source) . " data. <br>";

/**
 * Nomor 2
 * 
 * Tampilkan semua data $source di atas dengan format string:
 * Saya $name berumur $age. Saya berkuliah di $university.
 */
echo "<h1> Nomor 2 </h1>";
foreach ($source as $key => $value) {
    echo "Saya " . $value['name'] . " berumur " . $value['age'] . ". Saya berkuliah di " . $value['university'] . ". <br>";
};

/**
* Nomor 3
*
* Tampilkan semua data yang hanya berumur kurang dari 30 tahun dengan format string
* Saya $name berumur $age. Saya berkuliah di $university.
*/
echo "<h1> Nomor 3 </h1>";
foreach ($source as $key => $value) {
    if ($value['age'] < 30) {
        echo "Saya " . $value['name'] . " berumur " . $value['age'] . ". Saya berkuliah di " . $value['university'] . ". <br>";
    }
};



/**
* Nomor 4
*
* Tampilkan rata-rata umur dari semua data di atas.
*/

echo "<h1> Nomor 4 </h1>";
$total_age = 0;
foreach ($source as $key => $value) {
    $total_age += $value['age'];
}
$average_age = $total_age / count($source);
echo "Rata-rata umur dari semua data adalah " . $average_age . " tahun. <br>";

/**
* Nomor 5
*
* Buat berdasarkan kondisi di bawah ini:
* - Jika berumur kurang dari atau sama dengan 30 tahun, maka tambah dengan angka 7 kemudian jumlahkan semua;
* - Jika berumur lebih dari 30 tahun maka kurangi dengan angka 10 kemudian jumlahkan semua;
* Tampilkan dengan format string:
* - Hasil pengolahan umur <= 30 adalah $total_age
* - Hasil pengolahan umur > 30 adalah $total_age
*/

echo "<h1> Nomor 5 </h1>";
$total_age_less_than_30 = 0;
$total_age_more_than_30 = 0;
foreach ($source as $key => $value) {
    if ($value['age'] <= 30) {
        $total_age_less_than_30 += $value['age'] + 7;
    } else {
        $total_age_more_than_30 += $value['age'] - 10;
    }
}
echo "Hasil pengolahan umur <= 30 adalah " . $total_age_less_than_30 . ". <br>";
echo "Hasil pengolahan umur > 30 adalah " . $total_age_more_than_30 . ". <br>";