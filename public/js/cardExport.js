 function exportId(student) {
     console.log(student)
    html2canvas(document.querySelector("#card"), {
        width: 1200,
        height: 600,
    }).then(function (canvas) {
        saveAs(canvas.toDataURL(), student.name + ", " + Date.now() + ".png");
    });
};

function saveAs(uri, filename) {
    var link = document.createElement("a");

    if (typeof link.download === "string") {
        link.href = uri;
        link.download = filename;

        //Firefox requires the link to be in the body
        document.body.appendChild(link);

        //simulate click
        link.click();

        //remove the link when done
        document.body.removeChild(link);
    } else {
        window.open(uri);
    }
}
