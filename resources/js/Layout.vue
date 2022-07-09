<template>
  <div>
        <Link href="/">Home</Link>
        <div>
            <slot />
        </div>
  </div>
</template>

<script>

import { Link } from '@inertiajs/inertia-vue'

export default {
  components: {
    Link,
  }
}
</script>