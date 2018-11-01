$("#busca").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#dadosClientes tr").filter(function() {
        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
});

$('#tabelaClientes').DataTable({
    "scrollY": "200px",
    "scrollCollapse": true,
  });
$('.dataTables_length').addClass('bs-select');
