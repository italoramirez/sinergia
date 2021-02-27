<template>
    <input 
        type="submit" 
        class="d-block w-100 btn btn-danger" 
        value="Eliminar X"
        v-on:click="eliminarPaciente"
    >
</template>

<script>
export default {
    props: ['pacienteId'],
    mounted() {
        console.log('receta actual', this.pacienteId);
    }, 
    methods: {
        eliminarPaciente () {
          this.$swal.fire({
                title: `¿Desea eliminar el paciente ${this.pacienteId}`,
                text: "Una vez eliminado, no se podrá recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si',
                cancelButtonText: 'No'
            }).then((result) => {
            if (result.value) {
                const params = {
                    id: this.eliminarPaciente
                }
                axios.post(`/paciente/${this.pacienteId}`, { params, _method: 'delete'}) 
                     .then(respuesta => {
                         this.$swal({
                             title: 'Paciente Eliminado',
                             text: 'Se ha eliminado el paciente.',
                             icon: 'success'
         
                         })
                            //  console.log(respuesta)
                            this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                     })
                     .catch(error => {
                         console.log(error);
                     })

            }
        })
            
        }
    }
}
</script>