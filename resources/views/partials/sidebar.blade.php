<aside class="float-left bg-primary overflow-y-hidden h-screen w-[340px] sticky top-0 bottom-0 lg:left-0 overflow-x-hidden">
    <span class="absolute right-5 top-5 text-secondary"><i class="fa-solid fa-chevron-left"></i></span>
    <div class="h-fit  mt-[135px]" id="sideBarContainer">
      <div class="flex items-center p-2 px-12 text-secondary font-medium rounded-l-full hover:bg-slate-100 bg-white bar" aria-hidden="true">
        <i class="fa-solid fa-house fa-sm "></i>
        <a href="/"><span class="ml-6 text-sm">Dashboard</span></a>
      </div>
      <div class="flex items-center mt-2 p-2 px-12 text-secondary font-medium rounded-l-full hover:bg-slate-100 bar">
        <i class="fa-solid fa-barcode fa-sm"></i>
        <a href="/produk"><span class="ml-6 text-sm">Produk</span></a>
      </div>
      <div class="flex items-center mt-2 p-2 px-12 text-secondary font-medium rounded-l-full hover:bg-slate-100 bar">
        <i class="fa-solid fa-folder fa-sm"></i>
        <a href="/kategori"><span class="ml-6 text-sm">Kategori</span></a>
      </div>
      <div class="flex items-center mt-2 p-2 px-12 text-secondary font-medium rounded-l-full hover:bg-slate-100 bar">
        <i class="fa-solid fa-users fa-sm"></i>
        <span class="ml-6 text-sm">Kasir</span>
      </div>
      <div class="flex items-center mt-2 p-2 px-12 text-secondary font-medium rounded-l-full hover:bg-slate-100 bar">
        <i class="fa-solid fa-cart-shopping fa-sm"></i>
        <span class="ml-6 text-sm">Penjualan</span>
      </div>
      <div class="flex items-center mt-2 p-2 px-12 text-secondary font-medium rounded-l-full hover:bg-slate-100 bar" onclick="dropDown()">
        <i class="fa-solid fa-chart-column fa-sm"></i>
        <div class="flex items-center justify-center">
          <span class="ml-6 text-sm">Laporan</span>
          <span class="ml-3 text-xs">
            <i class="fa-solid fa-chevron-down" id="arrow"></i>
          </span>
        </div>
      </div>
      <div class="w-[70%] ml-20 my-2 hidden" id="submenu">
        <h1 class="text-sm p-2 px-8 text-secondary font-normal hover:text-white rounded">Harian</h1>
        <h1 class="text-sm p-2 px-8 text-secondary font-normal hover:text-white rounded">Harian</h1>
        <h1 class="text-sm p-2 px-8 text-secondary font-normal hover:text-white rounded">Harian</h1>
      </div>
      <div class="flex items-center mt-2 p-2 px-12 text-secondary font-medium rounded-l-full hover:bg-slate-100 bar">
        <i class="fa-solid fa-right-from-bracket fa-sm"></i>
        <span class="ml-6 text-sm">Logout</span>
      </div>
    </div>
  </aside>

  <script>
    function dropDown() {
      document.querySelector("#submenu").classList.toggle("hidden");
      document.querySelector("#arrow").classList.toggle("rotate-180");
    }

    const sideBarContainer = document.querySelector('#sideBarContainer');
    const bar = sideBarContainer.getElementsByClassName('bar');

    for (let i = 0; i < bar.length; i++) {
        bar[i].addEventListener('click', function() {
            let current = document.getElementsByClassName("bg-white");
            current[0].className = current[0].className.replace("bg-white");
            this.className += " bg-white";
        })
    }
  </script>
