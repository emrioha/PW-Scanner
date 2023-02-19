@extends('layouts.main')

@section('content')
@include('partials.header')
<h1 class="text-2xl font-medium">Dashboard</h1>
<section class="mt-12 p-4 flex items-center justify-between">
    <div class=" w-fit h-[250px] flex flex-col justify-evenly">
        <h3 class="text-lg font-medium">Laporan</h3>
        <div class="bg-secondary w-[400px] h-[100px] p-4 mt-4 border-box rounded-md flex justify-between items-center drop-shadow-2xl">
            <div class="flex flex-col justify-between h-full">
                <p class="text-lg">Rp 0,-</p>
                <p class="text-sm">Penjualan hari ini </p>
            </div>
            <i class="fa-solid fa-chart-simple fa-3x text-primary"></i>
        </div>
        <div class="bg-secondary w-[400px] h-[100px] p-4 mt-14 border-box rounded-md flex justify-between items-center drop-shadow-2xl">
            <div class="flex flex-col justify-between h-full">
                <p class="text-lg">Rp 0,-</p>
                <p class="text-sm">Penjualan hari ini </p>
            </div>
            <i class="fa-solid fa-chart-simple fa-3x text-primary"></i>
        </div>
    </div>

    <div class="h-[220px] w-[430px] mt-9">
        <canvas id="myChart"  class=""></canvas>
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('myChart');

    new Chart(ctx, {
      type: 'bar',
      data: {
        labels: ['blaba', 'blabla', 'blabla', 'blaba', 'blabla', 'baba', 'blabla'],
        datasets: [{
        backgroundColor: '#043A7B',
          label: '# of Votes',
          data: [12, 19, 3, 5, 2, 3, 5, 5, 5, 5],
          borderWidth: 1
        }]
      },
      options: {
        maintainAspectRatio: false,
        scales: {
          y: {
            beginAtZero: true
          }
        }
      }
    });
  </script>
@endsection
