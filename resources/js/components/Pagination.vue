<template>
    <div v-if="links.length > 3">
        <div>
            <template v-for="(link, key) in links">
                <div 
                    key="key"
                    v-if="link.url === null" 
                    v-html="link.label" 
                    class="btn btn-outline-secondary disabled me-2 mt-2"
                    />
                <Link v-else
                    class="btn btn-outline-secondary me-2 mt-2"
                    :class="{ 'btn btn-secondary text-white': link.active }" :href="link.url" v-html="link.label" />
            </template>
        </div>
    </div>
</template>

<script>
import { Link } from '@inertiajs/inertia-vue'
export default {
    props: {
        links: Array,
    },
    components: {
        Link
    }
}
</script>