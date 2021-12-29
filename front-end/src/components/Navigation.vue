<template>
  <nav id="nav" class="w-full mx-auto flex items-center justify-center bg-white shadow">
    <div class="w-full max-w-7xl px-2 sm:px-6 lg:px-8 flex items-center justify-between">
      <div class="relative flex items-center justify-between h-16">
        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
          <div>
            <div class="flex justify-center space-x-4">
              <router-link
                class="h-16 text-gray-700 hover:bg-gray-100 hover:text-gray-400 px-8 py-4 text-sm font-medium"
                to="/"
              >
                Home
              </router-link>
              <router-link
                class="h-16 text-gray-700 hover:bg-gray-100 hover:text-gray-400 px-8 py-4 text-sm font-medium"
                to="/cart"
              >
                Cart
              </router-link>
            </div>
          </div>
        </div>
      </div>
      <div class="flex items-center justify-start">
        <a class="mr-4" href="https://linkedin.com/in/diogofirmino" target="_blank">
          <svg
              class="w-6 h-6 text-gray-700 hover:text-red-300 fill-current"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 448 512">
            <path
                d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"
            ></path>
          </svg>
        </a>
        <a href="https://github.com/diogofirmino" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-gray-700 hover:text-red-300 fill-current">
            <path
                d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>
          </svg>
        </a>
      </div>
    </div>
  </nav>
</template>
