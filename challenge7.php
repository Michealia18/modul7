<?php
// Data nilai mahasiswa
$nilai_mahasiswa = [75, 80, 65, 90, 55];

// Fungsi untuk menghitung rata-rata nilai
function hitungRataRata($nilai) {
    return array_sum($nilai) / count($nilai);
}

// Fungsi untuk menentukan nilai tertinggi dan terendah
function nilaiTertinggiTerendah($nilai) {
    return [
        'tertinggi' => max($nilai),
        'terendah' => min($nilai)
    ];
}

// Fungsi untuk menentukan status kelulusan
function statusKelulusan($rata_rata) {
    return $rata_rata >= 60 ? "Lulus" : "Tidak Lulus";
}

// Memanggil fungsi
$rata_rata = hitungRataRata($nilai_mahasiswa);
$nilai_extreme = nilaiTertinggiTerendah($nilai_mahasiswa);
$status = statusKelulusan($rata_rata);

// Tampilkan hasil seperti pada contoh gambar
echo "<div style='border: 2px solid #000088; padding: 10px; width: fit-content; font-family: serif;'>";
echo "Nilai mahasiswa: " . implode(" ", $nilai_mahasiswa) . "<br>";
echo "Rata-rata nilai mahasiswa: " . round($rata_rata) . "<br>";
echo "Nilai tertinggi: " . $nilai_extreme['tertinggi'] . "<br>";
echo "Nilai terendah: " . $nilai_extreme['terendah'] . "<br>";
echo "Status kelulusan: $status";
echo "</div>";
?>
