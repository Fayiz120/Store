const image1 = document.getElementById('first-img');
const image2 = document.getElementById('second-img');
const image3 = document.getElementById('third-img');
const image4 = document.getElementById('fourth-img');
const image5= document.getElementById('fifth-img');
const image6 = document.getElementById('sixth-img');
const images1 = [
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/0f8ccddbc11845d5bf81afc700fc6d35_9366/Adilette_22_Slides_Grey_HP6522_HM1.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/60b707ee13ab4065b678ef19ca471015_9366/Adilette_22_Slides_Grey_HP6522_HM3_hover.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7b8e531753824e4e940dafc700fc844b_9366/Adilette_22_Slides_Grey_HP6522_HM4.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/b889153f2b6c4e3db6f6afc700fc94d2_9366/Adilette_22_Slides_Grey_HP6522_HM5.jpg'
];

const images2 = [
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/99ac2fdea36e4714bdbaaf4200bcc5ff_9366/Adilette_22_Slides_Brown_HQ4670_01_standard.jpg',
  'https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/77e1d1d39aa34a9da351af4200bcd349_9366/Adilette_22_Slides_Brown_HQ4670_02_standard_hover.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a0f30a04328b4750955aaf4200bcdcac_9366/Adilette_22_Slides_Brown_HQ4670_03_standard.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/fc13e3955caa4dd2b973af4200bce617_9366/Adilette_22_Slides_Brown_HQ4670_04_standard.jpg'
]

const images3 = [
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/c3bd9dda9fdd4a7cbc9aad1e00dd0045_9366/NMD_R1_Shoes_White_GZ9260_01_standard.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a8dd72b84eb74a86a460ad1e00dd0db5_9366/NMD_R1_Shoes_White_GZ9260_02_standard_hover.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/680f4199aa6e4226b539ad1e00dd1513_9366/NMD_R1_Shoes_White_GZ9260_03_standard.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/0049de865e974f589cccad1e00dd1caf_9366/NMD_R1_Shoes_White_GZ9260_04_standard.jpg'
]

const images4 = [
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7c3bd0f9e2e5463780d367c6c0be6560_9366/Stan_Smith_Crepe_Shoes_Brown_IH0027_01_standard.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/1eacb04a99fe4989afdbe8c951c8c62d_9366/Stan_Smith_Crepe_Shoes_Brown_IH0027_010_hover_standard.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/bbb78fa3099c4967951386089d8b6e03_9366/Stan_Smith_Crepe_Shoes_Brown_IH0027_02_standard.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/1eacb04a99fe4989afdbe8c951c8c62d_9366/Stan_Smith_Crepe_Shoes_Brown_IH0027_010_hover_standard.jpg'
]

const images5 = [
  'https://assets.adidas.com/images/w_280,h_280,f_auto,q_auto:sensitive/854d6d1edbf94db1aa91d7ee5fee9216_9366/busenitz-vulc-2.0-shoes.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/b593796f8405440f9c521972b09e092e_9366/Busenitz_Vulc_2.0_Shoes_Black_IG5246_02_standard_hover.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/fd72bf0cc457410c9872399449784f9a_9366/Busenitz_Vulc_2.0_Shoes_Black_IG5246_03_standard.jpg',
  'https://assets.adidas.com/images/h_2000,f_auto,q_auto,fl_lossy,c_fill,g_auto/436b2c79aadb414eb7dbeca34d795968_9366/Busenitz_Vulc_2.0_Shoes_Black_IG5246_04_standard.jpg'
]

const images6 = [
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/bbbd04eb0bac440da48655a4117cb298_9366/OZELIA_Shoes_Grey_IE2002_01_standard.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/44e48f5315b0463fb14f23e03218bf16_9366/OZELIA_Shoes_Grey_IE2002_02_standard_hover.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/074bcd7c36674a7bad8ded7ff3fc1141_9366/OZELIA_Shoes_Grey_IE2002_03_standard.jpg',
  'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/b40cdfe4e1ce4c1cae6d544586c9ff9f_9366/OZELIA_Shoes_Grey_IE2002_04_standard.jpg'
]


let index = 0;
let interval = 0;

// setInterval(function() {
//   image1.src = images1[index];
//   image2.src = images2[index];
//   image3.src = images3[index];
//   image4.src = images4[index];
//   image5.src = images5[index];
//   image6.src = images6[index];
//   index = (index + 1) % images1.length;
// }, 1500);

function changeImages() {
  image1.src = images1[index];
  image2.src = images2[index];
  image3.src = images3[index];
  image4.src = images4[index];
  image5.src = images5[index];
  image6.src = images6[index];
  index = (index + 1) % images1.length;
}

function startImageRotation() {
  interval = setInterval(changeImages, 1200);
}

function stopImageRotation() {
  clearInterval(interval);
}

// Add event listeners to each image element
image1.addEventListener('mouseenter', stopImageRotation);
image2.addEventListener('mouseenter', stopImageRotation);
image3.addEventListener('mouseenter', stopImageRotation);
image4.addEventListener('mouseenter', stopImageRotation);
image5.addEventListener('mouseenter', stopImageRotation);
image6.addEventListener('mouseenter', stopImageRotation);

// Add event listeners to resume image rotation when hovering ends
image1.addEventListener('mouseleave', startImageRotation);
image2.addEventListener('mouseleave', startImageRotation);
image3.addEventListener('mouseleave', startImageRotation);
image4.addEventListener('mouseleave', startImageRotation);
image5.addEventListener('mouseleave', startImageRotation);
image6.addEventListener('mouseleave', startImageRotation);

// Start image rotation initially
startImageRotation();
