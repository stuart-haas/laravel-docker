<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('assets/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('assets/js/app.js') }}" defer></script>
  </head>
  <body>
    <div id="app">
      <div class="flex h-full">
        <aside class="py-8 pl-8 pr-24 bg-indigo-800">
          <nav>
            <ul class="space-y-6">
              <li>
                <a href="/dashboard" class="text-gray-100 hover:text-yellow-300 transition-color duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block align-text-top" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z" />
                  </svg>
                  Dashboard
                </a>
              </li>
              <li>
                <a href="/invoices" class="text-gray-100 hover:text-yellow-300 transition-color duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block align-text-top" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z" clip-rule="evenodd" />
                  </svg>
                  Invoices
                </a>
              </li>
              <li>
                <a href="/clients" class="text-gray-100 hover:text-yellow-300 transition-color duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block align-text-top" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M13 6a3 3 0 11-6 0 3 3 0 016 0zM18 8a2 2 0 11-4 0 2 2 0 014 0zM14 15a4 4 0 00-8 0v3h8v-3zM6 8a2 2 0 11-4 0 2 2 0 014 0zM16 18v-3a5.972 5.972 0 00-.75-2.906A3.005 3.005 0 0119 15v3h-3zM4.75 12.094A5.973 5.973 0 004 15v3H1v-3a3 3 0 013.75-2.906z" />
                  </svg>
                  Clients
                </a>
              </li>
              <li>
                <a href="/settings" class="text-gray-100 hover:text-yellow-300 transition-color duration-200">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block align-text-top" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                  </svg>
                  Settings
                </a>
              </li>
            </ul>
          </nav>
        </aside>
        <div class="flex-1">
          <header class="flex items-center justify-between px-16 py-8 shadow">
            <div>
              <input type="text" placeholder="Search..." class="shadow border border-gray-200 p-2 rounded outline-none" />
            </div>
            <div class="text-gray-800">
              <span class="font-semibold mr-2">Hello, User</span>
              <a class="rounded-full border border-gray-200 p-1 shadow">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block align-text-top" viewBox="0 0 20 20" fill="currentColor">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                </svg>
              </a>
            </div>
          </header>
          <main class="mt-8 px-16">
            <h1 class="text-2xl font-semibold text-gray-800">Dashboard</h1>
            <section class="mt-8 grid grid-cols-3 gap-8">
              <div class="p-8 border border-gray-200 rounded shadow">
                <div class="flex items-center justify-between">
                  <h2 class="text-xl font-semibold text-gray-800">Invoices</h2>
                  <nav class="text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block align-text-top" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                  </nav>
                </div>
                <table class="table-fixed w-full mt-4">
                  <thead>
                    <tr>
                      <th align="left">Date</th>
                      <th align="center">Client</th>
                      <th align="right">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jan 5, 2022</td>
                      <td align="center">Client 1</td>
                      <td align="right">$1,000.00</td>
                    </tr>
                    <tr>
                      <td>Jan 5, 2022</td>
                      <td align="center">Client 1</td>
                      <td align="right">$1,000.00</td>
                    </tr>
                    <tr>
                      <td>Jan 5, 2022</td>
                      <td align="center">Client 1</td>
                      <td align="right">$1,000.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <div class="p-8 border border-gray-200 rounded shadow">
                <div class="flex items-center justify-between">
                  <h2 class="text-xl font-semibold text-gray-800">Payments</h2>
                  <nav class="text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block align-text-top" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M3 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm0 4a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                    </svg>
                  </nav>
                </div>
                <table class="table-fixed w-full mt-4">
                  <thead>
                    <tr>
                      <th align="left">Date</th>
                      <th align="center">Client</th>
                      <th align="right">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Jan 5, 2022</td>
                      <td align="center">Client 1</td>
                      <td align="right">$1,000.00</td>
                    </tr>
                    <tr>
                      <td>Jan 5, 2022</td>
                      <td align="center">Client 1</td>
                      <td align="right">$1,000.00</td>
                    </tr>
                    <tr>
                      <td>Jan 5, 2022</td>
                      <td align="center">Client 1</td>
                      <td align="right">$1,000.00</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </section>
          </main>
        </div>
      </div>
    </div>
  </body>
</html>