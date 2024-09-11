@include('layouts.front.header')
<!DOCTYPE html>
<html lang="en">

<body>
<div id="carouselExampleIndicatorsF" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="d-flex justify-content-around" style="height: 100%;">
                <div class="product-card">
                    <span class="sale-badge">Sale</span>
                    <div class="product-image">
                        <img src="front/img/about.png" alt="Product Image">
                        <span class="free-badge">Free</span>
                    </div>
                    <div class="product-title">
                        <h3>Your Product Title</h3>
                    </div>
                </div>
                <!-- More product cards -->
            </div>
        </div>
        <div class="carousel-item">
            <div class="d-flex justify-content-around" style="height: 100%;">
                <div class="product-card">
                    <span class="sale-badge">Sale</span>
                    <div class="product-image">
                        <img src="front/img/portfolio-4.jpg" alt="Product Image">
                        <span class="free-badge">Free</span>
                    </div>
                    <div class="product-title">
                        <h3>Your Product Title</h3>
                    </div>
                </div>
                <!-- More product cards -->
            </div>
        </div>
        <!-- More slides -->
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicatorsF" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicatorsF" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.min.js"></script>
</body>
</html>
