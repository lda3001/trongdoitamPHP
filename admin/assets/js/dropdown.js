var dropdowns = document.getElementsByClassName("cate-title-list");

for (var i = 0; i < dropdowns.length; i++) {
    dropdowns[i].addEventListener("mouseenter", function () {
        var listCategory = this.getElementsByClassName("list__category")[0];
        if (listCategory) {
            listCategory.style.display = "block";
        } else {
            console.log("Error: listCategory not found");
        }
    });

    dropdowns[i].addEventListener("mouseleave", function () {
        var listCategory = this.getElementsByClassName("list__category")[0];
        if (listCategory) {
            listCategory.style.display = "none";
        } else {
            console.log("Error: listCategory not found");
        }
    });
}
