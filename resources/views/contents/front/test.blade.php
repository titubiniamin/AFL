<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carousel Example</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .carousel-item {
            display: flex;
            justify-content: space-between; /* Space out items */
            align-items: center; /* Center items vertically */
            height: 400px; /* Fixed height for each carousel item */
        }
        .carousel-item > div {
            flex: 1; /* Allow items to grow equally */
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 10px; /* Add some padding */
        }
    </style>
</head>
<body>

<div style="height: 400px; width: 100%; background-color: #f1eded; overflow: hidden; border: 1px red;">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div>
                    <h3>EDUCATION FOR SPORTS PEOPLE</h3>
                    <button class="btn btn-default" type="submit" style="margin-top: 10px; border-color: black;">Find Course</button>
                </div>
                <div>
                    <h3>EDUCATION FOR MAN</h3>
                    <button class="btn btn-default" type="submit" style="margin-top: 10px; border-color: black;">Find Course</button>
                </div>
                <div>
                    <h3>EDUCATION FOR STUDENTS</h3>
                    <button class="btn btn-default" type="submit" style="margin-top: 10px; border-color: black;">Find Course</button>
                </div>
            </div>
            <div class="carousel-item">
                <div>
                    <h3>NEW EDUCATION FOR WOMEN</h3>
                    <button class="btn btn-default" type="submit" style="margin-top: 10px; border-color: black;">Find Course</button>
                </div>
                <div>
                    <h3>EDUCATION FOR TEENS</h3>
                    <button class="btn btn-default" type="submit" style="margin-top: 10px; border-color: black;">Find Course</button>
                </div>
                <div>
                    <h3>ONLINE EDUCATION</h3>
                    <button class="btn btn-default" type="submit" style="margin-top: 10px; border-color: black;">Find Course</button>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
</body>
</html>
