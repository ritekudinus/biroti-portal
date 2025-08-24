<x-bendahara-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold text-purple-700">Dashboard Bendahara</h1>
        <p class="text-gray-600">Ringkasan Keuangan Bulan Ini</p>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
            <div class="p-4 bg-purple-100 rounded-xl shadow">
                <h2 class="text-lg font-semibold text-purple-800">Saldo Kas</h2>
                <p class="mt-2 text-2xl font-bold text-purple-900">Rp {{ number_format($saldoKas, 0, ',', '.') }}</p>
            </div>

            <div class="p-4 bg-pink-100 rounded-xl shadow">
                <h2 class="text-lg font-semibold text-pink-800">Pemasukan</h2>
                <p class="mt-2 text-2xl font-bold text-pink-900">Rp {{ number_format($pemasukanBulanIni, 0, ',', '.') }}
                </p>
            </div>

            <div class="p-4 bg-blue-100 rounded-xl shadow">
                <h2 class="text-lg font-semibold text-blue-800">Pengeluaran</h2>
                <p class="mt-2 text-2xl font-bold text-blue-900">Rp
                    {{ number_format($pengeluaranBulanIni, 0, ',', '.') }}</p>
            </div>
        </div>
    </div>

</x-bendahara-layout>
