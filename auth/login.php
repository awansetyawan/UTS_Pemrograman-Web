

  <?php  require_once('../layouts/auth/header.php') ?>
  <!-- MAIN -->
  <main class="min-h-screen">
    <div class="carousel w-full">
      <div id="slide1" class="carousel-item relative w-full">
        <div class="hero py-10 bg-base-200">
          <div class="hero-content flex-col lg:flex-row">
            <img src="https://placeimg.com/900/700/people" class="max-w-sm rounded-lg shadow-2xl hidden lg:block" />
            <div class="lg:text-left">
              <h1 class="text-5xl font-bold">Sebuah Arsip</h1>
              <p class="py-6">Test</p>
              <button class="btn btn-primary">Get Started</button>
            </div>
          </div>
        </div>
        <div class="absolute justify-between transform -translate-y-1/2 left-5 right-5 top-1/2 hidden lg:flex">
          <a href="#slide4" class="btn btn-circle">❮</a> 
          <a href="#slide2" class="btn btn-circle">❯</a>
        </div>
      </div>
    </div>
    <div class="lg:hidden flex justify-center w-full py-2 gap-2">
      <a href="#slide1" class="btn btn-xs">1</a> 
      <a href="#item2" class="btn btn-xs">2</a> 
      <a href="#item3" class="btn btn-xs">3</a> 
      <a href="#item4" class="btn btn-xs">4</a>
    </div>
  </main>

  <?php  require_once('../layouts/auth/footer.php') ?>