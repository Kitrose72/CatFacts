<template>
  <div class="row">
    <div class="col-12 col-sm-6 col-md-4 col-xl-3" v-for="fact in catFactList">
      <cat-fact :fact="fact"></cat-fact>
    </div>
  </div>
</template>

<script>
  export default {
    props: ['catFactList']
  }
</script>