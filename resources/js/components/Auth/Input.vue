<template>
    <div>
        <form @submit.prevent="submit">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" v-model="form.email">
            </div>
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" v-model="form.password">
            </div>
        </form>
    </div>
</template>

<script>
export default {

}
</script>
