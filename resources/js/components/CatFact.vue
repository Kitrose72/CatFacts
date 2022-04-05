
<template>
  <div class="card">
    <div class="card-body">
      <p>
        {{ fact }}
      </p>
    </div>
</div>
</template>

<script>
  export default {
    props: ['fact']
  }
</script>