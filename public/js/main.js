$('#pacientes').DataTable({
    "responsive": true,
    "autoWidth": false,
    "language": {
        paginate: {
            first: "Primero",
            previous: "Anterior",
            next: "Siguiente",
            last: "Último"
        },
        search: 'Buscar: ',
        zeroRecords: 'No se ha encontrado ningún resultado',
        info: 'Mostrando _START_ - _END_ de _TOTAL_  Resultados',
        emptyTable: 'No hay Resgistros',
        infoFiltered: "(B&uacute;squeda de _MAX_ elementos en total)",
        lengthMenu: "Selección de _MENU_ Elementos",
    }
});