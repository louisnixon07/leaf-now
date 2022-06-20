window.onload = function () {
    document.getElementById("download1")
        .addEventListener("click", () => {
            const pdf1 = this.document.getElementById("pdf1");
            console.log(pdf1);
            console.log(window);
            
            html2pdf().from(pdf1).save();
        })
}