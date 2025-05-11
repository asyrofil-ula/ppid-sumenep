<!-- PANEL INFORMASI -->
<div class="space-y-6">
    <!-- Panduan Tambah Data -->
    <div class="bg-white p-6 rounded-lg shadow-md border-l-4 border-blue-500">
        <h2 class="text-lg md:text-xl font-bold text-gray-800 mb-4">📘 Panduan Tambah Data</h2>
        <ul class="space-y-3 text-gray-600 text-sm md:text-base">
            <li><strong>📂 Persiapkan Dokumen:</strong> Pastikan semua informasi dan dokumen pendukung sudah disiapkan sebelum mengisi formulir.</li>
            <li><strong>✏️ Isi Data dengan Lengkap:</strong> Semua kolom bertanda bintang (*) wajib diisi sesuai dengan format yang diminta.</li>
            @if(Route::current()->getName() == 'infografis' || Route::current()->getName() == 'galery')
            <li><strong>📄 Unggah File yang Sesuai:</strong> File harus dalam format .jpg/.png/.jpeg, ukuran maksimal 2MB.</li>
            @else
            <li><strong>📄 Unggah File yang Sesuai:</strong> File dokumen harus dalam format PDF dengan ukuran maksimal 2MB.</li>
            @endif
            <li><strong>🔍 Periksa Kembali:</strong> Tinjau semua informasi sebelum menekan tombol simpan untuk memastikan keakuratan data.</li>
        </ul>
    </div>

    <!-- Peringatan -->
    <div class="bg-yellow-50 border-l-4 border-yellow-400 p-5 rounded-lg shadow-md">
        <h3 class="text-lg font-bold text-yellow-800 mb-2">⚠️ Peringatan!</h3>
        <p class="text-yellow-700 text-sm md:text-base">
            Data yang sudah tersimpan <strong>tidak dapat diedit atau dihapus</strong>. Pastikan seluruh informasi yang dimasukkan sudah benar sebelum menyimpan data.
        </p>

        <div class="mt-3 bg-yellow-100 p-3 rounded-md text-sm md:text-base text-yellow-800 border border-yellow-300">
            <p class="font-semibold">Jika terdapat kesalahan data setelah disimpan:</p>
            <ul class="list-disc list-inside mt-1 space-y-1">
                <li>Hubungi administrator sistem pada nomor <strong>(0328) 123456</strong></li>
                <li>Kirim email dengan detail kesalahan ke <strong>ppid@sumenepkab.go.id</strong></li>
            </ul>
        </div>
    </div>
</div>