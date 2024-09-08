<style>
    .product-card {
        width: 280px; /* Adjust width to fit four items */
        height: 400px;
        position: relative;
        border: 1px solid #ddd;
        display: flex;
        flex-direction: column;
        overflow: hidden;
        margin: 5px;
    }

    /* Sale badge at the top left */
    .sale-badge {
        position: absolute;
        top: 10px;
        left: 10px;
        background-color: red;
        color: white;
        padding: 5px 10px;
        font-size: 14px;
        font-weight: bold;
        z-index: 2;
    }

    /* Container for the product image */
    .product-image {
        position: relative;
        height: 66%;
        width: 100%;
        overflow: hidden;
    }

    /* The actual product image */
    .product-image img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    /* Free badge at the bottom left of the image */
    .free-badge {
        position: absolute;
        bottom: 10px;
        left: 10px;
        background-color: #28a745; /* same color as the title background */
        color: white;
        padding: 5px 10px;
        font-size: 14px;
        font-weight: bold;
        z-index: 2;
    }

    /* Container for the product title */
    .product-title {
        height: 34%;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #28a745; /* same color as Free badge */
        color: white;
        padding: 10px;
        text-align: center;
    }

    .product-title h3 {
        margin: 0;
        font-size: 18px;
        font-weight: bold;
    }
    .details-button {
        position: absolute;
        bottom: 10px;
        right: 10px;
        background-color: #007bff;
        color: white;
        border: none;
        padding: 5px 10px;
        font-size: 12px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .details-button:hover {
        background-color: #0056b3;
    }
</style>
<div style="height: 400px; width: 100%; max-width: 100%; background-color: white; overflow: hidden; border: 1px red">
    <div id="carouselExampleIndicators3" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="d-flex justify-content-around" style="height: 100%;">
                    <div class="product-card">
{{--                        <span class="sale-badge">Sale</span>--}}
                        <div class="product-image">
                            <img src="front/img/player-1.png" alt="Product Image">
{{--                            <span class="free-badge">Free</span>--}}
                        </div>
                        <div class="product-title">
                            <p><strong>Name:</strong> John Doe</p>
                            <p><strong>Age:</strong> 34</p>
                            <p><strong>Height:</strong> 5'8"</p>
                            <p><strong>Position:</strong> Forward</p>
                        </div>

                        <!-- Button for Details -->
                        <button class="details-button">Details</button>
                    </div>

                    <div class="product-card">
{{--                        <span class="sale-badge">Sale</span>--}}
                        <div class="product-image">
                            <img src="front/img/player-2.png" alt="Product Image">
{{--                            <span class="free-badge">Free</span>--}}
                        </div>
                        <div class="product-title">
                            <h3>Your Product Title</h3>
                        </div>
                    </div>

                    <div class="product-card">
{{--                        <span class="sale-badge">Sale</span>--}}
                        <div class="product-image">
                            <img src="front/img/player-8.png" alt="Product Image">
{{--                            <span class="free-badge">Free</span>--}}
                        </div>
                        <div class="product-title">
                            <h3>Your Product Title</h3>
                        </div>
                    </div>

                    <div class="product-card">
{{--                        <span class="sale-badge">Sale</span>--}}
                        <div class="product-image">
                            <img src="front/img/player-4.png" alt="Product Image">
{{--                            <span class="free-badge">Free</span>--}}
                        </div>
                        <div class="product-title">
                            <h3>Your Product Title</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <div class="d-flex justify-content-around" style="height: 100%;">
                    <div class="product-card">
{{--                        <span class="sale-badge">Sale</span>--}}
                        <div class="product-image">
                            <img src="front/img/player-5.png" alt="Product Image">
{{--                            <span class="free-badge">Free</span>--}}
                        </div>
                        <div class="product-title">
                            <h3>Your Product Title</h3>
                        </div>
                    </div>

                    <div class="product-card">
{{--                        <span class="sale-badge">Sale</span>--}}
                        <div class="product-image">
                            <img src="front/img/player-6.png" alt="Product Image">
{{--                            <span class="free-badge">Free</span>--}}
                        </div>
                        <div class="product-title">
                            <h3>Your Product Title</h3>
                        </div>
                    </div>

                    <div class="product-card">
{{--                        <span class="sale-badge">Sale</span>--}}
                        <div class="product-image">
                            <img src="front/img/player-7.png" alt="Product Image">
{{--                            <span class="free-badge">Free</span>--}}
                        </div>
                        <div class="product-title">
                            <h4>Your Product Title</h4>

                        </div>
                    </div>

                    <div class="product-card">
                        <!-- Product Image -->
                        <div class="product-image">
                            <img src="front/img/player-8.png" alt="Player Image">
                        </div>

                        <!-- Product Details -->
                        <div class="product-title">
                            <p><strong>Name:</strong> John Doe</p>
                            <p><strong>Age:</strong> 34</p>
                            <p><strong>Height:</strong> 5'8"</p>
                            <p><strong>Position:</strong> Forward</p>
                        </div>

                        <!-- Button for Details -->
                        <button class="details-button">Details</button>
                    </div>                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="prev">
            <span class="arrow left" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators3" data-bs-slide="next">
            <span class="arrow right" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
