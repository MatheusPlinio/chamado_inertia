<template>
  <div class="card">
    <div class="card-header">
      <Link :href="route('index.home')" class="btn btn-outline-primary">Home</Link>
      <Link href="/logout" method="post" class="btn btn-outline-primary">Sair</Link>
      
    </div>
    <div class="card-body">
      <div>
        <slot />
      </div>
    </div>
  </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'

export default {
  components: {
    Link,
  },
}
</script>