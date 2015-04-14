$(document).ready(function() {
    $('[data-buton=true]').click(ajax_submit);
    
    function ajax_submit(e)
    {
        var p;
        e.preventDefault();
        p = {
            nume: $('[data-nume=true]').val(),
            telefon: $('[data-telefon=true]').val(),
            codcartus: $('[data-codcartus=true]').val(),
            email: $('[data-email=true]').val(),
            checkbox: $('[data-checkbox=true]').is(':checked') ? 1 : 0,
            };
        return $.ajax(
            {   
                url: $('[data-form=true]').attr('action'),
                type: $('[data-form=true]').attr('method'),
                data: p,
                content: 'json',
                success: function(s)
                {
                    if(s.status === 'OK')
                    {
                        // $('[data-form=true]').hide();
                        // $('.invizibil').show();
                        console.log("OK");
                    }
                    else
                    {
                        console.log("Error");
                    }
                },
                error: function(p)
                {
                    $('.form-control').removeClass("warning");
                    
                    if (typeof p.responseJSON.nume != 'undefined')
                    {
                        console.log('Nu exista nume');
                        $('[data-nume=true]').addClass("warning");
                    }
                    
                    if (typeof p.responseJSON.telefon != 'undefined')
                    {
                        $('[data-telefon=true]').addClass("warning");
                        console.log('Nu exista telefon');
                    }
                    
                    if (typeof p.responseJSON.codcartus != 'undefined')
                    {
                        $('[data-codcartus=true]').addClass("warning");
                        console.log('Nu exista codcartus');
                    }
                    
                    if (typeof p.responseJSON.email != 'undefined')
                    {
                        $('[data-email=true]').addClass("warning");
                        console.log('Nu exista email');
                    }
                    
                    console.log(p);
                },
            });
    }
});