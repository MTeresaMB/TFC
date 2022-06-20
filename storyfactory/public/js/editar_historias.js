//summary
var summary="oso";
var title="osotext";

//obtenemos los valores iniciales
console.log($("#summary").val());
summary=$("#summary").val();
title=$("#title").val();

//editor
var editor = new EditorJS({
  holderId: "editorjs",
   tools: {
    /**
     * Each Tool is a Plugin. Pass them via 'class' option with necessary settings {@link docs/tools.md}
     */
	    header: {
	      class: Header,
	      inlineToolbar: ["link"],
	      config: {
	        placeholder: "Header"
	      },
	      shortcut: "CMD+SHIFT+H"
	    },
        paragraph: {
            class: Paragraph,
            inlineToolbar: true,
        },

	},
  data: {
    blocks: [
        {
            "type": "header",
            "data": {
              "text": title,
              "alignment": "left"
            }
        },


      {
        type: "paragraph",
        data: {
          text:
            summary,
            "alignment": "left"
        }
      },
    ]
  }
});


//subir
var saveBtn=document.getElementById("saveBtn");

saveBtn.addEventListener("click",function() {
  editor.save().then((outputData) => {
    //console.log('Article data: ', outputData.blocks);
    let id=$("#id_text").val();
    subir_historia(outputData.blocks,id);
  }).catch((error) => {
    console.log('Saving failed: ', error)
  });

});


function subir_historia(param,param2) {
  var datos = {
    "variable1" : param, // Dato #1 a enviar
    "variable2": param2,
};

var url = "./edit"; // URL a la cual enviar los datos
console.log(datos);
 $.ajax({
            data: {
               "_token": $("meta[name='csrf-token']").attr("content"),
               datos,
             },
            url: url,
            type: 'post',
            success:  function (response) {
               console.log(response); // Imprimir respuesta del archivo
              //window.location.replace(response);
            //   window.location.href="./main";
            },
            error: function (error) {
                console.log(error.responseText); // Imprimir respuesta de error
            }
    });

}


