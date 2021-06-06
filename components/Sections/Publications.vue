<template>
  <div class="my-auto">
    <h2 class="mb-5">{{ $t('publications.title') }}</h2>
      <ul class="fa-ul mb-0">
      <li v-for="item in  $t('publications.itemList')" :key="item">
        <i class="fa-li fa fa-check"></i>
        <a :href="item" >{{item}}</a>
      </li>
    </ul>
  </div>
</template>

<script>

export default {
  data() {
    return { };
  }
};
</script>
