// script for product details page
function addtocart() {
    console.log("triggered");
    var alertelement = document.getElementById('alert');
    alertelement.innerHTML=
    "<div class=\"alert alert-success\" role=\"alert\"> The item has been added to the cart! </div>"
    setTimeout(function(){
        var alertelement = document.getElementById('alert');
        alertelement.innerHTML = "";
}, 2000);
}



// script for sell form page

const inpFile = document.getElementById("inpFile");
    const previewContainer = document.getElementById("imagePreview");
    const previewImage = previewContainer.querySelector(
      ".image-preview__image"
    );
    const previewDefaultText = previewContainer.querySelector(
      ".image-preview__default-text"
    );

    inpFile.addEventListener("change", function () {
      const file = this.files[0];
      console.log(file);

      if (file) {
        const reader = new FileReader();
        previewDefaultText.style.display = "none";
        previewImage.style.display = "block";

        reader.addEventListener("load", function () {
          previewImage.setAttribute("src", this.result);
        });

        reader.readAsDataURL(file);
      } else {
        previewDefaultText.style.display = null;
        previewImage.style.display = null;
        previewImage.setAttribute("src", "");
      }
    });

    function populate(s1, s2) {
      var s1 = document.getElementById(s1);
      var s2 = document.getElementById(s2);

      var optionsArr = [];
      s2.innerHTML = "";

      if (s1.value == "Furniture") {
        optionsArr = [
          "Table|Table",
          "Chair|Chair",
          "Almirah|Almirah",
          "Bed|Bed",
        ];
      } else if (s1.value == "Electronics") {
        optionsArr = [
          "Mobile|Mobile",
          "Laptop|Laptop",
          "Headphone|Headphone",
          "Charger|Charger",
          "Cable|Cable",
          "Powerbank|Powerbank",
        ];
      } else if (s1.value == "Books") {
        optionsArr = [
          "Sem1|Semester 1",
          "Sem2|Semester 2",
          "Sem3|Semester 3",
          "Sem4|Semester 4",
          "Sem5|Semester 5",
          "Sem6|Semester 6",
          "Sem7|Semester 7",
          "Sem8|Semester 8",
        ];
      } else if (s1.value == "Beddings") {
        optionsArr = [
          "Bedsheet|Bedsheet",
          "Pillow|Pillow",
          "Curtains|Curtains",
          "Blanket|Blanket",
        ];
      } else if (s1.value == "Bathroom Accessories") {
        optionsArr = [
          "Tub|Tub",
          "Mug|Mug",
          "Laundry Basket|Laundry Basket",
          "Heating Rod|Heating Rod",
        ];
      } else if (s1.value == "Kitchen Accessories") {
        optionsArr = [
          "Induction|Induction",
          "Kettle|Kettle",
          "Utensils|Utensils",
        ];
      }

      for (var option in optionsArr) {
        var pair = optionsArr[option].split("|");
        var newOption = document.createElement("option");
        newOption.value = pair[0];
        newOption.innerHTML = pair[1];
        s2.options.add(newOption);
      }
    }