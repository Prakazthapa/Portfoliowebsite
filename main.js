var typed = new Typed(".text", {
  strings: [
    "MERN Full Stack Developer",
    "Frontend React Developer",
    "Backend Node.js Developer",
  ],
  typeSpeed: 100,
  backSpeed: 100,
  backDelay: 1000,
  loop: true,
});

function createRoundedImage() {
  var sourceImage = document.getElementById("source-image");
  var canvas = document.createElement("canvas");
  var ctx = canvas.getContext("2d");
  var radius = 100;

  canvas.width = radius * 2;
  canvas.height = radius * 2;

  ctx.beginPath();
  ctx.arc(radius, radius, radius, 0, Math.PI * 2, true);
  ctx.closePath();
  ctx.clip();

  ctx.drawImage(sourceImage, 0, 0, radius * 2, radius * 2);

  var roundedImageURL = canvas.toDataURL();
  document.querySelector(".rounded-image").src = roundedImageURL;
}

createRoundedImage();
