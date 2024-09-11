<style>
    .sticky-icon {
        z-index: 1;
        position: fixed;
        top: 15%;
        right: 0%;
        width: 110px; /* Adjusted width */
        display: flex;
        flex-direction: column;
    }

    .sticky-icon a {
        transform: translate(80px, 0px); /* Adjusted transform */
        border-radius: 25px 0px 0px 25px; /* Adjusted border-radius */
        text-align: left;
        margin: 1px; /* Adjusted margin */
        text-decoration: none;
        text-transform: uppercase;
        padding: 5px; /* Adjusted padding */
        font-size: 11px; /* Adjusted font-size */
        font-family: 'Oswald', sans-serif;
        transition: all 0.8s;
    }

    .sticky-icon a:hover {
        color: #FFF;
        transform: translate(0px, 0px);
    }

    .sticky-icon a:hover i {
        transform: rotate(360deg);
    }

    .Facebook {
        background-color: #1877F2; /* Updated background color */
        color: #FFF;
    }

    .Youtube {
        background-color: #FF0000; /* Consistent with existing */
        color: #FFF;
    }

    .Twitter {
        background-color: #1DA1F2; /* Consistent with existing */
        color: #FFF;
    }

    .Instagram {
        background-color: #C13584; /* Updated background color */
        color: #FFF;
    }

    .Google {
        background-color: #DB4437; /* Updated background color */
        color: #FFF;
    }

    .sticky-icon a i {
        background-color: #FFF;
        height: 20px; /* Adjusted height */
        width: 20px; /* Adjusted width */
        color: #000;
        text-align: center;
        line-height: 20px; /* Adjusted line-height */
        border-radius: 50%;
        margin-right: 10px; /* Adjusted margin-right */
        transition: all 0.5s;
    }

    .sticky-icon a i.fa-facebook-f {
        background-color: #FFF;
        color: #1877F2; /* Updated color */
    }

    .sticky-icon a i.fa-google-plus-g {
        background-color: #FFF;
        color: #DB4437; /* Updated color */
    }

    .sticky-icon a i.fa-instagram {
        background-color: #FFF;
        color: #C13584; /* Updated color */
    }

    .sticky-icon a i.fa-youtube {
        background-color: #FFF;
        color: #FF0000; /* Consistent with existing */
    }

    .sticky-icon a i.fa-twitter {
        background-color: #FFF;
        color: #1DA1F2; /* Consistent with existing */
    }

    .fas.fa-shopping-cart {
        background-color: #FFF;
    }

    #myBtn {
        height: 25px; /* Default height */
        display: none;
        position: fixed;
        bottom: 10px; /* Default bottom */
        right: 15px; /* Default right */
        z-index: 99;
        text-align: center;
        padding: 5px; /* Default padding */
        line-height: 20px; /* Default line-height */
        border: none;
        outline: none;
        background-color: #1e88e5;
        color: white;
        cursor: pointer;
        border-radius: 25px; /* Default border-radius */
    }

    .fa-arrow-circle-up {
        font-size: 15px; /* Default font-size */
    }

    #myBtn:hover {
        background-color: #555;
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .sticky-icon {
            width: 80px;
        }

        .sticky-icon a {
            transform: translate(60px, 0px);
            border-radius: 20px 0px 0px 20px;
            margin: 1px;
            padding: 4px;
            font-size: 7px;
        }

        .sticky-icon a i {
            height: 16px;
            width: 16px;
            line-height: 16px;
            margin-right: 8px;
        }
    }

    @media (max-width: 480px) {
        .sticky-icon {
            width: 60px;
        }

        .sticky-icon a {
            transform: translate(40px, 0px);
            border-radius: 15px 0px 0px 15px;
            margin: 1px;
            padding: 3px;
            font-size: 8px;
        }

        .sticky-icon a i {
            height: 12px;
            width: 12px;
            line-height: 12px;
            margin-right: 6px;
        }
    }

</style>
<div class="col-lg-3 text-white p-4" style="margin-top: 5%">
    <h5 style="color: black">Browse Free Resources</h5>
    <div class="video-wrapper">
        <div class="video-container">
{{--            <iframe src="https://www.youtube.com/embed/D1yp5jbLGpw" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>--}}
        <video src="video/video-1.webm" style="width: 100%;" controls></video>
        </div>
    </div>
    <div class="video-wrapper">
        <div class="video-container">
{{--            <video src="video/video-2.webm" controls></video>--}}
            <video src="video/video-13.mp4" style="width: 100%;" controls></video>
        </div>
    </div>
    <div class="video-wrapper">
        <div class="video-container">
            <video src="video/video-3.webm" style="width: 100%" controls></video>
        </div>
    </div>
    <div class="video-wrapper">
        <div class="video-container">
            <video src="video/video-12.mp4" style="width: 100%" controls></video>
        </div>
    </div>
    <div class="video-wrapper">
        <div class="video-container">
            <video src="video/video-5.webm" style="width: 100%" controls></video>
        </div>
    </div>
    <div class="video-wrapper">
        <div class="video-container">
            <video src="video/video-6.webm" style="width: 100%" controls></video>
        </div>
    </div>
    <div class="video-wrapper">
        <div class="video-container">
            <video src="video/video-7.webm" style="width: 100%" controls></video>
        </div>
    </div>
    <div class="video-wrapper">
        <div class="video-container">
            <video src="video/video-8.webm" style="width: 100%" controls></video>
        </div>
    </div>
    <div class="video-wrapper">
        <div class="video-container">
            <video src="video/video-9.webm" style="width: 100%" controls></video>
        </div>
    </div>
    <div class="video-wrapper">
        <div class="video-container">
            <video src="video/video-15.webm" style="width: 100%" controls></video>
        </div>
    </div>

</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<!--Start Sticky Icon-->
<div class="sticky-icon">
    <a href="https://www.instagram.com/?hl=en" class="Instagram"><i class="fab fa-instagram"></i> Instagram </a>
    <a href="https://www.facebook.com/" class="Facebook"><i class="fab fa-facebook-f"> </i> Facebook </a>
    <a href="https://aboutme.google.com/u/0/?referer=gplus" class="Google"><i class="fab fa-google-plus-g"> </i> Google + </a>
    <a href="https://www.youtube.com/" class="Youtube"><i class="fab fa-youtube"></i> Youtube </a>
    <a href="https://twitter.com/login" class="Twitter"><i class="fab fa-twitter"> </i> Twitter </a>
</div>
