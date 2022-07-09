<template>
    <div class="container">
        <table class="table table-bordered">
            <thead>
                <tr class="table-secondary">
                    <th class="text-center fs-6">Título</th>
                    <th class="text-center fs-6">Solicitação</th>
                    <th class="text-center fs-6">Data da Solicitação</th>
                    <th class="text-center fs-6">Status</th>
                    <th class="text-center fs-6">Prioridade</th>
                    <th class="text-center fs-6">Nome do Solicitante</th>
                    <th class="text-center fs-6">Setor</th>
                    <th class="text-center fs-6">Ações</th>
                </tr>
            </thead>
            <tbody>
                <tr class="table-light" v-for="chamado in chamados">
                    <td class="text-center fs-6">{{ chamado.titulo }}</td>
                    <td class="text-center fs-6">{{ chamado.solicitacao }}</td>
                    <td class="text-center fs-6">{{ chamado.created_at }}</td>
                    <td class="text-center fs-6">{{ chamado.status }}</td>
                    <td class="text-center fs-6">{{ chamado.prioridade }}</td>
                    <td class="text-center fs-6">{{ chamado.solicitante }}</td>
                    <td class="text-center fs-6">{{ chamado.setor }}</td>
                    <td class="text-center fs-6">
                        <button @click="destroy(chamado.id)" type="submit" class="btn btn-danger">Excluir</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#Modal">
            Abrir Chamado
        </button>
        <modal-component></modal-component>
    </div>
</template>

<script>

export default {
    props: {
        chamados: Array
    },
    methods: {
        destroy(id) {
            this.$inertia.delete(`/destroy/${id}`, this.form)
        }
    }

}
</script>

