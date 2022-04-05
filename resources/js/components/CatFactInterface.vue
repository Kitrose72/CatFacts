<template>
    <div class="container">
      <h2 class="title mt-2">Want some sweet cat facts?</h2>
        <div class="form-group mt-3 d-flex justify-content-center">
          <label for="catFactInput">How many facts do you want?</label>
          <input id="catFactInput" class="catFactInput" type="number" v-model="limit" min="1"/>
        </div>
        <div class="d-flex justify-content-center">
          <button class="btn btn-primary mt-2 mb-2" v-on:click="getCatFacts(limit)" :disabled="limit < 1" >Get some cat facts!</button>
        </div>
      <cat-fact-list :catFactList="this.CatFactList"></cat-fact-list>
    </div>
</template>

<script>
import CatFactList from './CatFactList.vue';

export default {
  components: { CatFactList },
  data() {
    return { limit: 0, CatFactList: [] }
  },
  methods: {
    getCatFacts: function(limit) {
      const api_url = '/api/getCatFacts' + limit;
      fetch(api_url)
          .then(response => response.json())
          .then(response => {
            if(limit == 1){
              this.CatFactList = [];
              this.CatFactList.push(response.fact);
            }else {
              this.CatFactList = response.data.map(f => f.fact);
            }
          })
    },
  }
}
</script>

