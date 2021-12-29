<template>
  <div>
    <p>After cloning the repository, go to the the api folder:</p>
    <ul class="list-disc mt-2 pl-4">
      <li>Create a <span class="italic">.env</span> file (or copy <span class="italic">.env.example</span>)</li>
      <li>Run <span class="italic">composer install</span></li>
      <li>To serve the API locally you can use the following command: <span class="italic">php -S localhost:8000 -t public</span>. If you choose to use another domain or port, please remember to update this info in the <span class="italic">.env</span> file.</li>
      <li>To run unit tests, use <span class="italic">phpunit</span> (or <span class="italic">vendor/bin/phpunit</span> depending on your local environment)</li>
    </ul>
    <p class="mt-5">Now in the front-end folder:</p>
    <ul class="list-disc mt-2 pl-4">
      <li>Run <span class="italic">npm install</span></li>
      <li>Run <span class="italic">npm run serve</span> for compiling and hot-reloads for development</li>
      <li>In case you hosted the API with a different domain/port than the default one (<span class="italic">http://localhost:8000</span>), you must create a <span class="italic">.env</span> file (or copy <span class="italic">.env.example</span>) setting the correct value for <span class="italic">VUE_APP_API_BASE_URL</span></li>
    </ul>
  </div>
</template>
