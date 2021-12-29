<template>
  <tr>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="flex items-center">
        <div class="">
          <div class="text-sm font-medium text-gray-900">
            {{ item.type | capitalize }}
          </div>
        </div>
      </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="text-sm text-gray-900">{{ item.description }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="text-sm text-gray-900">${{ item.price }}</div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap">
      <div class="flex justify-end items-center">
        <div class="text-sm text-gray-900">${{ item.total_price }}</div>
      </div>
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-right text-sm underline">
      <a href="#" @click="$store.dispatch('openDetailsModal', item.uuid)">
        Details
      </a>
    </td>
  </tr>
</template>

<script>
export default {
  name: 'ListRow',
  props: {
    item: Object,
  },
}
</script>


