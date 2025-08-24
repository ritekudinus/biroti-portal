<x-bendahara-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold text-purple-700">Tambah Dompet Kas</h1>

        <form action="{{ route('bendahara.dompet.store') }}" method="POST" class="mt-4 space-y-4">
            @csrf
            <div>
                <label class="block text-gray-700">Nama Dompet</label>
                <input type="text" name="name" class="w-full p-2 border rounded-lg"
                    placeholder="Contoh: Kas Event 2025" required>
            </div>


            <div>
                <label class="block text-gray-700">Saldo Awal</label>
                <input type="number" name="balance" class="w-full p-2 border rounded-lg" placeholder="Contoh: 2500000"
                    required>
            </div>

            <button type="submit" class="px-4 py-2 bg-purple-600 text-white rounded-lg shadow hover:bg-purple-700">
                Simpan
            </button>
        </form>
    </div>
</x-bendahara-layout>
