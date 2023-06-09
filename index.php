<?php
  require_once __DIR__ . '/DB/DB.php';
  // var_dump($topVisibilityProduct);
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- FAVICON -->
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <!-- BOOTSTRAP -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous'/>
  <!-- FONTAWESOME -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css' integrity='sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==' crossorigin='anonymous'/>
  <!-- LORDICON -->
  <script src="https://cdn.lordicon.com/bhenfmcm.js"></script>
  <!-- CUSTOM CSS -->
  <link rel="stylesheet" href="css/style.css">
  <title>PetShop</title>
</head>
<body>
  <header>
    <div class="container-fluid p-0">
      <div class="ms-nav d-flex justify-content-between align-items-center p-3">
        <div class="ms-social">
          <lord-icon
              src="https://cdn.lordicon.com/vtpxjewg.json"
              trigger="hover"
              colors="primary:#4be1ec,secondary:#cb5eee">
          </lord-icon>
          <lord-icon
              src="https://cdn.lordicon.com/wgydzbzz.json"
              trigger="hover"
              colors="primary:#4be1ec,secondary:#cb5eee">
          </lord-icon>
          <lord-icon
              src="https://cdn.lordicon.com/ivhjpjsw.json"
              trigger="hover"
              colors="primary:#4be1ec,secondary:#cb5eee">
          </lord-icon>
        </div>
        <ul class="nav justify-content-center align-items-center">
          <li class="nav-item">
            <a class="nav-link" href="#"><img src="img/logo.png" alt="PetShop" class="img-fluid"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cani</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Gatti</a>
          </li>
        </ul>
        <div class="ms-cta">
          <lord-icon
              src="https://cdn.lordicon.com/zniqnylq.json"
              trigger="hover"
              colors="primary:#4be1ec,secondary:#cb5eee">
          </lord-icon>
          <lord-icon
              src="https://cdn.lordicon.com/ljvjsnvh.json"
              trigger="hover"
              colors="primary:#4be1ec,secondary:#cb5eee">
          </lord-icon>
          <lord-icon
              src="https://cdn.lordicon.com/lpddubrl.json"
              trigger="hover"
              colors="primary:#4be1ec,secondary:#cb5eee">
          </lord-icon>
        </div>
      </div>
    </div>
  </header>
  <main>
    <div class="ms-jumbotron">
      <img src="img/jumbo.avif" alt="">
    </div>
    <div class="container">
      <div class="sections d-flex justify-content-center gap-5 p-5">
        <div class="ms-card">
          <img src="img/section-dogs.jpg" alt="Cani" class="img-fluid">
          <div class="overlay d-flex justify-content-center align-items-center">
            <h3>CANI</h3>
          </div>
        </div>
        <div class="ms-card">
          <img src="img/section-cats.jpg" alt="Gatti" class="img-fluid">
          <div class="overlay d-flex justify-content-center align-items-center">
            <h3>GATTI</h3>
          </div>
        </div>
      </div>
      <div class="topVisibility my-5 d-flex justify-content-between gap-3 flex-wrap">
        <?php foreach ($topVisibilityProduct as $product) : ?>
          <div class="ms-product-card d-flex flex-column align-items-center">
            <img src="<?php echo 'img/' . $product->getPicture() ?>" alt="<?php echo $product->getName() ?>">
            <div class="ms-product-info p-3 text-center">
              <h2><?php echo $product->getBrand() . ' - ' .  $product->getName() ?></h2>
              <span class="category px-2">
                <?php echo ($product->getCategory() === 'dog') ? '<i class="fa-solid fa-dog" style="color: #4bffec;"></i>' : '<i class="fa-solid fa-cat" style="color: #4bffec;"></i>' ?>
              </span>
              <p class="my-3 text-primary"><?php echo '€ ' .  $product->getPrice() ?></p>
              <span class="subCategory">
                <?php if($product->getSubcategory() === 'food') :?>
                  <lord-icon
                    src="https://cdn.lordicon.com/astwhuoq.json"
                    trigger="hover"
                    colors="primary:#cb5eee,secondary:#2516c7">
                  </lord-icon>
                <?php elseif ($product->getSubcategory() === 'toy') : ?>
                  <lord-icon
                  src="https://cdn.lordicon.com/kwnsphnf.json"
                  trigger="hover"
                  colors="primary:#cb5eee,secondary:#2516c7">
                  </lord-icon>
                <?php elseif ($product->getSubcategory() === 'home') : ?>
                  <lord-icon
                    src="https://cdn.lordicon.com/kxoxiwrf.json"
                    trigger="hover"
                    colors="primary:#cb5eee,secondary:#2516c7">
                  </lord-icon>
                <?php endif ?>
                
              </span>

            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </main>
  <footer>
    <div class="container-fluid py-3 text-center">
      <span>Credits</span>
      <a href="https://github.com/mcspe">@mcspe</a>
      <span> - </span>
      <a href="https://lordicon.com/">Icons by Lordicon.com</a>
    </div>
  </footer>
</body>
</html>