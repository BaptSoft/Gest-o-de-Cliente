<x-layouts.app :title="__('Dashboard')">
    <!-- Cards -->
    <div class="w-full px-6 pt-8">
      <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6">
        <!-- Card 1: E-mails -->
        <div class="bg-gradient-to-r from-pink-400 to-blue-500 text-white rounded-xl shadow-md p-6 flex items-center gap-4 h-40">
          <div class="text-pink-500 bg-pink-100 p-3 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M3 17l6-6 4 4 8-8" />
            </svg>
          </div>
          <div>
            <p class="text-sm text-gray-500">E-mails</p>
            <h2 class="text-2xl font-bold">15.00</h2>
          </div>
        </div>
  
        <!-- Card 2: Domínio -->
        <div class="bg-gradient-to-r from-gray-400 to-blue-500 text-white rounded-xl shadow-md p-6 flex items-center gap-4 h-40">
          <div class="text-cyan-500 bg-cyan-100 p-3 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M11 11V3H3v18h18v-8h-8z" />
            </svg>
          </div>
          <div>
            <p class="text-sm text-gray-500">Domínio</p>
            <h2 class="text-2xl font-bold">10.00</h2>
          </div>
        </div>
  
        <!-- Card 3: Clientes -->
        <div class="bg-gradient-to-r from-gray-400 to-blue-500 text-white rounded-xl shadow-md p-6 flex items-center gap-4 h-40">
          <div class="text-yellow-500 bg-yellow-100 p-3 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5.121 17.804A13.937 13.937 0 0112 15c2.5 0 4.847.655 6.879 1.804M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
            </svg>
          </div>
          <div>
            <p class="text-sm text-gray-500">Clientes</p>
            <h2 class="text-2xl font-bold">20.00</h2>
          </div>
        </div>
  
        <!-- Card 4: Sites -->
        <div class="bg-gradient-to-r from-pink-400 to-blue-500 text-white rounded-xl shadow-md p-6 flex items-center gap-4 h-40">
          <div class="text-green-500 bg-green-100 p-3 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none"
                 viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6h16M4 10h16M4 14h16M4 18h16" />
            </svg>
          </div>
          <div>
            <p class="text-sm text-gray-500">Sites</p>
            <h2 class="text-2xl font-bold">$9850.90</h2>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Gráficos -->
    <div class="w-full px-6 mt-10 grid grid-cols-1 md:grid-cols-2 gap-6">
      <!-- Gráfico de Linhas -->
      <div class="bg-white rounded-xl shadow-md p-4">
        <h2 class="text-lg font-semibold mb-4">Vendas Mensais</h2>
        <canvas id="lineChart" class="w-full h-64"></canvas>
      </div>
  
      <!-- Gráfico de Barras -->
      <div class="bg-white rounded-xl shadow-md p-4">
        <h2 class="text-lg font-semibold mb-4">Receita por Categoria</h2>
        <canvas id="barChart" class="w-full h-64"></canvas>
      </div>
    </div>
  
    <!-- Tabela -->
    <div class="w-full px-6 mt-10">
       
      <div class="relative flex flex-col w-full h-full overflow-auto text-slate-300 bg-slate-800 shadow-md rounded-lg bg-clip-border">
        <h2 class="text-xl font-semibold text-slate-100 text-center mb-4">
            Clientes em Destaque
          </h2>
        <table class="w-full text-left table-auto min-w-max">
          <thead>
            <tr>
              <th class="p-4 border-b border-slate-600 bg-slate-700">
                <p class="text-sm font-normal leading-none text-slate-300">
                  NOME 
                </p>
              </th>
              <th class="p-4 border-b border-slate-600 bg-slate-700">
                <p class="text-sm font-normal leading-none text-slate-300">
                 SERVIÇO
                </p>
              </th>
              <th class="p-4 border-b border-slate-600 bg-slate-700">
                <p class="text-sm font-normal leading-none text-slate-300">
                 DOMÍNIO	
                </p>
              </th>
              <th class="p-4 border-b border-slate-600 bg-slate-700">
                <p class="text-sm font-normal leading-none text-slate-300">
                 DATA DE PAGAMENTO 
                </p>
              </th>
            </tr>
          </thead>
          <tbody>
            <tr class="even:bg-slate-900 hover:bg-slate-700">
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-100 font-semibold">
                  Ford Mustang
                </p>
              </td>
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-300">
                  2020
                </p>
              </td>
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-300">
                  $35,000
                </p>
              </td>
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-300">
                  New York, USA
                </p>
              </td>
            </tr>
            <tr class="even:bg-slate-900 hover:bg-slate-700">
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-100 font-semibold">
                  Tesla Model S
                </p>
              </td>
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-300">
                  2022
                </p>
              </td>
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-300">
                  $80,000
                </p>
              </td>
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-300">
                  San Francisco, USA
                </p>
              </td>
            </tr>
            <tr class="even:bg-slate-900 hover:bg-slate-700">
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-100 font-semibold">
                  BMW 3 Series
                </p>
              </td>
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-300">
                  2019
                </p>
              </td>
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-300">
                  $25,000
                </p>
              </td>
              <td class="p-4 border-b border-slate-700">
                <p class="text-sm text-slate-300">
                  Paris, France
                </p>
              </td>
            </tr>
            <tr class="even:bg-slate-900 hover:bg-slate-700">
              <td class="p-4">
                <p class="text-sm text-slate-100 font-semibold">
                  Audi A4
                </p>
              </td>
              <td class="p-4">
                <p class="text-sm text-slate-300">
                  2021
                </p>
              </td>
              <td class="p-4">
                <p class="text-sm text-slate-300">
                  $40,000
                </p>
              </td>
              <td class="p-4">
                <p class="text-sm text-slate-300">
                  London, UK
                </p>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  
  </x-layouts.app>
  
  <!-- Scripts para Chart.js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script>
    // Gráfico de Linhas
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineCtx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun'],
        datasets: [{
          label: 'Vendas',
          data: [1200, 1900, 3000, 2500, 2800, 3200],
          borderColor: 'rgb(75, 192, 192)',
          backgroundColor: 'rgba(75, 192, 192, 0.2)',
          fill: true,
          tension: 0.4
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: true }
        }
      }
    });
  
    // Gráfico de Barras
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
      type: 'bar',
      data: {
        labels: ['Sites', 'Apps', 'Marketing', 'Design', 'Consultoria'],
        datasets: [{
          label: 'Receita (Kz)',
          data: [4500, 3200, 1800, 2700, 3500],
          backgroundColor: [
            '#60a5fa', '#34d399', '#f87171', '#fbbf24', '#a78bfa'
          ]
        }]
      },
      options: {
        responsive: true,
        plugins: {
          legend: { display: true }
        }
      }
    });
  </script>
  