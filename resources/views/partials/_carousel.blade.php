<div class="carousel-container">
    <div class="carousel-wrapper">
        <div class="carousel">
          <div class="item">
            <img src="{{ asset('img/1.jpg')}}" />
            <h3>Sally Sharpe</h3>
            <p>Marketing Admin</p>
          </div>
          <div class="item">
            <img src="{{ asset('img/2.jpg')}}" />
            <h3>Michael John</h3>
            <p>Cybersecurity Engineer</p>
          </div>
          <div class="item">
            <img src="{{ asset('img/3.jpg')}}" />
            <h3>Mikayla Eddie</h3>
            <p>Software Engineer</p>
          </div>
          <div class="item">
            <img src="{{ asset('img/4.jpg')}}" />
            <h3>Eve Smith</h3>
            <p>UI/UX Designer</p>
          </div>
          <div class="item">
            <img src="{{ asset('img/5.jpg')}}" />
            <h3>Luke Maxwell</h3>
            <p>System Architect</p>
          </div>
        </div>
        <a class="carousel-control-prev nav-button" id="next" href="#myCarousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next nav-button" id="next" href="#myCarousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>
@section('scripts')
    <script>
      const items = document.querySelectorAll(".item");
      let position = 2; // Default center position (0-based index)

      function updateCarousel() {
        items.forEach((item, index) => {
          const offset = index - position;
          const absOffset = Math.abs(offset);

          item.style.transform = `rotateY(${offset * -15}deg) translateX(${
            offset * -350
          }px) scale(${absOffset === 0 ? 1 : 0.8})`;
          item.style.zIndex = `${5 - absOffset}`;
          item.style.opacity = absOffset > 2 ? "0.3" : "1";
          item.style.transition =
            "transform 0.5s ease-in-out, opacity 0.5s ease-in-out";
        });
      }

      document.getElementById("prev").addEventListener("click", () => {
        if (position > 0) {
          position--;
          updateCarousel();
        }
      });

      document.getElementById("next").addEventListener("click", () => {
        if (position < items.length - 1) {
          position++;
          updateCarousel();
        }
      });

      updateCarousel();
    </script>
@endsection