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

      if (s1.value == "furniture") {
        optionsArr = [
          "table|Table",
          "chair|Chair",
          "almirah|Almirah",
          "bed|Bed",
        ];
      } else if (s1.value == "electronics") {
        optionsArr = [
          "mobile|Mobile",
          "laptop|Laptop",
          "headphone|Headphone",
          "charger|Charger",
          "cable|Cable",
          "powerbank|Powerbank",
        ];
      } else if (s1.value == "books") {
        optionsArr = [
          "sem1|Semester 1",
          "sem2|Semester 2",
          "sem3|Semester 3",
          "sem4|Semester 4",
          "sem5|Semester 5",
          "sem6|Semester 6",
          "sem7|Semester 7",
          "sem8|Semester 8",
        ];
      } else if (s1.value == "beddings") {
        optionsArr = [
          "bedsheet|Bedsheet",
          "pillow|Pillow",
          "curtains|Curtains",
          "blanket|Blanket",
        ];
      } else if (s1.value == "bathroom accessories") {
        optionsArr = [
          "tub|Tub",
          "mug|Mug",
          "laundry basket|Laundry Basket",
          "heating rod|Heating Rod",
        ];
      } else if (s1.value == "kitchen accessories") {
        optionsArr = [
          "induction|Induction",
          "kettle|Kettle",
          "utensils|Utensils",
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