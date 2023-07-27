@extends('main')
@section('content')
<div class="p-4 sm:ml-64 dark:bg-slate-950">
    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:bg-slate-950 mt-20 dark:border-gray-700">
        {{-- this is my content --}}
        <div class="items-center justify-center h-auto p-10">
            {{-- this is my form --}}
            <div class="flex justify-center content-center">
                <form class="space-y-6 w-1/2" action="#">
                    <h5 class="text-xl text-center font-medium text-gray-900 dark:text-white">Input Form Pengikut</h5>

                    <label for="input-group-1" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NAMA PENGIKUT</label>
                    <div class="relative mb-6">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z" clip-rule="evenodd" />
                            </svg>
                        </div>
                        <input type="text" id="input-group-1" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-cyan-500 focus:border-cyan-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-cyan-500 dark:focus:border-cyan-500" placeholder="masukan nama pegawai">
                    </div>

                    <button type="submit" class="text-white bg-cyan-700 hover:bg-cyan-800 focus:ring-4 focus:outline-none focus:ring-cyan-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-cyan-600 dark:hover:bg-cyan-700 dark:focus:ring-cyan-800">Simpan Data Pengikut</button>

                </form>
            </div>
            {{-- end form here --}}
            {{-- this is my table --}}
            <div class="mt-20">
                <h5 class="text-xl font-medium text-gray-900 dark:text-white mb-8">Table Pengikut</h5>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-cyan-50 dark:bg-cyan-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    No.
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Pengikut
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Nama Pengikut
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Action
                                </th>
                            </tr>

                        </thead>
                        <tbody>
                            {{-- @foreach ($pengikut as $item)
                                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                    <td class="px-6 py-4">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-6 py-4">
                                        {{ $item->pegawai->nama }}
                                    </td>
                                    <td class="px-6 py-4">
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit | </a>
                                        <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Hapus</a>
                                    </td>
                                </tr>
                            @endforeach --}}
                                    @foreach ($data as $pegawai)
                                        @foreach ($pegawai->sppds as $sppd)
                                            @foreach ($sppd->pengikut as $pengikut)
                                                <tr>
                                                    <td class="px-6 py-4">
                                                        {{ $loop->index }}
                                                    </td>
                                                    <td>{{ $pegawai->nama }}</td>
                                                    <td>{{ $sppd->no_sppd }}</td>
                                                    <td>{{ $pengikut->nama }}</td>
                                                </tr>
                                            @endforeach
                                        @endforeach
                                    @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{-- end table here --}}
        </div>
        {{-- end my content here --}}
    </div>
</div>
@endsection
