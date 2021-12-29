<template>
  <div id="home">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            PHP (Lumen) API + Vue SPA
          </h3>
          <p class="mt-1 max-w-2xl text-sm text-gray-500">
            Project details and instructions.
          </p>
        </div>
        <div class="border-t border-gray-200">
          <dl>
            <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">
                Description
              </dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <project-description />
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">Installation</dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <installation-instructions />
              </dd>
            </div>
            <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
              <dt class="text-sm font-medium text-gray-500">README</dt>
              <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                <lumen-readme />
              </dd>
            </div>
          </dl>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import InstallationInstructions from './partials/InstallationInstructions.vue';
import LumenReadme from './partials/LumenReadme.vue';
import ProjectDescription from './partials/ProjectDescription.vue';

export default {
  name: 'Home',
  components: {
    InstallationInstructions,
    LumenReadme,
    ProjectDescription,
  }
}
</script>
