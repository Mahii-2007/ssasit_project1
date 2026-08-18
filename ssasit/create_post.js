let photos = document.getElementById("postPhotos");

let preview = document.getElementById("previewPhotos");

let count = document.getElementById("photoCount");


photos.addEventListener("change", function () {

    /* OLD PHOTOS REMOVE */

    preview.innerHTML = "";


    /* SELECTED PHOTOS */

    let files = photos.files;


    /* PHOTO COUNT */

    count.innerHTML = files.length + " photos selected";


    /* MAXIMUM 6 */

    if (files.length > 6) {

        alert("Maximum 6 photos allowed");

        photos.value = "";

        count.innerHTML = "0 photos selected";

        return;
    }


    /* PHOTO LAYOUT */

    if (files.length == 1) {

        preview.className = "photo-area one";

    }
    else if (files.length == 2) {

        preview.className = "photo-area two";

    }
    else if (files.length == 3) {

        preview.className = "photo-area three";

    }
    else if (files.length == 4) {

        preview.className = "photo-area four";

    }
    else if (files.length == 5) {

        preview.className = "photo-area five";

    }
    else if (files.length == 6) {

        preview.className = "photo-area six";

    }


    /* SHOW PHOTOS */

    for (let i = 0; i < files.length; i++) {

        let image = document.createElement("img");

        image.src = URL.createObjectURL(files[i]);

        preview.appendChild(image);

    }

});