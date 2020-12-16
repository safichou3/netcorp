$(document).ready(function () {

    // Boutton Modal HEADER =======================================

    // Boutton Modal HOMEPAGE ======================================
    //onclick BOUTTON INSCRIPTION
    $('.mod-title-inscription').on('click', function (e) {
        e.preventDefault()

        $('#form-connexion').css('display', 'none')
        $('#form-inscription').css('display', 'block')
    })
    //onclick BOUTTON CONNEXION
    $('#mod-title-connexion').on('click', function (e) {
        e.preventDefault()

        $('#form-connexion').css('display', 'block')
        $('#form-inscription').css('display', 'none')
    })




    // INSCRIPTION AJAX
    $('#form-inscription').submit(function (e) {
        //console.log('soumis')
        e.preventDefault()
        $('.errors').html('')

        let formin = $('#form-inscription')

        $.ajax({
            method: 'POST',
            url: formin.attr('action'),
            data: formin.serialize(),
            dataType: 'json',
            beforeSend: function () {
                // console.log('avant')
                $('#submitted-in').css('display', 'none')
            },
            success: function (response) {
                //console.log(response)
                $('#submitted-in').css('display', 'inline')

                if (response.success == true) {
                    $('#form-inscription').find('input[type=text],input[type=email],input[type=password]').val('')
                    window.location.replace('index.php')


                } else {
                    console.log('not gg')

                    if (response.errors.prenom != null) {
                        $('#error-prenom').html(response.errors.prenom)
                    } else { $('#error-prenom').html('') }

                    if (response.errors.nom != null) {
                        $('#error-nom').html(response.errors.nom)
                    } else { $('#error-nom').html('') }

                    if (response.errors.email != null) {
                        $('#error-email-in').html(response.errors.email)
                    } else { $('#error-email-in').html('') }

                    if (response.errors.password != null) {
                        $('#error-password-in').html(response.errors.password)
                    } else { $('#error-password-in').html('') }

                    if (response.errors.cpassword != null) {
                        $('#error-cpassword-in').html(response.errors.cpassword)
                    } else { $('#error-cpassword-in').html('') }

                }
            }
        })
    })

    // CONNEXION AJAX
    $('#form-connexion').submit(function (e) {
        //console.log('soumis')
        e.preventDefault()
        $('.errors').html('')

        let formco = $('#form-connexion')

        $.ajax({
            method: 'POST',
            url: formco.attr('action'),
            data: formco.serialize(),
            dataType: 'json',
            beforeSend: function () {
                console.log('avant')
                //$('#submitted-in').css('display', 'none')
            },
            success: function (response) {
                console.log(response)
                if (response.success == true) {
                    $('#form-connexion').find('input[type=email],input[type=password]').val('')
                    window.location.replace('index.php')

                } else {
                    console.log('not gg')

                    if (response.errors.connexion != null) {
                        $('#error-connexion').html(response.errors.connexion)
                    } else { $('#error-connexion').html('') }

                }
            }
        })
    })
})
