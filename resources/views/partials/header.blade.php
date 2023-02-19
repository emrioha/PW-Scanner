<header class="w-full flex mb-2">
    <nav class="bg-grey-light rounded-md w-full">
      <ol class="list-reset flex">
        <li>
          <a href="#" class="text-blue-600 hover:text-blue-700"><i class="fa-solid fa-house"></i></a>
        </li>
        <li><span class="text-gray-500 mx-2">></span></li>
        <li><a href="#" class="text-gray-400 text-sm">Produk</a></li>
      </ol>
    </nav>
     <div class="flex gap-6 items-center relative">
      <span class="cursor-pointer text-slate-700 hover:text-blue-500"><a href=""><i class="fa-solid fa-bell fa-lg"></i></a></span>
      <img class="w-8 h-8 rounded-full" src="images/profile.png" alt="" />
      <span class="text-slate-700 hover:text-blue-500 cursor-pointer" onclick="ddProfile()"><i class="fa-solid fa-chevron-down"></i></span>
       <div class="bg-white drop-shadow-lg absolute -bottom-24 -right-3 p-4 rounded hidden " id="ddProfile">
        <ul class="text-sm text-secondary ">
            <li class="mb-4"><a href=""><i class="fa-solid fa-user fa-lg"></i><span class="ml-3">Profile</span></a></li>
            <li class=""><a href=""><i class="fa-solid fa-right-from-bracket fa-lg"></i><span class="ml-3">Logout</span></a></li>
        </ul>
      </div>
    </div>
  </header>

<script>
    function ddProfile() {
        document.querySelector('#ddProfile').classList.toggle('hidden')
    }
</script>
