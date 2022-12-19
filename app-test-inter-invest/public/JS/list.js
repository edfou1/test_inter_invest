$(document).ready(function() {

    // Récupère la liste des formes juridiques à l'ouverture du modal d'ajout
    $('#addModalButton').click(function () {
        $.ajax({
            url: $('#addModalButton').data('getUrl'),
            success: function (result) {
                var sel = $('#addFormeJuridique');
                sel.empty();
                for (var i = 0; i < result.data.length; i++) {
                    sel.append('<option value="' + result.data[i].id + '">' + result.data[i].libelle + '</option>');
                }
            }
        });
    });

    // Ajout d'une société an ajax
    $(document).on('submit', '#addSocieteForm', function(event){
        $("#addSubmit").prop('disabled', true);
        var societeData = {
            formeJuridique: $('#addFormeJuridique').val(),
            nom: $('#addNom').val(),
            siren: $('#addSiren').val(),
            villeImmat: $('#addVilleImmat').val(),
            dateImmat: $('#addDateImmat').val(),
            capital: $('#addCapital').val(),
        };

        // Envoi du formulaire, rechargement en cas de succès, message d'erreur en cas de problème
        $.ajax({
            type: "POST",
            url: $('#addSocieteForm').attr('action'),
            data: societeData,
            dataType: "json",
            encode: true,
            success: function (response) {
                location.reload()
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $("#addSubmit").prop('disabled', false);
                $('#addError').append('\n' +
                    '                        <div class="alert alert-danger alert-dismissible show fade collapse" role="alert" >\n' +
                    '                            Erreur lors de l\'envoi de la société.\n' +
                    '                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\n' +
                    '                        </div>'
                )
            }
        });

        event.preventDefault();
    });

    // Supprime une société et recharge la page
    $('.delete-societe').click(function (event) {
        event.preventDefault();
        $(this).prop('disabled', true);
        $(this).parents('a').css('pointer-events', 'none');
        $.ajax({
            type: "DELETE",
            url: $(this).data('deleteUrl'),
            success: function (response) {
                location.reload()
            }
        });
    });
});
