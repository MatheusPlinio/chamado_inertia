<template>
    <div>
        <form @submit.prevent="submit">
            <div class="mb-3">
                <label for="titulo" class="form-label">Titulo</label>
                <input type="text" class="form-control" id="titulo" v-model="form.titulo" placeholder="Qual o Chamado?">
            </div>
            <div class="mb-3">
                <label for="solicitacao" class="form-label">Solicitação</label>
                <input type="text" class="form-control" id="solicitacao" v-model="form.solicitacao" placeholder="Qual a Solicitação?">
            </div>
            <div class="mb-3">
                <label for="data" class="form-label">Data da Solicitação</label>
                <input type="date" class="form-control" disabled id="data">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select id="status" class="form-control" disabled v-model="form.status">
                    <option :value="null">Pendente</option>
                    <option value="1">Pendente</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="prioridade">Prioridade</label>
                <select id="prioridade" class="form-control" v-model="form.prioridade">
                    <option :value="null">Qual a Prioridade?</option>
                    <option value="1">Baixa</option>
                    <option value="2">Média</option>
                    <option value="3">Alta</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="solicitante">Solicitante</label>
                <input type="text" class="form-control" id="solicitante" v-model="form.solicitante" placeholder="Quem solicitou?">
            </div>
            <div class="mb-3">
                <label for="setor">Setor</label>
                <input type="text" class="form-control" id="setor" v-model="form.setor" placeholder="Qual o Setor?">
            </div>
            <footer-component></footer-component>
        </form>
    </div>
</template>

<script>

export default {
    data() {
        return {
            form: {
                titulo: null,
                solicitacao: null,
                status: null,
                prioridade: null,
                solicitante: null,
                setor: null,
            },

        }
    },
    methods: {
        submit() {
            this.$inertia.post('/store', this.form)
        }
    },
}
</script>