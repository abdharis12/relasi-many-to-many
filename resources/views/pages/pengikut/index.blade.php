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
                                        <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 rounded-lg text-white">
                                            <svg class="w-3 h-3 text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                                                <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                                              </svg>
                                            Edit
                                        </button>

                                        <button type="button" class="px-3 py-2 text-xs font-medium text-center inline-flex items-center bg-gradient-to-r from-pink-400 via-pink-500 to-pink-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-pink-300 dark:focus:ring-pink-800 shadow-lg shadow-pink-500/50 dark:shadow-lg dark:shadow-pink-800/80 rounded-lg text-white">
                                            <svg class="w-3 h-3 text-white mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                                <path fill-rule="evenodd" d="M16.5 4.478v.227a48.816 48.816 0 013.878.512.75.75 0 11-.256 1.478l-.209-.035-1.005 13.07a3 3 0 01-2.991 2.77H8.084a3 3 0 01-2.991-2.77L4.087 6.66l-.209.035a.75.75 0 01-.256-1.478A48.567 48.567 0 017.5 4.705v-.227c0-1.564 1.213-2.9 2.816-2.951a52.662 52.662 0 013.369 0c1.603.051 2.815 1.387 2.815 2.951zm-6.136-1.452a51.196 51.196 0 013.273 0C14.39 3.05 15 3.684 15 4.478v.113a49.488 49.488 0 00-6 0v-.113c0-.794.609-1.428 1.364-1.452zm-.355 5.945a.75.75 0 10-1.5.058l.347 9a.75.75 0 101.499-.058l-.346-9zm5.48.058a.75.75 0 10-1.498-.058l-.347 9a.75.75 0 001.5.058l.345-9z" clip-rule="evenodd" />
                                              </svg>
                                           Hapus
                                        </button>
                                    </td>
                                </tr>
                            @endforeach --}}
                            @foreach ($pegawais as $pegawai)
                                <tr>
                                    <td class="px-6 py-4">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>{{ $pegawai->nama }}</td>
                                    <td>{{ $pegawai->sppds->pivot->no_sppd }}</td>
                                    <td>{{ $pegawai->pengikuts->pivot->nama }}</td>
                                </tr>
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



{{-- @foreach ($data as $pegawai)
    @foreach ($pegawai->sppds as $sppd)
        @foreach ($sppd->pengikut as $pengikut)
            <tr>
                <td class="px-6 py-4">
                    {{ $loop->iteration }}
                </td>
                <td>{{ $pegawai->nama }}</td>
                <td>{{ $sppd->no_sppd }}</td>
                <td>{{ $pengikut->nama }}</td>
            </tr>
        @endforeach
    @endforeach
@endforeach --}}

