<template>
  <div class="flex flex-col">
    <div v-if="isLoading" class="flex w-full h-20 items-center justify-center">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-gray-500 animate-spin" viewBox="0 0 20 20" fill="currentColor">
        <path fill-rule="evenodd" d="M4 2a1 1 0 011 1v2.101a7.002 7.002 0 0111.601 2.566 1 1 0 11-1.885.666A5.002 5.002 0 005.999 7H9a1 1 0 010 2H4a1 1 0 01-1-1V3a1 1 0 011-1zm.008 9.057a1 1 0 011.276.61A5.002 5.002 0 0014.001 13H11a1 1 0 110-2h5a1 1 0 011 1v5a1 1 0 11-2 0v-2.101a7.002 7.002 0 01-11.601-2.566 1 1 0 01.61-1.276z" clip-rule="evenodd" />
      </svg>
    </div>
    <div v-else class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
        <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Type
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Description
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Price
              </th>
              <th scope="col" class="px-6 py-3 text-xs font-medium uppercase tracking-wider text-right">
                <div class="flex items-center justify-end">
                  <span class="text-gray-500">Total Price</span>
                  <a href="#" @click="$emit('reload', 'ASC')" :disable="isLoading">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="ml-2 h-4 w-4 text-gray-400"
                      :class="{'text-red-500': isSortedAsc}"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h6m4 0l4-4m0 0l4 4m-4-4v12" />
                    </svg>
                  </a>
                  <a href="#" @click="$emit('reload', 'DESC')" :disable="isLoading">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      class="ml-2 h-4 w-4 text-gray-400"
                      :class="{'text-red-500': isSortedDesc}"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 4h13M3 8h9m-9 4h9m5-4v12m0 0l-4-4m4 4l4-4" />
                    </svg>
                  </a>
                </div>
              </th>
              <th scope="col" class="px-6 py-3 text-gray-500 uppercase tracking-wider"></th>
            </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
              <list-row v-for="item in items" :item="item" :key="item.uuid" />
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import ListRow from '@/components/ListRow';
import { mapGetters } from 'vuex'

export default {
  name: 'List',
  components: {
    ListRow,
  },
  computed: {
    ...mapGetters({
      activeSorting: 'activeSorting',
      isLoading: 'isLoading',
    }),
    isSortedAsc() {
      return this.activeSorting === 'ASC';
    },
    isSortedDesc() {
      return this.activeSorting === 'DESC';
    },
  },
  props: {
    items: Array,
  },
}
</script>
