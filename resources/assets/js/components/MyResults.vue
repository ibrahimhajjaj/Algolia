<template>
  <ais-results v-if="query.length > 0">
    <slot name="header"></slot>
    <slot v-for="(result, index) in results" :result="posts" :index="posts">
      Result 'objectID': {{ result.objectID }}
    </slot>
    <slot name="footer"></slot>
  </ais-results>
</template>

<script>
import { Component, Results } from 'vue-instantsearch';

export default {
  mixins: [Component],
  components: {
    'ais-results': Result,
  },
  computed: {
    query() {
      return this.searchStore.query;
    },
  },
};
</script>