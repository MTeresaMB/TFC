//exportacion
let exp = document.getElementsByClassName("export");
for (let i = 0; i < exp.length; i++) {
    exp[i].addEventListener("click", () => {
        downloadPDFDialog(exp[i].id);
    });
}

function downloadPDFDialog(param) {
    //conf basica
    const doc = new jsPDF();

    //llamada ajax para traer datos
    var datos = {
        variable1: param, // Dato #1 a enviar
    };

    var url = "./exportData"; // URL a la cual enviar los datos

    console.log(datos);
    $.ajax({
        data: {
            datos,
        },
        url: url,
        type: "get",
        success: function (response) {
            let title = response.split("ª")[0];
            let summary = response.split("ª")[1];
            console.log("title: " + title);
            console.log("summary: " + summary);
            doc.setFontSize(22);
            doc.text(20, 20, title);

            doc.setFontSize(12);
            var splitTitle = doc.splitTextToSize(summary, 180);
            doc.text(20, 30, splitTitle);

            doc.save("two-by-four.pdf");
        },
        error: function (error) {
            console.log(error.responseText); // Imprimir respuesta de error
        },
    });
}
