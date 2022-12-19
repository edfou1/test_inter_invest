$(document).ready(function() {

    // Récupère la liste des formes juridiques à l'ouverture du modal de modification
    $('#updateModalButton').click(function () {
        $.ajax({
            url: $('#updateModalButton').data('getUrl'),
            success: function (result) {
                var sel = $('#updateFormeJuridique');
                sel.empty();
                for (var i = 0; i < result.data.length; i++) {
                    if (result.data[i].id === $('#updateModalButton').data('formeId')) {
                        sel.append('<option value="' + result.data[i].id + '" selected>' + result.data[i].libelle + '</option>');
                    } else {
                        sel.append('<option value="' + result.data[i].id + '">' + result.data[i].libelle + '</option>');
                    }
                }
            }
        });
    });

    // Modification d'une société an ajax
    $(document).on('submit', '#updateSocieteForm', function(event){
        $("#updateSubmit").prop('disabled', true);
        var societeData = {
            formeJuridique: $('#updateFormeJuridique').val(),
            nom: $('#updateNom').val(),
            siren: $('#updateSiren').val(),
            villeImmat: $('#updateVilleImmat').val(),
            dateImmat: $('#updateDateImmat').val(),
            capital: $('#updateCapital').val(),
        };

        // Envoi du formulaire, rechargement en cas de succès, message d'erreur en cas de problème
        $.ajax({
            type: "PUT",
            url: $('#updateSocieteForm').attr('action'),
            data: societeData,
            dataType: "json",
            encode: true,
            success: function (response) {
                location.reload()
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $("#updateSubmit").prop('disabled', false);
                $('#updateError').append('\n' +
                    '                        <div class="alert alert-danger alert-dismissible show fade collapse" role="alert" >\n' +
                    '                            Erreur lors de la mise à jour de la société.\n' +
                    '                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\n' +
                    '                        </div>'
                )
            }
        });

        event.preventDefault();
    });

    // Ajout d'une adresse an ajax
    $(document).on('submit', '#addAdresseForm', function(event){
        $("[name='adresseSubmit']").prop('disabled', true);
        var adresseData = {
            numero: $('#addAdresseNumero').val(),
            typeVoie: $('#addAdresseTypeVoie').val(),
            nomVoie: $('#addAdresseNomVoie').val(),
            cp: $('#addAdresseCp').val(),
            ville: $('#addAdresseVille').val()
        };

        // Envoi du formulaire, rechargement en cas de succès, message d'erreur en cas de problème
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: adresseData,
            dataType: "json",
            encode: true,
            success: function (response) {
                location.reload()
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $("[name='adresseSubmit']").prop('disabled', false);
                $('#addAdresseError').append('\n' +
                    '                        <div class="alert alert-danger alert-dismissible show fade collapse" role="alert" >\n' +
                    '                            Erreur lors de l\'ajout de l\'adresse.\n' +
                    '                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\n' +
                    '                        </div>'
                )
            }
        });

        event.preventDefault();
    });

    // Mise à jour d'une adresse en ajax
    $(document).on('submit', '.update-adresse', function(event){
        $("[name='adresseSubmit']").prop('disabled', true);
        var adresseId = $(this).data('adresseId');
        var adresseData = {
            numero: $('#updateAdresseNumero'+adresseId).val(),
            typeVoie: $('#updateAdresseTypeVoie'+adresseId).val(),
            nomVoie: $('#updateAdresseNomVoie'+adresseId).val(),
            cp: $('#updateAdresseCp'+adresseId).val(),
            ville: $('#updateAdresseVille'+adresseId).val()
        };

        // Envoi du formulaire, rechargement en cas de succès, message d'erreur en cas de problème
        $.ajax({
            type: "PUT",
            url: $(this).attr('action'),
            data: adresseData,
            dataType: "json",
            encode: true,
            success: function (response) {
                location.reload()
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $("[name='adresseSubmit']").prop('disabled', false);
                $('#updateAdresseError'+adresseId).append('\n' +
                    '                        <div class="alert alert-danger alert-dismissible show fade collapse" role="alert" >\n' +
                    '                            Erreur lors de la mise à jour de l\'adresse.\n' +
                    '                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\n' +
                    '                        </div>'
                )
            }
        });

        event.preventDefault();
    });

    // Supprime une adresse et recharge la page
    $('.delete-adresse').click(function () {
        $(this).prop('disabled', true);
        $.ajax({
            type: "DELETE",
            url: $(this).data('deleteUrl'),
            success: function (response) {
                location.reload()
            }
        });
    });


    // Archivage d'une société
    $(document).on('submit', '#archivageForm', function(event){
        $('#archivageSubmit').prop('disabled', true);
        var archivageData = {
            dateArchivage: $('#archivageDate').val()
        };

        // Envoi du formulaire, rechargement en cas de succès, message d'erreur en cas de problème
        $.ajax({
            type: "POST",
            url: $(this).attr('action'),
            data: archivageData,
            dataType: "json",
            encode: true,
            success: function (response) {
                location.reload()
            },
            error: function (xhr, ajaxOptions, thrownError) {
                $('#archivageSubmit').prop('disabled', false);
                $('#archivageError').append('\n' +
                    '                        <div class="alert alert-danger alert-dismissible show fade collapse" role="alert" >\n' +
                    '                            Erreur lors de l\'archivage de la société.\n' +
                    '                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>\n' +
                    '                        </div>'
                )
            }
        });

        event.preventDefault();
    });
});
