<x-bendahara-layout>
    <div class="p-6">
        <h1 class="text-2xl font-bold text-purple-700">Dompet Kas</h1>

        <a href="{{ route('bendahara.dompet.create') }}"
            class="inline-block px-4 py-2 bg-purple-600 text-white rounded-lg shadow hover:bg-purple-700">
            + Tambah Dompet Kas
        </a>

        <div class="mt-6">
            <table class="w-full border rounded-lg overflow-hidden">
                <thead class="bg-purple-100">
                    <tr>
                        <th class="p-3 text-left">Nama Dompet</th>
                        <th class="p-3 text-left">Saldo</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dompet as $dp)
                        <tr class="border-b">
                            <td class="p-3">{{ $dp->name }}</td>
                            <td class="p-3">Rp {{ number_format($dp->balance, 0, ',', '.') }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="2" class="p-3 text-center text-gray-500">Belum ada dompet kas</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-bendahara-layout>
