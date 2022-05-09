$(document).ready(function(){

    $("#cadastrar").click(function(){
        //objetos do fomulario
        let obj = {
            nome : $('#nome').val(),
            email : $('#email').val(),
            tel : $('#tel').val()
        };
        console.log(obj)
        $.ajax({
            url : "loginAjax.php?req=1",
            type : "post",
            dataType : "TEXT",
            data : obj,
            beforeSend : function(){
                $('#res').html('processando...');
            },
            success : function(data){
                if(data == 1){
                    $('#res').html('Cadastrado')
                } else {
                    $('#res').html('HOuve um erro')
                }
            },
            error : function(error){
                console.log(error);
            }
            
        });
    });

    $("#consulta").click(function(){
        $.ajax({
            url : "loginAjax.php?req=2",
            type : "get",
            dataType : "TEXT",
            data : [],
            success : function(data){
            var data2 = data.split("||");
                $("#consultRes").html(data)

                $('#nome').val(data2[0].split(":")[1]),
                $('#email').val(data2[1].split(":")[1]),
                $('#tel').val(data2[2].split(":")[1])
            },
            error : function(error){
                console.log(error);
            }
        })
        });

        $("#cep").focusout(function(){
            // console.log("oi")
            if($("#cep").val().length >= 5) {
                let cep = $('#cep').val();
                let url = `https://viacep.com.br/ws/${cep}/json/`;
                console.log(url);
                $.ajax({
                    url : url,
                    type : "get",
                    dataType : "JSONP",
                    data : [],
                    success : function(data){
                    console.log(data)
                    $("#rua").val(data.logradouro)
                    $("#bairro").val(data.bairro)
                    $("#cidade").val(data.localidade)
                    $("#uf").val(data.uf)
                    },
                    
                    error : function(error){
                        console.log(error);
                    }
                    
                });
            }
           
        })
  
});
