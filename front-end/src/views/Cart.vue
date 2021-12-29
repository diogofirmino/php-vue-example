<template>
  <div id="cart">
    <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
      <div class="bg-white shadow overflow-hidden sm:rounded-lg">
        <div class="px-4 py-5 sm:px-6">
          <h3 class="text-lg leading-6 font-medium text-gray-900">
            Items
          </h3>
        </div>
        <div class="border-t border-gray-200">
          <div class="w-full bg-white px-4 py-5 sm:gap-4 sm:px-6">
            <list :items="electronics" @reload="loadItems" />
          </div>
        </div>
      </div>
    </div>
    <item-details-modal v-if="featuredItem" :item="featuredItem" />
  </div>
</template>

<script>
import List from '@/components/List.vue';
import ItemDetailsModal from '@/components/ItemDetailsModal';
import { mapGetters } from 'vuex';

export default {
  name: 'Cart',
  components: {
    List,
    ItemDetailsModal,
  },
  computed: {
    ...mapGetters({
      electronics: 'items',
      featuredItem: 'featuredItem',
    }),
  },
  async created() {
    await this.loadItems('ASC');
  },
  methods: {
    async loadItems(sort) {
      await this.$store.dispatch('loadItems', sort);
    },
  },
}
</script>
