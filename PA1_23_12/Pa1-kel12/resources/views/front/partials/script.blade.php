<script src="{{ URL::asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ URL::asset('frontend/js/tiny-slider.js') }}"></script>
<script src="{{ URL::asset('frontend/js/aos.js') }}"></script>
<script src="{{ URL::asset('frontend/js/navbar.js') }}"></script>
<script src="{{ URL::asset('frontend/js/counter.js') }}"></script>
<script src="{{ URL::asset('frontend/js/rellax.js') }}"></script>
<script src="{{ URL::asset('frontend/js/flatpickr.js') }}"></script>
<script src="{{ URL::asset('frontend/js/glightbox.min.js') }}"></script>
<script src="{{ URL::asset('frontend/js/custom.js') }}"></script>

<!-- ========================= Script untuk efek tulisan mengetik ========================= -->
<script>
    var app = document.getElementById('heading');

    var typewriter = new Typewriter(app, {
        loop: false,
        delay: 75
    });

    typewriter.typeString('Jelajahi keindahan Danau Toba di website kami')
        .pauseFor(1000)
        .deleteAll()
        .typeString('Liburan lebih seru bersama kami di sekitaran Danau Toba')
        .pauseFor(1000)
        .deleteAll()
        .typeString('Danau Toba merupakan destinasi terbaik di Sumatera Utara')
        .pauseFor(1000)
        .start();

    var app = document.getElementById('text');

    var typewriter = new Typewriter(app, {
        loop: false,
        delay: 75
    });

    typewriter.typeString(
            'Kota Jakarta kota metropolitan, Surga impian para perantau <br> Kusapa“ Horas apa kabar kawan” Hampa hatiku dibalas“ fine, thank you” '
        )
        .pauseFor(1000)
        .deleteAll()
        .typeString('Liburan lebih seru bersama kami di sekitaran Danau Toba')
        .pauseFor(1000)
        .deleteAll()
        .typeString('Danau Toba merupakan destinasi terbaik di Sumatera Utara')
        .pauseFor(1000)
        .start();
</script>


<!-- ========================= Script untuk efek Zoom in dan out gambar  ========================= -->
<script>
    var images = [
        '{{ URL::asset("asset/thumbnail.jpg")}}',
        '{{ URL::asset("asset/thumbnail1.jpg")}}', 
        '{{ URL::asset("asset/thumbnail2.jpg")}}', 
        '{{ URL::asset("asset/thumbnail3.jpg")}}', 
        '{{ URL::asset("asset/thumbnail4.jpg")}}', 
        '{{ URL::asset("asset/login.jpg")}}'
    ];
    var currentIndex = 0;
    var img = document.getElementById('image');

    function changeImage() {
        img.classList.add("zoom-out");
        setTimeout(function() {
            currentIndex++;
            if (currentIndex >= images.length) {
                currentIndex = 0;
            }
            img.src = images[currentIndex];
            img.classList.remove("zoom-out");
        }, 500);
    }

    setInterval(changeImage, 7000);

    img.addEventListener('mouseover', function() {
        img.classList.add("zoom-in");
    });

    img.addEventListener('mouseout', function() {
        img.classList.remove("zoom-in");
    });
</script>