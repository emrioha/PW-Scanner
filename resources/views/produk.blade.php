@extends('layouts.main')

@section('content')
@include('partials.header')
      <span class="text-2xl font-medium">Produk</span>
      <section class="bg-gray mt-6 py-4 px-5 rounded-md flex w-full items-center justify-evenly">
        <div class="w-[300px]">
          <label for="search" class="text-xs text-gray-500">Cari Produk</label>
          <label class="relative block">
            <span class="sr-only">Search</span>
            <span class="absolute inset-y-0 left-0 flex items-center pl-2">
              <i class="fa-solid fa-search fa-sm text-gray-500"></i>
            </span>
            <input
              class="placeholder:text-gray-500 block bg-white w-full border border-slate-300 rounded-md py-1 pl-9 pr-3 shadow-sm focus:outline-none focus:ring-sky-500 focus:ring-1 text-xs"
              placeholder="Cari..."
              type="text"
              name="search"
              id="search"
            />
          </label>
        </div>
        <div class="w-[160px]">
          <label for="status" class="text-xs text-gray-500">Status</label>
          <select class="w-full bg-gray-50 bg-white border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 block p-1 focus:ring-1">
            <option hidden class="text-gray-500"> Status</option>
            <option value="sedia" class="text-gray-500 bg-yellow-200">Tersedia</option>
            <option value="tipis" class="flex">Stock menipis</option>
            <option value="kosong">Kosong</option>
          </select>
        </div>
        <div class="w-[250px]">
          <label for="status" class="text-xs text-gray-500">Kategori</label>
          <select class="w-full bg-gray-50 bg-white border border-gray-300 text-gray-500 text-xs rounded-md focus:ring-blue-500 block p-1 focus:ring-1">
            <div>
              <i class="fa-solid fa-search fa-xs"></i>
              <option hidden class="text-gray-500">Pilih berdasarkan kategori</option>
            </div>
            <option value="US" class="flex">Celana dalam</option>
            <option value="CA">Makanan</option>
          </select>
        </div>
        <button class="mt-3 ml-8 bg-primary w-[125px] h-9 text-xs text-white rounded-md hover:bg-blue-900">Tambah</button>
      </section>

      <!-- table -->

      <div class="mt-6 relative overflow-x-auto shadow-md rounded-md">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
          <thead class="text-xs text-gray-700 uppercase bg-gray">
            <tr>
              <th scope="col" class="px-6 py-3 w-4"><input type="checkbox" class="w-4 h-4" onclick="selectALl()"></th>
              <th scope="col" class="px-6 py-3">Kode barang</th>
              <th scope="col" class="px-6 py-3">Gambar</th>
              <th scope="col" class="px-6 py-3">Nama barang</th>
              <th scope="col" class="px-6 py-3">Kategori</th>
              <th scope="col" class="px-6 py-3">Status</th>
              <th scope="col" class="px-6 py-3">Aksi</th>
            </tr>
          </thead>
          <tbody class="text-xs">
            <tr class=" odd:bg-white even:bg-gray border-b">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><input type="checkbox" class="w-4 h-4" id="selectAll"></th>
              <td class="px-6 py-4">Silver</td>
              <td class=" px-7"><img src="images/profile.png" alt="" width="50px"></td>
              <td class="px-6 py-4">$2999</td>
              <td class="px-6 py-4">Makanan</td>
               <td class="px-10"><span class="flex w-2 h-2 bg-green-500 rounded-full"></span></td>
               <td class="px-[24px]"><div class=" w-8 h-8 rounded-full flex justify-center items-center hover:bg-slate-200">
                <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
                </td>
            </tr>
            <tr class="border-b odd:bg-white even:bg-gray">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><input type="checkbox" class="w-4 h-4" id="selectAll"></th>
              <td class="px-6 py-4">White</td>
              <td class=" px-7"><img src="images/profile.png" alt="" width="50px"></td>
              <td class="px-6 py-4">$1999</td>
              <td class="px-6 py-4">Makanan</td>
              <td class="px-10"><span class="flex w-2 h-2 bg-green-500 rounded-full"></span></div></td>
              <td class="px-[24px]"><div class=" w-8 h-8 rounded-full flex justify-center items-center hover:bg-slate-200">
                <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
                </td>
            </tr>
            <tr class="border-b odd:bg-white even:bg-gray">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><input type="checkbox" class="w-4 h-4" id="selectAll"></th>
              <td class="px-6 py-4">Black</td>
              <td class=" px-7"><img src="images/profile.png" alt="" width="50px"></td>
              <td class="px-6 py-4">$99</td>
              <td class="px-6 py-4"> Makanan</td>
              <td class="px-10"><span class="flex w-2 h-2 bg-green-500 rounded-full"></span></td>
              <td class="px-[24px]"><div class=" w-8 h-8 rounded-full flex justify-center items-center hover:bg-slate-200">
                <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
                </td>
            </tr>
            <tr class="border-b odd:bg-white even:bg-gray">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><input type="checkbox" class="w-4 h-4" id="selectAll"></th>
              <td class="px-6 py-4">Gray</td>
              <td class=" px-7"><img src="images/profile.png" alt="" width="50px"></td>
              <td class="px-6 py-4">$799</td>
              <td class="px-6 py-4"> Makanan </td>
              <td class="px-10"><span class="flex w-2 h-2 bg-green-500 rounded-full"></span></div></td>
              <td class="px-[24px]"><div class=" w-8 h-8 rounded-full flex justify-center items-center hover:bg-slate-200">
                <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
                </td>
            </tr>
            <tr class="odd:bg-white even:bg-gray border-b">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><input type="checkbox" class="w-4 h-4" id="selectAll"></th>
              <td class="px-6 py-4">Red</td>
              <td class=" px-7"><img src="images/profile.png" alt="" width="50px"></td>
              <td class="px-6 py-4">$999</td>
              <td class="px-6 py-4">Makanan</td>
              <td class="px-10"><span class="flex w-2 h-2 bg-green-500 rounded-full"></span></div></td>
              <td class="px-[24px]"><div class=" w-8 h-8 rounded-full flex justify-center items-center hover:bg-slate-200">
                <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
                </td>
            </tr>
            <tr class="odd:bg-white even:bg-gray border-b">
              <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white"><input type="checkbox" class="w-4 h-4" id="selectAll"></th>
              <td class="px-6 py-4">Red</td>
              <td class=" px-7"><img src="images/profile.png" alt="" width="50px"></td>
              <td class="px-6 py-4">$999</td>
              <td class="px-6 py-4">Makanan</td>
              <td class="px-10"><span class="flex w-2 h-2 bg-green-500 rounded-full"></span></td>
              <td class="px-[24px]"><div class=" w-8 h-8 rounded-full flex justify-center items-center hover:bg-slate-200">
                <i class="fa-solid fa-ellipsis-vertical"></i>
                </div>
                </td>
            </tr>
          </tbody>
        </table>
      </div>

      <script>
        function selectAll () {
            const select = document.querySelector('#selectAll');
            select.setAttribute('checked','');
        }
      </script>

@endsection
