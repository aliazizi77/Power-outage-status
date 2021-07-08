<!doctype html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("/assets/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/bootstrap.rtl.min.css")}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css">
    <link rel="stylesheet" href="{{asset("/assets/css/all.min.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/animate.css")}}">
    <link rel="stylesheet" href="{{asset("/assets/css/style.css")}}">
    <title>سامانه اعلام قطعی برق شاهرود</title>
</head>
<body>
<video autoplay muted loop class="timelapse">
    <source src="{{asset("/assets/img/timelapse.mp4")}}" type="video/mp4">
</video>
<div class="row">
    <div class="col-12">
        <div class="content">
            <div class="row">
                <div class="col-12">
                    <h4 class="text-center mt-5 mb-5 wow fadeIn">جهت اطلاع از ساعات قطعی برق، منطقه خود را انتخاب کنید</h4>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-1 col-md-12"></div>
                <div class="col-lg-6 col-md-12">
                    <div class="card mb-3 wow fadeIn">
                        <div class="card-body">
                            <div class="card-title text-dark">منطقه</div>
                            <div class="card-text">
                                <select class="form-control areas">
                                    <option value="">حجاب</option>
                                    <option value="">22 بهمن</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card card-margin-bottom wow fadeIn">
                        <div class="card-body">
                            <div class="card-title text-dark">مناطق من:</div>
                            <div class="card-text text-dark">
                                <p class="text-center"><i class="fa fa-exclamation-triangle" style="margin-left: 5px;"></i>منطقه ای ثبت نشده است.</p>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fa fa-minus" style="margin-left: 5px;font-size: 12px;vertical-align: middle;"></i>منطقه 1</li>
                                    <li class="list-group-item"><i class="fa fa-minus" style="margin-left: 5px;font-size: 12px;vertical-align: middle;"></i>منطقه 2</li>
                                    <li class="list-group-item"><i class="fa fa-minus" style="margin-left: 5px;font-size: 12px;vertical-align: middle;"></i>منطقه 3</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card wow fadeIn" style="height: 100%;">
                        <div class="card-body">
                            <div class="card-title text-dark text-center">امروز</div>
                            <div class="card-title text-dark" id="date"></div>
                            <div class="card-title text-dark" id="time"></div>
                            <div class="card-text text-dark">
                                <p style="text-align: justify;"><i class="fa fa-quote-right" style="margin-left: 5px;"></i>در بین تمامی مردم تنها عقل است که عادلانه تقسیم شده، زیرا همه فکر می کنند به اندازه کافی عاقلند.</p>
                                <span style="position: absolute;left: 0;margin-left: 16px;">رنه دکارت</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-12"></div>
            </div>
            <div class="row mb-3">
                <div class="col-lg-1 col-md-12"></div>
                <div class="col-lg-6 col-md-12">
                    <div class="card wow fadeIn" style="height: 100%;">
                        <div class="card-body">
                            <div class="card-title text-dark"><i class="fa fa-city" style="margin-left: 5px;"></i><b>نام منطقه:</b> 22 بهمن<i class="fa fa-star" id="star" data-bs-toggle="tooltip" data-bs-placement="top" title="منطقه من" style="position: absolute;left: 0;margin-left: 16px;cursor: pointer;"></i></div>
                            <div class="card-title text-dark"><i class="fa fa-chevron-left" style="margin-left: 5px;"></i><b>از ساعت:</b> 13:00</div>
                            <div class="card-title text-dark"><i class="fa fa-chevron-left" style="margin-left: 5px;"></i><b>تا ساعت:</b> 17:00</div>
                            <div class="card-title text-dark"><i class="fa fa-hourglass-half" style="margin-left: 5px;"></i><b>زمان باقیمانده:</b> 40 دقیقه</div>
                            <div class="card-text">
{{--                                <div class="row">--}}
{{--                                    <div class="col-lg-6 col-md-12">--}}
{{--                                        adadaf--}}
{{--                                    </div>--}}
{{--                                    <div class="col-lg-6 col-md-12">--}}
{{--                                        <img src="{{asset("/assets/img/ads-1.gif")}}" class="card-img-top" alt="">--}}
{{--                                    </div>--}}
{{--                                </div>--}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="card ads-1 wow fadeIn" style="background-color: transparent;">
                        <div class="card-body" style="padding: 0;">
                            <img src="{{asset("/assets/img/ads-1.gif")}}" class="card-img-top" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-12"></div>
            </div>
            <div class="row">
                <div class="col-lg-1 col-md-12"></div>
                <div class="col-lg-10 col-md-12">
                    <div class="card mb-3 wow fadeIn" style="background-color: transparent;">
                        <div class="card-body" style="padding: 0;">
                            <img src="{{asset("/assets/img/ads-2.gif")}}" class="card-img-top" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-1 col-md-12"></div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="{{asset("/assets/js/bootstrap.bundle.min.js")}}"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
    $(document).ready(function() {
        $('.areas').select2();
    });
</script>
<script>
    (function() {
        const star = $('#star');
        star.click(function() {
            star.toggleClass('yellow');
        });
    })();
</script>
<script>
    const myArea = $('#star');
    const tooltip = new bootstrap.Tooltip(myArea);
</script>
<script>
    showTime = function () {
        var date = new Date(),
            today = new Date(
                date.getFullYear(),
                date.getMonth(),
                date.getDate(),
                date.getHours(),
                date.getMinutes(),
                date.getSeconds(),
            );
        $('#date').html('<i class="far fa-clock" style="margin-left: 5px;"></i><b>تاریخ:</b>'+' '+today.toLocaleDateString('fa-IR'));
        $('#time').html('<i class="far fa-calendar-alt" style="margin-left: 5px;"></i><b>ساعت:</b>'+' '+today.toTimeString('fa-IR').substr(0, 8));
    }
    setInterval(showTime, 0);
</script>
<script src="{{asset("/assets/js/wow.min.js")}}"></script>
<script>
    new WOW().init();
</script>
</body>
</html>
