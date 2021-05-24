<template>
  <div>
    <div
      class="card shadow mb-5 bg-white rounded"
      style="width: 80%; text-align: center"
    >
      <a :href="projectInfo.siteUrl" >
        <img class="card-img-top" :src="addPrefix(projectInfo.image)" alt="project image"
      /></a>
      <div class="card-body">
        <h5 class="card-title">{{ projectInfo.name }}</h5>
        <p class="card-text">
          {{ projectInfo.description }}
        </p>
        <small><a :href="projectInfo.repositoryUrl" >this code is open source!</a></small>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["projectInfo"],
  data() {
    return {};
  },
  methods: {
    addPrefix(inp) {
      return require("@/assets/img/" + inp);
    }
  }
};
// projectInfo.image
</script>

<style>
.card {
  border: none;
}
</style>
